<?php

namespace App\Http\Controllers\Staff;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function staff(){

        $staffs = User::paginate();

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
    public function edit($id){

        $staff = User::findOrFail($id);
        
        return  view('dashboard.admin.staff.edit',compact("staff"));
    }

    public function update(Request $request,$id)
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
        // dd($request->role);
        $user =User::find($id);

        if(request()->hasfile('photo'))
        {
            $file = request()->file('photo');
            $filename =  date('YmdHis') . "." . $file->getClientOriginalExtension();;
            $file->move("storage/staff", $filename);
            
            $user->photo = $filename;
        }  else{
            $user->photo = null;

        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'photo' =>$filename??null,
            'phone' => $request->phone,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('admin.staff');
    }

    public function delete($id){
        $staff = User::findOrFail($id);
      
     
        // Delete the existing image file
         $photo_path = $staff->photo;

         if ($photo_path && file_exists(public_path('storage/staff/' . $photo_path))) {
            unlink(public_path('storage/staff/' . $photo_path));
        }
        $staff->delete();
        
    }
}
