<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Details</title>
        <script src="https://cdn.tailwindcss.com"></script>
    
        <link href="../node_modules/flowbite/dist/flowbite.min.css" rel="stylesheet" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
      />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
         <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
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
    <div class="container m-5">
      <h1 class="text-gray-500 mt-10 mx-1 text-xl">
        Edit Profile
      </h1>
     

      <div class=" bg-white rounded-md shadow-sm p-4 mt-10  mx-auto">
        
        <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
          <form method="post"  enctype="multipart/form-data" action="#">
                      <!-- profile -->
                      <div class="grid grid-col-1 gap-2">
                              <!-- profile -->
                              <div class="w-full group">
                                <label for="birthdate" class="font-medium ">Profile:</label>
                                <div class="flex items-start justify-start">
                                    <!-- Button to open the file dialog -->
                                    <label for="image-input" class="cursor-pointer flex-col  justify-start border border-gray-200 p-2  rounded-lg">
                                        <input type="file" name="profile" class="hidden" id="image-input">

                                        <!-- Image preview or placeholder -->
                                        <div class="  bg-gray-100 rounded-lg flex items-center justify-start">
                                            <img src="../patient/profile.svg" class="w-28 h-28 p-2" alt="">

                                        
                                        </div>
                    
                                    </label>
                                </div>
                            </div>
                            <!-- firstname -->
                            <label for="" class="font-medium ">FullName :<span class="text-red-500 font-medium">*</span></label>

                            <div class=" flex justify-around items-center flex-col md:flex-row   mb-6">
                                <input type="text" name="firstname" id="firstname" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="First Name " required />

                                <!-- <label for="" class=" font-medium">Last Name :<span class="text-red-500 font-medium">*</span></label> -->

                                <input type="text" name="lastname" id="lastname" class="block mt-1 p-2.5 md:ml-2  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer " placeholder="Last Name " required />
                            </div>

                      </div>
                      
                      <!-- email -->
                      <div class="w-full mb-6 group">
                          <label for="" class="font-medium ">Email:<span class="text-red-500 font-medium">*</span></label>
                          <input type="email" name="email" id="email" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Email@gmail.com " required />
                      </div>
                     
                      <!-- phone -->
                      <div class="w-full mb-6  group ">
                          <label for="phone" class="font-medium ">Contact No:<span class="text-red-500 font-medium mb-1">*</span><br></label>
                          <input id="phone" type="tel"  name="phone"  class="block mt-1 p-2.5 w-full lg\:max-w-screen-lg text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="+212 00 00 00 00" required />
                      </div>
                     
                  
                     
        </div>
         
          <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
            <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
            <input  type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" value="Reset"/>
          </div>
        </form>
         
      </div>
      

    </div>



    <script>
      const phoneInputField = document.getElementById("phone");

      const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });
  </script>
  <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>