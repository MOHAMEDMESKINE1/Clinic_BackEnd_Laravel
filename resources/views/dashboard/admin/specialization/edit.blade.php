<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('layouts.scripts')
</head>
<body class="bg-white">
    @extends('dashboard.admin.admin_dashboard')
    @section('content')
   <div class="container bg-white ">
    <div class="grid grid-col-1 md:grid-col-2 ">

        @if ($errors->any())
            <div class="bg-red-500 p-3 rounded-md text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form method="post"  action="{{route("admin.update_specialization",$specialization->id)}}">
            @csrf
            @method("PUT")
            <!-- Specialization -->
            <div class="grid grid-col-1  p-5  ">
                    <!-- Specialization -->
                    <div class="w-full  mb-6 group">
                        {{-- <input type="hidden" id="id" name="id" value="{{$specialization->id}}"> --}}

                        <label for="Specialization" class="font-medium ">Specialization :<span class="text-red-500 font-medium">*</span></label>
                        <input type="text" name="specialization" id="specialization"  value="{{$specialization->name}}" class="block mt-1 p-2.5  w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder="Specialization " required />
                    </div>
            </div>
             <!-- modal footer -->
                <div class="flex justify-start mx-5  mb-2 rounded-b dark:border-gray-600">
                    <button  type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                    <button  type="reset" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
        </form>
     
    </div>
   
   </div>
   @endsection
</body>
</html>