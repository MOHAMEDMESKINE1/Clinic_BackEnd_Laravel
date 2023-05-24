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
        <div class="grid grid-col-1 gap-3 my-10 ">
            
            <div class="mb-4 border-b border-gray-200 dark:border-gray-100 ">
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
                
                </ul>
            </div>
            <!-- tabs -->
            <div id="myTabContent ">
                
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
            
            </div>

        </div>
    </div>
    @endsection

   

    {{-- <script language="javascript">

    // first parameter is id of country drop-down and second parameter is id of state drop-down

     populateCountries("country", "state");

    </script>

    <script>
        ClassicEditor
       .create( document.querySelector('#editor') )
       .catch( error => {
           console.error( error );
       } );
 
       
    </script> 
     --}}
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