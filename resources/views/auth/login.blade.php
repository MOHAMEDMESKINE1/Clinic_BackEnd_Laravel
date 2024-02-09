<x-guest-layout>
   
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />



    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('messages.login.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('messages.login.password')" />

           
            <x-text-input id="password" class="block mt-1 mb-3 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            @if (Route::has('password.request'))
            <a class="underline text-sm mb-3 text-gray-900 font-bold  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('messages.login.forgot_password') }}
            </a>
            @endif
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="flex flex-start">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-900 ">{{ __('messages.login.remember') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-center mt-4">
          

            <x-primary-button class=" w-full">
                {{ __('messages.login.title')}}
            </x-primary-button>
            
           
            <x-linkButton url="{{ route('register') }}" class="w-full ">
                @lang('messages.login.create')
            </x-linkButton>
            <div class="mt-3 flex   ">
                    
                <div class=" flex justify-start mx-auto">
                    <img src="{{asset('storage/img/gmail.svg')}}" class="w-10 h-10 mr-5 bg-white p-2 border border-2 rounded-full " alt="">
                    <a href="{{ url('/redirect') }}" class=" 
                    text-gray-900 hover:text-cyan-500 mt-3 font-medium  text-sm text-center 
                     ">
                    
                     @lang('messages.login.google')</a>
                </div>
        </div>
            </div>
        </div>
    </form>

   
    </div>
    
   
</x-guest-layout>
