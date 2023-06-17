
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
    @extends('dashboard.admin.admin_dashboard')

    @section('content')
    <div class="grid grid-col-1 md:grid-col-2">
        <!-- Search -->
           
        <div class="flex flex-col sm:flex-row justify-between mx-8">
            <div class="flex justify-start my-5">
             <form method="GET" action="{{ route('admin.search_services') }}" class="flex items-center mb-4 sm:mb-0">
                 <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                 <div class="relative">
                     <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                         <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                     </div>
                     <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" >
                     <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Search</button>
                 </div>
             </form>
            </div>
         
             <div class="flex items-center">
                
             
                
                 <a href="#" type="button" data-modal-target="addService" data-modal-toggle="addService" class="text-white flex justify-start  bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-4 py-2 mb-5 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">
                     Add Service
                 </a>
             </div>
         </div>

    </div>
    <div class="grid grid-cols-1 ">
        <div class=" col-span-2 bg-white mx-4 p-4 shadow text-center rounded-md dark:bg-darker relative overflow-x-auto">

            <table class="w-full text-sm  text-center   overflow-hidden rounded-md ">
                <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                    <tr class=" ">
                        <th scope="col" class="px-6 py-3">
                             ICON
                        </th>
                       
                        <th scope="col" class="px-6 py-3">
                            NAME
                        </th>
                        <th scope="col" class="px-6 py-3">
                          CATEGORY
                        </th>                        
                        <th scope="col" class="px-6 py-3">
                            SERVICE CHARGE 
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
                    @foreach ($services as $service)                   
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        <td>
                            <div class="flex items-center mx-2">
                               
                                <div class="w-10 h-10 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                    @if ($service->photo)
                                    <img src="{{asset('/storage/services/'.$service->photo)}}" alt="{{$service->name}}" class="w-full h-full rounded-full">
                                    @else
                                    <img src="{{asset('/storage/img/profile.svg')}}" alt="{{$service->name}}" class="w-full h-full rounded-full">
                                    @endif
                                </div>
                            </div>
                            
                        </td>
                        <td>
                           <span>{{$service->name}}</span>
                        </td>
                        
                        <td>
                           <span>{{$service->category}}</span>
                        </td>
                        <td>
                           <span>{{$service->charge}} $</span>
                        </td>
                       
                        <td>
                            @if ($service->status === 1)
                            <span class="bg-green-500 p-1 text-white rounded-sm">Availabe</span>
                            @else
                            <span class="bg-red-500 p-1 text-white rounded-sm">Not Availabe</span>

                            @endif
                        </td>
                      
                        <td>
                            <div class="flex justify-center mt-5">
                                
                                <!-- edit -->
                                <a href="{{route("admin.edit_services",$service->id)}}"  data-tooltip-target="tooltip-edit"   class="text-white  px-5 py-2 text-center mb-2" type="button">
                                    <i class="fas fa-edit text-blue-700 text-xl"></i>
                                </a>    
                                <!-- trash -->
                                <a href="#" data-tooltip-target="tooltip-delete"  data-modal-target="deleteService" data-modal-toggle="deleteService" class="text-white  px-5 py-2 text-center mr-2 mb-2" type="button">
                                    <i class="fas fa-trash text-red-700 text-xl"></i>
                                </a>     

                               
                                <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                     edit visit
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div> 
                                <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                     delete visit
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div> 
                           </div> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              
            </table>
            <!-- Add the select field to choose the number of items per page -->
            {{-- <form method="GET" action="{{ route('admin.services') }}">
                <label for="itemsPerPage">Items Per Page:</label>
                <select id="itemsPerPage" name="page" onchange="this.form.submit()">
                    <option value="5" {{ $services->perPage() == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ $services->perPage() == 10 ? 'selected' : '' }}>10</option>
                    <option value="20" {{ $services->perPage() == 20 ? 'selected' : '' }}>20</option>
                </select>
            </form> --}}
            <div class="mt-5 mx-4">
                {{ $services->links() }}
            </div>
        </div>
    <div>
    <!-- Add Service -->
    <div id="addService" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full m-6 ">
            <!-- Modal content -->
            <div class="relative bg-white  rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addService">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Add Service</h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

                <!-- modal body -->
                <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                    <form method="POST"  enctype="multipart/form-data" action="{{route("admin.store_services")}}">
                        @method("POST")
                        @csrf
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
                                <input type="number" name="charge" id="charge" class="block p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="0$">
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
                                    <option value="{{$doctor->id}}">{{$doctor->firstname }}  {{$doctor->lastname}} </option>
                                    {{-- <option value="{{ $doctor->id }}" {{ $doctor->name }}>
                                        {{ $doctor->name }}
                                    </option> --}}

                                    @endforeach
                                
                                </select>                                
                            </div>
                           
                       
                            <!-- status -->
                            <div class="w-full group mt-3">    
                                <label class="block mb-2 text-sm font-medium " for="status">Status:<b class="text-red-400">*</b> </label>
                                
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input name="status" id="status" type="checkbox" value="0" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none pe rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                                    </label>
                               </div>
                            <!-- profile -->
                            <div class="w-full group">
                                <label for="photo" class="font-medium ">Icon:<span class="text-red-500 font-medium">*</span></label>
                                <div class="flex items-start w-full justify-start">
                                    <!-- Button to open the file dialog -->
                                    <label for="image-input" class="cursor-pointer flex-col  justify-start border-2 border-gray-500 p-2  rounded-lg">
                                        <input type="file" name="photo" onchange="previewImage(event)" class="hidden w-full" id="image-input">
    
                                        <!-- Image preview or placeholder -->
                                        <div class="w-full h-full bg-gray-100 rounded-lg flex items-center justify-start">
                                            <img src="#" class="w-8 h-8  "id="imagePreview"  style="display: none;" alt="">
                                            
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
        </div>
    </div>
   
  
       
    <!-- Delete service -->
        <div id="deleteService" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
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
                    <form id="delete-form"  action="{{route("admin.delete_services",$service->id)}}"  class="text-white mx-2  px-5 py-2 text-center mb-2"  method="POST">
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
    <script>
        function previewImage(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function(e) {
                    var imagePreview = document.getElementById("photo");
                    imagePreview.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview" style="max-width: 200px;">';
                }
    
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


</body>
</html>

