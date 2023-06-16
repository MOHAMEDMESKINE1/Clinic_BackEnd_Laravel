<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('layouts.scripts')
</head>
<body class="bg-white">
    @extends('dashboard.admin.admin_dashboard')
    @section('content')
   <div class="container bg-white ">
    <div class="grid grid-col-1 md:grid-col-2 ">

        @if ($errors->any())
            <div class="bg-red-500 p-3 rounded-md text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <div class="grid grid-col-1 md:grid-col-2 m-5">
                       
            <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                <form method="POST"  enctype="multipart/form-data" action="{{route("admin.update_services",$service->id)}}">
                    
                    @csrf
                    @method("PUT")
                    <div class="grid grid-col-1 md:grid-cols-2 gap-2">
                        
                        
                        <div class="w-full   group">
                            <label for="" class="font-medium ">Name:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                            <input type="text" name="name" id="name" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Name" required />
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
                            <input type="text" name="charge" id="charge" class="block p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0$">
                            </div>
                        </div>   
                        <!-- category   -->
                        <div class="w-full mb-6  group">
                            <label for="category" class="font-medium ">Category :<span class="text-red-500 font-medium mb-1">*</span><br></label>

                            <input type="text" name="category" id="category" class="block mt-1 p-2.5  w-full text-sm text-gray-900  border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Category"  required />
                        </div>    
                        <!-- doctors   -->
                        <div class="w-full  group">
                            <label for="doctor" class="font-medium ">Doctors:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                            <select id="doctor" name="doctor" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                <option selected disabled>Select a doctor</option>
                                @foreach ($doctors as $doctor)
                                <option value="{{$doctor->id}}" {{$doctor->doctor_id === $doctor->doctor_id ? 'selected' :  ''}}>{{$doctor->firstname }}  {{$doctor->lastname}} </option>
                                @endforeach
                            
                            </select>                                
                        </div>
                       
                   
                        <!-- status -->
                        <div class="w-full group">
                            <label for="birthdate" class="font-medium ">Status:<span class="text-red-500 font-medium">*</span></label>

                            <div  data-tooltip-target="tooltip-status"  class="flex justify-start mt-5">
                                                        
                                <label class="relative inline-flex items-center mr-5 cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                </label>                             
                            </div> 
                    
                        </div>
                        <!-- profile -->
                        <div class="w-full group">
                            <label for="photo" class="font-medium ">Icon:<span class="text-red-500 font-medium">*</span></label>
                            <div class="flex items-start w-full justify-start">
                                <!-- Button to open the file dialog -->
                                <label for="image-input" class="cursor-pointer flex-col  justify-start border border-gray-200 p-2  rounded-lg">
                                    <input type="file" name="photo" class="hidden w-full" id="image-input">

                                    <!-- Image preview or placeholder -->
                                    <div class="w-full h-full bg-gray-100 rounded-lg flex items-center justify-start">
                                        <img src="../patient/profile.svg" class="w-8 h-8 " alt="">
                                    
                                    </div>
                
                                </label>
                            </div>
                        </div>
                       
                </div>    
                                    
                <!-- description -->
                <div class=" w-full group">
                    <label for="description" class="font-medium ">Description:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                    <textarea name="description" class="w-full block mt-1 p-2.5   text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" id="editor" cols="30" rows="10"></textarea>
                </div>

                 <!-- modal footer -->
                <div class="flex  justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                    <button data-modal-hide="addService" type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
            </form>
                       
        </div>
     
    </div>
   
   </div>
   @endsection
</body>
</html>