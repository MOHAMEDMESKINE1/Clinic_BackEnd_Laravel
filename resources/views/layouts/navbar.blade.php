<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="bg-white   border-gray-200 dark:bg-cyan-50   fixed w-full z-20 top-0 left-0 nav ">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4  ">
        <a href="#home" class="flex items-center">
            <img src="{{asset('storage/img/logo-hoptial.svg')}}" class="h-10 w-10 mx-5 " alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">WeCare</span>
        </a>

        <div class="flex flex-row md:order-2">
            {{-- <a href="#login"  class="text-white hidden lg:block md:block sm:hidden bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-full  text-sm px-6 p-3 text-center mr-3 md:mr-0 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Login</a> --}}
           
            


            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-100 dark:text-cyan-500 hover:bg-cyan-900 dark:focus:ring-cyan-50" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>


        
        <div class="items-center justify-center hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0   ">
            <li>
                <a href="/" class="block py-2 pl-3 pr-4 text-white bg-cyan-700 rounded md:bg-transparent md:text-cyan-700 md:p-0 md:dark:text-cyan-700" aria-current="page">Home</a>
            </li>
            
            <li>
                <a href="{{route('ourteam')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-cyan-700 md:p-0 md:dark:hover:text-cyan-500   dark:hover:text-cyan-900 md:dark:hover:bg-transparent ">Our Team</a>
            </li>
            <li>
                <a href="{{route('services')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-cyan-700 md:p-0 md:dark:hover:text-cyan-500   dark:hover:text-cyan-900 md:dark:hover:bg-transparent ">Services</a>
            </li>
            <li>
                <a href="{{route('about')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-cyan-700 md:p-0 md:dark:hover:text-cyan-500   dark:hover:text-cyan-900 md:dark:hover:bg-transparent ">About Us </a>
            </li>
            
            <li>
                <a href="{{route('contact')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-cyan-700 md:p-0 md:dark:hover:text-cyan-500   dark:hover:text-cyan-900 md:dark:hover:bg-transparent ">Contact</a>
            </li>
            </ul>
            <div class="mx-4 flex flex-col   md:flex-row justify-between text-center">
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold  text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-transparent  bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 hover:text-cyan-900  font-medium   ">Log in</a>

                @endauth 
                @endif
    
                <a href="{{route('appointement')}}" class="block py-2 pl-3 pr-4 text-transparent  bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400  hover:text-cyan-900  ">Make appointement</a>

            </div>
        </div>

    </nav>

</body>
</html>