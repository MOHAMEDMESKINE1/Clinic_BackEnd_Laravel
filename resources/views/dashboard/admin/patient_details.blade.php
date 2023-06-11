<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
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
    <a href="{{route('admin.patients')}}" class="relative inline-flex items-center justify-center p-0.5 mb-2  mr-5 w-75 overflow-hidden text-sm font-medium dark:text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-cyan-900  rounded-md group-hover:bg-opacity-0 hover:text-white">
            Back
        </span>
      </a>   
    </div>
    <div class="container rounded-lg shadow-md m-5 bg-white font-semibold mx-auto text-gray-800 p-10">
        <div class="grid grid-cols-1   md:grid-cols-2 gap-2 p-5">
           
            <!-- patient -->
            <div class="flex flex-col sm:flex-row items-start sm:items-start mb-5 mb-xxl-0 text-center sm:text-sm-start ">
                <div class="w-32 h-32 rounded-full overflow-hidden mx-auto">
                    <img src="{{asset('/storage/patients/'.$patient->photo)}}" alt="{{$patient->firstname}}" class="w-full h-full ">
                </div>
                <div class="mt-5 sm:mt-0 sm:ms-10 mx-auto">
                    <span class="text-green-500 mb-2 block">Patient</span>
                    <h2 class="text-xl font-bold">{{$patient->firstname}} {{$patient->lastname}}</h2>
                    <a href="mailto:patient@infycare.com" class="text-gray-500  text-lg block mt-2">
                        {{$patient->email}}
                    </a>
                    <a href="tel:{{$patient->phone}}" class="text-gray-500  text-lg block mt-2">
                        {{$patient->phone}}
                    </a>
                </div>
            </div> 
            
          
                
           

        </div>
        <!-- cards -->
      <div class="grid grid-col-1   md:grid-cols-3 gap-4  ">

        <div class="max-w-xl border border-gray-200 rounded-md  p-5 h-100">
            <h2 class="text-cyan-800 mb-3 text-2xl">10</h2>
            <h3 class="text-gray-600 text-lg font-light mb-0">Today Appointments</h3>
        </div>

        <div class="max-w-xl border border-gray-200 rounded-md  p-5 h-100">
            <h2 class="text-cyan-800 mb-3 text-2xl">5</h2>
            <h3 class="text-gray-600 text-lg font-light mb-0">Completed Appointments
            </h3>
        </div>

        <div class="max-w-xl border border-gray-200 rounded-md  p-5 h-100">
            <h2 class="text-cyan-800 mb-3 text-2xl">2</h2>
            <h3 class="text-gray-600 text-lg font-light mb-0">Upcoming Appointments </h3>
        </div>

      </div>
    </div>
    <!-- tabs -->

    <div class="container mt-5 mx-auto ">
        <div class="grid grid-col-1 gap-3 my-10   ">
            
            <div class="mb-4 border-b border-gray-200 dark:border-gray-100">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                   
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">
                            <span class="text-gray-700">Overview</span>
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="appointement-tab" data-tabs-target="#appointement" type="button" role="tab" aria-controls="appointement" aria-selected="false">
                            <span class="text-gray-700">Appointments</span>
                        </button>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- tabs -->
            <div id="myTabContent  m-5  ">
                
                <div class="hidden p-7 rounded-lg  bg-white shadow-md" id="general" role="tabpanel" aria-labelledby="general-tab">
                    
                  <div class="grid grid-col-1 md:grid-cols-3  place-items-center">
                    
                        <!-- blood group-->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Blood Group</h1>
                            <p class="font-semibold">{{$patient->bloodGroup}}</p>
                        </div>
                        <!-- gender -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Gender</h1>
                            <p class="font-semibold">{{$patient->gender}}</p>
                        </div>
                       
                     
                        <!-- uniqueID -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Unique Id</h1>
                            <p class=" text-white text-center text-xs mt-1 bg-green-500 font-semibold rounded-md">{{$patient->unique_id}}</p>

                        </div>
                        <!-- registred -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Registered On</h1>
                            <p class="font-semibold">{{$patient->created_at}}</p>
                        </div>
                        <!-- updated -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Last Updated</h1>
                            <p class="font-semibold">{{$patient->updated_at}} </p>
                        </div>
                        <!-- dob -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">DOB</h1>
                            <p class="font-semibold">{{$patient->birthdate}}</p>
                        </div>
                        
                </div>

                {{-- appointement --}}
                <div class="hidden p-7 rounded-lg  bg-white shadow-md" id="appointement" role="tabpanel" aria-labelledby="appointement-tab">
                    
                  <div class="grid grid-col-1 md:grid-cols-3  place-items-center">
                    
                        <!-- blood group-->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Blood Group</h1>
                            <p class="font-semibold">{{$patient->bloodGroup}}</p>
                        </div>
                        <!-- gender -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">{{$patient->gender}}</h1>
                            <p class="font-semibold">Male</p>
                        </div>
                       
                     
                        <!-- uniqueID -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Unique Id</h1>
                            <p class=" text-white text-center text-xs mt-1 bg-green-500 font-semibold rounded-md">{{$patient->unique_id}}</p>

                        </div>
                        <!-- registred -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Registered On</h1>
                            <p class="font-semibold">{{$patient->created_at}}</p>
                        </div>
                        <!-- updated -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">Last Updated</h1>
                            <p class="font-semibold">{{$patient->updated_at}} </p>
                        </div>
                        <!-- dob -->
                        <div class="my-4">
                            <h1 class="font-medium text-gray-500 ">DOB</h1>
                            <p class="font-semibold">{{$patient->birthdate}}</p>
                        </div>
                        
                </div>
            </div>
        </div>
    
    </div>
</div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>