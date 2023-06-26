
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Appointements</title>
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
    <!-- sweetalert -->
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
    <!-- sweetalert -->
<style>
   body{
     font-family: 'Poppins', sans-serif;
   }
</style>
    </head>
    <body class="bg-gray-100">
        @extends('dashboard.patient.patient_dashboard')
        
        @section('content')
    
            <div class=" container m-5">
                <div class="">
                    <div class="flex justify-between sm\:flex-row ">
                    <div>
                        {{-- search --}}
                        <x-search route="patient.search_appointements"></x-search>
                    </div>              
                    <div class=" flex justify-between mx-8  " >
                        
                        
                      
                        
                        <button data-modal-target="addAppointement" data-modal-toggle="addAppointement" class="text-white bg-gradient-to-br   from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                            Add Appointemet
                        </button>
                            

                    </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 ">
                <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">
                    
                    <div class="flex justify-between mb-2">
                       
                        <form action="{{ route('patient.filter_appointements') }}" method="GET" class="flex mb-5 items-center">
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

                         {{-- export excel --}}
                         <x-export-excel route="patient.export_appointments"></x-export-excel>
                         {{-- export excel --}}
                    </div>
                    <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                        <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                            <tr class=" ">
                                <th scope="col" class="px-6 py-3">
                                    DOCTOR
                                </th>
                            
                                <th scope="col" class="px-6 py-3">
                                APPOINTEMENT AT
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    SERVICE CHARGE
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
                            @foreach ($appointements as $appointement)
                                
                            
                            <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                                <td>
                                    <div class="flex justify-center">
                                        @if ($appointement->doctors->photo)
                                            <img src="{{asset("storage/doctors/".$appointement->doctors->photo)}}" alt="photo" class="w-7 h-7 rounded-full border border-gray-100 "><br>

                                        @else
                                            <img src="imgs/hospital.png" alt="photo" class="w-7 h-7 rounded-full border border-gray-100 "><br>

                                        @endif
                                        <p class="mx-3">{{$appointement->doctors->firstname}} {{$appointement->doctors->lastname}}  </p>
                                    </div>
                                        <div class="flex justify-center" >
                                            <p class="mx-15">{{$appointement->doctors->email}} </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="bg-indigo-500 text-white rounded-md p-1">
                                        {{$appointement->created_at}} 
                                    </span>
                                </td>
                                <td>
                                    <span>{{$appointement->charge}} </span>
                                </td>
                            
                                <td>
                                    <span class="bg-red-500 p-0.5 text-white rounded-md">
                                        {{$appointement->payment}}
                                    </span>
                                    <i class="fas fa-regular fa-credit-card ml-2"></i>

                                </td>
                                <td>
                                <span>{{$appointement->status}}</span>   
                                </td>
                                <td>
                                    <div class="flex justify-center mt-5">
                                        @if ($appointement->status !== "cancelled")
                                             <!-- view -->
                                            <form method="POST" action="{{route("patient.cancelAppointement",$appointement->id)}}" >
                                                @csrf
                                                @method("PUT")
                                                <button type="submit"  data-tooltip-target="tooltip-cancel"   class="text-white  w-25 text-sm  mx-2 text-center mb-2" type="button">
                                                    <i class="fas fa-solid fa-calendar-xmark text-xl p-1 text-orange-700"></i>
                                                </button> 
                                            </form>
                                        @endif

                                        <!-- view -->
                                        <a href="{{route('patient.appointement_details',$appointement->id)}}"  data-tooltip-target="tooltip-view"   class="text-white  w-25 text-sm  mx-2 text-center mb-2" type="button">
                                            <i class="fas fa-eye text-green-700 text-xl p-1"></i>
                                        </a> 
                                        <!-- delete -->
                                        <a href="#"  data-tooltip-target="tooltip-delete" data-modal-target="deleteAppointement" data-modal-toggle="deleteAppointement"   class="text-white  w-25 text-sm  mx-2 text-center mb-2" type="button">
                                            <i class="fas fa-trash text-red-700 text-xl p-1"></i>
                                        </a> 

                                        <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            view appointement
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                        <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            delete appointement
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                        <div id="tooltip-cancel" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            cancel appointement
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div> 
                                        
                                </div> 
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                  <!-- navigation -->
                  <div class="mt-5 mx-4">
                    {{ $appointements->links() }}
                </div>
                <!-- navigation -->
                </div>
            <div>
        
         @endsection
      

 <!-- Add Appointement -->
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
                <form method="post"  enctype="multipart/form-data" action="{{route("patient.store_appointements")}}">
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
   <!-- Delete Appointement -->
   <div id="deleteAppointement" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t  border-gray-200">
                <h3 class="text-xl  font-bold text-red-700 ">
                    Are You Sure ?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteService">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form  action="{{route("patient.delete_appointements",$appointement->id)}}" method="POST"
                    class="text-white mx-2  px-5 py-2 text-center mb-2"  >
                   @csrf
                   @method("DELETE")
                  
               <!-- Modal footer -->
               <div class="flex justify-start   rounded-b dark:border-gray-600">
                   <button  type="submit" class="text-white bg-red-700 mx-2 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                   <button data-modal-hide="deleteAppointement" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
               </div>
           </form>
            </div>
        </div>
    </div>
</div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    
    
    </body>
    </html>

