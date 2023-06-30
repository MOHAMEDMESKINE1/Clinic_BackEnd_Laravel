<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('layouts.scripts')
</head>
<body>
    @extends('dashboard.admin.admin_dashboard')
    @section('content')
   <div class="container bg-white p-5 ">
        <div class="grid grid-col-1 md:grid-col-2">

            @if ($errors->any())
                <div class="bg-red-500 p-3 rounded-md text-white">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form method="post" action="{{route("doctor.update_visits",$visit->id)}}">
                    @csrf
                    @method("PUT")
                    <div class="grid grid-col-1 md:grid-cols-2 gap-2">
                                        
                        <!-- Visit Date  -->
                        <div class="w-full mb-6  group">
                            <label for="" class="font-medium ">Visit Date:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                            <input type="date" name="date" value="{{$visit->date}}" id="visit_date" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="***** " required />
                        </div>
                        <!-- Doctor   -->
                        <div class="w-full  group">
                            <label for="doctor" class="font-medium ">Doctor:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                            <select id="doctor" name="doctor" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                <option selected>Select a doctor</option>
                            @foreach ($doctors as $doctor)
                            <option value="{{$doctor->id}}" {{$doctor->id == $visit->doctor_id ? 'selected' : ''}}>{{$doctor->firstname}} {{$doctor->lastname}}</option>
                            
                            @endforeach
                            
                            </select>                                
                        </div>
                        <!-- Patient   -->
                        <div class="w-full  group">
                            <label for="patient" class="font-medium ">Patient:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                            <select id="patient" name="patient" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                <option selected>Select a patient</option>
                                @foreach ($patients as $patient)
                                <option value="{{$patient->id}}" {{$patient->id == $visit->patients->id ? 'selected' : ''}}>{{$patient->firstname}} {{$patient->lastname}}</option>
                            
                                @endforeach
                            
                            </select>                                
                        </div>
                        <!-- description -->
                        <div class="w-full group">
                            <label for="description" class="font-medium ">Description:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                            <textarea name="description"  id="editor" cols="30" rows="10" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">{{$visit->description}}</textarea>
                        </div>

                        <!-- modal footer -->
                        <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                        <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                        <button data-modal-hide="addVisit" type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>

                    </div>
                </form>
        </div>       
        
    </div>
   @endsection
</body>
</html>