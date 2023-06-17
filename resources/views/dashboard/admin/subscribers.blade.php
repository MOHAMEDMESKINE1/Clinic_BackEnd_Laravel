<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="../node_modules/flowbite/dist/flowbite.min.css">
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
       
    <!-- Search -->
    <div class=" container  ">
      <div class="m-5">
        <div class="flex justify-between sm\:flex-row  ">
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
        <div class="grid grid-col-1 mt-5">
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-300 uppercase bg-gray-50 dark:bg-gray-300 dark:text-gray-900">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email 
                            </th>
                        
                            <th scope="col" class="px-6 py-3">
                                <div class="flex justify-center"> 
                                    <span>Action</span>
                                </div>
                            </th>
                            
                        
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscribers as $subscriber)
                            
                      
                        <tr class="bg-white border-b  hover:bg-gray-100 dark:hover:bg-gray-200">
                        
                        
                        
                            <td class="px-6 py-4">
                                {{$subscriber->subscriber}}
                            </td>
                            <td class="px-6 py-4 ">
                            <div class="flex justify-center">
                                <form action="{{route("admin.delete_subscribers",$subscriber->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button   type="submit" onclick="confirm('are u sure ?')" >
                                    
                                        <i class="fas fa-trash text-red-600 text-xl"></i>
                                    </button>
                                </form>
                                
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- show result -->
            <div class="mt-5 mx-4">
                {{ $subscribers->links() }}
            </div>
        </div>
      </div>
    </div>
    @endsection
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>