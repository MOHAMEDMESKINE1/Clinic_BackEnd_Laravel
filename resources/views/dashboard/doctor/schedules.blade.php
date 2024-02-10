<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>

       <!--  poppins font -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">
       <script src="https://cdn.tailwindcss.com"></script>

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
    <div class="container  ">

      <h1 class="text-2xl mb-2 mx-5 mt-5  ">
         My Schedule
      </h1>
      <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
        <div class=" container ">
            <div class="">
                <div class="flex justify-between sm\:flex-row ">
                
                    {{-- search --}}
                        <x-search route="doctor.search_schedules" ></x-search>
                    {{-- search --}}
                <div class=" flex justify-between  " >
                  
                    
                    <button data-modal-target="addSchedule" data-modal-toggle="addSchedule" class="text-white bg-gradient-to-br w-40  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                        Add Schedule
                    </button>
                        

                </div>
                </div>
            </div>
        </div>

    </div>
    <div  class="grid grid-cols-1 m-5">
        <table class=" table w-full text-sm   text-center overflow-hidden rounded-md ">
            <thead class="text-xs text-cyan-500  bg-cyan-100 uppercase">
                <tr class=" ">
                    <th scope="col" class="px-6 py-3">
                            DOCTOR
                    </th>
                    
                    <th scope="col" class="px-6 py-3">
                        DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        START TIME 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        END TIME 
                    </th>
                    
                    
                    <th scope="col" class="px-6 py-3">
                        ACTION 
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    
            
                <tr class="bg-white  border-b  font-medium ">
                    <td >
                        
                            <div class="mx-5 my-2">
                                @if ($schedule->doctors->photo)
                                <div class="w-11 h-11 flex-shrink-0 object-cover  object-center rounded-full shadow mr-3">
                                    <img src="{{asset('storage/doctors/'.$schedule->doctors->photo)}}" alt="photo" class="w-full h-full rounded-full "><br>
                                </div>
                                @else
                                <div class="w-11 h-11 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                    <img src="{{asset('storage/img/profile.svg')}}" alt="photo" class="w-full h-full rounded-full  "><br>
                                </div>
    
                                @endif
                                <span>{{$schedule->doctors->firstname}} {{$schedule->doctors->lastname}}</span>
    
                            </div>
                        </td>
                    <td>
                            <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                                {{$schedule->date}}
                            </span>
                    </td>
                    <td>
                        <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                            {{$schedule->start_time}}
                        </span>
                    </td>
                    <td>
                        <span class="bg-indigo-500 text-white  rounded-sm p-0.5">
                            {{$schedule->end_time}}
                        </span>
                    </td>
                    
                    
                    <td>
                        <div class="flex justify-center mt-5">
                            
                            <!-- edit -->
                            <a href="{{route("doctor.edit_schedules",$schedule->id)}}"  data-tooltip-target="tooltip-edit"   class="text-white mx-2 w-25  text-center mb-2" type="button">
                                <i class="fas fa-edit text-blue-500 text-xl"></i>
                            </a>    
                            <!-- trash -->
                            <a href="#" data-tooltip-target="tooltip-delete"  data-modal-target="deleteSchedule" data-modal-toggle="deleteSchedule" class="text-white mx-2 w-25  text-center " type="button">
                                <i class="fas fa-trash text-red-700 text-xl"></i>
                            </a>     

                            
                            <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    edit schedule
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div> 
                            <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    delete schedule
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
                {{$schedules->links()}}
            <!-- navigation -->
            </div>
        </div>
    </div>
      
     

    </div>

    <div id="addSchedule" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full m-6 ">
            <!-- Modal content -->
            <div class="relative bg-white  rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addSchedule">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Add Visit</h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

                <!-- modal body -->
                <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                    <form  method="POST" action="{{route('doctor.store_schedules')}}" >
                        @csrf
                        @method("POST")
                        <div class="grid grid-col-1 md:grid-cols-2 gap-3 bg-white rounded-lg p-5 m-5 ">
                        
                            <!-- doctor -->
                            <div class="w-full  group mb-6">
                                <label for="doctor" class="font-medium ">Doctor:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                <select id="doctor" required name="doctor"  class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option selected disabled>Select a Doctor</option>
                                   
                                    @foreach ($doctors as $doctor)
                                        <option value="{{$doctor->id}}">{{$doctor->firstname}} {{$doctor->lastname}}</option>
                                    @endforeach
                                
                                
                                </select>                                
                            </div>
                            <!-- date -->
                            <div class="w-full  group mb-6">
                                <label for="date" class="font-medium ">Date:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                <input type="date" id="date" required name="date" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"/>
                            </div>
                            <!-- start time -->
                            <div class="w-full  group mb-6">
                            <label for="start_time" class="font-medium ">Start Time:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                            
                            
                            <select id="start_time" required name="start_time" class="block mt-1 p-2.5 w-full text-sm text-gray-900 bg-transparent border border-gray-300 rounded-md appearance-none dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                <option selected disabled>Select a start Time</option>
                                <?php
                                $start_time = strtotime('8:00 AM');
                                $end_time = strtotime('6:00 PM');
                                $interval = 15 * 60; // 15 minutes interval
                            
                                for ($time = $start_time; $time <= $end_time; $time += $interval) {
                                    $formatted_time = date('g:i A', $time);
                                    echo '<option value="' . $formatted_time . '">' . $formatted_time . '</option>';
                                }
                                ?>
                            </select>
                            </div>
                            <!-- end time -->
                            <div class="w-full  group mb-6">
                                <label for="end_time" class="font-medium ">End Time:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                                            
                                <select id="end_time" required name="end_time" class="block mt-1 p-2.5 w-full text-sm text-gray-900 bg-transparent border border-gray-300 rounded-md appearance-none dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option selected disabled>Select an end Time</option>
                                    <?php
                                    $start_time = strtotime('8:00 AM');
                                    $end_time = strtotime('6:00 PM');
                                    $interval = 15 * 60; // 15 minutes interval
                                
                                    for ($time = $start_time; $time <= $end_time; $time += $interval) {
                                        $formatted_time = date('g:i A', $time);
                                        echo '<option value="' . $formatted_time . '">' . $formatted_time . '</option>';
                                    }
                                    ?>
                                </select>
                                
                            </div>

                            <div  class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                                <button type="submit" class="text-white  w-min  mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                                <button data-modal-hide="addSchedule" type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            </div>
            
                        </div>
                    </form>
                    
                
                            
                   
                </div>
              
                </div>
            </div>
        </div>
    </div>
<!-- Delete visit -->
<div id="deleteSchedule" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t  dark:border-gray-100">
                <h3 class="text-xl  font-bold text-red-700 ">
                    Are You Sure ?
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deleteSchedule">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                
                <form method="POST"  action="{{route('doctor.delete_schedules',$schedule->id)}}">
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>