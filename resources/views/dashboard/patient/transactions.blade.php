<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
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
    @extends('dashboard.patient.patient_dashboard')
        
    @section('content')
    <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
        <div class=" container m-5">
            <div class="">
                <div class="flex justify-between mx-4 mb-4 sm\:flex-row ">
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
              
        </div>

    </div>
    <div class="grid grid-cols-1 ">
        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">

            <table id="" class="w-full text-sm mt-5  text-center text-gray-700  overflow-hidden rounded-md ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                       
                        <th scope="col" class="px-6 py-3">
                         PATIENT
                        </th>
                        <th scope="col" class="px-6 py-3">
                          DATE
                        </th>
                        <th scope="col" class="px-6 py-3">
                          PAYEMENT METHOD
                        </th>
                        <th scope="col" class="px-6 py-3">
                          AMOUNT
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
                                <img src="../admin/imgs/hospital.png" alt="photo" class="w-7 h-7 rounded-full border border-gray-100 "><br>
                                <p class="mx-3">
                                    <a href="../doctor/patient_details.html">James Sam</a>
                                </p>
                               </div>
                                <div class="flex justify-center" >
                                    <p class="mx-15">james@gmail.com</p>
                                </div>
                            </div>
                        </td>
                       
                        <td>
                            <span class="bg-indigo-500 text-white p-1  rounded">
                                09:05 AM - 10:05 AM
                                10 Apr 2023
                            </span>
                        </td>
                        <td>
                            <span>Manually</span>
                        </td>
                        <td>
                           100.00$
                        </td>
                       
                        <td>
                            <div class="flex justify-center mt-5">
                                                              
                                <a href="/admin/transactions_details.html"  data-tooltip-target="tooltip-view"  data-modal-target="editDoctor" data-modal-toggle="editDoctor" class="text-white mx-2  w-25 font-medium rounded-lg text-sm px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-eye text-xl text-green-700"></i>
                                </a>                                
                               
                                <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                     view 
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div> 
                               
                           </div> 
                        </td>
                    </tr>
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        <td>
                            <div class="flex justify-center">
                                <img src="../admin/imgs/hospital.png" alt="photo" class="w-7 h-7 rounded-full border border-gray-100 "><br>
                                <p class="mx-3">
                                    <a href="../doctor/patient_details.html">James Sam</a>
                                </p>
                               </div>
                                <div class="flex justify-center" >
                                    <p class="mx-15">james@gmail.com</p>
                                </div>
                            </div>
                        </td>
                       
                        <td>
                            <span class="bg-indigo-500 text-white p-1  rounded">
                                09:05 AM - 10:05 AM
                                10 Apr 2023
                            </span>
                        </td>
                        <td>
                            <span>Manually</span>
                        </td>
                        <td>
                           100.00$
                        </td>
                       
                        <td>
                            <div  data-tooltip-target="tooltip-status"  class="flex justify-center mt-5">
                                                              
                                <label class="relative inline-flex items-center mr-5 cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                </label>                             
                               
                                <div id="tooltip-status" role="tooltip" class="absolute z-10 invisible inline-block p-1 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                     status 
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div> 
                               
                           </div> 
                        </td>
                        
                    </tr>
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        <td>
                            <div class="flex justify-center">
                                <img src="../admin/../admin/imgs/hospital.png" alt="photo" class="w-7 h-7 rounded-full border border-gray-100 "><br>
                                <p class="mx-3">
                                    <a href="../doctor/patient_details.html">James Sam</a>
                                </p>
                               </div>
                                <div class="flex justify-center" >
                                    <p class="mx-15">james@gmail.com</p>
                                </div>
                            </div>
                        </td>
                       
                        <td>
                            <span class="bg-indigo-500 text-white p-1  rounded">
                                09:05 AM - 10:05 AM
                                10 Apr 2023
                            </span>
                        </td>
                        <td>
                            <span>Manually</span>
                        </td>
                        <td>
                           100.00$
                        </td>
                       
                        <td>
                            <div  data-tooltip-target="tooltip-status"  class="flex justify-center mt-5">
                                <a href="/admin/transactions_details.html"  data-tooltip-target="tooltip-order"  data-modal-target="editDoctor" data-modal-toggle="editDoctor" class="text-white mx-2 bg-gradient-to-br w-25   font-medium rounded-lg text-sm px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-regular fa-circle-xmark text-red-600 text-xl"></i>
                                </a>                                
                               
                                <div id="tooltip-order" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Cancel order 
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
            <nav class="flex items-start justify-between  mt-2 pt-4" aria-label="Table navigation">
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
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>