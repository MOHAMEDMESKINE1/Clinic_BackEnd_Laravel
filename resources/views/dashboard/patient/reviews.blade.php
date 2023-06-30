<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    <!-- fontawesome -->
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
        .rating-stars {
        display: flex;
        justify-content: center;
        }

        .star {
        font-size: 25px;
        color: gray;
        cursor: pointer;
        transition: color 0.25s;
        }

        .star:hover,
        .star.selected {
        color: gold;
    }

    </style>
</head>
<body class="bg-gray-100">
    @extends('dashboard.patient.patient_dashboard')
        
    @section('content')
    <div class="container m-5 mx-auto">
       
        <div class="grid grid-col-1 md:grid-cols-2 gap-3 p-5 ">

          @foreach ($reviews as $review)
                    <article class="bg-white p-5 shadow-gray-100 shadow-md rounded-md">
                        
                        <div class="flex items-center mb-4 space-x-4">
                            @if (auth()->user()->photo)
                            <div class="w-11 h-11 flex-shrink-0 object-cover  object-center rounded-full shadow mr-3">
                                <img src="{{asset('storage/staff/'.auth()->user()->photo)}}" alt="photo" class="w-full h-full rounded-full "><br>
                            </div>
                            @else
                            <div class="w-11 h-11 flex-shrink-0 object-cover object-center rounded-full shadow mr-3">
                                <img src="{{asset('storage/img/profile.svg')}}" alt="photo" class="w-full h-full rounded-full "><br>
                            </div>

                            @endif
                           
                            <div class="space-y-1 font-medium dark:text-gray-500">
                                <p>{{auth()->user()->name}}</p> 
                                <p class="mb-2 text-gray-500 dark:text-gray-400">{{auth()->user()->email}}</p>

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
                        {{-- <p class="mb-3 text-gray-500 dark:text-gray-400">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p> --}}
                        {{-- <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read more</a> --}}
                        <aside>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Joined On {{$review->created_at}}</p>
                            <div class="flex items-center mt-3 space-x-3 divide-x divide-gray-200 dark:divide-gray-600">
                                <a href="#" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-xs px-2 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"  data-modal-target="createReview" data-modal-toggle="createReview">create review</a>
                                <a href="#" data-modal-target="deleteReview" data-modal-toggle="deleteReview" class="text-white bg-white border border-gray-300 focus:outline-none hover:bg-red-200 focus:ring-4 focus:ring-white font-medium rounded-lg text-xs px-2 py-1.5 dark:bg-red-800 hover:text-white dark:border-gray-600 dark:hover:bg-red-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">delete review</a>

                            </div>
                        </aside>
                    </article>

          @endforeach

        </div>
    </div>

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
@endsection
<script>


</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>