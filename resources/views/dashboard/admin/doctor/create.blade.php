<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

     <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
   <!--  poppins font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">

<!-- poppins font  -->
<style>
   body{
     font-family: 'Poppins', sans-serif;
   }
</style>
{{-- jquery --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@extends('layouts.scripts')
</head>
<body>
    
    
   
    @extends('dashboard.admin.admin_dashboard')
    @section('content')
   <div class="container bg-white ">
    <div class="grid grid-col-1 md:grid-col-2">
        <form method="POST" id="saveDoctor" class="p-5  " enctype="multipart/form-data" action="{{route('admin.store')}}">
            @csrf
            @method("POST")
            <!-- firstname & lastname -->
            <div class="grid grid-col-1 md:grid-cols-2 gap-2 ">
                    <!-- firstname -->
                    <div class=" w-full mb-6 group">
                        <label for="" class="font-medium ">First Name :<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="firstname" id="firstname" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="First Name " required />
                    </div>
                    <!-- lastname -->
                    <div class=" w-full mb-6  group ">
                        <label for="" class=" font-medium">Last Name :<span class="text-red-500 font-medium">*</span></label>

                        <input type="text" name="lastname" id="lastname" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Last Name " required />
                    </div>
                    <!-- email -->
                    <div class="w-full mb-6 group">
                        <label for="" class="font-medium ">Email:<span class="text-red-500 font-medium">*</span></label>
                        <input type="email" name="email" id="email" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                    </div>
                    <!-- Birhtdate -->
                    <div class="w-full mb-6 group">
                        <label for="birthdate" class="font-medium ">Birth Date:<span class="text-red-500 font-medium">*</span></label>
                        <input type="date" name="birthdate" id="birthdate" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                    </div>
                    <!-- phone -->
                    <div class="w-full mb-6  group ">
                        <label for="phone" class="font-medium ">Contact No:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <input id="phone" type="tel"  name="phone" id="phone" class="block mt-1 p-2.5 w-full lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="+212 00 00 00 00" required />
                    </div>
                    <!-- specialization -->
                    <div class="w-full mb-6  group ">
                        <label for="specialization" class="font-medium ">Specialization:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        {{-- <input type="text"  name="specialization" id="specialization" class="block mt-1 p-2.5  lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none w-full dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="" required /> --}}
                        <select  name="specialization" id="specialization" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                            <option  disabled>--Select specialization --</option>
                                                                
                            {{-- @if ($doctor->specialization) --}}

                                @foreach ($specializations as $specialization)

                                <option value="{{$specialization->id}}" >{{$specialization->name}}</option>

                                @endforeach
                            {{-- @endif  --}}
                           

                        </select>                   
                    </div>


                    
                    <!-- Experience year -->
                    <div class="w-full mb-6  group ">
                        <label for="exprience" class="font-medium ">exprience Year:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <input type="number" min="0" max="40" name="exprience" id="exprience" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0" value="0" required />
                    </div>
                    <!-- linkedin -->
                    <div class="w-full mb-6 group">
                        <label for="linkedin" class="font-medium ">Linkedin:<span class="text-red-500 font-medium">*</span></label>
                        <input type="url" name="linkedin" id="linkedin" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=""  required />
                    </div>
                    <!-- twitter  -->
                    <div class="w-full mb-6  group">
                        <label for="twitter" class="font-medium ">Twitter:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                        <input type="url" name="twitter" id="twitter" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=""  required />
                    </div>
                    <!-- instagram  -->
                    <div class="w-full mb-6  group">
                        <label for="instagram" class="font-medium ">Instagram:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                        <input type="url" name="instagram" id="instagram" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=""  required />
                    </div>
                    <!-- Blood Group   -->
                    <div class="w-full  group">
                        <label for="groupB" class="font-medium ">Group Blood:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <select  name="bloodGroup" id="groupB" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                            <option value="" disabled>--Select Blood Group--</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>                                
                    </div>
                    <!-- profile -->
                    <div class="w-full group">
                        <label class="block mb-2 text-sm font-medium " for="photo">Profile </label>

                        <input name="photo" id="photo" class="block w-full text-sm text-cyan-900 border border-gray-300 rounded-lg cursor-pointer  focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" id="photo" type="file">
                        <p class="mt-1 text-sm text-gray-500 " id="photo">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        <img src="./imgs/hospital.png" class="w-10  h-10 border border-gray-300 rounded-md p-1 text-center " alt="">      
                    
                    </div>
                  
                     <!-- degree -->
                     <div class="w-full  mb-4 group">
                        <label for="doctor" class="font-medium ">Degree:<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="degree" id="degree" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="degree " required />
                    </div>
                    <!-- University -->
                    <div class="w-full  mb-4 group">
                        <label for="university" class="font-medium ">University:<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="university" id="university" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="university " required />
                    </div>
                    <!-- Year -->
                    <div class="w-full mb-4 group">
                        <label for="year" class="font-medium ">Year:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <select id="year" name="year" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                            <option selected disabled class="font-medium">Select a Year</option>
                            <?php
                                $start_year = 1970;
                                $current_year = date('Y');
                                for ($year = $start_year; $year <= $current_year; $year++) {
                                echo '<option value="' . $year . '">' . $year . '</option>';
                                }
                            ?>
                                                    
                        </select>                                
                    </div>
                      <!-- gender  -->
                      <div class="w-full  group  ">
                        <div class="">
                            <label for="gender" class=" flex-col font-medium ">Gender:<span class="text-red-500 font-medium mb-1">*</span><br></label> <br>
                        </div>
                        <div class="flex">

                            <div class="flex items-start mr-4">
                                <input id="female" type="radio" value="Female" name="gender" class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="female" class="ml-2 text-sm font-medium ">Female</label>
                            </div>
                            <div class="flex items-start mr-4">
                                <input id="male" type="radio" value="Male" name="gender" class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="male" class="ml-2 text-sm font-medium ">Male</label>
                            </div>
                           
                        </div>

                    </div>
                  
                    <!-- status -->
                   <div class="w-full group mt-3">    
                    <label class="block mb-2 text-sm font-medium " for="status">Status:<b class="text-red-400">*</b> </label>
                    
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input name="status" id="status" type="checkbox" value="0" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none pe rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                        </label>
                   </div>
            </div>
            <div class="flex items-start justify-start mt-5 mb-2 rounded-b dark:border-gray-600">
                <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                <button data-modal-hide="addDoctor" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-cyan-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
            </div>

        </form>
       
    </div>
   </div>
    @endsection
</body>
</html>