<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.js">
    <!--
    <link rel="stylesheet" href="{{asset('./css/styles.css')}}">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/each-section.css">
    -->
    
    @vite(['resources/css/styles.css', 'resources/css/each-section.css', 'resources/js/cv.js'])
    
</head>

<body>
    <header id="home">
        @yield('cv_header')
    </header>
    <!--Seccion de About Me-->
    @yield('cv_aboutMe')

    <!--Seccion de Curriculum-->
    @yield('cv_curriculum')

    <!--Seccion de Multimedia-->
    @yield('cv_multimedia')

    <!--Seccion de Contact-->
    @yield('cv_contact')

    <footer class="section">
        <p>
            copyright &copy; UPV - Programación Web
            <span id="date"></span>. all rights reserved
        </p>
    </footer>

    <a class="scroll-link top-link" href="#home">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!--
    <script src="./js/cv.js"></script>
    -->
</body>

</html>