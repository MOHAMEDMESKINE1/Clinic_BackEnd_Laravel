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
            <div class="bg-white p-4 text-center rounded-md shadow-sm ">
                    <div class="flex justify-center my-2">
                        <img src="{{asset('storage/img/profile.svg')}}" class="w-32 h-32 rounded-full max-w-sm" alt="">
                    </div>
                    <div class="text-center">
                         <!-- Rats -->
                         <div class="rating-stars">
                            <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                            <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                          </div>
                          <p id="rating-value"></p>
                        </div>
                        <h1 class="text-gray-800 mb-2 text-2xl ">Samuel Steve</h1>
                        <p class="text-gray-600">
                            Marine Medicine, Medical Genetics, Microbiology, Nuclear Medicine, Paediatrics, Palliative Medicine, Pathology1, Pharmacology, Psychiatry, Physiology, Physical Medicine, Radiotherapy
                        </p>
                        <p class="text-gray-600">nice one doctor</p>
                       
                    <div class="mt-5">
                        <a href="#"  data-modal-target="createReview" data-modal-toggle="createReview" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                <i class="fas fa-pencil text-xl text-white mr-2"></i>
                                Write Review 
                            </span>
                          </a>
                       </div>
            </div>
            <div class="bg-white p-4 text-center rounded-md shadow-sm">
                <div class="flex justify-center my-2">
                    <img src="{{asset('storage/img/profile.svg')}}" class="w-32 h-32 rounded-full max-w-sm" alt="">
                </div>
                <div class="text-center">
                     <!-- Rats -->
                     <div class="rating-stars">
                        <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                        <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                        <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                        <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                        <span class="star" data-value="5"><i class="fas fa-star"></i></span>
                      </div>
                      <p id="rating-value"></p>
                    </div>
                    <h1 class="text-gray-800 mb-2 text-2xl ">Samuel Steve</h1>
                    <p class="text-gray-600">
                        Marine Medicine, Medical Genetics, Microbiology, Nuclear Medicine, Paediatrics, Palliative Medicine, Pathology1, Pharmacology, Psychiatry, Physiology, Physical Medicine, Radiotherapy
                    </p>
                    <p class="text-gray-600">nice one doctor</p>
                 
                <div class="mt-5">
                    <a href="#"  data-modal-target="editReview" data-modal-toggle="editReview" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            <i class="fas fa-edit text-xl text-white mr-2"></i>
                            Edit Review 
                        </span>
                      </a>
                   </div>
        </div>
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
                <form method="post"  enctype="multipart/form-data" action="#">
                 
                    <!-- firstname & lastname -->
                    <div class="grid grid-col-1 gap-2">
                        <!-- textarea -->
                        <div class="w-full group">
                            <label for="">Review : <span class="text-red-700">*</span></label>
                            <textarea name="review" id="review"  class="block mt-1 p-2.5  mb-2 w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"></textarea>

                        </div>
                        <!-- rate -->
                        <div class="w-full group rating-stars">
                            <span class="star" data-value="1"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="2"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="3"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="4"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="5"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                        </div> 
                      
                    </div>

                
                        
               
            </div>
                    <!-- modal footer -->
                    <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                        <button data-modal-hide="createReview" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                        <button data-modal-hide="createReview" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
  <!-- editReview -->
  <div id="editReview" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative max-w-lg h-full m-6 ">
        <!-- Modal content -->
        <div class="relative bg-white  rounded-lg shadow ">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="editReview">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-2 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-cyan-900 text-left mt-5">Edit Review </h3>
                <span class=" border border-b-0 w-full inline-block  border-gray-100 mt-2"></span>

            <!-- modal body -->
            <div class="grid grid-cols-1 md\:grid-cols-2 pt-4 px-2">
                <form method="post"  enctype="multipart/form-data" action="#">
                 
                    <!-- firstname & lastname -->
                    <div class="grid grid-col-1 gap-2">
                        <!-- textarea -->
                        <div class="w-full group">
                            <label for="">Review : <span class="text-red-700">*</span></label>
                            <textarea name="review" id="review"  class="block mt-1 p-2.5  mb-2 w-full text-sm text-gray-900 bg-transparent border  border-gray-300 rounded-md appearance-none  dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"></textarea>

                        </div>
                        <!-- rate -->
                        <div class="w-full group rating-stars">
                            <span class="star" data-value="1"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="2"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="3"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="4"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                            <span class="star" data-value="5"> <input type="radio" name="rating" class="mr-1 w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 p-2 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"/> <i class="fas fa-star"></i> </span>
                        </div> 
                      
                      
                    </div>

                
                        
               
            </div>
                    <!-- modal footer -->
                    <div class="flex items-cente justify-start mt-3  mb-2 rounded-b dark:border-gray-600">
                        <button data-modal-hide="editReview" type="submit" class="text-white   mr-2 bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Save</button>
                        <button data-modal-hide="editReview" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection
<script>
//     const stars = document.querySelectorAll('.star');
// const ratingValue = document.getElementById('rating-value');

// stars.forEach(star => {
//   star.addEventListener('mouseover', function() {
//     const value = this.getAttribute('data-value');
//     ratingValue.innerHTML = value;
//     resetStars();
//     highlightStars(value);
//   });
  
//   star.addEventListener('mouseout', function() {
//     resetStars();
//     ratingValue.innerHTML = '';
//   });
  
//   star.addEventListener('click', function() {
//     const value = this.getAttribute('data-value');
//     ratingValue.innerHTML = `You rated ${value} stars!`;
//     resetStars();
//     highlightStars(value);
//   });
// });

// function resetStars() {
//   setTimeout(() => {
//     stars.forEach(star => {
//     star.classList.remove('selected');
//   });
//   }, 500);
// }

// function highlightStars(value) {
//   stars.forEach(star => {
//     if (star.getAttribute('data-value') <= value) {
//       star.classList.add('selected');
//     }
//   });
// }

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

</body>
</html>