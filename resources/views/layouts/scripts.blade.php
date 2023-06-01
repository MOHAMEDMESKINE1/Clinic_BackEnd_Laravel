<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <title>{{ config('app.name', 'WeCare') }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/img/logo-hoptial.svg') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['./resources/js/app.js','./resources/css/animate.css',
    './resources/js/wow.min.js','./resources/css/style.css',
    './resources/js/script.js',
    ])
    <script>
    new WOW().init();
    </script>
   
    </head>
<body>
   
    
  
    
</body>
</html>