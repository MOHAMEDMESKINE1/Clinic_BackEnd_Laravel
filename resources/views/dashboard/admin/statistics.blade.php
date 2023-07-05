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
  {{-- ChartScript --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
</head>

<body class="bg-gray-100">

   
   @extends('dashboard.admin.admin_dashboard')

    @section('content')
      <div class="container">
      <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4 ">
          <!-- Doctors card -->
          <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <a href="{{route("admin.doctors")}}" >
              <h6
                class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
                Doctors
              </h6>
              <span class=" font-semibold">
                
                Total Doctors
                </span>

              <span class="inline-block px-2 py-px ml-2 text-xl text-green-500 bg-green-100 rounded-md">
               
            
                {{$doctors_count}}
           
                    
               
              </span>
            </a>
            <div>
              <span>
                <i class=" fas fa-light fa-user-doctor text-4xl w-12 text-cyan-500 dark:text-primary-dark"></i>
             
              </span>
            </div>
          </div>

          <!-- Patient card -->
          <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <a href="{{route("admin.patients")}}">
              <h6
                class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
                Patients
              </h6>
              <span class=" font-semibold">Total Patients</span>
              <span class="inline-block px-2 py-px ml-2 text-xl text-green-500 bg-green-100 rounded-md">
                {{$patients_count}}
              </span>
            </a>
            <div>
              <span>
                <i class="fas fa-light fa-hospital-user  text-4xl w-12 text-cyan-500 dark:text-primary-dark"></i>
              </span>
            </div>
          </div>
           <!-- Appointements card -->
           <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <a href="{{route("admin.appointements")}}">
              <h6
                class=" font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
                Appointements
              </h6>
              <span class="font-semibold">Total Appointements</span>
              <span class="inline-block px-2  text-xl text-green-500 bg-green-100 rounded-md">
                {{$appointments_count}}
              </span>
            </a>
            <div>
              <span>
                <i class="fas fa-sharp fa-regular ml-2 fa-calendar-days text-4xl w-12 text-cyan-500 dark:text-primary-dark"></i>
              </span>
            </div>
          </div>
           <!-- Registred patients card -->
           <div class="flex items-center shadow-md  justify-between p-4 bg-white rounded-md dark:bg-darker">
            <a href="{{route("admin.patients")}}">
              <h6
                class=" font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
              >
              Patients
              </h6>
              <span class="font-semibold">Today Registred Patients</span>
              <span class="inline-block px-2 py-px ml-2 text-xl text-green-500 bg-green-100 rounded-md">
                {{$registred_patients}}
              </span>
            </a>
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
          {{-- patients --}}
          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
              <!-- Card header -->
              <div class="flex items-center  justify-between p-4 border-b dark:border-primary">
                  <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Registred Patients</h4>
                  <div class="flex items-center space-x-2">
                  <span class="text-sm text-gray-500 dark:text-light">This year</span>
                  
                </div>
              </div>
              <!-- Chart -->
              <div class="">
                  <canvas id="patient_LineChart"></canvas>
              </div>
          </div>
          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
              <!-- Card header -->
              <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                  <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Registred Patients</h4>
                  <div class="flex items-center space-x-2">
                  <span class="text-sm text-gray-500 dark:text-light">This year</span>
                  
                  </div>
              </div>
              <!-- Chart -->
              <div class="relative p-4 h-72 flex justify-center">
                <canvas id="patient_DoughnutChart"></canvas>
              </div>
          </div>

          {{-- doctors --}}
          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
            <!-- Card header -->
            <div class="flex items-center  justify-between p-4 border-b dark:border-primary">
                <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Registred Doctors</h4>
                <div class="flex items-center space-x-2">
                <span class="text-sm text-gray-500 dark:text-light">This year</span>
                
              </div>
            </div>
            <!-- Chart -->
            <div class="">
                <canvas id="doctors_LineChart"></canvas>
            </div>
        </div>
          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
            <!-- Card header -->
            <div class="flex items-center  justify-between p-4 border-b dark:border-primary">
                <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Registred Doctors</h4>
                <div class="flex items-center space-x-2">
                <span class="text-sm text-gray-500 dark:text-light">This year</span>
                
              </div>
            </div>
            <!-- Chart -->
            <div class="">
                <canvas id="doctors_DoughnutChart"></canvas>
            </div>
        </div>

          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
              <!-- Card header -->
              <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                  <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Registred Appointements</h4>
                  <div class="flex items-center space-x-2">
                  <span class="text-sm text-gray-500 dark:text-light">This year</span>
                  
                  </div>
              </div>
              <!-- Appointement Chart -->
              <div class="relative p-4 h-72 flex justify-center">
                <canvas id="appointement_LineChart"></canvas>
              </div>
          </div>
          <div class="col-span-2 bg-white shadow-md rounded-md dark:bg-darker">
              <!-- Card header -->
              <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                  <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Registred Appointements</h4>
                  <div class="flex items-center space-x-2">
                  <span class="text-sm text-gray-500 dark:text-light">This year</span>
                  
                  </div>
              </div>
              <!-- Appointement Chart -->
              <div class="relative p-4 h-72 flex justify-center">
                <canvas id="appointement_DoughnutChart"></canvas>
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
                    @foreach ($patients as $patient)
                        
                  
                      <tr class="bg-white  border-b dark:bg-white dark:border-gray-400">
                          <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                            {{$patient->firtnsame}} {{$patient->lastname}}
                          </th>
                          <td class="px-6 py-4">
                            <span class="bg-green-200 text-green-500 px-1 rounded-sm">  {{$patient->unique_id}}</span>
                          </td>
                          <td class="px-6 py-4">
                            <span class="bg-red-200  text-red-500 px-1 rounded-sm">{{$appointments_count}}</span>
                          </td>
                          <td class="px-6 py-4">
                          
                           <span class="bg-blue-200  text-blue-900 px-1 rounded-sm"> {{$patient->created_at}}</span>

                          </td>
                         
                      </tr>
                     
                     
                      @endforeach 
                </tbody> 

              </table>
              <div class="mt-4 mx-4">
                {{$patients->links()}}
              </div>
          </div>
      </div>
         
      </div>
     
    @endsection     

     <script type="text/javascript">

      // patients charts
      function Patients_typeChart(type,id)
      {

          document.addEventListener("DOMContentLoaded", function () {
          var labels =  @json($patients_labels);
          var patients =  @json($patients_data);
          
              const data = {
                labels: labels,
                datasets: [{
                  label: 'Registred Patients',
                  backgroundColor: [
                    'rgb(0,128,128)',
                    'rgb(102,205,170)',
                    'rgb(0,206,209)'
                  ],
                  borderColor: 'rgb(64,224,208)',
                  data: patients,
                }]
              };
          
              const config = {
                type: type,
                data: data,
                options: {
                  scales: {
                      y: {
                          ticks: {
                              precision: 0
                          }
                      }
                  }
                }
              };
              let ctx=  document.getElementById(id).getContext('2d');
              const myChart = new Chart(
                ctx,
                config
              );
          });
      }

        Patients_typeChart("line","patient_LineChart")
        Patients_typeChart("bar","patient_DoughnutChart")

        // Doctors charts
        function Doctors_typeChart(type,id){

          document.addEventListener("DOMContentLoaded", function () {
          var labels =  @json($doctors_labels);
          var doctors =  @json($doctors_data);

              const data = {
                labels: labels,
                datasets: [{
                  label: 'Registred Doctors',
                  backgroundColor: [
                    'rgb(0,128,128)',
                    'rgb(102,205,170)',
                    'rgb(0,206,209)'
                  ],
                
                  borderColor: 'rgb(64,224,208)',
                  data: doctors,
                }]
              };

              const config = {
                type: type,
                data: data,
                options: {
                  scales: {
                      y: {
                          ticks: {
                              precision: 0
                          }
                      }
                  }
                
                }
              };
              let ctx=  document.getElementById(id).getContext('2d');
              const myChart = new Chart(
                ctx,
                config
              );
          });
        }

        Doctors_typeChart("line","doctors_LineChart");
        Doctors_typeChart("doughnut","doctors_DoughnutChart");
      
        // Apppointement charts
        function Appointements_typeChart(type,id){

          document.addEventListener("DOMContentLoaded", function () {
          var labels =  @json($appointments_labels);
          var Appointements =  @json($appointments_data);

              const data = {
                labels: labels,
                datasets: [{
                  label: 'Registred Appointements',
                  backgroundColor: [
                    'rgb(0,128,128)',
                    'rgb(102,205,170)',
                    'rgb(0,206,209)'
                  ],
                
                  borderColor: 'rgb(64,224,208)',
                  data: Appointements,
                }]
              };

              const config = {
                type: type,
                data: data,
                options: {

                  scales: {
                      y: {
                          ticks: {
                              precision: 0
                          }
                      }
                  }
                }
              };
              let ctx=  document.getElementById(id).getContext('2d');
              const myChart = new Chart(
                ctx,
                config
              );
          });
        }
        Appointements_typeChart("bar","appointement_LineChart");
        Appointements_typeChart("pie","appointement_DoughnutChart");

    

    </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


  
</body>
</html>