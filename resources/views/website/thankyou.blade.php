<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/b535effebb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

</head>
<body class="bg-amber-50 headline">
    
 
    <img src="{{asset("storage/img/thankyou.png")}}" class="img" alt="">
 
    
      <div class="fixed bottom-0 w-full">
        <div class="flex items-center justify-center h-16 ">
            <a href="/" class="absolute bottom-20 mb-8 px-4 py-2 w-48 text-center font-semibold  bg-transparent   text-amber-900 border border-amber-800 border-2 p-3 ">
                <i class="fas fa-home mr-2"></i>
                Home
            </a>        
        </div>
      </div>
      <script >
        ScrollReveal().reveal('.headline')
        ScrollReveal().reveal('.headline', { delay: 500 });
      </script>
</body>
</html>