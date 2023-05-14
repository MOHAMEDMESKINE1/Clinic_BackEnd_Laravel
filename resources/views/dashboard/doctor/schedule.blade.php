<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>

       <!--  poppins font -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">
       <script src="https://cdn.tailwindcss.com"></script>

    <!-- poppins font  -->
    <style>
       body{
         font-family: 'Poppins', sans-serif;
       }
    </style>
</head>
<body class="bg-gray-100" onload="init()">

     
    @extends('dashboard.doctor.doctor_dashboard')
    @section('content')
    <div class="container ">
      <h1 class="text-2xl mb-2 mx-5 mt-5  ">
         My Schedule
      </h1>
      <form action="" >
         <div class="grid grid-col-1 md:grid-cols-2 gap-3 bg-white rounded-lg p-5 m-5 ">
         
               <!-- doctor -->
               <div class="w-full  group mb-6">
                  <label for="schedule_meeting" class="font-medium ">Doctor:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                  <select id="schedule_meeting" required name="schedule_meeting"  class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                     <option selected disabled>Select a doctor</option>
                     <option value="iddoctor">Thomas Fleenn</option>
                     <option value="iddoctor">Thomas Fleenn</option>
                  
                  
                  </select>                                
            </div>
            <!-- date -->
            <div class="w-full  group mb-6">
                  <label for="date" class="font-medium ">Date:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                  <input type="date" id="date" required name="date" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"/>
               </div>
            <!-- start time -->
            <div class="w-full  group mb-6">
               <label for="start_time" class="font-medium ">Start Time:<span class="text-red-500 font-medium mb-1">*</span><br></label>
               <select id="start_time" required name="start_time"  class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                  <option selected disabled>Select a start time</option>
               </select>                                
            </div>
            <!-- end time -->
            <div class="w-full  group mb-6">
               <label for="end_time" class="font-medium ">End Time:<span class="text-red-500 font-medium mb-1">*</span><br></label>
               <select id="end_time" required name="end_time" onchange="selecteValue()" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                  <option selected disabled>Select an end  Time</option>
                  <option value="8:00 AM">8:00 AM</option>
                  <option value="8:15 AM">8:15 AM</option>
                  <option value="8:30 AM">8:30 AM</option>
                  <option value="8:45 AM">8:45 AM</option>
                  <option value="9:00 AM">9:00 AM</option>
                  <option value="9:15 AM">9:15 AM</option>
                  <option value="9:30 AM">9:30 AM</option>
                  <option value="9:45 AM">9:45 AM</option>
                  <option value="10:00 AM">10:00 AM</option>
                  <option value="10:15 AM">10:15 AM</option>
                  <option value="10:30 AM">10:30 AM</option>
                  <option value="10:45 AM">10:45 AM</option>
                  <option value="11:00 AM">11:00 AM</option>
                  <option value="11:15 AM">11:15 AM</option>
                  <option value="11:30 AM">11:30 AM</option>
                  <option value="11:45 AM">11:45 AM</option>
                  <option value="12:00 PM">12:00 PM</option>
                  <option value="12:15 PM">12:15 PM</option>
                  <option value="12:30 PM">12:30 PM</option>
                  <option value="12:45 PM">12:45 PM</option>
                  <option value="1:00 PM">1:00 PM</option>
                  <option value="1:15 PM">1:15 PM</option>
                  <option value="1:30 PM">1:30 PM</option>
                  <option value="1:45 PM">1:45 PM</option>
                  <option value="2:00 PM">2:00 PM</option>
                  <option value="2:15 PM">2:15 PM</option>
                  <option value="2:30 PM">2:30 PM</option>
                  <option value="2:45 PM">2:45 PM</option>
                  <option value="3:00 PM">3:00 PM</option>
                  <option value="3:15 PM">3:15 PM</option>
                  <option value="3:30 PM">3:30 PM</option>
                  <option value="3:45 PM">3:45 PM</option>
                  <option value="4:00 PM">4:00 PM</option>
                  <option value="4:15 PM">4:15 PM</option>
                  <option value="4:30 PM">4:30 PM</option>
                  <option value="4:45 PM">4:45 PM</option>
                  <option value="5:00 PM">5:00 PM</option>
                  <option value="5:15 PM">5:15 PM</option>
                  <option value="5:30 PM">5:30 PM</option>
                  <option value="5:45 PM">5:45 PM</option>
                  <option value="6:00 PM">6:00 PM</option>
               </select>                                
            </div>


            <button type="submit" class="text-white  w-min  mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>


         </div>

         <div class="grid grid-col-1 p-3 mt-5  ">
           <!-- Search -->
           <div class=" container">
            <div class=" ">
                <div class="flex justify-between sm\:flex-row ">
                <div class=" mb-5">
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
        </div>
            <div class="overflow-x-auto">
               <table class=" table w-full text-sm  text-center overflow-hidden rounded-md ">
                  <thead class="text-xs text-cyan-500  bg-cyan-100 uppercase">
                      <tr class=" ">
                          <th scope="col" class="px-6 py-3">
                               DOCTOR
                          </th>
                         
                          <th scope="col" class="px-6 py-3">
                              DATE
                          </th>
                          <th scope="col" class="px-6 py-3">
                            START TIME 
                          </th>
                          <th scope="col" class="px-6 py-3">
                            END TIME 
                          </th>
                         
                          
                          <th scope="col" class="px-6 py-3">
                              ACTION 
                          </th>
                          
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="bg-white  border-b  font-medium ">
                          <td>
                              <span>Thomas Chelby</span>
                          </td>
                          <td>
                                 <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                                    11 April 2023
                                 </span>
                          </td>
                          <td>
                              <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                                  10:00 AM
                              </span>
                          </td>
                          <td>
                              <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                                  11:00 AM
                              </span>
                          </td>
                        
                         
                          <td>
                              <div class="flex justify-center mt-5">
                                
                                  <!-- edit -->
                                  <a href="#"  data-tooltip-target="tooltip-edit"   class="text-white mx-2 w-25  text-center mb-2" type="button">
                                      <i class="fas fa-edit text-blue-500 text-xl"></i>
                                  </a>    
                                  <!-- trash -->
                                  <a href="#" data-tooltip-target="tooltip-delete"  data-modal-target="deleteSchedule" data-modal-toggle="deleteSchedule" class="text-white mx-2 w-25  text-center " type="button">
                                      <i class="fas fa-trash text-red-700 text-xl"></i>
                                  </a>     
   
                                  
                                  <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                       edit schedule
                                      <div class="tooltip-arrow" data-popper-arrow></div>
                                  </div> 
                                  <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                       delete schedule
                                      <div class="tooltip-arrow" data-popper-arrow></div>
                                  </div> 
                             </div> 
                          </td>
                      </tr>   
                     </tbody>
               </table>
            </div>
         </div>
      </form>

    </div>

<!-- Delete visit -->
<div id="deleteSchedule" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-100">
                <h3 class="text-xl  font-bold text-red-700 ">
                    Are You Sure ?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteSchedule">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                
                <form>
                <!-- Modal footer -->
                <div class="flex items-center  space-x-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="deleteSchedule" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                    <button data-modal-hide="deleteSchedule" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endsection
    <script type="text/javascript">
      function init(){
      // Define the start and end times
      const start = new Date();
            start.setHours(8, 0, 0, 0); // set to 8:00am
            const end = new Date();
            end.setHours(18, 0, 0, 0); // set to 6:00pm
            
            // Define the interval
            const interval = 15; // minutes
            
            // Generate the list of time slots
            const start_time = document.getElementById('start_time');
            for (let current = start; current <= end; current.setMinutes(current.getMinutes() + interval)) {
            const option = document.createElement('option');
            option.value = current.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
            option.text = current.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
            start_time.appendChild(option);
            
            }
            // Generate the list of time slots
            // const end_time = document.querySelector('#time_end');
            // for (let current = start; current <= end; current.setMinutes(current.getMinutes() + interval)) {
            // const option = document.createElement('option');
            // option.value = current.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
            // option.text = current.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit', hour12: true });
            // end_time.appendChild(option);
            
            // }
              
      }
      function selecteValue(){
             
         const end_time = document.querySelector("#end_time")

        console.log(end_time.value); 
      }
    
       
      
      
         

       
     
        
        
      
      </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>