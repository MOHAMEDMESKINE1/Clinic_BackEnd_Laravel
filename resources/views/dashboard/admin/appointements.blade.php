
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appointements</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
        <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">

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
       
        @extends('dashboard.admin.admin_dashboard')

        @section('content')
                
        <div class="grid grid-col-1 md:grid-col-2">
            <!-- Search -->
            <div class=" container m-5">
                <div class="">
                    <div class="flex justify-between sm\:flex-row ">
                   
                    <div class="flex justify-start">
                        <form method="GET" action="{{ route('admin.search_appointements') }}" class="flex items-center mb-4 sm:mb-0">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" name="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" >
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Search</button>
                            </div>
                        </form>
                        
                       </div>
                    <div class=" flex justify-between  mx-8" >
                         <!-- filter  -->
                         {{-- <button
                         data-dropdown-toggle="dropdown" class="text-white bg-gradient-to-br   from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button"
                         >Filter
                         <i class="fas fa-light fa-filter ml-2"></i>
                         </button> --}}
                         
                         {{-- <div id="dropdown" class="z-10 hidden   bg-white divide-y divide-gray-100 rounded-lg shadow w-44 p-5 m-5 " aria-labelledby="dropdownDefaultButton">
                             
                             <!-- date -->
                             <label for="" class=" font-medium">Date :</label>
     
                             <input type="date" name="date" id="date" class="block mb-3 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Last Name " required />
 
                             <!-- pending -->
                             <label for="" class=" font-medium">Paiment :</label>
                             <select id="payment" name="payment" class="block mt-5 p-2.5 mb-3  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                 <option selected disabled>Select a payment</option>
                                 <option value="paid">Paid</option>
                                 <option value="pending">Pending</option>
                               
                                 
                             </select>  
 
                             <!-- status -->
                             <label for="" class=" font-medium">Status :</label>
                             <select id="status" name="status" class="block mt-5 ml-2 p-2.5 mb-3  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                 <option value="booked">booked</option>
                                 <option value="checkin">Check In</option>
                                 <option value="checkout">Check Out</option>
                                 <option value="cancelled">Cancelled</option>
                                 
                             </select>      
 
                         </div>  --}}
                        
                        <button data-modal-target="addAppointement" data-modal-toggle="addAppointement" class="text-white bg-gradient-to-br  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                            Add Appointemet
                        </button>
                            
    
                    </div>
                    </div>
                </div>
            </div>
    
        </div>
        <div class="grid grid-cols-1 ">
            <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">
                <form action="{{ route('admin.filter_appointements') }}" method="GET" class="flex mb-5 items-center">
                    <select id="order-filter" name="filter" class="text-white      mx-5  bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">
                        <option disabled selected>
                            <i class="fas fa-light fa-filter"></i>
                            Filter Status
                        </option>
                        <option >all</option>
                        <option value="booked">booked</option>
                        <option value="checkin">Check In</option>
                        <option value="checkout">Check Out</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
        
                    <button type="submit"  class="text-white    bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">
                        Filter
                    </button>
                </form>
                <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                    <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                        <tr class=" ">
                            <th scope="col" class="px-6 py-3">
                                 DOCTOR
                            </th>
                           
                            <th scope="col" class="px-6 py-3">
                                PATIENT
                            </th>
                            <th scope="col" class="px-6 py-3">
                              APPOINTEMENT AT
                            </th>
                            <th scope="col" class="px-6 py-3">
                              PAYMENT
                            </th>
                            <th scope="col" class="px-6 py-3">
                              STATUS
                            </th>
                           
                            <th scope="col" class="px-6 py-3">
                                ACTION 
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            
                     
                        <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                            <td>
                                <div class="flex flex-col  p-2.5">
                                    @if ($appointment->doctors->photo)
                                    <div class="w-11 h-11 flex-shrink-0 object-cover  object-center rounded-full shadow mr-3">
                                        <img src="{{asset('storage/doctors/'.$appointment->doctors->photo)}}" alt="photo" class="w-full h-full rounded-full "><br>
                                    </div>
                                    @else
                                    <div class="w-11 h-11 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                        <img src="{{asset('storage/img/profile.svg')}}" alt="photo" class="w-full h-full rounded-full "><br>
                                    </div>

                                    @endif
                                   
                                        <a class="text-green-700" href="{{route('admin.doctor_details',$appointment->doctors->id)}}">
                                            {{$appointment->doctors->firstname}} {{$appointment->doctors->lastname}}
                                        </a>
                                        <span class="text-base font-medium text-gray-600"> {{$appointment->doctors->email}} </span>

                                   </div>
                                   
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-col p-2.5">

                                    @if ($appointment->patients->photo)
                                    <div class="w-11 h-11 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                        <img src="{{asset('storage/patients/'.$appointment->patients->photo)}}" alt="photo" class="w-full h-full rounded-full"><br>

                                    </div>
                                    @else
                                    <div class="w-11 h-11 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                        <img src="{{asset('storage/img/profile.svg')}}" alt="photo" class="w-full h-full rounded-full "><br>

                                    </div>
                                    @endif
                                    <p class="mx-3">
                                       <a class="text-green-700" href="{{route('admin.patients_details',$appointment->patients->id)}}">
                                        {{$appointment->patients->firstname}} {{$appointment->patients->lastname}}
                                       </a>
                                       <span class="text-base font-medium text-gray-600"> {{$appointment->patients->email}} </span>

                                    </p>
                                   </div>
                                    
                                </div>
                            </td>
                            <td>
                                <span class="bg-indigo-500 text-white rounded-md p-1">
                                    {{$appointment->created_at}}
                                </span>
                            </td>
                           
                            <td>
                                {{-- <select id="payment" name="payment" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    
                                </select>      --}}
                                @if ($appointment->payment === "paid")
                                <span class="bg-green-500 text-white rounded-md p-1">
                                    {{$appointment->payment}}
                                </span>
                                @else
                                 <span class="bg-red-500 text-white rounded-md p-1">
                                    {{$appointment->payment}}
                                </span>
                                @endif
                            </td>
                            <td>
                                {{-- <select id="status" name="status" class="block mt-1 ml-2 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option value="booked">booked</option>
                                    <option value="checkin">Check In</option>
                                    <option value="checkout">Check Out</option>
                                    <option value="cancelled">Cancelled</option>
                                    
                                </select>              --}}
                                @if ($appointment->status)
                                <span class="bg-gray-500 text-white rounded-md p-1">
                                    {{$appointment->status}}
                                </span>
                                @else
                                <span>
                                    <i class="fas fa-solid fa-cancel font-bold text-xl text-red-500"></i>

                                </span>
                                    
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-center mt-5">
                                              
                                    {{-- 
                                    {{route('admin.appointement_details')}}    
                                    --}}
                                    <a href="{{route('admin.appointements_details',$appointment->id)}} "  data-tooltip-target="tooltip-view"  class="text-white  text-sm px-5 py-2 text-center mb-2" type="button">
                                        <i class="fas fa-eye text-green-700 text-xl"></i>
                                    </a> 
                                    <a href="#"  data-tooltip-target="tooltip-delete"   data-modal-target="deleteDoctor" data-modal-toggle="deleteDoctor" class="text-white   text-sm px-5 py-2 text-center mb-2" type="button">
                                        <i class="fas fa-trash text-red-700 text-xl"></i>
                                    </a>    
                                    <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                         view
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div> 
                                    <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                         edit 
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div> 
                                    <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                         delete
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div> 
                               </div> 
                            </td>
                        </tr>
                     
                       
                    </tbody>
                    @endforeach
                </table>
                <div class="mt-5 mx-4">
                    {{ $appointments->links() }}
                </div>
            </div>
           
          
        <div>

        <!-- Add Appoointement -->
        <div id="addAppointement" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full m-6 ">
                <!-- Modal content -->
                <div class="relative bg-white  rounded-lg shadow ">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addAppointement">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-2 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Add Appointement</h3>
                        <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>
    
                    <!-- modal body -->
                    <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                        <form method="post"  enctype="multipart/form-data" action="{{route("admin.store_appointements")}}">
                            @csrf
                            @method("POST")
                            <div class="grid grid-col-1 md:grid-cols-2 gap-2">
                                    <!-- doctor -->
                                    <div class=" w-full mb-6 group">
                                        <label for="" class="font-medium ">Doctor:<span class="text-red-500 font-medium">*</span></label>
                                        <select  id="order-filter" name="doctor" class="bg-white border w-full border-gray-100 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5  dark:border-gray-200 dark:placeholder-gray-400 ">
                                            <option disabled selected value="">Select a Doctor</option>
                                            @foreach ($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{$doctor->firstname }}  {{$doctor->lastname}} </option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <!-- date -->
                                    <div class="w-full mb-6 group">
                                        <label for="date" class="font-medium "> Date:<span class="text-red-500 font-medium">*</span></label>
                                        <input type="date" name="date" id="date" class="block  p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                                    </div>
                                  
                                    <!-- services -->
                                    <div class="w-full mb-6  group ">
                                        <label for="services" class="font-medium ">Services:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <select  id="order-filter" name="services" class="bg-white border w-full  border-gray-100 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5  dark:border-gray-200 dark:placeholder-gray-400 ">
                                            <option disabled selected value="">Select a Service</option>
                                            @foreach ($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}} </option>
                                            @endforeach                                         
    
                                        </select>                                
                                    </div>
                                    <!-- Patient -->
                                    <div class="w-full mb-6  group ">
                                        <label for="patient" class="font-medium ">Patient:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <select  id="order-filter" name="patient" class="bg-white border w-full  border-gray-100 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5  dark:border-gray-200 dark:placeholder-gray-400 ">
                                            <option disabled selected value="">Select a Patient</option>
                                            @foreach ($patients as $patient)
                                            <option value="{{$patient->id}}">{{$patient->firstname}}  {{$patient->lastname}} </option>
                                            @endforeach
    
                                        </select>                                    
                                    </div>
                                    <!-- paiment -->
                                    <div class="w-full mb-6 group">
                                        <label for="paiment" class="font-medium ">Payment:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                            <select  id="order-filter" name="payment" class="bg-white border w-full  border-gray-100 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5  dark:border-gray-200 dark:placeholder-gray-400 ">
                                                <option value="" selected disabled>Please Select a Method</option>
                                                <option value="paid">Paid</option>
                                                <option value="panding">Panding</option>
                                                
                                             
            
                                            </select>      
                                    </div>       
                                  <div class="w-full mb-6 group">
                                    <label for="" class=" font-medium">Status :</label>
                                    <select id="status" name="status" class="block  p-2.5 w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                        <option value="booked">booked</option>
                                        <option value="checkin">Check In</option>
                                        <option value="checkout">Check Out</option>
                                        <option value="cancelled">Cancelled</option>
                                        
                                    </select>      
                                  </div>
                                    <!-- charge -->
                                    <div class="w-full mb-6 group">
                                        <!-- <label for="charge" class="font-medium ">Paiment:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <input type="text" name="charge" id="charge" class="block  p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="" required /> -->
    
                                        <label for="charge" class="block mb-2 text-sm font-medium ">Charge: <span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <div class="flex">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded dark:border-gray-200">
                                           $
                                        </span>
                                        <input type="number" name="charge" id="charge" class="block p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0$">
                                        </div>
                                    </div>       
                                
                                    <!-- fees -->
                                    <div class="w-full mb-6 group">
                                        <!-- <label for="charge" class="font-medium ">Paiment:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <input type="text" name="charge" id="charge" class="block  p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="" required /> -->
    
                                        <label for="fees" class="block mb-2 text-sm font-medium ">Extra Fees: <span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <div class="flex">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded dark:border-gray-200">
                                           $
                                        </span>
                                        <input type="number" name="extra_fees" id="fees" class="block p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0$">
                                        </div>
                                    </div>       
                                    <!-- Total Paiemnt -->
                                    <div class="w-full mb-6 group">
                                        <!-- <label for="charge" class="font-medium ">Paiment:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <input type="text" name="charge" id="charge" class="block  p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="" required /> -->
    
                                        <label for="total_payment" class="block mb-2 text-sm font-medium ">Total Payemnt: <span class="text-red-500 font-medium mb-1">*</span><br></label>
                                        <div class="flex">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded dark:border-gray-200">
                                           $
                                        </span>
                                        <input type="number" name="total_payment" id="total_payment" class="block p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0$">
                                        </div>
                                    </div>       
                                    
                            </div>
                            <!-- modal footer -->
                            <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                                <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                                <button data-modal-hide="addAppointement" type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            </div>        
                        </form>
                                
                       
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Delete appointement -->
        <div id="deleteDoctor" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-100">
                    <h3 class="text-xl  font-bold text-red-700 ">
                        Are You Sure ?
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteDoctor">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    
                    <form method="POST"   action="{{route("admin.delete_appointements",$appointment->id)}}"  class="text-white mx-2  px-5 py-2 text-center mb-2"  >
                        @csrf
                        @method("DELETE")
                       
                    <!-- Modal footer -->
                    <div class="flex justify-start   rounded-b dark:border-gray-600">
                        <button  type="submit" class="text-white bg-red-700 mx-2 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                        <button data-modal-hide="deleteDoctor" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
        @endsection

      
    
    
        <!-- select year -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    
    
    </body>
    </html>

