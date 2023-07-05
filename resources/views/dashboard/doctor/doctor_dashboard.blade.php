
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Doctor Dashboard </title>
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
    rel="stylesheet"
  />
    <!-- translate -->
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <!-- translate -->
    <script>
      function loadGoogleTranslate()
      {
        new google.translate.TranslateElement("languages")
      }

   
    </script>
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
  <body >


  <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
      <!-- Loading screen -->
      <div
        x-ref="loading"
        class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker"
      >
        Loading.....
      </div>
      <!-- Sidebar -->
      <aside class="flex-shrink-0 hidden w-64 bg-white   border-r dark:border-primary-darker  md:block ">
        <div class="flex flex-col h-full">
          <!-- Sidebar links -->
          <nav aria-label="Main" class="flex-1 px-2 py-2 overflow-y-hidden  ">
            <!-- Dashboards links -->
            <div class=" " x-data="{ isActive: true, open: true}">
              <a href="{{url("/")}}" class="flex justify-start ml-2 text-sm "> 
                <img src="{{asset('storage/img/logo-hoptial.svg')}}" class="w-7 h-7 max-w-md mx-5" alt="photo" >
                <h1 class=" mt-2">
                  We<b class="text-cyan-500">Care</b>
                </h1>
                </h1>
             </div>

           
              </a>
              <div role="menu" x-show="open" class="mt-5 space-y-5 px-5" aria-label="Dashboards">
                <a
                  href="{{route('doctor.statistics')}}"
                  role="menuitem"
                  class="block hover:shadow-md hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                >
                <i class="fas fa-light fa-gauge p-1"></i>
                  Dashboard
                </a>
               
              
                <a
                  href="{{route('doctor.appointements')}}"
                  role="menuitem"
                  class="block hover:shadow-md hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                >
                <i class="fas fa-light fa-calendar-check p-1"></i>
                  Appointements
                </a>
                <a
                  href="{{route('doctor.transactions')}}"
                  role="menuitem"
                  class="block hover:shadow-md hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                >
                <i class="fas fa-light fa-money-bill p-1"></i>
                  Transactions
                </a>
               
                <a
                  href="{{route('doctor.visits')}}"
                  role="menuitem"
                  class="block hover:shadow-md hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                >
                <i class="fas fa-light fa-bed  p-1"></i>
                  Visits
                </a>
                <a
                  href="{{route('doctor.schedules')}}"
                  role="menuitem"
                  class="block hover:shadow-md hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                >
                <i class="fas fa-solid fa-fax p-1"></i>
                
                My Schedule
                </a>
                <a
                  href="{{route('doctor.live_consultations')}}"
                  role="menuitem"
                  class="block hover:shadow-md hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                >
                <i class="fas fa-light fa-video p-1"></i>
                
                Live Consultation
              
              </a>
                <a
                  href="{{route('doctor.holidays')}}"
                  role="menuitem"
                  class="block hover:shadow-md hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                >
                <i class="fas fa-light fa-calendar-xmark"></i>                  
                 Holiday
                </a>
                <!-- Logout links -->
                
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <a class="block hover:shadow-md hover:cursor-pointer hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                  
                   :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      <i class="fas fa-light fa-right-from-bracket p-1"></i> {{ __('Log Out') }}
                  </a>
              </form>       
              </div>
            </div>

           
          

        
           
          </nav>
        </div>
      </aside>

      <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
        <!-- Navbar -->
        <header class="relative bg-white dark:bg-darker">
          <div class="flex items-center justify-between p-2 border-b dark:border-primary-darker">
            <!-- Mobile menu button -->
            <button
              @click="isMobileMainMenuOpen = !isMobileMainMenuOpen"
              class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark md:hidden focus:outline-none focus:ring"
            >
              <span class="sr-only">Open main manu</span>
              <span aria-hidden="true">
                <svg
                  class="w-8 h-8"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </span>
            </button>

            <!-- Brand -->
            <a
              href="index.html"
              class="inline-block text-2xl  font-light tracking-wider capitalize text-cyan-900 dark:text-light"
            >
            Doctor Dashboard 

             
            </a>
          
            <!-- Mobile sub menu button -->
            <button
              @click="isMobileSubMenuOpen = !isMobileSubMenuOpen"
              class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark md:hidden focus:outline-none focus:ring"
            >
              <span class="sr-only">Open sub manu</span>
              <span aria-hidden="true">
                <svg
                  class="w-8 h-8"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                  />
                </svg>
              </span>
            </button>

            <!-- Desktop Right buttons -->
            <nav aria-label="Secondary" class="hidden space-x-2 md:flex md:items-center">

              <!-- User avatar button -->
              <div class="relative " x-data="{ open: false }">
                <button
                  @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                  type="button"
                  aria-haspopup="true"
                  :aria-expanded="open ? 'true' : 'false'"
                  class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100"
                >
                  <span class="sr-only">User menu</span>
                  <img class="w-10 h-10 mr-5 border border-cyan-50 rounded-full" src="build/images/avatar.jpg" alt="Ahmed Kamel" />
                </button>

                <!-- User dropdown menu -->
                <div
                  x-show="open"
                  x-ref="userMenu"
                  x-transition:enter="transition-all transform ease-out"
                  x-transition:enter-start="translate-y-1/2 opacity-0"
                  x-transition:enter-end="translate-y-0 opacity-100"
                  x-transition:leave="transition-all transform ease-in"
                  x-transition:leave-start="translate-y-0 opacity-100"
                  x-transition:leave-end="translate-y-1/2 opacity-0"
                  @click.away="open = false"
                  @keydown.escape="open = false"
                  class="absolute right-0 w-48 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                  tabindex="-1"
                  role="menu"
                  aria-orientation="vertical"
                  aria-label="User menu"
                >
                <a
                href="../doctor/profile.html"
                role="menuitem"
                class="block  hover:shadow-sm px-4 py-2 text-sm  text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
              >
                Your Profile
              </a>
              <a
                data-modal-target="changePassword"
                data-modal-toggle="changePassword" 
                href="#"
                role="menuitem"
                type="button"
                class="block  hover:shadow-sm px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
              >
                Change Password
              </a>
             
              <a
                href="#"
                role="menuitem"
                class="block  hover:shadow-sm px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
              >
              <h4>Translate</h4>
              <div class="" id="languages" ></div>
              </a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="block hover:shadow-md hover:cursor-pointer hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                
                 :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="fas fa-light fa-right-from-bracket p-1"></i> {{ __('Log Out') }}
                </a>
            </form>   

                </div>
              </div>
            </nav>

            <!-- Mobile sub menu -->
            <nav
              x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500"
              x-transition:enter-start="-translate-y-full opacity-0"
              x-transition:enter-end="translate-y-0 opacity-100"
              x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
              x-transition:leave-start="translate-y-0 opacity-100"
              x-transition:leave-end="-translate-y-full opacity-0"
              x-show="isMobileSubMenuOpen"
              @click.away="isMobileSubMenuOpen = false"
              class="absolute flex items-center p-4 bg-white rounded-md shadow-lg dark:bg-darker top-16 inset-x-4 md:hidden"
              aria-label="Secondary"
            >
              <!-- User avatar button -->
              <div class="relative ml-auto" x-data="{ open: false }">
                <button
                  @click="open = !open"
                  type="button"
                  aria-haspopup="true"
                  :aria-expanded="open ? 'true' : 'false'"
                  class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100"
                >
                  <span class="sr-only">User menu</span>
                  <img class="w-10 h-10 rounded-full" src="build/images/avatar.jpg" alt="Ahmed Kamel" />
                </button>

                <!-- User dropdown menu -->
                <div
                  x-show="open"
                  x-transition:enter="transition-all transform ease-out"
                  x-transition:enter-start="translate-y-1/2 opacity-0"
                  x-transition:enter-end="translate-y-0 opacity-100"
                  x-transition:leave="transition-all transform ease-in"
                  x-transition:leave-start="translate-y-0 opacity-100"
                  x-transition:leave-end="translate-y-1/2 opacity-0"
                  @click.away="open = false"
                  class="absolute right-0 w-48 py-1 origin-top-right bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark"
                  role="menu"
                  aria-orientation="vertical"
                  aria-label="User menu"
                >
                  <a
                    href="#"
                    role="menuitem"
                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
                  >
                    Your Profile
                  </a>
                  <a
                    href="#"
                    role="menuitem"
                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
                  >
                    Settings
                  </a>
                  <!-- Logout links -->
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
  
                    <a class="block hover:shadow-md hover:cursor-pointer hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                    
                     :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="fas fa-light fa-right-from-bracket p-1"></i> {{ __('Log Out') }}
                    </a>
                </form>   
                </div>
              </div>
            </nav>
          </div>
          <!-- Mobile main manu -->
          <div
            class="border-b md:hidden dark:border-primary-darker"
            x-show="isMobileMainMenuOpen"
            @click.away="isMobileMainMenuOpen = false"
          >
            <nav aria-label="Main" class="px-2 py-4 space-y-2">
              <!-- Dashboards links -->
              <div x-data="{ isActive: true, open: true}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a
                  href="#"
                  @click="$event.preventDefault(); open = !open"
                  class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                  :class="{'bg-primary-100 dark:bg-primary': isActive || open}"
                  role="button"
                  aria-haspopup="true"
                  :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                <div class="flex justify-start ml-2 text-sm mx-5"> 
                    <img src="../admin/imgs/hospital.png" class="w-8 h-8" alt="photo" >
                    <span class="mx-2 mt-2">
                      We<b class="text-cyan-500">Care</b>
                    </span>
                 </div>
                
                </a>
                <div role="menu" x-show="open" class="mt-2 space-y-2 " aria-label="Dashboards">
                
                  <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden  ">
                    <div x-data="{ isActive: true, open: true}">
                      </a>
                      <div role="menu" x-show="open" class="mt-2 space-y-2 px-5" aria-label="Dashboards">
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-light fa-gauge p-1"></i>
                          Dashboard
                        </a>
                        
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4  hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas p-1 fa-light fa-hospital-user"></i>
                          Patients
                        </a>
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-light fa-calendar-check p-1"></i>
                          Appointements
                        </a>
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-light fa-money-bill p-1"></i>
                          Transactions
                        </a>
                       
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-light fa-bed  p-1"></i>
                          Visits
                        </a>
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-solid fa-fax p-1"></i>
                        
                        Services
                        </a>
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-light fa-user-shield p-1"></i>
                        
                        Specializations
                        </a>
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-sharp fa-solid fa-s p-1"></i>                  
                        Subscribers
                        </a>
                        <a
                          href="#"
                          role="menuitem"
                          class="block hover:border   hover:shadow-md border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                        >
                        <i class="fas fa-light fa-gears p-1"></i>
                        
                        Settings
                        </a>
                       
                      </div>
                    </div>
      
                   
                  
      
                    <!-- Logout links -->
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
    
                      <a class="block hover:shadow-md hover:cursor-pointer hover:border  border-l-gray-600 hover:border-l-4   hover:bg-gray-200 hover:font-semibold active:bg-gray-50 p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                      
                       :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          <i class="fas fa-light fa-right-from-bracket p-1"></i> {{ __('Log Out') }}
                      </a>
                  </form>   
                  </nav>
                </div>
              </div>

              
            </nav>
          </div>
        </header>

        <!-- Main content -->
        <main class="container ">
          @yield('content')
       
        </main>

     
      </div>

     
    
    
    </div>
  </div>


<!-- changePassword -->
<div id="changePassword" tabindex="-1" aria-hidden="true" class="fixed  top-0 left-0 right-0 z-10 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
<div class="relative w-full max-w-md max-h-full ">
    <!-- Modal content -->
    <div class="relative bg-white w-full h-full rounded-lg shadow ">
        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="changePassword">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close modal</span>
        </button>
        <div class="px-6 py-2 lg:px-8">
            <h3 class="mb-1 text-xl font-medium text-cyan-900 text-left mt-5">Change Password</h3>
            <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

        <!-- modal body -->
          <div class="grid grid-col-1 ">
            <form class="mt-8">
              <div class="mx-auto ">
              <!-- passowrd -->

                <div class="py-2" x-data="{ show: true }">
                  <p class="px-1 text-sm text-gray-600">Current Password  :<span class="text-red-700">*</span> </p>
                  <div class="relative">
                    <input placeholder="" :type="show ? 'password' : 'text'" name="current_password" class="text-md block px-3 py-2 rounded-lg w-full 
                   border-gray-300 
                  ">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
  
                      <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                        :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 576 512">
                        <path fill="currentColor"
                          d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                        </path>
                      </svg>
  
                      <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                        :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 640 512">
                        <path fill="currentColor"
                          d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                        </path>
                      </svg>
  
                    </div>

                  </div>
                </div>
                 <!--Change passowrd -->

                 <div class="py-2" x-data="{ show: true }">
                  <p class="px-1 text-sm text-gray-600">Change Password :<span class="text-red-700">*</span> </p>
                  <div class="relative">
                    <input placeholder="" :type="show ? 'password' : 'text'" name="change_password" class="text-md block px-3 py-2 rounded-lg w-full 
                   border-gray-300
                ">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
  
                      <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                        :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 576 512">
                        <path fill="currentColor"
                          d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                        </path>
                      </svg>
  
                      <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                        :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 640 512">
                        <path fill="currentColor"
                          d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                        </path>
                      </svg>
  
                    </div>

                  </div>
                </div>
                   <!-- Confirm passowrd -->

                   <div class="py-2" x-data="{ show: true }">
                    <p class="px-1 text-sm text-gray-600">Confirm Password :<span class="text-red-700">*</span> </p>
                    <div class="relative">
                      <input placeholder="" :type="show ? 'password' : 'text'"  name="confirm_password" class="text-md block px-3 py-2 rounded-lg w-full 
                     border-gray-300 
                    ">
                      <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
    
                        <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                          :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                          viewbox="0 0 576 512">
                          <path fill="currentColor"
                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                          </path>
                        </svg>
    
                        <svg class="h-4 text-gray-700" fill="none" @click="show = !show"
                          :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                          viewbox="0 0 640 512">
                          <path fill="currentColor"
                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                          </path>
                        </svg>
    
                      </div>

                    </div>
                  </div> 
              </div>
            </form>
          </div>
        <!-- modal footer -->
        <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
            <button data-modal-hide="changePassword" type="submit" class="text-white   mr-2 bg-indigo-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
            <button data-modal-hide="changePassword" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
        </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}



   

<script >
      
  const setup = () => {
   

   
    return {
      loading: true,
      toggleSidbarMenu() {
        this.isSidebarOpen = !this.isSidebarOpen
      },
      //          
      isMobileSubMenuOpen: false,
      openMobileSubMenu() {
        this.isMobileSubMenuOpen = true
        this.$nextTick(() => {
          this.$refs.mobileSubMenu.focus()
        })
      },
      isMobileMainMenuOpen: false,
      openMobileMainMenu() {
        this.isMobileMainMenuOpen = true
        this.$nextTick(() => {
          this.$refs.mobileMainMenu.focus()
        })
      },

    }
   

  }
</script>
  </body>
</html>
