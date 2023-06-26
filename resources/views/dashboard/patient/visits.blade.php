
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visits</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

     <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
      <!-- editor text -->
      <script src="../editortext/ckeditor.js"></script>
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
    @extends('dashboard.patient.patient_dashboard')

    @section('content')
    <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
        <div class=" container ">
            <div class="flex justify-start my-5 ">
             
                {{-- search --}}
                <x-search route="patient.search_visits"></x-search>
                
                
            </div>
        </div>

    </div>
    <div class="grid grid-cols-1 ">
        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">
               
            {{-- export excel --}}
                <x-export-excel route="patient.export_visits"></x-export-excel>
            {{-- export excel --}}
                
               
            <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                        <th scope="col" class="px-6 py-3">
                             DOCTOR
                        </th>
                       
                       
                        <th scope="col" class="px-6 py-3">
                          VISIT DATE
                        </th>
                       
                        
                        <th scope="col" class="px-6 py-3">
                            ACTION 
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visits as $visit)
                        
                    
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        <td>
                            <div class="flex justify-center">
                                @if ($visit->doctors->photo)
                                    <div class="w-11 h-11 flex-shrink-0 object-cover  object-center rounded-full shadow mr-3">
                                        <img src="{{asset('storage/doctors/'.$visit->doctors->photo)}}" alt="photo" class="w-full h-full rounded-full "><br>
                                    </div>
                                    @else
                                    <div class="w-11 h-11 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                        <img src="{{asset('storage/img/profile.svg')}}" alt="photo" class="w-full h-full rounded-full "><br>
                                    </div>

                                    @endif
                                   
                                    <div class="flex flex-col">
                                        <span class="text-green-700" >
                                            {{$visit->doctors->firstname}} {{$visit->doctors->lastname}}
                                        </span>
                                        <span class="text-base font-medium text-gray-600"> {{$visit->doctors->email}} </span>

                                    </div>
                                   </div>
                            </div>
                        </td>
                        
                        <td>
                            <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                                {{$visit->date}}
                            </span>
                        </td>
                      
                       
                        <td>
                            <div class="flex justify-center mt-5">
                                <!-- view -->
                                <a href="{{route('patient.visits_details',$visit->id)}}"  data-tooltip-target="tooltip-view"  class="text-white   px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-eye text-xl text-green-700"></i>
                                </a> 
                               
                                <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                     view visit
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div> 
                               
                           </div> 
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
           <div class="mt-4 mx-5">
           
            <!-- navigation -->
                {{$visits->links()}}
            <!-- navigation -->
           </div>
        </div>
    <div>
    @endsection




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


</body>
</html>

