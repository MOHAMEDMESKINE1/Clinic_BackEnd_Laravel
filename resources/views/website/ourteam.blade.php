<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
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
<body class="bg-cyan-50">
    <!-- navbar -->
    @extends('layouts.navbar')

  <!-- navbar -->
    <section id="clients" class="" >
      <div class="flex flex-col pt-5 items-center text-cyan-800 mx-auto">
          <h1 class="text-center text-4xl text-cyan-800  font-bold mt-20  wow bounce" data-wow-duration="3s" data-wow-delay=".2s">Our Team</h1>
          <h3 class="text-center "> <a href="/">Home</a> / <a href="#">Team</a></h3>
      </div>
     
      <div class="grid grid-col-1 md:grid-cols-2 gap-5 lg:grid-cols-3 px-4 py-4 mt-8 mb-8 ">
          <div class="max-w-md mx-auto bg-white  ">
              <div class="p-5 border-2 border-gray-200 rounded-lg shadow-md cursor-pointer transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100">
                <div class="flex items-center mb-4">
                  <img class="h-12 w-12 rounded-full object-cover mr-4" src="{{asset('storage/img/avatar-richard.png')}}"t="testimonial avatar">
                  <div>
                    <h4 class="font-semibold text-gray-800">Jane Smith</h4>
                    <p class="text-gray-600 text-sm">COO, ABC Inc.</p>
                  </div>
                </div>
                <p class="text-gray-700 text-lg leading-7">Suspendisse tristique, dolor sit amet aliquet interdum, lacus nisl iaculis turpis, non lacinia ex metus at sapien. Duis eget metus eu magna blandit varius. Praesent lobortis nec metus eget molestie. </p>
              </div>
            </div>
          <div class="max-w-md mx-auto bg-white ">
              <div class="p-5 border-2 border-gray-200 rounded-lg shadow-md cursor-pointer transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100">
                <div class="flex items-center mb-4">
                  <img class="h-12 w-12 rounded-full object-cover mr-4" src="{{asset('storage/img/avatar-richard.png')}}" alt="testimonial avatar">
                  <div>
                    <h4 class="font-semibold text-gray-800">Jane Smith</h4>
                    <p class="text-gray-600 text-sm">COO, ABC Inc.</p>
                  </div>
                </div>
                <p class="text-gray-700 text-lg leading-7">Suspendisse tristique, dolor sit amet aliquet interdum, lacus nisl iaculis turpis, non lacinia ex metus at sapien. Duis eget metus eu magna blandit varius. Praesent lobortis nec metus eget molestie. </p>
              </div>
            </div>
          <div class="max-w-md mx-auto bg-white ">
              <div class="p-5 border-2 border-gray-200 rounded-lg shadow-md cursor-pointer transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100">
                <div class="flex items-center mb-4">
                  <img class="h-12 w-12 rounded-full object-cover mr-4" src="{{asset('storage/img/avatar-richard.png')}}" alt="testimonial avatar">
                  <div>
                    <h4 class="font-semibold text-gray-800">Jane Smith</h4>
                    <p class="text-gray-600 text-sm">COO, ABC Inc.</p>
                  </div>
                </div>
                <p class="text-gray-700 text-lg leading-7">Suspendisse tristique, dolor sit amet aliquet interdum, lacus nisl iaculis turpis, non lacinia ex metus at sapien. Duis eget metus eu magna blandit varius. Praesent lobortis nec metus eget molestie. </p>
              </div>
          </div>
         
      </div>
  </section> 
   <!-- footer -->   
   @extends('layouts.footer')
   <!-- footer -->
{{-- <script src="../js/wow.min.js"></script>
<script>
new WOW().init();
</script> --}}

<script src="../js/jquery.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</body>
</html>