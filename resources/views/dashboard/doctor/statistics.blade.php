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
  
  @extends('dashboard.doctor.doctor_dashboard')
  @section('content')

    <!-- cards -->
    <div class="mt-2   ">
        <div class="grid grid-cols-1 gap-2 m-5 lg:grid-cols-3 ">
            <!-- Appointements card -->
            <div class="flex items-center shadow-md text-white justify-between p-7 bg-blue-500 rounded-md ">
              <div>
                <span>
                  <i class="fas  fa-light fa-hospital-user fa-bounce  text-5xl w-12 text-white"></i>
                </span>
              </div>
              <div>
                <span class="flex justify-end px-2 font-bold ml-2 text-4xl ">
                  25
                </span>
                <h6
                  class=" mt-5  tracking-wider text-white uppercase font-medium"
                >
                  Total Appointements
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
                  25
                </span>
                <h6
                  class=" mt-5  tracking-wider text-white uppercase font-medium"
                >
                Today Appointements
              
              </h6>
               
                
              </div>
              
            </div>
  
            <!-- Next Appointement card -->
            <div class="flex items-center shadow-md text-white justify-between p-7 bg-yellow-500 rounded-md dark:bg-darker">
              <div>
                <span>
                  <i class="fas  fa-solid fa-calendar-plus fa-bounce  text-5xl w-12 text-white"></i>
                </span>
              </div>
              <div>
                <span class="flex justify-end px-2 font-bold py-px ml-2 text-4xl ">
                  25
                </span>
                <h6
                  class=" mt-5  tracking-wider text-white uppercase font-medium"
                >
                  Next Appointement
                </h6>
               
                
              </div>
              
            </div>
           
            
        </div>
   
        <!-- Recent registration patients -->
        <div class="grid grid-cols-1 ">
            <div class=" col-span-2  mx-4 p-4   relative overflow-x-auto">
                
                <h1 class="text-lg font-bold text-gray-800 pt-3 pb-3 capitalize  border-b mb-4 ">Recent Appointments
                </h1>
                
                <table class="w-full text-sm text-center  overflow-hidden rounded-md  shadow-sm">
                    <thead class="text-xs text-white font-semibold bg-gray-500 uppercase">
                        <tr class=" ">
                            <th scope="col" class="px-6 py-3">
                                NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PATIENT UNIQUE ID	
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TOTAL APPOINTMENTS	
                            </th>
                            <th scope="col" class="px-6 py-3">
                                REGISTERED 
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white  border-b dark:bg-white dark:border-gray-400">
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                              <span title="copy id" id="copy" onclick="copy()" class="bg-green-200 tooltip text-green-500 px-1 rounded-sm 
                              relative hover:cursor-pointer 
                              ">  Xdy5512TP

                              </span>                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-red-200  text-red-500 px-1 rounded-sm">  0</span>
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                        </tr>
                    
                    
                    </tbody>
                </table>
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