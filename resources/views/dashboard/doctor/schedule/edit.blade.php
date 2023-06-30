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
<body>
    
    @extends('dashboard.doctor.doctor_dashboard')
    @section('content')
    <div class="container ">

      <h1 class="text-2xl mb-2 mx-5 mt-5  ">
         My Schedule
      </h1>
        <form  method="POST" action="{{route('doctor.update_schedules',$schedule->id)}}" >
            @csrf
            @method("PUT")
            <div class="grid grid-col-1 md:grid-cols-2 gap-3 bg-white rounded-lg p-5 m-5 ">
            
                <!-- doctor -->
                <div class="w-full  group mb-6">
                    <label for="doctor" class="font-medium ">Doctor:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                    <select id="doctor" required name="doctor"  class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                        <option selected disabled>Select a Doctor</option>
                       
                        @foreach ($doctors as $doctor)
                            <option value="{{$doctor->id}}" {{ $doctor->id === $schedule->doctors->id ? 'selected' :  ''}}>{{$doctor->firstname}} {{$doctor->lastname}}</option>
                        @endforeach
                    
                    
                    </select>                                
                </div>
                <!-- date -->
                <div class="w-full  group mb-6">
                    <label for="date" class="font-medium ">Date:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                    <input type="date" id="date" value="{{$schedule->date}}" required name="date" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"/>
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
                            $selected = '';

                            if (isset($schedule->start_time) && $schedule->start_time== $formatted_time) {
                                $selected = 'selected';
                            }

                            echo '<option value="' . $formatted_time . '" ' . $selected . '>' . $formatted_time . '</option>';
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
                            $selected = '';

                            if (isset($schedule->end_time) && $schedule->end_time== $formatted_time) {
                                $selected = 'selected';
                            }

                            echo '<option value="' . $formatted_time . '" ' . $selected . '>' . $formatted_time . '</option>';
                        }
                    ?>
                    ?>
                </select>
                
                </div>



                <button type="submit" class="text-white  w-min  mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>


            </div>
        </form>
        @endsection
</body>
</html>