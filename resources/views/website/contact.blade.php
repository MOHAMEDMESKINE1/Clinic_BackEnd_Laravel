<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    {{-- {!! ReCaptcha::htmlScriptTagJsApi() !!} --}}

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="https://cdn.tailwindcss.com"></script>

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
<body>
      <!-- navbar -->
      @extends('layouts.navbar')

    <!-- navbar -->
      
    <section class="bg-cyan-50 py-5 mt-10 headline">
        <div class="container  mx-auto">
            <div class="flex flex-col pt-5 items-center text-cyan-800 mx-auto ">
                <h1 class="text-center text-4xl text-cyan-800  font-bold mb-4 mt-10 wow bounce" data-wow-duration="3s" data-wow-delay=".2s">@lang('messages.contact.title')</h1>
                <h3 class="text-center "> <a href="/">@lang('messages.contact.home')</a> / <a href="#">@lang('messages.contact.title')</a></h3>
            </div>
        </div>
        <div class="grid grid-col-1 md:grid-cols-2  md:rounded-tr-3xl md:rounded-bl-3xl bg-gradient-to-r to-emerald-800 from-sky-400 shadow-lg overflow-hidden   md:p-5 my-5 md:mx-10  " style="border-bottom: 40px !important;">
          
        
            <div class=" hidden md:block mt-24">
              <img src="{{asset('storage/img/contact.svg')}}"  alt="">
            </div>

            <div class="container  mx-auto md:px-4  m-5">
              @if ($errors->any())
              <div class="text-yellow-500 mx-5">
                 {{-- <strong>Errors!</strong> <br> --}}
                 <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                 </ul>
              </div>
              @endif
              <form class="bg-transparent m-5  md:px-8 pt-6 pb-8 mb-4 " method="POST"  action="{{route('store.contact')}}">
                    @csrf
                    <div class="mb-4 ">
                          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 mt-10">
                          
                            <div class="mb-8 ">
                              <label for="name" class="block mb-2  font-bold  dark:text-white">@lang('messages.contact.name') <b class="text-orange-600">*</b></label>
                              <input type="text" name="name" id="name" value="{{ old('name') }}" class="block mt-1 py-4   px-4  w-full text-sm bg-white  text-gray-900 bg-transparent border-2  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder=" @lang('messages.contact.name') " required />
  
                            </div>
                            <div class="mb-8">
                              <label for="email" class="block mb-2  font-bold  dark:text-white">@lang('messages.contact.email') <b class="text-orange-600">*</b></label>
                              <input type="email" name="email" id="email" value="{{ old('email') }}" class="block mt-1 py-4   px-4  w-full text-sm bg-white  text-gray-900 bg-transparent border-2  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="example@gmail.com " required />
      
                            </div>
                            
                           
                            
                          </div>
                          <div class="mb-8">
                            <label for="number" class="block mb-2  font-bold  dark:text-white">@lang('messages.contact.phone')<b class="text-orange-600">*</b></label>
                            <input type="number" name="number" id="number" value="{{ old('number') }}" class="block mt-1 py-4   px-4  w-full text-sm bg-white  text-gray-900  bg-transparent border-2  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="+212 00 00 00 00 " required />
    
                          </div>
                          <div class="mb-8">
                            <label for="message" class="block mb-2  font-bold  dark:text-white">@lang('messages.contact.message') <b class="text-orange-600">*</b></label>
                            <textarea id="message" name="message" rows="4"  class="block mt-1 py-4  px-4  w-full text-sm bg-white  text-gray-900  bg-transparent border-2  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="@lang('messages.contact.message')">{{ old('message') }}</textarea>
                                                          
                          </div>
                          <div class="mb-8">
                            <span  class="block mb-2  font-bold  dark:text-white">@lang('messages.contact.recaptcha') <b class="text-orange-600">*</b></span>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                          </div>
                      
                      </div>
       
                    <div class="flex justify-center  md:justify-end  mt-10">
                      <input  type="submit" class="hover:cursor-pointer   font-semibold py-3 px-8  text-cyan-800  rounded-full shadow-md  hover:shadow-lg baseline bg-white transform transition duration-200 hover:scale-110 " value="@lang('messages.contact.btn')"/>
                    </div>

              </form>
            </div>
        </div>
       
    </section>
  <!-- contacts -->
  <section class="">
    <div class="container mx-auto ">
        <div class="grid grid-col-1 md:grid-cols-3 gap-2 my-5">
            <div class="bg-white border border-gray-100 shadow-md md:shadow-lg shadow-slate-400 rounded-md  p-10">
              <i class="fas fa-solid fa-phone text-3xl text-cyan-900 mb-2  p-2 py-1 md:mr-2 bg-cyan-50 rounded-full border border-cyan-500 "></i>
              <h1 class="text-2xl font-semibold text-cyan-800 mb-3">@lang('messages.contact.phone')</h1>
              <span>+212 7 04 28 29 27</span>
            </div>
            <div class="bg-white border border-gray-100 shadow-md md:shadow-lg shadow-slate-400 rounded-md  p-10">
              <i class="fas fa-solid fa-envelope text-3xl text-cyan-900 mb-2  p-2 py-1 md:mr-2 bg-cyan-50 rounded-full border border-cyan-500 "></i>
              <h1 class="text-2xl font-semibold text-cyan-800 mb-3">@lang('messages.contact.email')</h1>
              <span>wecare@gmail.com</span>
            </div>
            <div class="bg-white border border-gray-100 shadow-md md:shadow-lg shadow-slate-400 rounded-md  p-10">
              <i class=" fa-solid fa-location-dot text-3xl text-cyan-900 mb-2  p-2 py-1 md:mr-2 bg-cyan-50 rounded-full border border-cyan-500 "></i>
              <h1 class="text-2xl font-semibold text-cyan-800 mb-3">@lang('messages.contact.address')</h1>
              <span>N°1 Morocco ,Tiznit Agadir .</span>
            </div>
      </div>
    </div>
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