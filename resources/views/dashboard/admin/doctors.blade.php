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



{{-- datatables --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}
{{-- datatables --}}


@extends('layouts.scripts')
</head>
<body class="bg-gray-100">
    @extends('dashboard.admin.admin_dashboard')

    @section('content')
   <div class="container m-5">
     <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
       
        <div class="flex flex-col sm:flex-row justify-between mx-8">
            <form method="GET" action="{{ route('admin.search') }}" class="flex items-center mb-4 sm:mb-0">
                <label class="relative block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 fill-black" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30">
                            <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"></path>
                        </svg>
                    </span>
                    <input id="searchInput" name="search" value="" class="w-full bg-white placeholder:font-italitc border border-slate-300 rounded-full py-2 pl-10 pr-4 focus:outline-none" placeholder="Search" type="search" />
                </label>
                <button type="submit" class="text-white bg-gradient-to-br from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm py-1 px-4 ml-2 mt-2 sm:mt-0">
                    Search
                </button>
            </form>
        
            <div class="flex items-center">
               
                <form action="{{ route('admin.filter') }}" method="GET" class="flex items-center">
                    <select id="order-filter" name="filter" class="bg-cyan-500 text-white border-0 focus:outline-none font-medium rounded-lg text-sm py-0.5 px-4 mr-2 mb-2">
                        <option disabled selected>
                            <i class="fas fa-light fa-filter"></i>
                            Filter Status
                        </option>
                        <option >All</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
        
                    <button type="submit" class="text-white bg-gradient-to-br from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm py-1 px-4 mr-2 mb-2">
                        Filter
                    </button>
                </form>
            </div>
        </div>

    </div>
   </div>
    <div class="grid grid-cols-1 ">
        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">
            <button data-modal-target="addDoctor" data-modal-toggle="addDoctor" class="text-white bg-gradient-to-br from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm py-1 px-4 mr-2 mb-2">
                Add Doctor
            </button>
            <table  class="w-full text-sm  text-center   overflow-hidden rounded-md data-table ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                        <th scope="col" class="px-6 py-3">
                             #
                        </th>
                        <th scope="col" class="px-6 py-3">
                             DOCTOR
                        </th>
                       
                        <th scope="col" class="px-6 py-3">
                          PHONE
                        </th>
                        <th scope="col" class="px-6 py-3">
                          STATUS
                        </th>
                        <th scope="col" class="px-6 py-3">
                          BIRTHDATE
                        </th>
                        <th scope="col" class="px-6 py-3">
                          UNIVERSITY
                        </th>
                        <th scope="col" class="px-6 py-3">
                          YEAR
                        </th>
                        <th scope="col" class="px-6 py-3">
                           DEGREE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ACTION 
                        </th>
                        
                    </tr>
                </thead>
               
               
                <tbody>

                
                        
                   
                            @foreach ($doctors as $doctor)
                            
                            <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                                <td>
                                    {{$doctor->id}}
                                </td>
                                <td>
                                    <div class="flex justify-center">
                                        <img src="{{asset('/storage/photos/'.$doctor->photo)}}" alt="{{$doctor->firstname}}" class="w-7 h-7 rounded-full border border-gray-100 "><br>
                                        <p class="mx-3">{{$doctor->firstname}} {{$doctor->lastname}}  </p>
                                    </div>
                                        <div class="flex justify-center" >
                                            <p class="mx-15">{{$doctor->email}} </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span>{{$doctor->phone}}</span>
                                </td>
                                <td>
                                @if ($doctor->status === 0)
                                    <span class="bg-red-500 p-1 text-white rounded">
                                        Deactive
                                    </span>
                                    @elseif($doctor->status === 1)
                                    <span class="bg-green-500 p-1 text-white rounded">
                                        Active
                                    </span>
                                    @else
                                @endif
                                </td>
                                <td>
                                    {{$doctor->birthdate}}
                                </td>
                            
                                <td>
                                    {{$doctor->university}}
                                </td>
                                <td>
                                    {{$doctor->year}}
                                </td>
                                <td>
                                    {{$doctor->degree}}
                                </td> 
                                <td>
                                    <div class="flex items-center mt-5">
                                                                
                                        {{-- 
                                        data-tooltip-target="tooltip-edit"  data-modal-target="editDoctor" data-modal-toggle="editDoctor"    
                                        --}}
                                        <a href=" {{route("admin.edit",$doctor->id)}}"   class="text-white  px-5 py-2 text-center mb-2" type="button">
                                            <i class="fas fa-edit text-xl text-green-700"></i>
                                        </a>                                
                                        {{-- <a href="{{route("admin.delete",$doctor->id)}}"  data-tooltip-target="tooltip-delete"   data-modal-target="deleteDoctor" data-modal-toggle="deleteDoctor" class="text-white mx-2  px-5 py-2 text-center mb-2" type="button">
                                            <i class="fas fa-trash text-xl text-red-700"></i>
                                        </a>     --}}
                                        <form id="deleteForm"  action="{{route("admin.delete",$doctor->id)}}"  class="text-white mx-2  px-5 py-2 text-center mb-2"  method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="bg-transparent" onclick="deleteConfirmation('deleteForm')">
                                                <i class="fas fa-trash text-xl text-red-700 mx-2"></i>
                                                
                                            </button>
                                        </form>    
                                        <div id="tooltip-qualification" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            add qualification
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                        <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            edit doctor
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                        <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            delete doctor
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                </div> 
                                </td>
                            </tr> 
                        
                            </tbody>
                            @endforeach
                  
            </table>
           <div class="flex items-between">
             <!-- show result -->
             <div class="mt-4">
                <b class="mx-5 text-sm mb-1 text-gray-500">Show Result</b>
                <select  id="order-filter" class="bg-white border  border-gray-100 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block mx-5 p-2.5  dark:border-gray-200 dark:placeholder-gray-400 ">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
             <!-- show result -->
            <!-- navigation -->
            <nav class="flex  justify-between items-end mt-2 pt-4" aria-label="Table navigation">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-cyan-100 hover:text-gray-200  dark:border-gray-200  dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-200 hover:bg-cyan-100 hover:text-gray-700  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-200 hover:bg-cyan-100 hover:text-gray-700  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                   
                    <li>
                        <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-cyan-100 hover:text-gray-200  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- navigation -->
           </div>
        </div>
    <div>
    <!-- Add Doctor -->
    <div id="addDoctor" data-modal-target="addDoctor" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full m-6 ">
            <!-- Modal content -->
            <div class="relative bg-white  rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addDoctor">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Add Doctor</h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

                <!-- modal body -->
                <div class="grid grid-col-1 md:grid-col-2 m-5">
                    <form method="POST" id="saveDoctor" enctype="multipart/form-data" action="{{route('admin.store')}}">
                        @csrf
                        @method("POST")
                        <!-- firstname & lastname -->
                        <div class="grid grid-col-1 md:grid-cols-2 gap-2">
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
                                    <input type="text"  name="specialization" id="specialization" class="block mt-1 p-2.5  lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none w-full dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="" required />
                                </div>
                                <!-- Experience year -->
                                <div class="w-full mb-6  group ">
                                    <label for="exprience" class="font-medium ">exprience Year:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                    <input type="number" min="0" name="exprience" id="exprience" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0" value="0" required />
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
                                    <input type="text" name="degree" id="degree" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Specialization " required />
                                </div>
                                <!-- University -->
                                <div class="w-full  mb-4 group">
                                    <label for="university" class="font-medium ">University:<span class="text-red-500 font-medium">*</span></label>
                                    <input type="text" name="university" id="university" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Specialization " required />
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
                                <label class="block mb-2 text-sm font-medium " for="photo">Status:<b class="text-red-400">*</b> </label>
                                
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input name="status" id="status" type="checkbox" value="0" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none pe rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                               </div>
                        </div>
                        <div class="flex items-start justify-start mt-5 mb-2 rounded-b dark:border-gray-600">
                            <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                            <button data-modal-hide="addDoctor" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                        </div>

                    </form>
                   
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Doctor -->
    {{-- <div id="editDoctor" data-modal-target="editDoctor" tabindex="-1" aria-hidden="true" class="fixed top-0   left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full m-6">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="editDoctor">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 mt-5 mx-6 text-left">
                        Edit Doctor

                    </h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

                <!-- modal body -->
                <div class="pt-4 px-2">
                            
                    <div class="grid grid-col-1 md:grid-col-2 m-5">
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
    
                                        <input class="block w-full text-sm text-cyan-900 border border-gray-300 rounded-lg cursor-pointer  focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" id="photo" type="file">
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
                                    <label class="block mb-2 text-sm font-medium " for="photo">Status:<b class="text-red-400">*</b> </label>
                                    
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" name="status" value="" class="sr-only peer">
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
               
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Delete Doctor -->
    {{-- <div id="deleteDoctor" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-600">
                    <h3 class="text-xl  font-bold text-red-700 ">
                        Are You Sure ?
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteDoctor">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    
                    <form method="post" action="{{route('admin.delete',$doctor->id)}}">
                        @csrf
                        @method("DELETE")
                    <!-- Modal footer -->
                    <div class="flex items-center  space-x-2 rounded-b dark:border-gray-600">
                        <button data-modal-hide="deleteDoctor" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                        <button data-modal-hide="deleteDoctor" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    
    @endsection
  
  <script>
    window.deleteConfirmation = function (formId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    });
};

  </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>