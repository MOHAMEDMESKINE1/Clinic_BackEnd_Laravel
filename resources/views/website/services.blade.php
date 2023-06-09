<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services </title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    @include('layouts.scripts')
    <script src="https://unpkg.com/scrollreveal"></script>

</head>
<body>
        <!-- navbar -->
        @extends('layouts.navbar')
        <!-- navbar -->
          
    <section class="  bg-cyan-50 p-5 headline">
        <section class="mb-32  text-center">
    
            <h2 class="text-4xl font-bold mb-4 text-cyan-800 mt-20 wow bounce" data-wow-duration="3s" data-wow-delay=".2s">@lang('messages.services.title')</h2>
            <h3 class="text-center text-cyan-800 "> <a href="/">@lang('messages.navbar.home')</a> / <a href="#">@lang('messages.services.services')</a></h3>
            <div class="grid md:grid-cols-3 gap-x-4 gap-y-4 xl:gap-x-12 mt-5">

                    @foreach ($services as $service)
                        <!-- service 1 -->
                        <div class="bg-white p-5 rounded-tr-lg rounded-bl-lg shadow-md transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100 cursor-pointer">

                            <div class="flex justify-center">

                                <img src="{{asset('storage/services/'.$service->photo)}}" alt="" class=" w-21  h-21 mx-auto mb-3">
                            </div>
                            <h1 class="text-cyan-800 text-center">{{$service->name}}</h1>
                            <h1 class="text-orange-800">Doctor : {{$service->doctors->firstname}} {{$service->doctors->lastname}}</h1>
                            <div class="bg-gray-50">
                                <p class="font-light">{{$service->description}}</p>
                            </div>
                        </div>
                    @endforeach
                    <!-- service 2 -->
                    {{-- <div class="bg-white p-5 shadow-md rounded-tr-lg rounded-bl-lg transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100 cursor-pointer">
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
                    </div> --}}
                
            </div>
            
          </section>

    </section>
  <!-- footer -->   
  @extends('layouts.footer')
  <!-- footer -->
  <script >
    ScrollReveal().reveal('.headline')
    ScrollReveal().reveal('.headline', { delay: 500 });

  </script>
  <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</body>
</html>