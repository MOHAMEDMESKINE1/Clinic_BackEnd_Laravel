<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">

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
    @extends('dashboard.doctor.doctor_dashboard')

    @section('content')
    <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
        <div class="flex flex-col sm:flex-row justify-between ">
            <div class="flex justify-start my-5">
             
            
            <!-- Search -->
                <x-search route="doctor.search_transactions"></x-search>
            <!-- Search -->
           
            </div>
         
         </div>             
    </div>
    <div class="grid grid-cols-1 md:grid-col-2 ">
        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">

            <table id="" class="w-full text-sm mt-5  text-center text-gray-700  overflow-hidden rounded-md ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                       
                        <th scope="col" class="px-6 py-3">
                         PATIENT
                        </th>
                        <th scope="col" class="px-6 py-3">
                          DATE
                        </th>
                        <th scope="col" class="px-6 py-3">
                          PAYEMENT 
                        </th>
                        <th scope="col" class="px-6 py-3">
                          AMOUNT
                        </th>
                       
                        <th scope="col" class="px-6 py-3">
                            ACTION 
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        <td>
                            <div class="flex items-center mx-2">
                                <a href="#">
                                    <div class="w-10 h-10 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                        @if ($transaction->patients->photo)
                                        <img src="{{asset('/storage/patients/'.$transaction->patients->photo)}}" alt="{{$transaction->patients->firstname}}" class="w-full h-full rounded-full">
                                        @else
                                        <img src="{{asset('/storage/img/profile.svg')}}" alt="{{$transaction->patients->firstname}}" class="w-full h-full rounded-full">
                                        @endif
                                    </div>
                                </a>
                                <div class="flex flex-col p-2.5">
                                    <a class="mb-1 text-green-700  font-medium "
                                    href="{{route("doctor.transactions_details",$transaction->patients->id)}}" 
                                    >
                                        {{$transaction->patients->firstname}}  
                                        {{$transaction->patients->lastname}} 
                                    </a>
                                    <span class="text-base font-medium text-gray-600"> {{$transaction->patients->email}} </span>
                                </div>
                            </div>
                        </td>
                       
                        <td>
                            <span class="bg-indigo-500 text-white p-1  rounded">
                                {{$transaction->created_at}}  
                            </span>
                        </td>
                        <td>
                            @if ($transaction->payment === "paid")
                            <span class="bg-green-500 text-white rounded-md p-1">
                                {{$transaction->payment}}
                            </span>
                            @else
                             <span class="bg-red-500 text-white rounded-md p-1">
                                {{$transaction->payment}}
                            </span>
                            @endif
                        </td>
                        <td>
                            <span>{{$transaction->charge}} $</span>
                        </td>
                       
                        <td>
                            <div class="flex justify-center mt-5">
                                                              
                                <a href="{{route('doctor.transactions_details',$transaction->id)}}"  data-tooltip-target="tooltip-view"  data-modal-target="editDoctor" data-modal-toggle="editDoctor" class="text-white mx-2  w-25 font-medium rounded-lg text-sm px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-eye text-xl text-green-700"></i>
                                </a>                                
                               
                                <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                     view 
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div> 
                               
                           </div> 
                        </td>
                    </tr>
                  
                    @endforeach
                </tbody>
                
            </table>
            <!-- show result -->
            <div class="mt-5 mx-4">
                {{ $transactions->links() }}
            </div>
            <!-- navigation -->
        </div>
    <div>
   @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>