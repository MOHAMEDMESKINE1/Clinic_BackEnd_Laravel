<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style.css">
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
 <!-- animate css-->

 <link rel="stylesheet" href="../css/animate.css">
 
 <!-- animate css-->
</head>
<body>
        <!-- navbar -->
        @extends('layouts.navbar')
        <!-- navbar -->
          
    <section class="  bg-cyan-50 p-5">
        <section class="mb-32  text-center">
    
            <h2 class="text-4xl font-bold mb-4 text-cyan-800 mt-20 wow bounce" data-wow-duration="3s" data-wow-delay=".2s">Services</h2>
            <h3 class="text-center text-cyan-800"> <a href="/">Home</a> / <a href="#">Services</a></h3>
            <div class="grid md:grid-cols-3 gap-x-4 gap-y-4 xl:gap-x-12 mt-5">
                    <!-- service 1 -->
                    <div class="bg-white p-5 rounded-tr-lg rounded-bl-lg shadow-md transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100 cursor-pointer">
                        <div class="flex justify-center">
                            <img src="{{asset('storage/img/avatar-anisha.png')}}" alt="" class="rounded-full mx-auto mb-3">
                        </div>
                        <h1 class="text-cyan-800">Services 1</h1>
                        <p class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, est?</p>
                    </div>
                    <!-- service 2 -->
                    <div class="bg-white p-5 shadow-md rounded-tr-lg rounded-bl-lg transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100 cursor-pointer">
                        <div class="flex justify-center">
                            <img src="{{asset('storage/img/avatar-richard.png')}}" alt="" class="rounded-full mx-auto mb-3">
                        </div>
                        
                        <h1 class="text-cyan-800">Services 1</h1>
                        <p class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, est?</p>
                    </div>
                    <!-- service 3 -->
                    <div class="bg-white p-5 shadow-md rounded-tr-lg rounded-bl-lg transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100 cursor-pointer">
                      
                        <div class="flex justify-center">
                            <img src="{{asset('storage/img/avatar-ali.png')}}" alt="" class="rounded-full mx-auto mb-3">
                        </div>
                        
                        <h1 class="text-cyan-800">Services 1</h1>
                        <p class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, est?</p>
                    </div>
                
            </div>
            
          </section>

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