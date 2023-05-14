<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

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
</head>
<body class="bg-gray-100">
    @extends('dashboard.admin.admin_dashboard')

    @section('content')
    <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
        <div class=" container m-5">
            <div class="">
                <div class="flex justify-between sm\:flex-row ">
                <div>
                    <form action="">
                        <label class="relative block">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 fill-black" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                                    height="30" viewBox="0 0 30 30">
                                    <path
                                        d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
                                    </path>
                                </svg>
                            </span>
                            <input
                                name="search"
                                class="w-full bg-white placeholder:font-italitc border border-slate-300 rounded-full py-2 pl-10 pr-4 focus:outline-none"
                                placeholder="Search" type="text" />
                        </label>
                    </form>  
                </div>              
                <div class=" flex justify-between mx-8  " >
                    <!-- add staff -->
                    <select  id="order-filter" name="filter_doctor" class="  bg-cyan-500 text-white border-0  focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        <option disabled selected>
                            <i class="fas fa-light fa-filter"></i>
                            Filter Status
                        </option>
                        <option value="all">All</option>
                        <option value="active">Active</option>
                        <option value="deactive">Deactive</option>
                      
                    </select>
                    
                    <button data-modal-target="addDoctor" data-modal-toggle="addDoctor" class="text-white bg-gradient-to-br w-40  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                        Add Doctor
                    </button>
                        

                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="grid grid-cols-1 ">
        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">

            <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                        <th scope="col" class="px-6 py-3">
                             DOCTOR
                        </th>
                       
                        <th scope="col" class="px-6 py-3">
                          EMAIL VERIFIED
                        </th>
                        <th scope="col" class="px-6 py-3">
                          STATUS
                        </th>
                        <th scope="col" class="px-6 py-3">
                          IMPERSONATE
                        </th>
                        <th scope="col" class="px-6 py-3">
                          REGISTRED ON
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SCHEDULE MEETING TIME 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ACTION 
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        <td>
                            <div class="flex justify-center">
                                <img src="imgs/hospital.png" alt="photo" class="w-7 h-7 rounded-full border border-gray-100 "><br>
                                <p class="mx-3">Smait Alejandro </p>
                               </div>
                                <div class="flex justify-center" >
                                    <p class="mx-15">smith@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <label class="relative inline-flex items-center mr-5 cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                            </label>
                        </td>
                        <td>
                            <label class="relative inline-flex items-center mr-5 cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700   peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                            </label>
                        </td>
                        <td>
                            <span class="bg-cyan-500 p-1 text-white rounded">
                                Impersonate
                            </span>
                        </td>
                        <td>
                            <span class="bg-cyan-500 p-1 text-white text-sm rounded">
                                06 Apr 2023 07:25 PM
                            </span>
                        </td>
                        <td>
                            <span class="bg-cyan-500 py-1 px-4 text-white text-sm rounded">
                                5 min
                            </span>
                        </td>
                        <td>
                            <div class="flex items-center mt-5">
                                <a href="#" data-tooltip-target="tooltip-qualification" data-modal-target="addQualification" data-modal-toggle="addQualification" class="text-white px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-plus text-xl text-gray-700"></i>
                                </a>                                
                                <a href="#"  data-tooltip-target="tooltip-edit"  data-modal-target="editDoctor" data-modal-toggle="editDoctor" class="text-white  px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-edit text-xl text-green-700"></i>
                                </a>                                
                                <a href="#"  data-tooltip-target="tooltip-delete"   data-modal-target="deleteDoctor" data-modal-toggle="deleteDoctor" class="text-white mx-2  px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-trash text-xl text-red-700"></i>
                                </a>    
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
    <div id="addDoctor" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
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
                <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                    <form method="post"  enctype="multipart/form-data" action="#">
                     
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
                                    <input id="phone" type="tel"  name="phone"  class="block mt-1 p-2.5 w-full lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="+212 00 00 00 00" required />
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
                                    <select id="groupB" name="groupB" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
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
                                <!-- gender  -->
                                <div class="w-full  group  ">
                                    <div class="  mt-5">
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
                               <!-- profile -->
                                <div class="w-full group">
                                    <label for="birthdate" class="font-medium ">Profile:</label>
                                    <div class="flex items-start justify-start">
                                        <!-- Button to open the file dialog -->
                                        <label for="image-input" class="cursor-pointer flex-col  justify-start border border-gray-200 p-2  rounded-lg">
                                            <input type="file" name="profile" class="hidden" id="image-input">

                                            <!-- Image preview or placeholder -->
                                            <div class="w-full h-full bg-gray-100 rounded-lg flex items-center justify-start">
                                                <img src="../patient/profile.svg" class="w-8 h-8 p-2" alt="">

                                            
                                            </div>
                        
                                        </label>
                                    </div>
                                </div>
                                <!-- status -->
                               <div class="w-full group">    
                                <label class="block mb-2 text-sm font-medium " for="photo">Status:<b class="text-red-400">*</b> </label>
                                
                                    <label class="relative inline-flex items-start cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none pe rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                               </div>
                        </div>
                    </form>
                            
                   
                </div>
                <!-- modal footer -->
                <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="addDoctor" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                    <button data-modal-hide="addDoctor" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Doctor -->
    <div id="editDoctor" tabindex="-1" aria-hidden="true" class="fixed top-0   left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
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
                        <form method="post"  enctype="multipart/form-data" action="#">
                     
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
                                        <input id="phone" type="tel"  name="phone"  class="block mt-1 p-2.5 w-full lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="+212 00 00 00 00" required />
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
                                        <select id="groupB" name="groupB" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
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
                                    <div class="">
                                    
                                        <label class="block mb-2 text-sm font-medium " for="photo">Profile </label>
    
                                        <input class="block w-full text-sm text-cyan-900 border border-gray-300 rounded-lg cursor-pointer  focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="photo" id="photo" type="file">
                                        <p class="mt-1 text-sm text-gray-500 " id="photo">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                                        <img src="./imgs/hospital.png" class="w-10  h-10 border border-gray-300 rounded-md p-1 text-center " alt="">      
                                    </div>
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
                                            <input type="checkbox" value="" class="sr-only peer">
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none pe rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                        </label>
                                   </div>
                            </div>
                        </form>
                        <!-- accordion -->
                        <div class="mt-5 py-5">
                            <div id="accordion-arrow-icon" data-accordion="open">
                                    <h2 id="accordion-arrow-icon-heading-1">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left   bg-gray-800 text-white border border-b-0 border-gray-100 rounded-t-xl dark:text-white dark:border-gray-700  " data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="true" aria-controls="accordion-arrow-icon-body-1">
                                        <span>Add Qualification</span>
                                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path></svg>
                                    </button>
                                    </h2>

                                    <div id="accordion-arrow-icon-body-1" aria-labelledby="accordion-arrow-icon-heading-1">
                                        <div class="p-5 border border-b-0 border-gray-200 ">
                                            <!-- form edit qualification -->
                                            <form method="post"  enctype="multipart/form-data" action="#">
                            
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
                                                <!-- buttons  -->
                                                <div class="flex items-cente justify-start mx-2  mb-2 rounded-b dark:border-gray-600">
                                                    <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save </button>
                                                    <button  type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Reset</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                               
                            </div>
                        </div>
                        <!-- qualification table -->
                        <div class="">
                            <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                                    <tr class=" ">
                                        <th scope="col" class="px-6 py-3">
                                             SR NO
                                        </th>
                                       
                                        <th scope="col" class="px-6 py-3">
                                         DEGREE
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                          UNIVERSITY
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                          YEAR
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                          ACTION
                                        </th>
                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                                       
                                        <td>
                                           
                                        </td>
                                        <td>
                                           
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                          
                                        </td>
                                        <td>
                                            <div class="flex justify-center mt-5">
                                                                             
                                                <a href="#"  data-tooltip-target="tooltip-edit"  class="text-white  px-5 py-2 text-center mb-2" type="button">
                                                    <i class="fas fa-edit text-blue-700 text-xl"></i>
                                                </a>                                
                                                <a href="#"  data-tooltip-target="tooltip-delete" data-modal-target="deleteQualification" data-modal-toggle="deleteQualification"   class="text-white mx-2  px-5 py-2 text-center mb-2" type="button">
                                                    <i class="fas fa-trash text-red-700 text-xl"></i>
                                                </a>   
                                                 
                                                <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                     edit qualification
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div> 
                                                <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                     delete qualification
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div> 
                                           </div> 
                                        </td>
                                    </tr>
                                 
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- modal footer -->
                <div class="flex items-cente justify-start mx-6 mb-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="editDoctor" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                    <button data-modal-hide="editDoctor" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Doctor -->
    <div id="deleteDoctor" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
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
                
                <form>
                <!-- Modal footer -->
                <div class="flex items-center  space-x-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="deleteDoctor" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                    <button data-modal-hide="deleteDoctor" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- ---------------------------Add Qualification--------------------------- -->
     <!-- Add qualification -->
     <div id="addQualification" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addQualification">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="text-xl font-medium text-cyan-900 text-left mt-5">Add Qualification</h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

                <!-- modal body -->
                <div class=" grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                            
                    <form method="post"  enctype="multipart/form-data" action="#">
                            
                            <!-- degree -->
                            <div class="w-full  mb-4 group">
                                <label for="doctor" class="font-medium ">Degree:<span class="text-red-500 font-medium">*</span></label>
                                <input type="text" name="degree" id="degree" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " required />
                            </div>
                            <!-- University -->
                            <div class="w-full  mb-4 group">
                                <label for="university" class="font-medium ">University:<span class="text-red-500 font-medium">*</span></label>
                                <input type="text" name="university" id="university" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " required />
                            </div>
                            <!-- Year -->
                            <div class="w-full mb-4 group">
                                <label for="year" class="font-medium ">Year:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                <select id="yearQualification" name="year" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
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
                        <!-- modal footer -->
                        <div class="flex items-cente justify-start mx-2  mb-2 rounded-b dark:border-gray-600">
                            <button data-modal-hide="addQualification" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                            <button data-modal-hide="addQualification" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                        </div>
                    </form>
                </div>

                   
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Delete qualification -->
    <div id="deleteQualification" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-md ">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-600">
                <h3 class="text-xl  font-bold text-red-700 ">
                    Are You Sure ?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteQualification">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                
                <form>
                <!-- Modal footer -->
                <div class="flex items-center  space-x-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="deleteQualification" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                    <button data-modal-hide="deleteQualification" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    @endsection
   
    <!-- flag -->
    <script>
        const phoneInputField = document.getElementById("phone");

        const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>