<?php

namespace App\Http\Controllers\Staff;

use App\Models\User;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StaffController extends Controller
{ 
   
  
    public function staff(){

        $staffs = User::paginate(5);
      
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
    public function search(Request $request)
    {
        $staffs = User::where('role', 'like', '%' . $request->filter . '%')->get();

        
        // ->orWhere('email', 'like', '%' . $query . '%')
        // ->orWhere('role', 'like', '%' . $query . '%') 

        // // if (!$staffs){
        // //     $staffs = $this->staff();
        // // }
        // if ($staffs->isEmpty()){
        //     $staffs =  User::latest()->paginate(5);
        // }

        // $staffs = User::where(function ($queryBuilder) use ($query) {
        //     $queryBuilder->where('name', 'like', '%' . $query . '%')
        //         ->orWhere('email', 'like', '%' . $query . '%')
        //         ->orWhere('role', 'like', '%' . $query . '%');
        // })
        // ->latest()
        // ->paginate(5);

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

    public function deleteStaff(Request $request,User $staff){

        $user =User::where("id",$request->id);
        // dd($user->name);
       
        
        $photo_path = $staff->photo;

        if ($photo_path && file_exists(public_path('storage/staff/' . $photo_path))) {
            unlink(public_path('storage/staff/' . $photo_path));
        }
        $user->delete();

        toastr()->success('Staff  has been deleted successfully! ' , 'Saving ');
        
        return redirect()->route('admin.staff');
       
    }
}
