<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('layouts.scripts')
</head>
<body>
    @extends('dashboard.admin.admin_dashboard')
    @section('content')
   <div class="container bg-white p-5 ">
    <div class="grid grid-col-1 md:grid-col-2">

        @if ($errors->any())
            <div class="bg-red-500 p-3 rounded-md text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form method="post"  enctype="multipart/form-data" action="{{route("admin.update_patients",$patient->id)}}">
             @csrf
             @method("PUT")
            <!-- firstname & lastname -->
            <div class="grid grid-col-1 md:grid-cols-2 gap-2">
                    <!-- firstname -->
                    <div class=" w-full mb-6 group">
                        <label for="" class="font-medium ">First Name :<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="firstname" id="firstname" value="{{$patient->firstname}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="First Name " required />
                    </div>
                    <!-- lastname -->
                    <div class=" w-full mb-6  group ">
                        <label for="" class=" font-medium">Last Name :<span class="text-red-500 font-medium">*</span></label>

                        <input type="text" name="lastname" id="lastname" value="{{$patient->lastname}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Last Name " required />
                    </div>
                    <!-- Patient Unique ID -->
                    <div class=" w-full mb-6  group ">
                        <label for="unique_id" class=" font-medium">Patient Unique ID:<span class="text-red-500 font-medium">*</span></label>

                       <input type="text" name="unique_id" id="unique_id" value="{{$patient->unique_id}}"  class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Last Name " required />

                       

                    </div>
                    <!-- email -->
                    <div class="w-full mb-6 group">
                        <label for="" class="font-medium ">Email:<span class="text-red-500 font-medium">*</span></label>
                        <input type="email" name="email" id="email" value="{{$patient->email}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                    </div>
                    <!-- Birhtdate -->
                    <div class="w-full mb-6 group">
                        <label for="birthdate" class="font-medium ">Birth Date:<span class="text-red-500 font-medium">*</span></label>
                        <input type="date" name="birthdate" id="birthdate" value="{{$patient->birthdate}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                    </div>
                                                  <!-- phone -->
                    <div class="w-full mb-6  group ">
                        <label for="phone" class="font-medium ">Contact No:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <input id="phone" type="tel"  name="phone"  value="{{$patient->phone}}" class="block mt-1 p-2.5 w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="+212 00 00 00 00" required />
                    </div>                            
                 <!-- gender  -->
                 <div class="w-full  group  ">
                    <label for="gender" class=" flex-col font-medium ">Gender:<span class="text-red-500 font-medium">*</span><br></label> <br>
                <div class="flex mt-0">

                    <div class="flex items-start mr-4">
                        <input id="female" type="radio" value="Female" name="gender" {{ old('gender', $patient->gender) == 'Female' ? 'checked' : '' }} class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="female" class="ml-2 text-sm font-medium ">Female</label>
                    </div>
                    <div class="flex items-start mr-4">
                        <input id="male" type="radio" value="Male" name="gender" {{ old('gender', $patient->gender) == 'Male' ? 'checked' : '' }} class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="male" class="ml-2 text-sm font-medium ">Male</label>
                    </div>
                   
                </div>

                </div>
                <!-- Blood Group   -->
                <div class="w-full  group">
                    <label for="groupB" class="font-medium ">Group Blood:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                    <select id="groupB" name="bloodGroup" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                        <option value="" disabled>--Select Blood Group--</option>
                        <option value="A+" {{ $patient->bloodGroup === 'A+' ? 'selected' : '' }}>A+</option>
                        <option value="A-" {{ $patient->bloodGroup === 'A-' ? 'selected' : '' }}>A-</option>
                        <option value="B+" {{ $patient->bloodGroup === 'B+' ? 'selected' : '' }}>B+</option>
                        <option value="B-" {{ $patient->bloodGroup === 'B-' ? 'selected' : '' }}>B-</option>
                        <option value="AB+" {{ $patient->bloodGroup === 'AB+' ? 'selected' : '' }}>AB+</option>
                        <option value="AB-" {{ $patient->bloodGroup === 'AB-' ? 'selected' : '' }}>AB-</option>
                        <option value="O+" {{ $patient->bloodGroup === 'O+' ? 'selected' : '' }}>O+</option>
                        <option value="O-" {{ $patient->bloodGroup === 'O-' ? 'selected' : '' }}>O-</option>

                    </select>                                
                </div>
               
                <!-- profile -->
                <div class="w-full group">
                    <label for="birthdate" class="font-medium ">Profile:<span class="text-red-500 font-medium">*</span></label>
                    <div class="flex items-start justify-start">
                        <!-- Button to open the file dialog -->
                        <label for="image-input" class="cursor-pointer flex-col  justify-start border border-gray-200 p-2  rounded-lg">
                            <input type="file" name="photo" class="hidden" id="image-input">

                            <!-- Image preview or placeholder -->
                            <div class="w-full h-full bg-gray-100 rounded-lg flex items-center justify-start">
                                <img src="{{asset('storage/patients/'.$patient->photo)}}" class="w-8 h-8 " alt="">
                              
                            </div>
          
                        </label>
                    </div>

                    <!-- modal footer -->
                    <div class="flex  justify-start mx-5 mt-3  mb-2 rounded-b dark:border-gray-600">
                        <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                        <button type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>
                </div>
              
            </div>
        </form>
        
        </div>
     
    </div>
   
   </div>
   @endsection
</body>
</html>