<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'WeCare') }}</title>
        <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">


        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
           
          
        <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
        </script>
        <script type="text/javascript">
        (function(){
            emailjs.init("870rIKwVrqYwt_f4F");
        })();
        </script>
        <!-- JQUERY -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <!-- Include Owl Carousel CSS and JavaScript files -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- JQUERY -->
    
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
    <body class="antialiased">
       

    <!-- navbar -->
     
        @extends('layouts.navbar')

    <!-- navbar -->

  <!-- ====== Hero Section Start -->
    <div class="relative bg-cyan-50 py-24">
    <div class="container mx-auto">
      <div class=" flex flex-wrap">
        <div class="w-full lg:w-5/12">
          <div class=" grid grid-cols-1 md:grid-col-2  ">
  
            <div  class="wow slideInLeft" data-wow-duration="3s" data-wow-delay="0.2s">
                 
              <h1 class=" capitalize text-center md:text-left text-3xl md:text-5xl font-bold 
              darkblue
              
              mt-10"
              >
             

                  <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 wow backInDown">
                  @lang('messages.hero.welcome')
                  </span>
                  @lang('messages.hero.about')
              </h1>
              

              <p class=" mt-8 text-center md:text-left  md:text-2xl   text-gray-500 font-light ">
                @lang('messages.hero.paragraph')
              </p>
              <div class="flex items-end md:justify-start justify-center mt-10 ">
                <a href="#appointement" class="  md:block font-semibold  p-3 px-6 text-white  rounded-full shadow-md hover:bg-cyan-600 baseline bg-cyan-700">          
                  
                  @lang('messages.hero.appointement')
                </a>
              </div>
            </div>
           
          </div>
        </div>
        <div class="hidden px-4 lg:block lg:w-1/12"></div>
        <div class="w-full px-4 lg:w-6/12 mt-24">
          <div class="lg:ml-auto lg:text-right">
            <div class="relative z-10 inline-block pt-11 lg:pt-0 
                wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.2s" >
              <img
                src="{{asset('storage/img/doctor.jpg')}}"
                alt="hero 2"
                class="max-w-full hidden md:block  rounded-lg lg:ml-auto"
              />
              <span class="hidden md:block absolute -left-8 -bottom-8 z-[-1]">
                <svg
                  width="93"
                  height="93"
                  viewBox="0 0 93 93"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                  <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                </svg>
              </span>
            </div>
  
          </div>
        </div>
      </div>
    </div>
    </div> 
    <!-- Home -->
  
      <!-- about us -->
       <section id="about" class="container mt-10  mx-auto ">
       
        <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-2 ">
            <div class="  flex items-center mt-5  ">
              <img src="{{asset('storage/img/aboutus.svg')}}" class=" hidden md:hidden lg:block wow fadeInLeft  "  data-wow-duration="2.5s" data-wow-delay="2s" alt="">
            </div>
  
            <div class="my-10 mx-10 max-w-full  wow fadeInRight " data-wow-duration="3s" data-wow-delay="1s">
              <h1 class=" text-gray-700 capitalize text-2xl md:my-5 text-center md:text-left ">@lang('messages.about.title')</h1>
              <h1 class="text-cyan-900 text-center  text-xl  md:text-left md:text-3xl my-5 capitalize">@lang('messages.about.book')</h1>
              <p class="font-light mb-3 text-justify">
                @lang('messages.about.feature')</p>
              <ol class="flex flex-col mx-5  md:flex-row md:justify-between md:items-center  list-disc   font-bold text-xs">
                <li class="mb-2  " > @lang('messages.about.services.0')</li>
                <li class="mb-2 " >@lang('messages.about.services.1')</li>
                <li class="mb-2 " >@lang('messages.about.services.2')</li>
                <li class="mb-2 " >@lang('messages.about.services.3')</li>
              </ol>
              <div class="flex items-end md:justify-start sm:justify-center mt-10">
                <a href="{{route('contact')}}" class="  md:block font-semibold p-3 px-6 text-white  rounded-full shadow-md hover:bg-transparent hover:border border-cyan-700 hover:text-cyan-700 baseline bg-cyan-700">  @lang('messages.about.contact')</a>
              </div>
            </div>
           
        </div>
  
      </section>
      <!-- about us -->
  
      <!-- working process -->
      <div class="p-5 md:p-20 bg-cyan-50 w-full  ">
        <div class="text-center">
            <h1 class="text-xl md:text-2xl text-cyan-800">@lang('messages.working.title') </h1>
            <h2 class="text-3xl md:text-5xl text-cyan-700 mt-5">@lang('messages.working.work')</h2>
        </div>
          <div class="grid grid-col-1 md:grid-cols-3 gap-5 my-5     ">
  
            <div class="text-center bg-white  shadow-lg p-8 rounded-tr-none rounded-r-3xl " >
              <h3>
                <img src="{{asset('storage/img/onesvg.svg')}}" class="w-20 h-20 mx-auto  mb-4" alt="">
              </h3>
              <h4 class="text-2xl text-cyan-900 my-5">@lang('messages.working.regsitration.0')</h4>
              <p class="font-light ">@lang('messages.working.regsitration.1')</p>
            </div>
            <div class="text-center bg-white  shadow-lg p-8 rounded-tr-none rounded-r-3xl " >
              <h3>
                <img src="{{asset('storage/img/two.svg')}}" class="w-20 h-20 mx-auto  mb-4" alt="">
              </h3>
              <h4 class="text-2xl text-cyan-900 my-5">@lang('messages.working.appointment.0')</h4>
              <p class="font-light ">@lang('messages.working.appointment.1')</p>
            </div>
            <div class="text-center bg-white  shadow-lg p-8 rounded-tr-none rounded-r-3xl " >
              <h3>
                <img src="{{asset('storage/img/threee.svg')}}" class="w-20 h-20 mx-auto  mb-4" alt="">
              </h3>
              <h4 class="text-2xl text-cyan-900 my-5">@lang('messages.working.treatement.0')</h4>
              <p class="font-light ">@lang('messages.working.treatement.1')</p>
            </div>
  
           
  
          </div>
  
      </div>
      <!-- working progress -->    
      <!-- doctor -->
      <section class="bg-cyan-50 ">
          <div class="grid grid-cols-1 md:grid-cols-2 ">
                  <div class=" mt-10">
                      <img src="{{asset('storage/img/doctor-preview.png')}}" class="h-auto max-w-full   mx-auto" alt="doctor">
                  </div>
                  
                  <div class="m-5 md:mt-40 wow slideInDown"  data-wow-duration="2s" data-wow-delay=".2s">
                          <h1 class="text-cyan-900 text-3xl md:text-4xl mb-5 font-bold text-left   ">@lang('messages.doctorSection.title')</h1>
                          <p class="text-gray-500 font-light  ">
                            @lang('messages.doctorSection.paragraph')
                          
                          </p>
                     
                      <div class="flex justify-start">
                          <a href="#appointement" class=" bg-cyan-700 text-center   mt-5   p-3 px-6 text-white  rounded-full baseline "  id="appointement-btn">
                            @lang('messages.hero.appointement')
                          </a>
                      </div>
                  </div>        
          </div>
          <div class="grid grid-col-1 md:grid-cols-2  ">
              <div class="container  p-5 ">
                  <h1 class="text-cyan-900 text-3xl md:text-4xl font-bold  pb-5 md:text-justify ">
                    @lang('messages.doctorSection.title2')
                  </h1>
                  <p class="text-gray-500 font-light max-w-lg">
                    @lang('messages.doctorSection.paragraph2')
                  </p>
              </div>
  
              <div class="grid grid-col-2 m-5  ">
                <div class="mb-2">
                          
                  <i class="fas fa-ship  bg-cyan-900 p-2 rounded-full text-white" aria-hidden="true"></i>
                  <p class="text-gray-500 font-light ">
                    @lang('messages.doctorSection.icon1')
                  </p>
              </div>
              <div class="my-2">
                  <i class="fa-solid fa-handshake  bg-cyan-900 p-2 rounded-full text-white"></i>
  
                  <p class="text-gray-500 font-light  ">
                    @lang('messages.doctorSection.icon2')
                  </p>
              </div>
              <div class="my-2">
                  <i class="fa-solid fa-hourglass-start  bg-cyan-900 p-2 rounded-full text-white"></i>
                  <p class="text-gray-500 font-light ">
                    @lang('messages.doctorSection.icon3')

                  </p>
              
              </div>
              </div>
             
          </div>
         
      </section>
      <!-- doctor -->
  
     <!-- testimonials-->
     <div class="flex flex-col  p-5 items-center mx-auto">
        <h1 class="text-center text-xl pt-7  ">@lang('messages.testimonial.title') </h1>
        <p class="text-center text-3xl md:text-4xl mt-5 text-cyan-900">
          @lang('messages.testimonial.paragraph') 
        </p>
      </div>
     <div class="antialiased sans-serif bg-gray-200 text-gray-600">
  
      <div class="my-10 md:my-24 container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
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
    
    </div>
     <!-- testimonials-->
  
      <!-- appointement -->
    <section id="appointement"  class="container my-20 mx-auto ">
      <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1  md:rounded-tr-3xl md:rounded-bl-3xl bg-gradient-to-r to-emerald-800 from-sky-400 shadow-lg overflow-hidden   p-5 my-5 md:mx-10  " style="border-bottom: 40px !important;">
          <div >
              <img src="{{asset('storage/img/appointment.png')}}" class="h-auto max-w-full  hidden md:block " alt="">
          </div>
          
          <div>
              <h1  class="text-white text-2xl md:text-3xl my-5 text-center font-semibold">@lang('messages.appointement.title') </h1>
              <div class="container mx-auto px-4">
                <form class="bg-transparent  md:px-8 pt-6 pb-8 mb-4 " method="POST" >
                      <div class="mb-4 ">
                        <div class="flex justify-between">
                          <div class="w-1/2 pr-2">
                            <label class="block text-white font-bold mb-2" for="last-name">
                              @lang('messages.appointement.firstname')
                            </label>
                            <input  type="text"  id="firstname" name="firstname" class="block mt-1 py-4  px-4  w-full text-sm   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="@lang('messages.appointement.firstname') " required />
  
                          </div>
                          <div class="w-1/2 pl-2">
                            <label class="block text-white font-bold mb-2" for="last-name">
                              @lang('messages.appointement.lastname')
                            </label>
                            <input  type="text" id="lastname" name="lastname"  class="block mt-1 py-4  px-4  w-full text-sm   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="@lang('messages.appointement.lastname')" required />
  
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <label class="block text-white font-bold mb-2" for="email">
                          @lang('messages.appointement.email')
                        </label>
                        <input  type="email" name="email" id="email" class="block mt-1 py-4  px-4  w-full text-sm   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="@lang('messages.appointement.email')" required />
  
                      </div>
                      
                      <div class="mb-4">
                        <div class="flex justify-between">
                          <div class="w-1/2 pr-2">
                            <label class="block text-white font-bold mb-2" for="select">
                              @lang('messages.appointement.doctor')
                            </label>
                            <select id="doctor"  name="doctor" class="block mt-1 py-4  px-4  w-full text-sm text-gray-400  bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="select">
                              <option>Dr.Teddy Thomas</option>
                              <option>Dr.Smith Franky</option>
                            </select>
                          </div>
                          <div class="w-1/2 pl-2">
                            <label class="block text-white font-bold mb-2" for="datetime">
                              @lang('messages.appointement.date')

                            </label>
                            <input id="date" class="block mt-1 py-4  px-4  w-full text-sm text-white  bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="datetime" type="datetime-local">
                          </div>
                        </div>
                      </div>
                      <div class="flex justify-center sm:justify-center mt-10">
                        <button type="submit"  class="   font-semibold py-3 px-4  text-cyan-800  rounded-full shadow-md  hover:shadow-lg baseline bg-white transform transition duration-500 hover:scale-110 ">@lang('messages.appointement.appointement_now')  </button>
                      </div>
  
                </form>
              </div>
        
              
          </div>
  
      </div>
  
    </section>
    <!--location -->
    <section class=" py-5  ">
      <h1 class="text-3xl text-center my-5 text-cyan-800 wow bounceInLeft">@lang('messages.appointement.date')
        @lang('messages.map.title')
      </h1>
      <div class="flex justify-end">
        <div class=" flex-row justify-between">
          
          <button id="btn-map" class="mx-2 bg-gray-900 text-white px-3 mb-1 rounded-sm hover:bg-gray-800">@lang('messages.map.btn')</button>
          
        </div>
        
      </div>
      <div class="flex justify-center " >
        
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439.997824353861!2d-9.592904325444596!3d30.43616359990697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b689cd67ef67%3A0x20ea428cc876870d!2sHopital%20Hassan%202!5e0!3m2!1sen!2sma!4v1682710877896!5m2!1sen!2sma"  height="450" style="border:0;width: 1500px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
      </div>
      
    </section>
   <!-- our sponsores -->
   <section class="container mx-auto ">
    <h1 class="text-center text-3xl my-5  text-cyan-800 wow bounceInLeft">
      @lang('messages.sponsors.title')
    </h1>
    <div class="slider flex flex-col">
      <div class="slide-track">
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
        </div>
        <div class="slide">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
        </div>
      </div>
    </div>
  </section>
  
    <!-- footer -->   
  @extends('layouts.footer')
  <!-- footer -->

   {{-- <script>
      // Dark Mode Map
      const btnMap = document.getElementById("btn-map");
      const darkMap = document.getElementById("map");

      btnMap.addEventListener('click',()=>{
        
        console.log('clicked');
          darkMap.classList.toggle('dark')

      })
   </script> --}}
         <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </body>
</html>
