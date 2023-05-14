
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
    @extends('dashboard.doctor.doctor_dashboard')
    @section('content')
       <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
        <div class=" container m-5">
            <div class="">
                <div class="flex justify-between sm\:flex-row  ">
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
                    <div class=" flex justify-between mx-10 " >
                        <button
                        data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"
                        >Filter
                        <i class="fas fa-light fa-filter ml-2"></i>
                        </button>
                        
                        <div id="dropdown" class="z-10 hidden   bg-white divide-y divide-gray-100 rounded-lg shadow w-44 p-5 m-5 " aria-labelledby="dropdownDefaultButton">
                            
                            <!-- date -->
                            <label for="" class=" font-medium">Date :</label>
    
                            <input type="date" name="date" id="date" class="block mb-3 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Last Name " required />

                            <!-- pending -->
                            <label for="" class=" font-medium">Paiment :</label>
                            <select id="payment" name="payment" class="block mt-5 p-2.5 mb-3  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                <option value="pending">Pending</option>
                                <option value="paid">Paid</option>
                                
                            </select>  

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
                            PATIENT
                        </th>
                        <th scope="col" class="px-6 py-3">
                          APPOINTEMENT AT
                        </th>
                        <th scope="col" class="px-6 py-3">
                          PAYMENT
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
                            <select id="payment" name="payment" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                <option value="booked">Pending</option>
                                <option value="paid">Paid</option>
                                
                            </select>     
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
                                                           
                                <a href="{{route('doctor.appointement_details')}}"  data-tooltip-target="tooltip-view"  data-modal-target="editAppointement" data-modal-toggle="editAppointement" class="text-white  px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-eye text-green-700 text-xl"></i>
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
       @endsection
        <!-- select year -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    
    
    </body>
    </html>

