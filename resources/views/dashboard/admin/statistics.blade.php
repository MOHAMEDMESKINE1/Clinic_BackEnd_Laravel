<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet"
  />
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
</head>

<body class="bg-gray-100">

   
   @extends('dashboard.admin.admin_dashboard')

    @section('content')
      <div class="container   ">
      <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4 ">
          <!-- Doctors card -->
          <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <div class=" ">
              <h6
                class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
                Doctors
              </h6>
              <span class=" font-semibold">Total Doctors</span>
              <span class="inline-block px-2 py-px ml-2 text-xl text-green-500 bg-green-100 rounded-md">
                14
              </span>
            </div>
            <div>
              <span>
                <i class=" fas fa-light fa-user-doctor text-4xl w-12 text-cyan-500 dark:text-primary-dark"></i>
             
              </span>
            </div>
          </div>

          <!-- Patient card -->
          <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <div>
              <h6
                class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
                Patients
              </h6>
              <span class=" font-semibold">Total Patients</span>
              <span class="inline-block px-2 py-px ml-2 text-xl text-green-500 bg-green-100 rounded-md">
                20
              </span>
            </div>
            <div>
              <span>
                <i class="fas fa-light fa-hospital-user  text-4xl w-12 text-cyan-500 dark:text-primary-dark"></i>
              </span>
            </div>
          </div>
           <!-- Appointements card -->
           <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <div>
              <h6
                class=" font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
                Appointements
              </h6>
              <span class="font-semibold">Total Appointements</span>
              <span class="inline-block px-2 py-px ml-2 text-xl text-green-500 bg-green-100 rounded-md">
                25
              </span>
            </div>
            <div>
              <span>
                <i class="fas fa-sharp fa-regular fa-calendar-days text-4xl w-12 text-cyan-500 dark:text-primary-dark"></i>
              </span>
            </div>
          </div>
           <!-- Registred patients card -->
           <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <div>
              <h6
                class=" font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
                Appointements
              </h6>
              <span class="font-semibold">Total Registred Patients</span>
              <span class="inline-block px-2 py-px ml-2 text-xl text-green-500 bg-green-100 rounded-md">
                25
              </span>
            </div>
            <div>
              <span>
                <i class="fas fa-solid fa-bed-pulse text-4xl w-12 text-cyan-500  dark:text-primary-dark"></i>
              </span>
            </div>
          </div>
      </div>


      
       <!-- Charts -->
      <div class="grid grid-cols-1 p-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-4">
          <!-- Bar chart card -->
          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
              <!-- Card header -->
              <div class="flex items-center  justify-between p-4 border-b dark:border-primary">
                  <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Bar Chart</h4>
                  <div class="flex items-center space-x-2">
                  <span class="text-sm text-gray-500 dark:text-light">Last year</span>
                  
                  </div>
              </div>
              <!-- Chart -->
              <div class="relative p-4 h-72">
                  <canvas id="barChart"></canvas>
              </div>
          </div>
          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
              <!-- Card header -->
              <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                  <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Doughnut Chart</h4>
                  <div class="flex items-center space-x-2">
                  <span class="text-sm text-gray-500 dark:text-light">Last year</span>
                  
                  </div>
              </div>
              <!-- Chart -->
              <div class="relative p-4 h-72">
                  <canvas id="barChart"></canvas>
              </div>
          </div>
      </div>
      <!-- Recent registration patients -->
      <div class="grid grid-cols-1 ">
          <div class=" col-span-2 bg-white mx-4 p-4 shadow-md rounded-md dark:bg-darker relative overflow-x-auto">
              
              <h1 class="text-lg font-semibold text-gray-500 pt-3 pb-3 uppercase  border-b dark:border-primary dark:text-light mb-4 ">Recent registred patients </h1>
              
              <table class="w-full text-sm text-center  overflow-hidden rounded-md  shadow-lg">
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
                            <span class="bg-green-200 text-green-500 px-1 rounded-sm">  Xdy5512TP</span>
                          </td>
                          <td class="px-6 py-4">
                              <span class="bg-red-200  text-red-500 px-1 rounded-sm">  0</span>
                          </td>
                          <td class="px-6 py-4">
                              $2999
                          </td>
                      </tr>
                      <tr class="bg-white  border-b dark:bg-white dark:border-gray-400">
                          <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                              Apple MacBook Pro 17"
                          </th>
                          <td class="px-6 py-4">
                            <span class="bg-green-200 text-green-500 px-1 rounded-sm">  Xdy5512TP</span>
                          </td>
                          <td class="px-6 py-4">
                              <span class="bg-red-200  text-red-500 px-1 rounded-sm">  0</span>
                          </td>
                          <td class="px-6 py-4">
                              $2999
                          </td>
                      </tr>
                      <tr class="bg-white  dark:bg-white dark:border-gray-400">
                          <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                              Apple MacBook Pro 17"
                          </th>
                          <td class="px-6 py-4">
                            <span class="bg-green-200 text-green-500 px-1 rounded-sm">  Xdy5512TP</span>
                          </td>
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

    @endsection     
            
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


  
</body>
</html>