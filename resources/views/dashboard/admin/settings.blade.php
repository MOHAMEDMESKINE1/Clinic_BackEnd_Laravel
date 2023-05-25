<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
    {{-- <script src="/editortext/ckeditor.js"></script> --}}
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <!-- flags -->
    {{-- <link rel="stylesheet" href="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" /> --}}
  <!-- flags -->
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
<style>
    input,select{
        padding: 10px !important;
        font-size: 14px !important;

    }
   body{
    font-size: 14px !important;
   }

</style>
<body class="bg-gray-100">
    
    @extends('dashboard.admin.admin_dashboard')
    @section('content')
    <div class="container  m-5 ">
        <div class="grid grid-col-1 gap-3 m-3 ">
            
            <div class="mb-4 border-b border-gray-200 dark:border-gray-100 mx-5">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">
                            <span class="text-xs">General</span>
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                            <span class="text-xs">Contact Information</span>

                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#roles" type="button" role="tab" aria-controls="roles" aria-selected="false">
                            <span class="text-xs">Roles</span>

                        </button>
                    </li>
                
                </ul>
            </div>
            <!-- tabs -->
            <div id="myTabContent  mx-5 ">
                
                    <div class="hidden p-7 rounded-lg bg-white" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <form action="">
                        <!-- clinic name -->
                        <div class="flex flex-wrap mb-6">
                            <label for="clinic_name" class="w-full lg:w-4/12 form-label required">Clinic Name:<b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                            <input class="block mt-1 p-2.5 w-full  text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer " required name="clinic_name" type="text" placeholder="Clinic Appointment Management" id="clinic_name">
                            </div>
                        </div>
                        <!-- contact no -->
                        <div class="flex flex-wrap mb-6 w-full">
                            <label for="phone" class="w-full lg:w-4/12 form-label required">Contact No: <b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                                <input id="phone" type="tel" style="max-width: 100%;"  name="phone"  class="block mt-1 p-2.5 w-full  text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " required />
                            </div>
                        </div>
                        
                        <!-- email -->
                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="w-full lg:w-4/12 form-label required">Email: <b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                                <input id="email" type="email"  name="email"  class="block mt-1 p-2.5 w-full  text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="test@gmail.com" required />
                            </div>
                        </div>
                    
                        <!-- email -->
                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="w-full lg:w-4/12 form-label required">Spcialities: <b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                                <select id="specialities" name="specialities" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option selected class="font-medium" disabled>---select speciality---</option>
                                    <option  class="font-medium" value="Cardiology">Cardiology</option>
                                                            
                                </select>     
                            
                            </div>
                        </div>
                        <!-- logo -->
                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="w-full lg:w-4/12 form-label required">Logo: <b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                                        <div class="flex items-start justify-start w-full">
                                        
                                            <label for="image-input" class="cursor-pointer flex-col  justify-start border border-gray-200 p-2  rounded-lg">
                                                <input type="file" name="profile" class="hidden" id="image-input">

                                                <div class="w-full h-full bg-gray-100 rounded-lg flex items-center justify-start">
                                                
                                                    <img src="../patient/profile.svg" class="w-8 h-8 p-2" alt="">                                            
                                                </div>
                            
                                            </label>
                                        </div>
                            
                            </div>
                        </div>
                        <!-- currency -->
                        {{-- <div class="flex flex-wrap mb-6">
                            <label for="email" class="w-full lg:w-4/12 form-label required">Currency: <b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                                <select id="currency" name="currency" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option selected class="font-medium" value="dh">Moroccan Dirham (DH)</option>
                                    <option  class="font-medium" value="dollar">Dollar ($)</option>
                                    <option  class="font-medium"value="euro">Euro (£)</option>
                                                            
                                </select>     
                            
                            </div>
                        </div> --}}
                        <!-- buttons -->
                        <div class="flex justify-start mt-6">
                            <input class="px-4 py-2 font-bold text-white bg-cyan-500 rounded hover:bg-cyan-600 cursor-pointer" id="settingSubmitBtn" type="submit" value="Save Changes">
                            <input class="px-4 py-2 font-bold mx-2 text-white bg-gray-500 rounded hover:bg-gray-400 cursor-pointer" id="Cancel" type="reset" value="Cancel">

                        </div>
                    </form>

                    </div>
                <div class="hidden p-7 rounded-lg bg-white" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <form action="">
                        <!-- address 1-->
                        <div class="flex flex-wrap mb-6">
                            <label for="address" class="w-full lg:w-4/12 form-label required">Address 1:<b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                            <input class="block mt-1 p-2.5 w-full  text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer " required name="address" type="text" placeholder="C-303, Atlanta Shopping Mall, Nr. Sudama Chowk, Mota Varachha, Surat, Gujarat, India." id="clinic_name">
                            </div>
                        </div>
                    
                        <!-- country -->
                        <div class="flex flex-wrap mb-6 w-full">
                            <label for="email" class="w-full lg:w-4/12 form-label required">Country: <b class="text-red-600">*</b></label>
                            <div class="w-full ">
                                <select id="country" data-default="MA" data-flag="true"  name="country" 
                                class=" selectpicker  countrypicker  mt-1 p-2.5 text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">                                                        
                                </select>
                            </div> 
                                
                            {{-- <label for="email" class="w-full lg:w-4/12 form-label required">Country: <b class="text-red-600">*</b></label>

                            <div class="w-full lg:w-8/12">
                                    <select id="country"
                                    name ="country"
                                    class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" 
                                    
                                    ></select>
                            </div> --}}
                            
                        </div>
                        <!-- state -->
                        <div class="flex flex-wrap mb-6">

                            <label for="email" class="w-full lg:w-4/12 form-label required">State: <b class="text-red-600">*</b></label>
                            
                            <div class="w-full lg:w-8/12">
                                <select name ="state" id ="state"
                                class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
                                >
                                <option selected disabled>Select State</option>
        
                                </select>  
        
                            </div>
                        
                            
                        </div>
                        <!-- logo -->
                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="w-full lg:w-4/12 form-label required">Logo: <b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                                        <div class="flex items-start justify-start w-full">
                                        
                                            <label for="image-input" class="cursor-pointer flex-col  justify-start border border-gray-200 p-2  rounded-lg">
                                                <input type="file" name="profile" class="hidden w-full" id="image-input">

                                                <div class="w-full h-full bg-gray-100  rounded-lg flex items-center justify-start">
                                                
                                                    <img src="../patient/profile.svg" class="w-10 h-10 p-2" alt="">                                            
                                                </div>
                            
                                            </label>
                                        </div>
                            
                            </div>
                        </div>
                        <!-- currency -->
                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="w-full lg:w-4/12 form-label required">Currency: <b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                                <select id="currency" name="currency" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer">
                                    <option selected class="font-medium" value="dh">Moroccan Dirham (DH)</option>
                                    <option  class="font-medium" value="dollar">Dollar ($)</option>
                                    <option  class="font-medium"value="euro">Euro (£)</option>
                                                            
                                </select>     
                            
                            </div>
                        </div>
                        <!-- PostalCode -->
                        <div class="flex flex-wrap mb-6">
                            <label for="PostalCode" class="w-full lg:w-4/12 form-label required">Postal Code :<b class="text-red-600">*</b></label>
                            <div class="w-full lg:w-8/12">
                            <input class="block mt-1 p-2.5 w-full  text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer " 
                            required
                            name="postal_code"
                            type="text" placeholder="1234" id="PostalCode">
                            </div>
                        </div>
                        <!-- buttons -->
                        <div class="flex justify-start mt-6">
                            <input class="px-4 py-2 font-bold text-white bg-cyan-500 rounded hover:bg-cyan-600 cursor-pointer" id="settingSubmitBtn" type="submit" value="Save Changes">
                            <input class="px-4 py-2 font-bold mx-2 text-white bg-gray-500 rounded hover:bg-gray-400 cursor-pointer" id="Cancel" type="reset" value="Cancel">

                        </div>
                    </form>
                    
                </div>
            
                <div class="hidden p-7 rounded-lg bg-white" id="roles" role="tabpanel" aria-labelledby="settings-tab">
                   
                    <div class=" flex justify-end " >
                        <!-- add role -->
                        <button data-modal-target="addRole" data-modal-toggle="addRole" class="text-white bg-gradient-to-br w-40  from-cyan-600 to-cyan-500 hover:bg-gradient-to-bl focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button">
                          Add Role
                          </button>

                    </div>
                    <table class="w-full text-sm  overflow-hidden rounded-md ">
                        <thead class="text-xs text-gray-500 font-semibold bg-gray-100 uppercase">
                            <tr class=" text-left">
                                <th scope="col" class="px-6 py-3">
                                     NAME
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  PERMISSIONS
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  ACTION
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody >
                            <tr class="bg-whit  border-b dark:bg-white dark:border-gray-400">
                               
                                <td class="px-6 py-4">
                                <span class="bg-green-200 text-green-500 px-1 rounded-sm">  Recipcionsit</span>
                                </td>
                               
                                <td class="px-6 py-4">
                                   <div class="flex justify-start">
                                        <a href="#" data-modal-target="editRole" data-modal-toggle="editRole" class="text-white px-5 py-2 text-center mb-2" type="button">
                                            <i class="fas fa-edit text-indigo-500 text-xl"></i>
                                        </a>                                
                                        <a href="#" data-modal-target="deleteStaff" data-modal-toggle="deleteStaff" class="text-white  px-5 py-2 text-center  mb-2" type="button">
                                            <i class="fas fa-trash text-red-500 text-xl"></i>
                                        </a>     
                                   </div>
                                </td>
                            </tr>
                           
                         
                        
                        
                        </tbody>
                    </table>
                    
                </div>
            
            </div>

        </div>
    </div>
    @endsection

   <!-- add role -->
   <div id="addRole" tabindex="-1" aria-hidden="true" class="fixed top-0   left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-md h-full m-6">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="addRole">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 mt-5 mx-6 text-left">
                        Add Role

                    </h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 "></span>

                    <!-- modal body -->
                    <div class="grid grid-col-1 md:grid-col-2 m-5">
                        <form method="POST" action="">
                                @csrf
                                @method("POST")
                                <!-- role -->
                                <div class="flex flex-wrap mb-6">
                                    <label for="role" class="w-full form-label required">Roles<b class="text-red-600">*</b></label>
                                    <div class="w-full flex mt-4  ">
                                        <input type="checkbox" value="" name="roles[]" class="block mt-1 p-2.5   text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer " required placeholder="Role" id="role">
                                        <label for="" class="w-full mx-3 form-label required">Manage Patients</label>

                                    </div>
                                </div>
                        
                            <!-- modal footer -->
                            <div class="flex items-cente justify-start  mb-2 rounded-b dark:border-gray-600">
                                <button data-modal-hide="addRole" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                                <button data-modal-hide="addRole" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
   <!-- edit role -->
   <div id="editRole" tabindex="-1" aria-hidden="true" class="fixed top-0   left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-md m-6">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="editRole">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-2 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-cyan-900 mt-5 mx-6 text-left">
                        Edit Role

                    </h3>
                    <span class=" border border-b-0 w-full inline-block  border-gray-100 "></span>

                <!-- modal body -->
                    <div class="grid grid-col-1 md:grid-col-2 m-5">
                        <form method="POST" action="">
                                @csrf
                                @method("PUT")
                                <!-- role -->
                                <div class="flex flex-wrap mb-6">
                                    <label for="role" class="w-full form-label required">Roles<b class="text-red-600">*</b></label>
                                    <div class="w-full flex mt-4  ">
                                        <input type="checkbox" value="" name="roles[]" class="block mt-1 p-2.5   text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer " required placeholder="Role" id="role">
                                        <label for="" class="w-full mx-3 form-label required">Manage Patients</label>

                                    </div>
                                </div>
                        
                            <!-- modal footer -->
                            <div class="flex items-cente justify-start mb-2 rounded-b dark:border-gray-600">
                                <button data-modal-hide="editRole" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                                <button data-modal-hide="editRole" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>  

     <script>
        const phoneInputField = document.getElementById("phone");
  
        const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <!-- flags -->
    {{-- <script src="//cdn.tutorialjinni.com/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script> --}}
    <!-- flags -->
</body>
</html>