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
    <h1 class="text-gray-900 text-xl md\:flex-col flex-row">Visits Details</h1>
    <a href="{{route('visits')}}" class="relative inline-flex items-center justify-center p-0.5 mb-2  mr-5 w-75 overflow-hidden text-sm font-medium dark:text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-cyan-900  rounded-md group-hover:bg-opacity-0 hover:text-white">
            Back
        </span>
      </a>   
    </div>
    <div class="container rounded-lg shadow-md m-5 bg-white font-semibold mx-auto text-white p-10">
        <div class="flex justify-between">
            <button onclick="window.print()" class="relative inline-flex items-center justify-center p-0.5 mb-2  mr-5 w-75 overflow-hidden text-sm font-medium dark:text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-cyan-900  rounded-md group-hover:bg-opacity-0 hover:text-white">
                    Print 
                </span>
              </button>   
              <div class="flex justify-end">
                <button  class="relative inline-flex items-center justify-center p-0.5 mb-2  mr-5 w-75 overflow-hidden text-sm font-medium dark:text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-green-500 group-hover:from-cyan-500 group-hover:to-green-500">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white text-cyan-900  rounded-md group-hover:bg-opacity-0 hover:text-white">
                        Export Excel 
                    </span>
                  </button>   
               
            </div>
        </div>
       
        <div class="grid grid-cols-1  md:grid-cols-2 gap-2 p-5">
            
            <div class="w-full mb-6 ">
                
                <h1 class="mb-2 text-gray-800 underline">Patient Name : </h1>
                <span class="text-blue-500 font-medium text-xl ">
                  Thomas Seteve
                </span>
            </div>
            <div class="w-full mb-6 ">
                
                <h1 class="mb-2 text-gray-800 underline">Profile : </h1>
               <img src="{{asset('storage/img/profile.svg')}}" class="w-12 h-12" alt="">
            </div>
            <div class="w-full mb-6 ">
                
                <h1 class="mb-2 text-gray-800 underline">Email: </h1>
                <span class="text-blue-500 text-xl ">
                  Thomas@gmail.com
                </span>
            </div>
            <div class="w-full mb-6 ">
                
                <h1 class="mb-2 text-gray-800 underline">Doctor : </h1>
                <span class="text-blue-500 text-xl ">
                  Thomas Alberto
                </span>
            </div>
          
            <div class="w-full mb-6 ">
                
                <h1 class="mb-2 text-gray-800  underline">Visit Date : </h1>
                <span class=" text-blue-500 rounded-sm  text-xl ">
                    22 April 2023
                </span>
            </div>
            <div class="w-full mb-6 ">
                
                <h1 class="mb-2 text-gray-800  underline">Created At : </h1>
                <span class=" text-blue-500 rounded-sm  text-xl ">
                    14 hours ago
                </span>
            </div>
            <div class="w-full mb-6 ">
                
                <h1 class="mb-2 text-gray-800  underline">Updated at : </h1>
                <span class=" text-blue-500 rounded-sm  text-xl ">
                    7 hours ago
                </span>
            </div>
          
           
        </div>
       
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>