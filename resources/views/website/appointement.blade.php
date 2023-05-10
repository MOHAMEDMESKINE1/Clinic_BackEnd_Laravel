<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointement</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
    <!-- fontawesome -->
   
   <!-- email js -->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
      emailjs.init("870rIKwVrqYwt_f4F");
    })();
    </script>
   <!-- email js -->

    <!-- recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- recaptcha -->

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
     
     @include('layouts.scripts')

</head>
<body class="bg-cyan-50">
    
  <!-- navbar -->
  @extends('layouts.navbar')

<!-- navbar -->
 
    <!-- appointement -->
    <section id="appointement"  class="container mx-auto  ">

        <h1 class="text-center text-4xl  font-bold mb-4 text-cyan-800 mt-32 wow bounce" data-wow-duration="3s" data-wow-delay=".2s">Book Appointement</h1>
        <h3 class="text-center text-cyan-800"> <a href="/">Home</a> / Book Appointment</h3>

        <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1  md:rounded-tr-3xl md:rounded-bl-3xl bg-gradient-to-r to-emerald-800 from-sky-400 
shadow-lg overflow-hidden   md:p-5 my-5 md:mx-10  " style="border-bottom: 40px !important;">
            <div >
                <img src="{{asset('storage/img/appointment.png')}}" class="h-auto max-w-full  hidden md:block " alt="">
            </div>
            
            <div>
                <h1  class="text-white text-2xl md:text-3xl my-5 text-center font-semibold">Book An Appointment</h1>
                <div class="container md:mx-auto px-4">
                <form class="bg-transparent  md:px-8 pt-6 pb-8 mb-4 "  >
                        <div class="mb-4 ">
                        <div class="flex justify-between">
                            <div class="w-1/2 pr-2">
                            <label class="block text-white font-bold mb-2" for="last-name">
                                First Name
                            </label>
                            <input type="text"  id="firstname" name="firstname" class="block mt-1 py-4  px-4  w-full text-sm   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="First Name " required />

                            </div>
                            <div class="w-1/2 pl-2">
                            <label class="block text-white font-bold mb-2" for="last-name">
                                Last Name
                            </label>
                            <input type="text" id="lastname" name="lastname"  class="block mt-1 py-4  px-4  w-full text-sm   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="First Name " required />

                            </div>
                        </div>
                        </div>
                        <div class="mb-4">
                        <label class="block text-white font-bold mb-2" for="email">
                            Email
                        </label>
                        <input type="email" name="email" id="email" class="block mt-1 py-4  px-4  w-full text-sm   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="First Name " required />

                        </div>
                        
                        <div class="mb-4">
                        <div class="flex justify-between">
                            <div class="w-1/2 pr-2">
                            <label class="block text-white font-bold mb-2" for="select">
                                Doctor
                            </label>
                            <select id="doctor"  name="doctor" class="block mt-1 py-4  px-4  w-full text-sm text-gray-400  bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="select">
                                <option>Dr.Teddy Thomas</option>
                                <option>Dr.Smith Franky</option>
                            </select>
                            </div>
                            <div class="w-1/2 pl-2">
                            <label class="block text-white font-bold mb-2" for="datetime">
                                Date 
                            </label>
                            <input id="date" class="block mt-1 py-4  px-4  w-full text-sm text-white  bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="datetime" type="datetime-local">
                            </div>
                        </div>
                        </div>
                        
                        <div class="flex justify-center sm:justify-center mt-10">
                        <button type="button" onclick="AppointementMail()" class="   font-semibold py-3 px-4  text-cyan-800  rounded-full shadow-md  hover:shadow-lg baseline bg-white transform transition duration-500 hover:scale-110 ">Appointement Now</button>
                        </div>

                </form>
                </div>
        
                
            </div>

        </div>

    </section>
    <!-- footer -->   
    @extends('layouts.footer')
    <!-- footer -->

    
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</body>
</html>