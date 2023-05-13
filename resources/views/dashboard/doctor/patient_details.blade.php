<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

     <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>

     <!-- datatable -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script>
        $('#datatable').DataTable({
        order: [[3, 'desc']],
        });
    </script>
    <!-- datatable -->
    <!-- editor text -->
      <!-- editor text -->
      <script src="../editortext/ckeditor.js"></script>
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
   <div class="m-5 ml-10 flex justify-between ">
    <h1 class="text-gray-900 text-xl md\:flex-col flex-row font-bold">Patient Details</h1>
    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-5 w-75 overflow-hidden text-sm font-medium dark:text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500">
        <a href="{{route('statistics')}}" class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-cyan-900  rounded-md group-hover:bg-opacity-0 hover:text-white">
            Back
        </a>
      </button>   
    </div>
    <div class="container rounded-lg shadow-md m-5 bg-white font-semibold mx-auto text-gray-800 p-10">
        <div class="grid grid-cols-1  md:grid-cols-2 gap-2 p-5">
           
            <!-- patient -->
            <div class="flex flex-col sm:flex-row items-start sm:items-start mb-5 mb-xxl-0 text-center sm:text-sm-start ">
                <div class="w-32 h-32  overflow-hidden">
                    <img src="https://infycare-demo.nyc3.digitaloceanspaces.com/89/male.png" alt="user" class="w-full h-full">
                </div>
                <div class="mt-5 sm:mt-0 sm:ms-10">
                    <span class="text-green-500 mb-2 block">Patient</span>
                    <h2 class="text-xl font-bold">Aiko Walsh</h2>
                    <a href="mailto:patient@infycare.com" class="text-gray-500  text-lg block mt-2">
                        patient@infycare.com
                    </a>
                    <a href="tel:1 412-567-8941" class="text-gray-500  text-lg block mt-2">
                        +1 412-567-8941
                    </a>
                </div>
            </div> 
            
          
                
           

        </div>
        <!-- cards -->
      <div class="grid grid-col-1 md:grid-cols-3 gap-4 sm:mx-auto ">

        <div class="max-w-xl border border-gray-200 rounded-md  p-5 h-100">
            <h2 class="text-cyan-800 mb-3 text-2xl">5</h2>
            <h3 class="text-gray-600 text-lg font-light mb-0">Today Appointments</h3>
        </div>

        <div class="max-w-xl border border-gray-200 rounded-md  p-5 h-100">
            <h2 class="text-cyan-800 mb-3 text-2xl">300</h2>
            <h3 class="text-gray-600 text-lg font-light mb-0">Completed Appointments
            </h3>
        </div>

        <div class="max-w-xl border border-gray-200 rounded-md  p-5 h-100">
            <h2 class="text-cyan-800 mb-3 text-2xl">100</h2>
            <h3 class="text-gray-600 text-lg font-light mb-0">Upcoming Appointments </h3>
        </div>

      </div>
    </div>
    <!-- tabs -->

    <div class="container mt-20 mx-auto ">
        <div class="grid grid-col-1 gap-3 my-10   ">
            
            <div class="mb-4 border-b border-gray-200 dark:border-gray-100">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                   
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">
                            <span class="text-xl">Overview</span>
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                            <span class="text-xl">Appointments</span>
    
                        </button>
                    </li>
                   
                </ul>
            </div>
            <!-- tabs -->
            <div id="myTabContent  m-5  ">
                
                <div class="hidden p-7 rounded-lg  bg-white shadow-md" id="general" role="tabpanel" aria-labelledby="general-tab">
                    
                  <div class="grid grid-col-1 md:grid-col-2">
                    
                  
                     <div class="flex items-center justify-around my-4">
                        <div>
                            <h1 class="font-medium text-gray-500 ">Blood Group</h1>
                            <p class="font-semibold">N/A</p>
                        </div>
                        <div>
                            <h1 class="font-medium text-gray-500 ">Gender</h1>
                            <p class="font-semibold">Male</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-around my-4">
                        <div>
                            <h1 class="font-medium text-gray-500 ">Registered On</h1>
                            <p class="font-semibold">1 year ago</p>
                        </div>
                        <div>
                            <h1 class="font-medium text-gray-500 ">Last Updated</h1>
                            <p class="font-semibold">10 hours ago</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-around my-4 ">
                        <div >
                            <h1 class="font-medium text-gray-500 ">DOB</h1>
                            <p class="font-semibold">N/A</p>
                        </div>
                        <div>
                            <h1 class="font-medium text-gray-500  ">Address</h1>
                            <p class="font-semibold">N/A</p>
                        </div>
                    </div>
                    

                  </div>
                 
                </div>
                <div class="hidden p-7 rounded-lg bg-white shadow-md " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                  
                    <!-- details -->
                    <div class="grid grid-cols-1 ">
                         <!-- Search -->
                         <div class=" container m-5">
                            <div class="">
                                <div class="flex justify-between sm\:flex-row ">
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
                                    <!-- filtrer -->
                                    <div class=" flex justify-between  " >
                                        <button
                                        data-dropdown-toggle="dropdown" class="text-white bg-blue-700 mr-5 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"
                                        >Filter
                                        <i class="fas fa-light fa-filter ml-2"></i>
                                        </button>
                                        
                                        <div id="dropdown" class="z-10 hidden   bg-white divide-y divide-gray-100 rounded-lg shadow w-44 p-5 m-5 " aria-labelledby="dropdownDefaultButton">
                                            
                                            <!-- date -->
                                            <label for="" class=" font-medium">Date :</label>
                    
                                            <input type="date" name="date" id="date" class="block mb-3 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Last Name " required />

                                            <!-- status -->
                                            <label for="" class=" font-medium">Status :</label>
                                            <select id="status" name="status" class="block mt-5 ml-2 p-2.5 mb-3  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                                <option value="booked">booked</option>
                                                <option value="checkin">Check In</option>
                                                <option value="checkout">Check Out</option>
                                                <option value="cancelled">Cancelled</option>
                                                
                                            </select>      
            
                                        </div> 
            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- search -->
                        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">
                
                            <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                                    <tr class=" ">
                                        <th scope="col" class="px-6 py-3">
                                             DOCTOR
                                        </th>
                                       
                                      
                                        <th scope="col" class="px-6 py-3">
                                          APPOINTEMENT AT
                                        </th>
                                       
                                        <th scope="col" class="px-6 py-3">
                                          STATUS
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
                                            <span class="bg-indigo-500 text-white rounded-md p-1">
                                                12:00 PM - 02:00 PM
                                                13 Apr 2023
                                            </span>
                                        </td>
                                       
                                        
                                        <td>
                                            <select id="status" name="status" class="block mt-1 ml-2 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                                <option value="booked">booked</option>
                                                <option value="checkin">Check In</option>
                                                <option value="checkout">Check Out</option>
                                                <option value="cancelled">Cancelled</option>
                                                
                                            </select>             
                                        </td>
                                        <td>
                                            <div class="flex justify-center mt-5">
                                                                           
                                                <a href="appointement_details.html"  data-tooltip-target="tooltip-view"   class="text-white bg-gradient-to-br w-25  text-sm px-5 py-2 text-center mb-2" type="button">
                                                    <i class="fas fa-eye text-xl text-green-700"></i>
                                                </a> 
                                                 
                                                <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                     view
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
                </div>
               
            </div>
    
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>