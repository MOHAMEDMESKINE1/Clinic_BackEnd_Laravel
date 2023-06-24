<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

    <!-- phone flag country -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"></script> --}}

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
    <div class="grid grid-col-1 md:grid-col-2">
         
        <!-- Search -->
                <div class=" container m-5">
                    {{-- <div class="">
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
                       </div>
                    </div> --}}
                    <x-search route="admin.search_staff"></x-search>
                </div>
            
          <!-- Recent registration patients -->
            <div class="grid grid-cols-1 ">
                <div class=" col-span-2 bg-white mx-4 p-4 shadow  rounded-md dark:bg-darker relative overflow-x-auto">
                    
                    <h1 class="text-lg font-semibold text-gray-500 pt-3 pb-3 uppercase  border-b dark:border-primary dark:text-light mb-4 ">Recent registred staffs </h1>
                    
                    <table class="w-full text-sm  overflow-hidden rounded-md ">
                        <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                            <tr class=" text-left">
                                <th scope="col" class="px-6 py-3">
                                    FULL NAME
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  ROLE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    EMAIL VERIFIED	
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  ACTION
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody >
                            @foreach ($staffs as $staff)
                                
                         
                            <tr class="bg-whit  border-b dark:bg-white dark:border-gray-400">
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">
                                       <div class="flex justify-start">
                                        <p class="capitalize text-cyan-950">{{$staff->name}} </p>
                                       </div>
                                        <div class="flex justify-start" >
                                            <p class="">{{$staff->email}}</p>
                                        </div>
                                </th>
                                <td class="px-6 py-4">
                                <span class="bg-green-200 text-green-500 px-1 rounded-sm"> {{$staff->role}}</span>
                                </td>
                                <td class="px-6 py-4">
                                   
                                   <label class="relative inline-flex items-center mr-5 cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-cyan-300 dark:peer-focus:ring-cyan-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">VERIFIED</span>
                                </label>
                                  

                                </td>
                            </tr>
                           
                         
                            @endforeach
                        
                        </tbody>
                       
                    </table>
                </div>
            <div>
            <div class="mt-4">
              {{$staffs->links()}}
            </div>
        </div>
            </div>
   
</div>
@endsection
  

</body>
</html>