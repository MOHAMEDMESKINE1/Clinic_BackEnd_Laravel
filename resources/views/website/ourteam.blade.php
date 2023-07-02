<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

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

 @include('layouts.scripts')

 <!-- animate css-->
</head>
<body class="bg-cyan-50">
    <!-- navbar -->
    @extends('layouts.navbar')

  <!-- navbar -->
    <section id="clients" class=" headline" >
      <div class="flex flex-col pt-5 items-center text-cyan-800 mx-auto">
          <h1 class="text-center text-4xl text-cyan-800  font-bold mt-20  wow bounce" data-wow-duration="3s" data-wow-delay=".2s">@lang('messages.team.title')</h1>
          <h3 class="text-center "> <a href="/">@lang('messages.team.home')</a> / <a href="#">@lang('messages.team.team')</a></h3>
      </div>
     
      <div class="grid grid-col-1 md:grid-cols-3 gap-5 px-4 py-4 mt-8 mb-8 ">
         
        @foreach ($teams as $team)
          <div class="max-w-md mx-auto bg-white  ">
              <div class="p-5 border-2 border-gray-200 rounded-lg shadow-md cursor-pointer transform transition-transform duration-500 ease-in-out hover:scale-105 active:scale-100">
                    <div class="flex items-center mb-4">
                      @if ( $team->photo)
                        <img class="h-12 w-12 rounded-full object-cover mr-4" src="{{asset('storage/doctors/'.$team->photo)}}"t="testimonial avatar">
                      @else 
                      <img class="h-12 w-12 rounded-full object-cover mr-4" src="{{asset('storage/img/profile.svg')}}"t="testimonial avatar">

                      @endif
                      <div>
                        <h4 class="font-semibold text-gray-800">{{$team->firstname}} {{$team->lastname}}</h4>
                        <p class="text-cyan-600 text-sm">{{$team->phone}}</p>
                        <p class="text-cyan-600 text-sm">{{$team->email}}</p>
                        <p class="text-gray-700 text-sm"> University : {{$team->university}}  </p>
                        <p class="text-gray-700 text-sm"> Experience : {{$team->exprience}} {{ $team->exprience > 1 ? 'Years' :'Year' }} 
                        <p class="text-gray-700 text-sm"> Specialization : {{$team->specializations->name}}</p>
                          </p>
  
                      </div>
                    </div>
                    <p class="text-cyan-700 text-lg leading-7"> Lorem ipsum dolor sit amet cofficia reprehenderit facere quam quae dignissimos unde consectetur placeat, explicabo ab perferendis harum, obcaecati corporis at fugiat necessitatibus consequuntur qui voluptas provident quia exercitationem ut animi? </p>
                    <div class="flex justify-center sm:justify-center mt-10">
                      <a href="{{route("appointement")}}"   class="  bg-cyan-900  font-semibold py-3 px-4   text-white  rounded-full shadow-md  hover:shadow-lg baseline transform transition duration-500 hover:scale-110 ">@lang('messages.appointement.appointement_now')  </a>
                    </div>

                  </div>
              </div>
            @endforeach
          
          
      </div>
  </section> 
   <!-- footer -->   
   @extends('layouts.footer')
   <script >
    ScrollReveal().reveal('.headline')
    ScrollReveal().reveal('.headline', { delay: 500 });

  </script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</body>
</html>