
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holidays</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

     <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
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
    @vite(['resources/js/app.js','resources/js/ckeditor.js']);

</head>
<body class="bg-gray-100">
      
    @extends('dashboard.doctor.doctor_dashboard')
    @section('content')
    <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
        <div class=" container m-5">

                <div class="flex justify-between sm\:flex-row ">

                    {{-- search --}}
                        <x-search route="doctor.search_holidays"></x-search>
                    {{-- search --}}
                    <div class=" flex justify-between mx-10 " >
                        
                    <!-- filter date -->
                        <button
                        data-dropdown-toggle="dropdown" class="text-white bg-gradient-to-br w-40  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button"
                        >Filter
                        <i class="fas fa-light fa-filter ml-2"></i>
                        </button>
                        
                        <div id="dropdown" class="z-10 hidden   bg-white divide-y divide-gray-100 rounded-lg shadow w-44 p-5 m-5 " aria-labelledby="dropdownDefaultButton">
                            <form action="{{ route('doctor.filter_holidays') }}" method="get">
                                @csrf

                                <select name="filter" onchange="this.form.submit()" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option disabled selected>
                                        <i class="fas fa-light fa-filter"></i>
                                        Filter Date
                                    </option>
                                    <option value="">all</option>
                                    @foreach($holidays as $holiday)
                                        <option value="{{ $holiday->date }}">{{ $holiday->date}}</option>
                                    @endforeach
                                </select>     
                            </form>                    

                        </div> 
                        <!-- add holiday -->
                        <button data-modal-target="addHoliday" data-modal-toggle="addHoliday" class="text-white bg-gradient-to-br w-40  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                            Add Holiday
                        </button>
                    </div>
                </div>
        </div>

    </div>
    <div class="grid grid-cols-1 ">
        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">

            <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                        <th scope="col" class="px-6 py-3">
                             REASON
                        </th>
                       
                       
                        <th scope="col" class="px-6 py-3">
                           DATE
                        </th>
                       
                        
                        <th scope="col" class="px-6 py-3">
                            ACTION 
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($holidays as $holiday)
                        <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        
                            <td>
                                <span>{{$holiday->reason}}</span>
                            </td>
                            <td>
                                <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                                    {{$holiday->created_at}}
                                </span>
                            </td>
                        
                        
                            <td>
                                <div class="flex justify-center mt-5">
                                
                                
                                    <!-- trash -->
                                    <a href="#" data-tooltip-target="tooltip-delete"  data-modal-target="deleteHoliday" data-modal-toggle="deleteHoliday" class="text-white  w-25  ont-medium rounded-lg text-sm px-5 py-2 text-center mr-2 mb-2" type="button">
                                        <i class="fas fa-trash text-xl text-red-700"></i>
                                    </a>     

                                
                                    <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        delete holiday
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
                    {{$holidays->links()}}
                <!-- navigation -->
            </div>
        </div>
    <div>


    <!-- Add Holiday -->
    <div id="addHoliday" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full m-6 ">
            <!-- Modal content -->
            <div class="relative bg-white  rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addHoliday">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Add Holiday</h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

                <!-- modal body -->
                <form method="POST"  enctype="multipart/form-data" action="{{route("doctor.store_holidays")}}">
                    @csrf
                    @method("POST")
                    <div class="grid grid-col-2  gap-2 ">
                        
                        <!--  Date  -->
                        <div class="w-full mb-6  group mx-auto">
                            <label for="" class="font-medium "> Date:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                            <input type="date" name="date" id="visit_date" class="block mt-1 p-2.5 mr-2  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="***** " required />
                            <label for="reason" class="font-medium ">reason:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                            <textarea name="reason" id="editor" cols="10" rows="10" class="block mt-1 p-2.5 mr-2  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"></textarea>

                        </div>
                       
                      
                    </div>   
                    <!-- modal footer -->
                    <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                        <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                        <button data-modal-hide="addHoliday" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>     
                </form>
                
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Holiday -->
    <div id="deleteHoliday" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-100">
                    <h3 class="text-xl  font-bold text-red-700 ">
                        Are You Sure ?
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteHoliday">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    
                    <form method="POST"  action="{{route('doctor.delete_holidays',$holiday->id)}}">
                        @csrf
                        @method("DELETE")
                        <!-- modal footer -->
                        <div class="flex  justify-start  mb-2 rounded-b dark:border-gray-600">
                            <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                            <button data-modal-hide="deletVisit" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


</body>
</html>

