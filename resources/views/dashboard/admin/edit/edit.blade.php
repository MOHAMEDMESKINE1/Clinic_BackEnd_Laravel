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
   <div class="container my-5 mx-auto">
    <div class="grid grid-col-1 md:grid-col-2 m-5">

        @if ($errors->any())
        <div class="bg-red-500 p-3 rounded-md text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
        <form method="POST"  enctype="multipart/form-data" action="{{route('admin.update', $doctor->id)}}">
     
            @csrf
            @method("PUT")
            <!-- firstname & lastname -->
            <div class="grid grid-col-1 md:grid-cols-2 gap-2">
                    <!-- firstname -->
                    <div class=" w-full mb-6 group">
                        <label for="" class="font-medium ">First Name :<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="firstname" id="firstname" value="{{$doctor->firstname}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="First Name " required />
                    </div>
                    <!-- lastname -->
                    <div class=" w-full mb-6  group ">
                        <label for="" class=" font-medium">Last Name :<span class="text-red-500 font-medium">*</span></label>

                        <input type="text" name="lastname" id="lastname" value="{{$doctor->lastname}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Last Name " required />
                    </div>
                    <!-- email -->
                    <div class="w-full mb-6 group">
                        <label for="" class="font-medium ">Email:<span class="text-red-500 font-medium">*</span></label>
                        <input type="email" name="email" id="email" value="{{$doctor->email}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                    </div>
                    <!-- Birhtdate -->
                    <div class="w-full mb-6 group">
                        <label for="birthdate" class="font-medium ">Birth Date:<span class="text-red-500 font-medium">*</span></label>
                        <input type="date"  name="birthdate" id="birthdate" value="{{$doctor->birthdate}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                    </div>
                    <!-- phone -->
                    <div class="w-full mb-6  group ">
                        <label for="phone" class="font-medium ">Contact No:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <input id="phone" type="tel"  name="phone"  value="{{$doctor->phone}}" class="block mt-1 p-2.5 w-full lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="+212 00 00 00 00" required />
                    </div>
                    <!-- specialization -->
                    <div class="w-full mb-6  group ">
                        <label for="specialization" class="font-medium ">Specialization:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <input type="text"  name="specialization" id="specialization" value="{{$doctor->specialization}}" class="block mt-1 p-2.5  lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none w-full dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="" required />
                    </div>
                    <!-- Experience year -->
                    <div class="w-full mb-6  group ">
                        <label for="exprience" class="font-medium ">exprience Year:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <input type="number" min="0" name="exprience" value="{{$doctor->year}}" id="exprience" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0" value="0" required />
                    </div>
                    <!-- linkedin -->
                    <div class="w-full mb-6 group">
                        <label for="linkedin" class="font-medium ">Linkedin:<span class="text-red-500 font-medium">*</span></label>
                        <input type="url" name="linkedin" id="linkedin" value="{{$doctor->linkedin}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=""  required />
                    </div>
                    <!-- twitter  -->
                    <div class="w-full mb-6  group">
                        <label for="twitter" class="font-medium ">Twitter:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                        <input type="url" name="twitter" id="twitter " value="{{$doctor->twitter}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=""  required />
                    </div>
                    <!-- instagram  -->
                    <div class="w-full mb-6  group">
                        <label for="instagram" class="font-medium ">Instagram:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                        <input type="url" name="instagram" id="instagram" value="{{$doctor->instagram}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=""  required />
                    </div>
                    <!-- Blood Group   -->
                    <div class="w-full  group">
                        <label for="groupB" class="font-medium ">Group Blood:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <select id="groupB" name="bloodGroup" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
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

                        <input name="photo" id="photo" type="file" class="block w-full text-sm text-cyan-900 border border-gray-300 rounded-lg cursor-pointer  focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" >
                        <p class="mt-1 text-sm text-gray-500 " id="photo">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        <img src="{{asset('storage/photos/'.$doctor->photo)}}" class="w-10  h-10 border border-gray-300 rounded-md p-1 text-center " alt="">      
                    
                    </div>
                   
                     <!-- degree -->
                     <div class="w-full  mb-4 group">
                        <label for="doctor" class="font-medium ">Degree:<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="degree" id="degree" value="{{$doctor->degree}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Specialization " required />
                    </div>
                    <!-- University -->
                    <div class="w-full  mb-4 group">
                        <label for="university" class="font-medium ">University:<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="university" id="university" value="{{$doctor->university}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Specialization " required />
                    </div>
                    <!-- Year -->
                    <div class="w-full mb-4 group">
                        <label for="year" class="font-medium ">Year:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                        <select id="year" name="year" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                            <option selected disabled value="" class="font-medium">Select a Year</option>

                            @php
                                  $start_year = 1970;
                                $current_year = date('Y');
                                for ($year = $start_year; $year <= $current_year; $year++) {
                                    $selected = $doctor->year == $year ? 'selected' : '';
                                    echo '<option value="' . $year . '" ' . $selected . '>' . $year . '</option>';
                                }
                            @endphp
                              
                            
                            {{-- <option value='{{ $doctor->$year }}' {{ $year == $doctor->year  ? selected : '' }}>{{ $doctor->year }}</option> --}}


                                                    
                        </select>                                
                    </div>
                     <!-- gender  -->
                     <div class="w-full  group  ">
                        <div class="">
                            <label for="gender" class=" flex-col font-medium ">Gender:<span class="text-red-500 font-medium mb-1">*</span><br></label> <br>
                        </div>
                        <div class="flex">

                            <div class="flex items-start mr-4">
                                <input id="female" type="radio"   name="gender" value="Female" {{$doctor->gender === 'Female' ? 'checked' : '' }} class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="female" class="ml-2 text-sm font-medium ">Female</label>
                            </div>
                            <div class="flex items-start mr-4">
                                <input id="male" type="radio"   name="gender" value="Male" {{ $doctor->gender  === 'Male' ? 'checked' : '' }} class="w-4 h-4 text-cyan-600 bg-gray-100 border-gray-300 focus:ring-cyan-500 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="male" class="ml-2 text-sm font-medium ">Male</label>
                            </div>
                           
                        </div>

                    </div>
                  
                    <!-- status -->
                   <div class="w-full group mt-3">    
                    <label class="block mb-2 text-sm font-medium " for="photo">Status:<b class="text-red-400">*</b> </label>
                    
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="status" value="1" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none pe rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                        </label>
                   </div>
            </div>
             <!-- modal footer -->
            <div class="flex items-cente justify-start mx-6 mb-2 rounded-b dark:border-gray-600">
                <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                <button data-modal-hide="editDoctor"  type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
            </div>
        </form>
     
    </div>
   </div>
</body>
</html>