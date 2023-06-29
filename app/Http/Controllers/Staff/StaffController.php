<?php

namespace App\Http\Controllers\Staff;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function staff(){

        $staffs = User::latest()->paginate();

        return view("dashboard.admin.staff",compact("staffs"));
    }
    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'gender' => 'nullable',
            'photo' => 'nullable',
            'phone' => 'nullable',
            'role' => 'required',

        ]);
        
           
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            // 'photo' => $request->photo,
            'phone' => $request->phone,
            'role' => $request->role,
            
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/staff', $filename);
            
            $user->photo = $filename;
        }else{
            $user->photo = null;

        }
        
        $user->save();


      return redirect()->route("admin.staff");
        
    }
    public function search(Request $query)
    {
        $staffs = User::where('name', 'like', '%' . $query . '%')
        ->orWhere('email', 'like', '%' . $query . '%')
        ->orWhere('role', 'like', '%' . $query . '%')
        ->paginate();

        if (!$staffs){
            $staffs = $this->staff();
        }
        return view("dashboard.admin.staff",compact("staffs"));
     
        
    }

    public function edit($id){

        $staff = User::findOrFail($id);
        
        return  view('dashboard.admin.staff.edit',compact("staff"));
    }

    public function update(Request $request,$id)
    {
      
        $request->validate([
            'name' => 'nullable',
            'gender' => 'nullable',
            'photo' => 'nullable',
            'role' => 'required',
        ]);
        $user =User::find($id);
        
        $user->name =  $request->name;
      
        if (isset($request->gender)) {
            $user->gender =  $request->gender;
        }

        if(request()->hasfile('photo'))
        {
            $file = request()->file('photo');
            $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
            $file->move("storage/staff", $filename);
            
            $user->photo = "$filename";
        }

        // $user->phone =  $request->phone;
        $user->role =  $request->role;
        $user->save();
        
        toastr()->success('Staff has been updated successfully! to : <span class="text-orange-500">'.$request->role.'</span>' , 'Saving ');

        return redirect()->route('admin.staff');
    }
    public function updateRole(Request $request,$id)
    {
      
        $request->validate([
           
            'role' => 'required',
        ]);
        $user =User::find($id);
       
        $user->role =  $request->role;
        $user->save();
        
        toastr()->success('Staff has been updated successfully! to : <span class="text-orange-500">'.$request->role.'</span>' , 'Saving ');

        return redirect()->route('admin.staff');
    }

    public function deleteStaff(Request $request){

        $user =User::find($request->id);
       
         $photo_path = $user->photo;

        if ($photo_path && file_exists(public_path('storage/staff/' . $photo_path))) {
            unlink(public_path('storage/staff/' . $photo_path));
        }
        $user->delete();

        toastr()->success('Staff  has been deleted successfully! ' , 'Saving ');
        
        return redirect()->route('admin.staff');
       
    }
}
