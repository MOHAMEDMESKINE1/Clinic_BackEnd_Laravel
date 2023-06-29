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
                    
                    <table class="w-full text-sm text-center  overflow-hidden rounded-md ">
                        <thead class="text-xs  text-gray-500 font-semibold bg-gray-100 uppercase">
                            <tr class=" ">
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
                                
                         
                            <tr class="bg-whit   border-b dark:bg-white dark:border-gray-400">
                                <th scope="row" class="px-6 py-4 text-center font-medium text-black whitespace-nowrap ">
                                    <div class="w-10 h-10 p-1.5 mx-14 flex flex-col justify-center object-cover object-center rounded-full shadow mr-3">
                                        @if ($staff->photo)
                                        <img src="{{asset('/storage/staff/'.$staff->photo)}}" alt="{{$staff->firstname}}" class="w-full h-full rounded-full">
                                        @else
                                        <img src="{{asset('/storage/img/profile.svg')}}" alt="{{$staff->firstname}}" class="w-full h-full rounded-full">
                                        @endif
                                       <div class="flex justify-center">
                                        <p class="capitalize text-cyan-950">{{$staff->name}} </p>
                                       </div>
                                        <div class="flex justify-center" >
                                            <p class="">{{$staff->email}}</p>
                                        </div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                <span class="bg-green-200 text-green-500 px-1 rounded-sm"> {{$staff->role}}</span>
                                </td>
                                <td class="px-6 py-4">
                                   
                                   @if ($staff->email_verified_at)
                                   <span class="bg-green-200 text-green-500 px-1 rounded-sm"> Verified</span>

                                    @else 
                                    <a href="#" class="bg-red-500 text-white px-1.5 rounded-sm">Not Verified</a>
                                   @endif
                                  

                                </td>
                                <td>
                                    <div class="flex  items-center justify-center mt-5">
                                        
                                        <!-- edit -->
                                         
                                        <form action="{{route("admin.update_staffRole",$staff->id)}}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <select name="role" onchange="this.form.submit()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-1.5 dark:bg-white dark:border-gray-600 ">
                                                <option value="">Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="patient">Patient</option>
                                                <option value="doctor">Doctor</option>
                                            </select>
                                        </form>
                                        {{-- edit --}}
                                        <a href="{{route("admin.edit_staff",$staff->id)}}"  data-tooltip-target="tooltip-edit"   class="text-white  px-5 py-2 text-center mb-2" type="button">
                                            <i class="fas fa-edit text-blue-700 text-xl"></i>
                                        </a> 
                                        <!-- trash -->
                                        <a href="#" data-tooltip-target="tooltip-delete"  data-modal-target="deleteStaff" data-modal-toggle="deleteStaff" class="text-white  px-5 py-2 text-center mr-2 mb-2" type="button">
                                            <i class="fas fa-trash text-red-700 text-xl"></i>
                                        </a>     
        
                                       
                                        <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                             edit staff
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                        <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                             delete visit
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                   </div> 
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
<!-- Delete service -->
<div id="deleteStaff" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t  border-gray-200">
                <h3 class="text-xl  font-bold text-red-700 ">
                    Are You Sure ?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteStaff">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form  method="POST" class="text-white mx-2  px-5 py-2 text-center mb-2"  action="{{route("admin.delete_staff",$staff->id)}}"  >
                    @csrf
                    @method("DELETE")
                   
                <!-- Modal footer -->
                <div class="flex justify-start   rounded-b dark:border-gray-600">
                    <button  type="submit" class="text-white bg-red-700 mx-2 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                    <button data-modal-hide="deleteStaff" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  

</body>
</html>