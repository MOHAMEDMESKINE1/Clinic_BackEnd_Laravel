
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
        <div class=" container ">
            <div class="m-5">
                <div class="flex justify-between sm\:flex-row ">

                    <form action="">
                        <label class="relative block">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 fill-black" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                                    height="30" viewBox="0 0 30 30">
                                    <path
                                        d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
                                    </path>
                                </svg>
                            </span>
                            <input
                                name="search"
                                class="w-full bg-white placeholder:font-italitc border border-slate-300 rounded-full py-2 pl-10 pr-4 focus:outline-none"
                                placeholder="Search" type="text" />
                        </label>
                    </form>  
                    <button data-modal-target="addService" data-modal-toggle="addService" class="text-white bg-gradient-to-br w-40  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                        Add Service
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
                    <tr class="bg-white  border-b dark:bg-white font-medium dark:border-gray-100">
                        <td>
                            <div class="flex justify-center">
                                <img src="imgs/hospital.png" alt="photo" class="w-7 h-7 rounded-full border border-gray-100 "><br>                              
                            </div>
                        </td>
                        <td>
                           <span>Smith Alex</span>
                        </td>
                        
                        <td>
                           <span>Thearpy</span>
                        </td>
                        <td>
                           <span>1237$.00</span>
                        </td>
                       
                        <td>
                            <label class="relative inline-flex items-start cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none pe rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-cyan-600"></div>
                            </label>
                        </td>
                      
                        <td>
                            <div class="flex justify-center mt-5">
                                
                                <!-- edit -->
                                <a href="#"  data-tooltip-target="tooltip-edit"   data-modal-target="editService" data-modal-toggle="editService" class="text-white  px-5 py-2 text-center mb-2" type="button">
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
                 
                   
                </tbody>
            </table>
           <div class="flex items-between">
             <!-- show result -->
             <div class="mt-4">
                <b class="mx-5 text-sm mb-1 text-gray-500">Show Result</b>
                <select  id="order-filter" class="bg-white border  border-gray-100 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block mx-5 p-2.5  dark:border-gray-200 dark:placeholder-gray-400 ">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
            </div>
             <!-- show result -->
            <!-- navigation -->
            <nav class="flex  justify-between items-end mt-2 pt-4" aria-label="Table navigation">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-cyan-100 hover:text-gray-200  dark:border-gray-200  dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-200 hover:bg-cyan-100 hover:text-gray-700  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-200 hover:bg-cyan-100 hover:text-gray-700  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                   
                    <li>
                        <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-cyan-100 hover:text-gray-200  dark:border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- navigation -->
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
                    <form method="post"  enctype="multipart/form-data" action="#">
                        <div class="grid grid-col-1 md:grid-cols-2 gap-2">
                            
                            <!-- Visit Date  -->
                            <div class="w-full   group">
                                <label for="" class="font-medium ">Name:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                                <input type="text" name="name" id="name" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Name" required />
                            </div>
                            <!-- Category   -->
                            <div class="w-full relative   group">
                              
                               <div class="flex justify-end">
                                <button data-modal-target="addCategory" data-modal-toggle="addCategory" data-tooltip-target="tooltip-addcategory" class="bg-gray-300 text-gray-900 px-10 rounded-md"><i class="fas fa-plus"></i></button>    
                               </div>
                              
                                <select id="category" name="category" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option selected>Select a category</option>
                                    <option value="0">Cardiology</option>
                                    <option value="0">Ophtalmology</option>                                
                                </select>   
                              
                                <div id="tooltip-addcategory" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        add new category
                                   <div class="tooltip-arrow" data-popper-arrow></div>
                               </div> 
                                

                               <!--  -->
                                                     
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
                            <!-- doctors   -->
                            <div class="w-full  group">
                                <label for="doctor" class="font-medium ">Doctors:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                <select id="doctor" name="doctor" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option selected disabled>Select a doctor</option>
                                    <option value="smith">smith</option>
                                    <option value="smith">smith</option>
                                    <option value="smith">smith</option>
                                
                                </select>                                
                            </div>
                            <!-- description -->
                            <div class=" w-full group">
                                <div class="grid grid-cols-1 ">
                                    <label for="description" class="font-medium ">Description:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                    <textarea name="description" class="w-full" id="editor" cols="30" rows="10"></textarea>
    
                                </div>
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
                            <label for="birthdate" class="font-medium ">Profile:<span class="text-red-500 font-medium">*</span></label>
                            <div class="flex items-start w-full justify-start">
                                <!-- Button to open the file dialog -->
                                <label for="image-input" class="cursor-pointer flex-col  justify-start border border-gray-200 p-2  rounded-lg">
                                    <input type="file" name="profile" class="hidden w-full" id="image-input">

                                    <!-- Image preview or placeholder -->
                                    <div class="w-full h-full bg-gray-100 rounded-lg flex items-center justify-start">
                                        <img src="../patient/profile.svg" class="w-8 h-8 " alt="">
                                       
                                    </div>
                  
                                </label>
                            </div><br>
                           


                        </div>
                    </div>        
                    </form>
                            
                   
                </div>
                <!-- modal footer -->
                <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="addService" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                    <button data-modal-hide="addService" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
                </div>
            </div>
        </div>
    </div>
   <!-- add category -->
   <div id="addCategory" tabindex="-1" aria-hidden="true" class="fixed top-0   left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative max-w-md h-screen m-6">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow ">
            <button type="button" class="absolute top-5 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addCategory">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-2 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-cyan-900 mt-5 mx-6 text-left">
                    Add Category

                </h3>
                <span class=" border border-b-0 w-full inline-block  border-gray-100 "></span>

            <!-- modal body -->
            <div class="pt-4 px-2">
                        
                <div class="grid grid-col-1 md:grid-col-2 m-5">
                    <form method="post"  enctype="multipart/form-data" action="">
                
                        <div class="grid grid-col-1 ">
                        
                            <!-- Catgeory Date  -->
                            <div class="w-full mb-6  group">
                                <label for="category" class="font-medium ">Category :<span class="text-red-500 font-medium mb-1">*</span><br></label>

                                <input type="text" name="category" id="category" class="block mt-1 p-2.5  w-full text-sm text-gray-900  border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Name"  required />
                            </div>
                           
                           
                            
                    </div>
                                       
                    </form>
                </div>
            </div>
            <!-- modal footer -->
            <div class="flex items-cente justify-start mx-6 mb-2 rounded-b dark:border-gray-600">
                <button data-modal-hide="addCategory" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                <button data-modal-hide="addCategory" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
            </div>
            </div>
        </div>
    </div>
</div>    
    <!-- Edit service -->
    <div id="editService" tabindex="-1" aria-hidden="true" class="fixed top-0   left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full m-6">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="editService">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 mt-5 mx-6 text-left">
                        Edit Visit

                    </h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 "></span>

                <!-- modal body -->
                <div class="pt-4 px-2">
                            
                    <div class="grid grid-col-1 md:grid-col-2 m-5">
                        <form method="post"  enctype="multipart/form-data" action="#">
                    
                            <div class="grid grid-col-1 md:grid-cols-2 gap-2">
                            
                                <!-- Visit Date  -->
                                <div class="w-full mb-6  group">
                                    <label for="" class="font-medium ">Service Date:<span class="text-red-500 font-medium mb-1">*</span><br></label>

                                    <input type="date" name="visit_date" id="visit_date" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="***** " required />
                                </div>
                                <!-- Doctor   -->
                                <div class="w-full  group">
                                    <label for="role" class="font-medium ">Doctor:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                    <select id="role" name="role" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                        <option selected>Select a doctor</option>
                                        <option value="0">smith</option>
                                        <option value="0">smith</option>
                                        <option value="0">smith</option>
                                    
                                    </select>                                
                                </div>
                                <!-- Patient   -->
                                <div class="w-full  group">
                                    <label for="role" class="font-medium ">Patient:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                    <select id="role" name="role" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                        <option selected>Select a patient</option>
                                        <option value="0">smith</option>
                                        <option value="0">smith</option>
                                        <option value="0">smith</option>
                                    
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
                                    <label for="description" class="font-medium ">Description:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                                    <textarea name="description" id="editortextarea" cols="30" rows="10"></textarea>
                                </div>
                                
                        </div>
                                           
                        </form>
                    </div>
                </div>
                <!-- modal footer -->
                <div class="flex items-cente justify-start mx-6 mb-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="editService" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                    <button data-modal-hide="editService" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
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
                
                <form>
                <!-- Modal footer -->
                <div class="flex items-center  space-x-2 rounded-b dark:border-gray-600">
                    <button data-modal-hide="deleteService" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                    <button data-modal-hide="deleteService" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endsection

    <script>
        ClassicEditor
       .create( document.querySelector('#editor') )
       .catch( error => {
           console.error( error );
       } );
        ClassicEditor
       .create( document.querySelector('#editortextarea') )
       .catch( error => {
           console.error( error );
       } );
    </script> 


    <script type="text/javascript" defer src="../node_modules/flowbite/dist/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


</body>
</html>

