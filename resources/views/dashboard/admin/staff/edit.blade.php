@extends('dashboard.admin.admin_dashboard')
@section('content')
<div class="bg-white ">

    <form method="post" class="p-5"  enctype="multipart/form-data" action="{{route("admin.update_staff",$staff->id)}}">
        @csrf
        @method("PUT")
        <!-- firstname & lastname -->
        <div class="grid grid-col-1 md:grid-cols-2 gap-2 ">
                <!-- firstname -->
                <div class=" w-full mb-6 group">
                    <label for="" class="font-medium "> Name :<span class="text-red-500 font-medium">*</span></label>
                    <input type="text" name="name" id="name" value="{{$staff->name}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="First Name " required />
                </div>
               
                <!-- email -->
                <div class="w-full mb-6 group">
                    <label for="" class="font-medium ">Email:<span class="text-red-500 font-medium">*</span></label>
                    <input type="email" name="email" value="{{$staff->email}}" id="email" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                </div>
                <!-- phone -->
                <div class="w-full mb-6  group ">
                    <label for="" class="font-medium ">Contact No:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                    <input type="tel"  name="phone" value="{{$staff->phone}}" id="phone" class="block  w-full mt-1 p-2.5  lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="+1" required />
                </div>
                <!-- password -->
                <div class="w-full mb-6 group">
                    <label for="" class="font-medium ">Password:<span class="text-red-500 font-medium">*</span></label>
                    <input type="password" name="password"  value="{{$staff->password}}" id="password" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="***** "  />
                </div>
               
                <!-- Role   -->
                <div class="w-full  group">
                    <label for="role" class="font-medium ">Role:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                    <select name="role"  id="role" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                        <option selected disabled>Select a Role</option>
                        <option value="admin">Admin</option>
                        <option value="patient" >Patient</option>
                        <option value="doctor">Doctor</option>     
    
                    </select>                                
                </div>
                <!-- gender  -->
                <div class="w-full  group  ">
                    <div class="  mt-5">
                        <label for="gender" class=" flex-col font-medium ">Gender:<span class="text-red-500 font-medium mb-1">*</span><br></label> <br>
                    </div>
                    <div class="flex">
    
                        <div class="flex items-start mr-4">
                            <input id="female" type="radio" value="Female" {{ old('gender', $staff->gender) == 'Female' ? 'checked' : '' }} name="gender" class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="female" class="ml-2 text-sm font-medium ">Female</label>
                        </div>
                        <div class="flex items-start mr-4">
                            <input id="male" type="radio" value="Male" name="gender" {{ old('gender', $staff->gender) == 'Female' ? 'checked' : '' }} class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="male" class="ml-2 text-sm font-medium ">Male</label>
                        </div>
                       
                    </div>
    
                </div>
                <!-- profile -->
                <div class="w-full group">
                       <div class="">
                    
                        <label class="block mb-2 text-sm font-medium " for="photo">Profile </label>
    
                        <input name="photo" class="block w-full text-sm text-cyan-900 border border-gray-300 rounded-lg cursor-pointer  focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" id="photo" type="file">
                        <p class="mt-1 text-sm text-gray-500 " id="photo">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                         <img src="{{asset('storage/img/patient.svg')}}" class="w-10  h-10 border border-gray-300 rounded-md p-1 text-center " alt="">      
                    </div>
                  </div>
          </div>
          <!-- modal footer -->
          <div class="flex justify-start mx-5 mt-5  mb-2 rounded-b dark:border-gray-600">
            <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
            <button  type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
        </div>
      </form>
</div>
@endsection