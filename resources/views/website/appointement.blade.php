<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointement</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <script src="https://unpkg.com/scrollreveal"></script>

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
<body class="bg-cyan-50">
    
  <!-- navbar -->
  @extends('layouts.navbar')

<!-- navbar -->
 
    <!-- appointement -->
 <section id="appointement"  class="container my-20 mx-auto ">
      <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1  md:rounded-tr-3xl md:rounded-bl-3xl bg-gradient-to-r to-emerald-800 from-sky-400 shadow-lg overflow-hidden   p-5 my-5 md:mx-10  " style="border-bottom: 40px !important;">
          <div >
              <img src="{{asset('storage/img/appointment.png')}}" class="h-auto max-w-full  hidden md:block " alt="">
          </div>
          
          <div>
              <h1  class="text-white text-2xl md:text-3xl my-5 text-center font-semibold">@lang('messages.appointement.title') </h1>
              <div class="container mx-auto px-4">
                <form class="bg-transparent  md:px-8 pt-6 pb-8 mb-4 " action="{{route("store.appointement")}}" method="POST" >
                  @csrf
                  @method("POST")
                      <div class="mb-4 ">
                        <div class="flex justify-between">
                          <div class="w-1/2 pr-2">
                            <label class="block text-white font-bold mb-2" for="last-name">
                              @lang('messages.appointement.firstname')
                            </label>
                            <input  type="text"  id="firstname" name="firstname"  value="{{ old('firstname') }}" class="block mt-1 py-4  px-4  w-full text-sm  bg-white  text-gray-900   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="@lang('messages.appointement.firstname') " required />
  
                          </div>
                          <div class="w-1/2 pl-2">
                            <label class="block text-white font-bold mb-2" for="last-name">
                              @lang('messages.appointement.lastname')
                            </label>
                            <input  type="text" id="lastname" name="lastname"  value="{{ old('lastname') }}"  class="block mt-1 py-4  px-4  w-full text-sm  bg-white  text-gray-900   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="@lang('messages.appointement.lastname')" required />
  
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <label class="block text-white font-bold mb-2" for="email">
                          @lang('messages.appointement.email')
                        </label>
                        <input  type="email" name="email" id="email"  value="{{ old('email') }}" class="block mt-1 py-4  px-4  w-full text-sm bg-white  text-gray-900    bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" placeholder="@lang('messages.appointement.email')" required />
  
                      </div>
                      
                      <div class="mb-4">
                        <div class="flex justify-between">

                          <div class="w-1/2 pr-2">
                            <label class="block text-white font-bold mb-2" for="select">
                              @lang('messages.appointement.doctor')
                            </label>
                            <select id="doctor"  name="doctor" class="block mt-1 py-4  px-4  w-full text-sm bg-white  text-gray-900  bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="select">
                              @foreach ($doctors as $doctor)
                                <option value="{{$doctor->id}}" {{ old('doctor') ===  $doctor->id ? 'selected' : ''}}>{{$doctor->firstname}} {{$doctor->lastname}}</option>
                              @endforeach
                            </select>

                            
                          </div>
                          <div class="w-1/2 pr-2">
                            <label class="block text-white font-bold mb-2" for="select">
                              @lang('messages.appointement.service')
                            </label>
                            <select id="service"  name="service" class="block mt-1 py-4  px-4  w-full text-sm bg-white  text-gray-900    bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="select">
                              @foreach ($services as $service)
                                <option value="{{$service->id}}" {{ old('service') ===  $service->id ? 'selected' : ''}}>{{$service->name}}</option>
                              @endforeach
                            </select>
                          </div>

                         
                        </div>
                        

                          <div class="w-full">
                            <label class="block text-white font-bold mb-2" for="datetime">
                              @lang('messages.appointement.date')

                            </label>
                            <input id="date"  name="date"  type="datetime-local" class="block mt-1 py-4  px-4  w-full text-sm bg-white  text-gray-900   bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="datetime">
                          
                            <label class="block text-white font-bold mb-2 mt-2" for="datetime">
                              @lang('messages.appointement.payment')
                            </label>

                            <select id="paymentOption"  name="payment_method" class="block mt-1 py-4  px-4  bg-white w-full text-sm text-gray-900  bg-transparent border  border-gray-300 rounded-md appearance-none  focus:outline-none focus:ring-0 focus:border-white  peer focus:border-2" id="select">
                            
                                <option value="manually" {{ old('payment_method') ===  'manually' ? 'selected' : ''}}>Manually</option>
                                <option value="stripe" {{ old('doctor') ===  'stripe' ? 'selected' : ''}}>Stripe</option>
                             
                            </select>
                          </div>

                          <div id="stripePayment" style="display: none;">
                                <div id="card-element text-white font-bold">Stripe Card Payment</div>
                                <a href="{{route('stripe')}}">Pay</a>
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
    <!-- footer -->   
    @extends('layouts.footer')
    <!-- footer -->
    <script >
        ScrollReveal().reveal('.headline')
        ScrollReveal().reveal('.headline', { delay: 500 });

      </script>
    <script>
     document.addEventListener("DOMContentLoaded", function() {
        var paymentOption = document.getElementById('paymentOption');
        var stripePayment = document.getElementById('stripePayment');

        paymentOption.addEventListener("change", function() {
            var selectedOption = paymentOption.value;
            stripePayment.style.display = 'none';

            // Show the selected payment div
            if (selectedOption === 'stripe') {
                stripePayment.style.display = 'block';
            } 
        });
    });
  </script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</body>
</html>