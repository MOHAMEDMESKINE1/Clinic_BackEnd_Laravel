
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Consultations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="./dist/css/tailwind.css" /> -->
    <link href="../node_modules/flowbite/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
      
     <!-- editor text -->
    <style>
        @media print {
            /* Hide all elements except the modal content */
           .modal-body {
            visibility:visible;
            }
        }
        .dark-mode {
        background-color: rgb(5, 0, 14);
        color: white;
      }
      .light-mode {
        background-color: white;
        color: rgb(5, 0, 14);
      }
</style>
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
<body class=" bg-gray-100 text-gray-600">
    @extends('dashboard.patient.patient_dashboard')
        
    @section('content')
    <div class="grid grid-col-1 md:grid-col-2 ">
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
                <div class=" flex justify-between  " >
                  
                  
                   <div class="mx-5">
                    <button class="mt-1 bg-transparent" id="btn" onclick="toggleButton()">
                        <svg  class='mx-5 w-8 h-8' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11 0H13V4.06189C12.6724 4.02104 12.3387 4 12 4C11.6613 4 11.3276 4.02104 11 4.06189V0ZM7.0943 5.68018L4.22173 2.80761L2.80752 4.22183L5.6801 7.09441C6.09071 6.56618 6.56608 6.0908 7.0943 5.68018ZM4.06189 11H0V13H4.06189C4.02104 12.6724 4 12.3387 4 12C4 11.6613 4.02104 11.3276 4.06189 11ZM5.6801 16.9056L2.80751 19.7782L4.22173 21.1924L7.0943 18.3198C6.56608 17.9092 6.09071 17.4338 5.6801 16.9056ZM11 19.9381V24H13V19.9381C12.6724 19.979 12.3387 20 12 20C11.6613 20 11.3276 19.979 11 19.9381ZM16.9056 18.3199L19.7781 21.1924L21.1923 19.7782L18.3198 16.9057C17.9092 17.4339 17.4338 17.9093 16.9056 18.3199ZM19.9381 13H24V11H19.9381C19.979 11.3276 20 11.6613 20 12C20 12.3387 19.979 12.6724 19.9381 13ZM18.3198 7.0943L21.1923 4.22183L19.7781 2.80762L16.9056 5.6801C17.4338 6.09071 17.9092 6.56608 18.3198 7.0943Z" fill="currentColor" /></svg>

                    </button>
                   </div>
                   <!-- filter date -->
                    <button
                    data-dropdown-toggle="dropdown" class="text-white bg-gradient-to-br w-40  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button"
                    >Filter
                    <i class="fas fa-light fa-filter ml-2"></i>
                    </button>
                    
                    <div id="dropdown" class="z-10 hidden   bg-white divide-y divide-gray-100 rounded-lg shadow w-44 p-5 m-5 " aria-labelledby="dropdownDefaultButton">
                        <h1 class="text-gray-700 font-bold my-2">Filter Option</h1>
                        <h3 class="font-medium my-3">Status :</h3>
                        <select id="countries" class="border border-cyan-300 text-cyan-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-cyan-600 dark:placeholder-cyan-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="all">All</option>
                            <option value="awaited">Awaited</option>
                            <option value="cancelled">Cancelled</option>
                            <option value="finished">Finished</option>
                        </select>

                    </div> 
                    
                    
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="grid grid-cols-1 ">
        <div class=" col-span-2  bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">

            <table class="w-full text-sm  text-center  light-mode  overflow-hidden rounded-md ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                        <th scope="col" class="px-6 py-3">
                            CONSULTATION TITLE

                        </th>
                       
                       
                        <th scope="col" class="px-6 py-3">
                           DATE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CREATED BY
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CREATED FOR
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PATIENT
                        </th>
                        <th scope="col" class="px-6 py-3">
                            STATUS
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PASSWORD
                        </th>
                       
                        
                        <th scope="col" class="px-6 py-3">
                            ACTION 
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                       
                        <td>
                            <a href="#"  class="text-blue-500 hover:underline" data-modal-target="consultation_detail" data-modal-toggle="consultation_detail" >
                                Family medicine
                            </a>
                        </td>
                        <td>
                            <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                                11 April 2023
                            </span>
                        </td>
                        <td>
                            <span>َAdam Diaz</span>
                        </td>
                        <td>
                            <span>َAdam Diaz</span>
                        </td>
                        <td>
                            <span>10</span>
                        </td>
                       
                        <td>
                            <span class="bg-yellow-500 text-white  rounded-sm p-0.5">
                                Awaited
                            </span> /
                            <span class="bg-red-500 text-white ml-1 rounded-sm p-0.5">
                                cancelled
                            </span>
                        </td>
                       
                        <td>
                            <span>7jV4JT</span>
                        </td>
                       
                        <td>
                            <div class="flex justify-center mt-5">
                              
                               
                            <!-- video -->
                            <a href="#"  data-tooltip-target="tooltip-video"   data-modal-target="addVideo" data-modal-toggle="addVideo" class="text-white  bg-gradient-to-br w-25  font-medium  text-sm px-5 py-2 text-center mb-2" type="button">
                            <i class="fas fa-light fa-video text-xl text-cyan-700"></i>
                            </a>    
                         

                            <div id="tooltip-video" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                video consulation
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
 
  <!-- Add Video -->
  <div id="addVideo" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-100">
                <h3 class="text-xl  font-bold  ">
                Consultation title 
                </h3>

                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addVideo">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                
                <div class="grid sm:grid-col-3 md:grid-cols-3   mx-auto  ">
                    <div>
                        <h2 class="text-gray-600 font-medium">Host Video:</h2>
                        <p class="font-semibold">
                        Adam Diaz
                        </p>
                    </div>
                    <div>
                        <h2 class="text-gray-600 font-medium">Consultation Date:</h2>
                        <p class="font-semibold">
                            1:15 PM, 7th Apr, 2023
                        </p>
                    </div>
                    <div>
                        <h2 class="text-gray-600 font-medium">Duration (in minutes):</h2>
                        <p class="font-semibold">
                        20
                        </p>
                    </div>
                </div>
            

                <form>
                <!-- Modal footer -->
                <div class="flex items-start  justify-between space-x-2 rounded-b dark:border-gray-600">
                    <div>
                        <h2 class="text-gray-600 font-medium">Status:</h2>
                        <p class="font-semibold">
                            Awaited
                        </p>
                    </div>
                    <div>
                        <button data-modal-hide="addVideo" type="submit" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-1.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">
                            
                            <i class="fas fa-light fa-video mx-1 text-gray-50"></i>
                            Start Now
                        </button>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
   </div>
    <!-- consultation details -->
    <div id="consultation_detail" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-100">
                    <h3 class="text-xl  font-bold  ">
                    Consultation Details 
                    </h3>

                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="consultation_detail">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 modal-body">
                    
                    <div class="grid grid-col-1 md:grid-cols-3 gap-2  ">
                        <div class="mb-2">
                            <h2 class="text-gray-600 font-medium">Host Video:</h2>
                            <p class="font-semibold">
                                Enable
                            </p>
                        </div>
                        <div class="mb-2">
                            <h2 class="text-gray-600 font-medium">Client Video:</h2>
                            <p class="font-semibold">
                           Enable
                            </p>
                        </div>
                        <div class="mb-2">
                            <h2 class="text-gray-600 font-medium">Patient Name:</h2>
                            <p class="font-semibold">
                            Adam Diaz
                            </p>
                        </div>
                        <div class="mb-2">
                            <h2 class="text-gray-600 font-medium">Doctor Name:</h2>
                            <p class="font-semibold">
                            Dr.Adam Diaz
                            </p>
                        </div>
                        <div class="mb-2">
                            <h2 class="text-gray-600 font-medium">Consultation Date:</h2>
                            <p class="font-semibold">
                                1:15 PM, 7th Apr, 2023
                            </p>
                        </div>
                        <div class="mb-2">
                            <h2 class="text-gray-600 font-medium">Duration (in minutes):</h2>
                            <p class="font-semibold">
                            20
                            </p>
                        </div>
                        <div class="mb-2">
                            <h2 class="text-gray-600 font-medium">Description:</h2>
                            <p class="font-semibold">
                             N/A
                            </p>
                        </div>
                    </div>
                


                    <!-- Modal footer -->
                    <div class="flex items-start  justify-between space-x-2 rounded-b dark:border-gray-600">
                        <div>
                            <h2 class="text-gray-600 font-medium">Status:</h2>
                            <p class="font-semibold">
                                Awaited
                            </p>
                        </div>
                        <div>
                            <button onclick="window.print()" data-modal-hide="consultation_detail"  class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">
                                
                                <i class="fas fa-light fa-print  mx-1 text-gray-50"></i>
                               Print
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endsection
    <!-- darkmode -->
    <script>
      

        const MOON_SVG = `<svg class='mx-5  w-8 h-8' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.2256 2.00253C9.59172 1.94346 6.93894 2.9189 4.92893 4.92891C1.02369 8.83415 1.02369 15.1658 4.92893 19.071C8.83418 22.9763 15.1658 22.9763 19.0711 19.071C21.0811 17.061 22.0565 14.4082 21.9975 11.7743C21.9796 10.9772 21.8669 10.1818 21.6595 9.40643C21.0933 9.9488 20.5078 10.4276 19.9163 10.8425C18.5649 11.7906 17.1826 12.4053 15.9301 12.6837C14.0241 13.1072 12.7156 12.7156 12 12C11.2844 11.2844 10.8928 9.97588 11.3163 8.0699C11.5947 6.81738 12.2094 5.43511 13.1575 4.08368C13.5724 3.49221 14.0512 2.90664 14.5935 2.34046C13.8182 2.13305 13.0228 2.02041 12.2256 2.00253ZM17.6569 17.6568C18.9081 16.4056 19.6582 14.8431 19.9072 13.2186C16.3611 15.2643 12.638 15.4664 10.5858 13.4142C8.53361 11.362 8.73568 7.63895 10.7814 4.09281C9.1569 4.34184 7.59434 5.09193 6.34315 6.34313C3.21895 9.46732 3.21895 14.5326 6.34315 17.6568C9.46734 20.781 14.5327 20.781 17.6569 17.6568Z" fill="currentColor" /></svg>`;
        const SUN_SVG = `<svg class='mx-5  w-8 h-8' viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M11 0H13V4.06189C12.6724 4.02104 12.3387 4 12 4C11.6613 4 11.3276 4.02104 11 4.06189V0ZM7.0943 5.68018L4.22173 2.80761L2.80752 4.22183L5.6801 7.09441C6.09071 6.56618 6.56608 6.0908 7.0943 5.68018ZM4.06189 11H0V13H4.06189C4.02104 12.6724 4 12.3387 4 12C4 11.6613 4.02104 11.3276 4.06189 11ZM5.6801 16.9056L2.80751 19.7782L4.22173 21.1924L7.0943 18.3198C6.56608 17.9092 6.09071 17.4338 5.6801 16.9056ZM11 19.9381V24H13V19.9381C12.6724 19.979 12.3387 20 12 20C11.6613 20 11.3276 19.979 11 19.9381ZM16.9056 18.3199L19.7781 21.1924L21.1923 19.7782L18.3198 16.9057C17.9092 17.4339 17.4338 17.9093 16.9056 18.3199ZM19.9381 13H24V11H19.9381C19.979 11.3276 20 11.6613 20 12C20 12.3387 19.979 12.6724 19.9381 13ZM18.3198 7.0943L21.1923 4.22183L19.7781 2.80762L16.9056 5.6801C17.4338 6.09071 17.9092 6.56608 18.3198 7.0943Z" fill="currentColor" /></svg>`;


      function toggleButton(){
        console.log("click");

        var element = document.body;
        if(!element.classList.contains('dark-mode')){
            document.body.className = "dark-mode";
            document.querySelector("#btn").innerHTML = MOON_SVG ; 
        }else{
            document.body.className = "light-mode";
            document.querySelector("#btn").innerHTML = SUN_SVG ; 

        }

      }

     
    
    </script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


</body>
</html>

