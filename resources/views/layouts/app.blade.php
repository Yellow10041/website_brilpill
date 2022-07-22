<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/illus.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/projectView.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>



<div class="container">

    @if( Request::route()->getName() !== 'about' && Request::route()->getName() !== 'home')

        <div class="bac-btn">
            <div class="bac-btn-inner">
                <div class="home-title-switch">
                    <div class="switch-item switch-item-1"></div>
                    <div class="switch-item switch-item-2"></div>
                    <div class="switch-item switch-item-3"></div>
                </div>
                <div class="bac-btn-item">
                    <svg class="bac-btn-item-svg" width="27" height="50" viewBox="0 0 27 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L25 25L1 49" stroke="#AADBE1" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>

    @endif

    

    <div class="container-bg">
        @if(Request::route()->getName() === 'about')

            <div class="container-bg-green"></div>

        @else

            <div class="container-bg-object container-bg-object-1"></div>
            <div class="container-bg-object container-bg-object-2"></div>
            <div class="container-bg-object container-bg-object-3"></div>

        @endif
        
    </div>

    <div class="container-bg-mob"></div>

    @if(Request::route()->getName() == 'login')
    
        @yield('content')

    @else

        <div class="container-inner">

            @include('inc.header')
            
            @yield('content')
            
        </div>

    @endif

    
    
    @if(Request::route()->getName() !== 'about' && Request::route()->getName() !== 'login')

        @include('inc.footer')

    @endif

</div>

<script src="https://kit.fontawesome.com/1b6186f7ee.js" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/script.js"></script>
@yield('custom-js')

</body>
</html>