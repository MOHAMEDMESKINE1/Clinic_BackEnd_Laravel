<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
   
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

  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- animate css-->
  {{-- <script type="module" defer src="node_modules/scrollreveal/dist/scrollreveal.min.js"></script> --}}

</head>
<body>
      <!-- navbar -->
      @extends('layouts.navbar')

    <!-- navbar -->
      
    <!-- about -->
    <section class=" bg-cyan-50 mx-auto headline " >
        <div class="text-center py-5 ">
            <h2 class="text-4xl font-bold mb-4 text-cyan-800 mt-20 wow bounceInDown" data-wow-duration="3s" data-wow-delay=".2s">@lang('messages.about.title')</h2>
            <h3 class="text-center text-cyan-800"> <a href="/">@lang('messages.navbar.home')</a> / <a href="#">@lang('messages.about.title')</a></h3>
        </div>
       
        <div class="grid grid-col-1 md:grid-cols-2 m-5 wow fadeInRight" data-wow-duration="3s" data-wow-delay=".2s">
            <div class="grid grid-cols-2 md:grid-cols-2 mt-16 mx-auto m-5 gap-x-2 gap-y-2 md:gap-x-8">
                    <div class="m-0">
                        <div class="flex shadow-lg justify-start border bg-white border-gray-100 p-1 rounded-lg">
                            <img src="{{asset('storage/img/infycare1.jpeg')}}" class="w-52 object-fill " alt="">
                        </div>
                    </div>
                    <div class="m-0">
                        <div class="flex shadow-lg justify-start border bg-white border-gray-100 p-1 rounded-lg">
                            <img src="{{asset('storage/img/infycare2.jpeg')}}" class="w-52 object-fill " alt="">
                        </div>
                    </div>
                    <div class="m-0">
                         <div class="flex shadow-lg flex-col items-center justify-center border bg-white px-2 border-gray-100 py-9 sm:py-14 lg:py-12    rounded-lg">
                            <h1 class="
                            text-center text-7xl font-bold 
                            text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400
                            ">
                                20 
                            </h1>
                            <p class="text-xl text-center font-bold " >
                              @lang('messages.about.experience')
                            </p>
                        </div> 
                       
                    </div>
                    <div class="m-0">
                        <div class="flex shadow-lg justify-start border bg-white border-gray-100 p-1 rounded-lg">
                            <img src="{{asset('storage/img/infycare3.jpeg')}}" class="w-52 h-48 object-fill " alt="">
                        </div>
                    </div>
                   
            </div>

            <div class="my-10 mx-10 ">
              <h1 class=" text-gray-700 capitalize text-2xl md:my-5 text-center md:text-left ">@lang('messages.about.title')</h1>
              <h1 class="text-cyan-900 text-center  text-xl  md:text-left md:text-3xl my-5 capitalize">@lang('messages.about.book')</h1>
              <p class="font-light mb-3 text-justify">
                @lang('messages.about.feature')
              </p>
              <ol class="flex flex-col mx-5  md:flex-row justify-between md:items-center  list-disc   font-bold text-xs">
                <li class="mb-2  " >@lang('messages.about.services.0')</li>
                <li class="mb-2  " >@lang('messages.about.services.1')</li>
                <li class="mb-2  " >@lang('messages.about.services.2')</li>
                <li class="mb-2  " >@lang('messages.about.services.3')</li>
              
              </ol>
              <div class="flex items-end md:justify-start sm:justify-center mt-10">
                <a href="{{route('contact')}}" class="  md:block font-semibold p-3 px-6 text-white  rounded-full shadow-md hover:bg-transparent hover:border border-cyan-700 hover:text-cyan-700 baseline bg-cyan-700">@lang('messages.contact.title')</a>
              </div>
            </div>

            
        </div>
      
    </section>
    <!-- statistics -->
    <section class="p-5">
        <div class="grid grid-col-1 gap-y-3    md:grid-cols-4  md:py-10 bg-white mt-5 ">
            <div class="text-center shadow-md    border-b mb-4 md:border-r border-r-gray-300">
                    <h1 class="text-5xl mb-4 font-bold
                    text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400
                    "> {{$specializations}} </h1>
                    <p class="text-xl text-cyan-900 mb-4">@lang('messages.statistics.specializations')</p>
            </div>
            <div class="text-center shadow-md   border-b mb-4 md:border-r border-r-gray-300">
                    <h1 class="text-5xl mb-4 font-bold
                    text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400
                    "> {{$services}} </h1>
                    <p class="text-xl text-cyan-900 mb-4">@lang('messages.statistics.services')</p>
            </div>
            <div class="text-center shadow-md   border-b mb-4 md:border-r border-r-gray-300">
                    <h1 class="text-5xl mb-4 font-bold
                    text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400
                    ">{{ $doctors}}</h1>
                    <p class="text-xl text-cyan-900 mb-4">@lang('messages.statistics.doctors')</p>
            </div>
            <div class="text-center shadow-md   border-b mb-4 ">
                    <h1 class="text-5xl mb-4 font-bold
                    text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400
                    ">{{ $patients_count}}</h1>
                    <p class="text-xl text-cyan-900 mb-4">@lang('messages.statistics.satisfied')</p>
            </div>
        </div>
    </section>
    <!-- doctors -->
    <section class="bg-cyan-50 py-10 wow bounceInDown" data-wow-duration="4s" data-wow-delay=".3s">
        <div class="text-center my-10">
          <h1 class="text-2xl text-cyan-700">@lang('messages.statistics.our_doctors')</h1>
          <div class="text-4xl font-semibold text-cyan-500 mb-5">@lang('messages.statistics.title_doctors')</div>
        </div>
        <div class="container mx-auto ">
            <div class="grid grid-col-1 m-5 md:grid-cols-3 gap-2 mt-5">

                @foreach ($teams as $team)
                    <div class="bg-white  shadow-md rounded-md my-10 p-5">
                       <div class="relative flex justify-center">
                        <div class="flex justify-center absolute -top-20 ">
                          @if ($team->photo)
                          <img src="{{asset('storage/doctors/'.$team->photo)}}" class="h-32  w-32  rounded-full object-cover border-2 border-gray-500" alt="">
                          @else

                           <img src="{{asset('storage/img/profile.svg')}}" class="  h-32 w-32 rounded-full object-cover border-2 border-gray-500" alt="">
 
                          @endif
                        </div>
                       </div>
                        <div class="text-center mt-20">
                            <h1 class="text-2xl mb-2 text-cyan-800">{{$team->firstname}} {{$team->lastname}}  </h1>
                            <p class="text-cyan-600 text-sm">{{$team->phone}}</p>
                            <p class="text-cyan-600 text-sm">{{$team->email}}</p>
                            <p class="text-gray-700 text-sm"> University : {{$team->university}}  </p>
                            <p class="text-gray-700 text-sm"> Experience : {{$team->exprience}} {{ $team->exprience > 1 ? 'Years' :'Year' }} 
                            <p class="text-gray-700 text-sm"> Specialization : {{$team->specializations->name}}</p>
                            </div>
                        <div class="flex items-center  justify-center mt-5">
                            <a href="{{route('appointement')}}" class="  md:block font-semibold p-3 px-6 text-white  rounded-full shadow-md hover:bg-transparent hover:border border-cyan-700 hover:text-cyan-700 baseline bg-cyan-700">@lang('messages.appointement.title')</a>
                        </div>
                    </div>
                    @endforeach                  
                   
                    
            </div>
        </div>
    </section>
     <!-- testimonials-->
     {{-- <div class="flex flex-col  p-5 items-center mx-auto">
      <h1 class="text-center text-xl pt-7  ">@lang('messages.testimonial.title') </h1>
      <p class="text-center text-3xl md:text-4xl mt-5 text-cyan-900">
        @lang('messages.testimonial.paragraph') 
      </p>
    </div>
   <div class="antialiased sans-serif bg-gray-200 text-gray-600"> --}}

    {{-- <div class="my-10 md:my-24 container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
        <div class="relative w-full py-2 md:py-24 bg-cyan-700 md:w-1/2 flex flex-col item-center justify-center">
    
          <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>
    
          <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
            <div class="md:block text-center">
              @lang('messages.testimonial.patients') 
            </div>
            
          </div>
    
          <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
            <button class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
              &#8592;
            </button><button class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
              &#8594;
            </button>
          </div>
        </div>
    
        <div class="bg-gray-100 md:w-1/2">
          <div class="flex flex-col h-full relative">
    
            <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
              <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" /></svg>
            </div>
    
            <div class="h-full relative z-10">
              <div x-show.immediate="testimonialActive === 1">
                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
                  Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                </p>
              </div>
    
              <div x-show.immediate="testimonialActive === 2">
                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
                  Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                </p>
              </div>
    
              <div x-show.immediate="testimonialActive === 3">
                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">
                  Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                </p>
              </div>
            </div>
    
            <div class="flex my-4 justify-center items-center">
              <button @click.prevent="testimonialActive = 1" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2" :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 1 }">JD</button>
              <button @click.prevent="testimonialActive = 2" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-indigo-600 rounded-full mx-2" :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 2 }">WD</button>
              <button @click.prevent="testimonialActive = 3" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-indigo-600 rounded-full mx-2" :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 3 }">JW</button>
            </div>
    
            <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
              <div class="text-center" x-show="testimonialActive == 1">
                <img src="{{asset('storage/img/client-3.jpg')}}" class="rounded-full w-20 h-20 mx-auto mb-3" alt="">
                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Doe</h2>
                <small class="text-gray-500 text-xs md:text-sm truncate">CEO, ABC Inc.</small>
              </div>
    
              <div class="text-center" x-show="testimonialActive == 2">
                <img src="{{asset('storage/img/client-2.jpg')}}" class="rounded-full w-20 h-20 mx-auto mb-3" alt="">
                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Winter Doe</h2>
                <small class="text-gray-500 text-xs md:text-sm truncate">CTO, XYZ Corp.</small>
              </div>
    
              <div class="text-center" x-show="testimonialActive == 3">
                <img src="{{asset('storage/img/client-4.jpg')}}" class="rounded-full w-20 h-20 mx-auto mb-3" alt="">
                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Wick</h2>
                <small class="text-gray-500 text-xs md:text-sm truncate">Product Manager, Fake Corp.</small>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div> --}}
    <div>
      <h1 class="md:block text-center py-5 text-cyan-900 text-4xl">
        @lang('messages.testimonial.patients') 
      </h1>
    </div>
  <div class="grid grid-col-1 md:grid-cols-2  ">
 
        @foreach ($reviews as $review)
          <article class="bg-white p-5 m-5 border-gray-400 border  border-1 shadow-md rounded-md">
              
              <div class="flex items-center mb-4 space-x-2">
                  @if ($review->users->photo)
                  <div class="w-11 h-11 flex-shrink-0 object-cover  object-center rounded-full shadow mr-3">
                      <img src="{{asset('storage/staff/'.$review->users->photo)}}" alt="photo" class="w-full h-full rounded-full "><br>
                  </div>
                  @else
                  <div class="w-11 h-11 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                      <img src="{{asset('storage/img/profile.svg')}}" alt="photo" class="w-full h-full rounded-full "><br>
                  </div>

                  @endif
                  
                  <div class="space-y-1 font-medium dark:text-gray-500">
                      <p>{{$review->users->name}}</p> 
                      <p class="mb-2 text-gray-500 dark:text-gray-400">{{$review->users->email}}</p>

                  </div>
              </div>
              <div class="flex items-center mb-1">

                  @for ($i = 1; $i <= 5; $i++)
                      @if ($i <= $review->rate)
                          <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <title>Star</title>
                              <path d="M10 1l2.472 6.472h7.528l-5.806 4.472L15.472 19 10 15.056 4.528 19l1.778-5.056L0 7.472h7.528z"/>
                          </svg>
                      @else
                          <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <title>Star</title>
                              <path d="M10 1l2.472 6.472h7.528l-5.806 4.472L15.472 19 10 15.056 4.528 19l1.778-5.056L0 7.472h7.528z"/>
                          </svg>
                      @endif
                  @endfor
              </div>
              <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400"><p><time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Reviewd on {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}  </time></p></p></footer>
              
              <p class="mb-2 text-gray-500 dark:text-gray-400">{{$review->review}}</p>

              <aside>
                  <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Joined On {{$review->created_at}}</p>
                  <div class="flex items-center mt-3 space-x-3 divide-x divide-gray-200 dark:divide-gray-600">
                      

                    @if(auth()->check() && auth()->user()->role === "patient")

                    <a href="#" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-xs px-2 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"  data-modal-target="createReview" data-modal-toggle="createReview">create review</a>
                    <a href="#" data-modal-target="deleteReview" data-modal-toggle="deleteReview" class="text-white bg-white border border-gray-300 focus:outline-none hover:bg-red-200 focus:ring-4 focus:ring-white font-medium rounded-lg text-xs px-2 py-1.5 dark:bg-red-800 hover:text-white dark:border-gray-600 dark:hover:bg-red-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">delete review</a>                    

                    @endif
                   
                      

                  </div>
              </aside>
          </article>
        @endforeach
     

  </div>
    <!-- testimonials-->
  <!-- footer -->   
  @extends('layouts.footer')
  <!-- footer -->
  <!-- create  review -->
  <div id="createReview" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative max-w-lg h-full m-6 ">
        <!-- Modal content -->
        <div class="relative bg-white  rounded-lg shadow ">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="createReview">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-1 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Write Review </h3>
                <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

            <!-- modal body -->
            <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                {{-- --}}
                <form method="post"  enctype="multipart/form-data" action="{{route("patient.store_reviews")}} ">
                    @csrf
                    @method("POST")
                    <!-- firstname & lastname -->
                    <div class="grid grid-col-1 gap-2">
                        <!-- textarea -->
                        <div class="w-full group">
                            <label for="">Review : <span class="text-red-700">*</span></label>
                            <textarea name="review" id="review"  class="block mt-1 p-2.5  mb-2 w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"></textarea>

                        </div>
                        <!-- rate -->
                        <div class="w-full group rating-stars">
                            <span class="star" data-value="1"> <input type="radio" value="1" name="rate" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="2"> <input type="radio" value="2" name="rate" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="3"> <input type="radio" value="3" name="rate" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="4"> <input type="radio" value="4" name="rate" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="5"> <input type="radio" value="5" name="rate" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                        </div> 
                      
                    </div>

                   <!-- modal footer -->
                    <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                        <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                        <button data-modal-hide="createReview" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>
                </form>     
               
            </div>
                 
                
            </div>
        </div>
    </div>
  
 </div>
  

  <!-- deletereview -->
  <div id="deleteReview" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative max-w-lg h-full m-6 ">
        <!-- Modal content -->
        <div class="relative bg-white  rounded-lg shadow ">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="deleteReview">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-2 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Delete Review </h3>
                <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

            <!-- modal body -->
            <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                <form method="post"  enctype="multipart/form-data" action="{{route("patient.delete_reviews",$review->id)}}">

                    @csrf
                    @method("DELETE")

                <!-- modal footer -->
                <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                    <button data-modal-hide="deleteReview" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
                </form>
                
                        
               
            </div>
                  
            </div>
        </div>
    </div>
 </div>
  <script >
    ScrollReveal().reveal('.headline')
    ScrollReveal().reveal('.headline', { delay: 500 });

  </script>

<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</body>
</html>