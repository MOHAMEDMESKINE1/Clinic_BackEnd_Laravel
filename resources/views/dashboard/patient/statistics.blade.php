<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet"
  />
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
  <!-- tooltip -->
  <style>
    .tooltip {
    position: relative;
  }
  .tooltip:hover::before {
    content: attr(title);
    background-color: gray;
    color: white;
    font-size: 5px;
    padding: 5px 5px;
    border-radius: 5px;
    position: absolute;
    top: 110%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
    white-space: nowrap;
  }
  </style>
</head>
<body class="bg-gray-100">
  @extends('dashboard.patient.patient_dashboard')
        
  @section('content')
    <!-- cards -->
    <div class="mt-2   ">
        <div class="grid grid-cols-1 gap-2 m-5 md:grid-cols-2 lg:grid-cols-3">
            <!-- Appointements card -->
            <div class="flex items-center shadow-md text-white justify-between p-7 bg-blue-500 rounded-md ">
              <div>
                <span>
                  <i class="fas  fa-light fa-hospital-user fa-bounce  text-5xl w-12 text-white"></i>
                </span>
              </div>
              <div class="">
                <span class="flex justify-end px-2 font-bold ml-2 text-4xl ">
                 {{$today_appointment}}
                </span>
                <h6
                  class=" mt-5 flex justify-endtracking-wider text-white uppercase font-medium"
                >
                  Today Appointements
                </h6>
               
                
              </div>
              
            </div>
            <!-- Today Appointements card -->
            <div class="flex items-center shadow-md text-white justify-between p-7 bg-green-500 rounded-md dark:bg-darker">
              <div>
                <span>
                  <i class="fas  fa-solid fa-calendar-days fa-bounce  text-5xl w-12 text-white"></i>
                
                </span>
              </div>
              <div>
                <span class="flex justify-end px-2 font-bold ml-2 text-4xl ">
                 {{$next_appointment}}
                </span>
                <h6
                  class=" mt-5  tracking-wider text-white uppercase font-medium"
                >
                Next Appointements
              
              </h6>
               
                
              </div>
              
            </div>
  
            <!-- completed Appointement card -->
            <div class="flex items-center shadow-md text-white justify-between p-7 bg-yellow-500 rounded-md dark:bg-darker">
              <div>
                <span>
                  <i class="fas  fa-solid fa-calendar-plus fa-bounce  text-5xl w-12 text-white"></i>
                </span>
              </div>
              <div>
                <span class="flex justify-end px-2 font-bold ml-2 text-4xl ">
                  {{$appointment_count}}
                </span>
                <h6
                  class=" mt-5  flex justify-end tracking-wider text-white uppercase font-medium"
                >
                Total Appointements
              
              </h6>
               
                
              </div>
            </div>
           
            
        </div>
   
        <!-- Today Appointemnts -->
        <div class="grid grid-cols-1 ">
            <div class=" col-span-2  mx-4 p-4   relative overflow-x-auto">
                
                <h1 class="text-lg font-bold text-gray-800 pt-3 pb-3 capitalize  border-b mb-4 ">Today Appointments
                </h1>
                
                <table class="w-full text-sm text-center  overflow-hidden rounded-md  shadow-sm">
                    <thead class="text-xs text-white font-semibold bg-gray-500 uppercase">
                        <tr class=" ">
                            <th scope="col" class="px-6 py-3">
                                DOCTOR
                            </th>
                            <th scope="col" class="px-6 py-3">
                               TIME
                            </th>
                           
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($today_doctors_appointment as $appointment)
                          
                    
                        <tr class="bg-white  border-b ">
                          <td>
                            <img src="{{asset('storage/doctors/'.$appointment->doctors->photo)}}" alt="photo" class="w-7 h-7 mx-auto mt-5 rounded-full border border-gray-100 "><br>

                            <div class="flex justify-center">
                              <a href="../patient/doctor_details.html" class="mx-3 text-indigo-500" >{{$appointment->doctors->firstname}} {{$appointment->doctors->lastname}}</a>
                             </div>
                              <div class="flex justify-center" >
                                  <p class="mx-10 mb-5">{{$appointment->doctors->email}}</p>
                              </div>
                            </div>
                          </td>
                           
                            <td class="px-6 py-4">
                                <span class="text-white  bg-indigo-500 px-1 rounded-sm"> {{$appointment->created_at}}</span>
                            </td>
                            
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
           
         <!-- Upcoming Appointments -->
         <div class="grid grid-cols-1 ">
          <div class=" col-span-2  mx-4 p-4   relative overflow-x-auto">
              
              <h1 class="text-lg font-bold text-gray-800 pt-3 pb-3 capitalize  border-b mb-4 ">Upcoming Appointments
              </h1>
              
              <table class="w-full text-sm text-center  overflow-hidden rounded-md  shadow-sm">
                  <thead class="text-xs text-white font-semibold bg-gray-500 uppercase">
                      <tr class=" ">
                          <th scope="col" class="px-6 py-3">
                              DOCTOR
                          </th>
                          <th scope="col" class="px-6 py-3">
                             DATE
                          </th>
                         
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($next_doctors_appointment as $appointment)
                    <tr class="bg-white  border-b ">
                      <td>
                        <img src="{{asset('storage/doctors/'.$appointment->doctors->photo)}}" alt="photo" class="w-7 h-7 mx-auto mt-5 rounded-full border border-gray-100 "><br>

                        <div class="flex justify-center">
                          <a href="../patient/doctor_details.html" class="mx-3 text-indigo-500" >{{$appointment->doctors->firstname}} {{$appointment->doctors->lastname}}</a>
                         </div>
                          <div class="flex justify-center" >
                              <p class="mx-10 mb-5">{{$appointment->doctors->email}}</p>
                          </div>
                        </div>
                      </td>
                       
                        <td class="px-6 py-4">
                            <span class="text-white  bg-indigo-500 px-1 rounded-sm"> {{$appointment->created_at}}</span>
                        </td>
                        
                    </tr>
                    @endforeach
                  
                  
                  </tbody>
              </table>
          </div>
      </div>

      </div>
         
  </div> 
  </div>
    @endsection
        <!-- copy element -->
        <!-- HTML code for the element to be copied -->

          <!-- JavaScript code to copy the element when clicked -->
          <script defer type="text/javascript">
            const element = document.getElementById("copy");
           function copy(){
            const range = document.createRange();
              range.selectNode(element);
              window.getSelection().removeAllRanges();
              window.getSelection().addRange(range);
              document.execCommand("copy");
              window.getSelection().removeAllRanges();
              alert("Element copied to clipboard!");
           }
          </script>

              
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>