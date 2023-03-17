<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>Aulab Post</title>
</head>
<body>
    <x-navbar/>

    <div class="scroll-to-top">
        <a href="#" class="scroll-link">
          <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <div class=" my-5 px-3 px-lg-0 bg-white min-vh-100">
        {{$slot}}
    </div>

    <x-footer/> 

    <script src="https://kit.fontawesome.com/58c29b2b44.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        disable: 'mobile',
      });
    </script>  
</body>
</html>