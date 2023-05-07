<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>


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
  <!-- animate css-->

  <link rel="stylesheet" href="../css/animate.css">
 
  <!-- animate css-->

</head>
<body>
      <!-- navbar -->
      @extends('layouts.navbar')

    <!-- navbar -->
      
    <section class="bg-cyan-50 py-5 my-10">
        <div class="container  mx-auto">
            <div class="flex flex-col pt-5 items-center text-cyan-800 mx-auto ">
                <h1 class="text-center text-4xl text-cyan-800  font-bold mb-4 mt-10 wow bounce" data-wow-duration="3s" data-wow-delay=".2s">Contact Us</h1>
                <h3 class="text-center "> <a href="/">Home</a> / <a href="#">Contact</a></h3>
            </div>
        </div>
        <div class="grid grid-col-1 md:grid-cols-2  md:rounded-tr-3xl md:rounded-bl-3xl bg-gradient-to-r to-emerald-800 from-sky-400 shadow-lg overflow-hidden   md:p-5 my-5 md:mx-10  " style="border-bottom: 40px !important;">
          
        
            <div class=" hidden md:block ">
              <img src="{{asset('storage/img/contact.svg')}}"  alt="">
            </div>
            <div class="container  mx-auto md:px-4  m-5">
              <form class="bg-transparent m-5  md:px-8 pt-6 pb-8 mb-4 " action="./thankyou.html">
                    <div class="mb-4 ">
                          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 mt-10">
                          
                            <div class="mb-8 ">
                              <label for="name" class="block mb-2 text-sm font-medium  dark:text-white">Name <b class="text-orange-600">*</b></label>
                              <input type="text" name="name" id="name" class="block mt-1 py-4   px-4  w-full text-sm text-white bg-transparent border-2  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder=" Name " required />
  
                            </div>
                            <div class="mb-8">
                              <label for="email" class="block mb-2 text-sm font-medium  dark:text-white">Email <b class="text-orange-600">*</b></label>
                              <input type="email" name="email" id="email" class="block mt-1 py-4   px-4  w-full text-sm text-white bg-transparent border-2  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="example@gmail.com " required />
      
                            </div>
                            
                          </div>
                          <div class="mb-8">
                            <label for="message" class="block mb-2 text-sm font-medium  dark:text-white">Message <b class="text-orange-600">*</b></label>
                            <textarea id="message" rows="4" class="block mt-1 py-4  px-4  w-full text-sm text-white bg-transparent border-2  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="Message"></textarea>
                                                          
                          </div>
                          <div class="justify-end">
                            <!-- <div class="g-recaptcha" data-sitekey="6LcWl9IlAAAAAJa1PpTYSY-oPMrk-hOhCYnNKnZq"></div> -->
                            <!-- 
                              git push origin main
                             -->
                          </div>
                      </div>
       
                    <div class="flex justify-center  md:justify-end  mt-10">
                      <input  type="submit" class="   font-semibold py-3 px-8  text-cyan-800  rounded-full shadow-md  hover:shadow-lg baseline bg-white transform transition duration-200 hover:scale-110 " value="Send Message"/>
                    </div>

              </form>
            </div>
        </div>
       
    </section>
  <!-- contacts -->
  <section class="bg-gray-50 my-10">
    <div class="container mx-auto my-5">
        <div class="grid grid-col-1 md:grid-cols-3 gap-2 m-5">
            <div class="bgw-white shadow-md md:shadow-lg shadow-slate-400 rounded-md  p-10">
              <i class="fas fa-solid fa-phone text-3xl text-cyan-900 mb-2  p-2 py-1 md:mr-2 bg-cyan-50 rounded-full border border-cyan-500 "></i>
              <h1 class="text-2xl font-semibold text-cyan-800 mb-3">Contact Number</h1>
              <span>+212 7 04 28 29 27</span>
            </div>
            <div class="bgw-white shadow-md md:shadow-lg shadow-slate-400 rounded-md  p-10">
              <i class="fas fa-solid fa-envelope text-3xl text-cyan-900 mb-2  p-2 py-1 md:mr-2 bg-cyan-50 rounded-full border border-cyan-500 "></i>
              <h1 class="text-2xl font-semibold text-cyan-800 mb-3">Email Address</h1>
              <span>wecare@gmail.com</span>
            </div>
            <div class="bgw-white shadow-md md:shadow-lg shadow-slate-400 rounded-md  p-10">
              <i class=" fa-solid fa-location-dot text-3xl text-cyan-900 mb-2  p-2 py-1 md:mr-2 bg-cyan-50 rounded-full border border-cyan-500 "></i>
              <h1 class="text-2xl font-semibold text-cyan-800 mb-3">Address</h1>
              <span>C-303, Atlanta Shopping Mall, Nr. Sudama Chowk, Mota Varachha, Surat, Gujarat, India.</span>
            </div>
      </div>
    </div>
  </section>
  <!-- footer -->   
  @extends('layouts.footer')
  <!-- footer -->
  
<script src="../js/wow.min.js"></script>
<script>
new WOW().init();
</script>

<script src="../js/jquery.min.js"></script>

<script src="../js/script.js"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</body>
</html>