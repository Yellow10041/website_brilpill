
<header>
    <div class="header-logo">
        <!-- <div class="header-logo-object-1"><div class="header-logo-object-1-1"></div></div>
        <div class="header-logo-object-2"></div>
        <div class="header-logo-title">brilpill <i class="far fa-star"></i></div>
        <div class="header-logo-subtitle">DIGITAL & BRANDING <span>DESIGNER</span></div> -->
        @if(Request::route()->getName() === 'about')

            <img class="header-img" src="/img/logo-2.png" alt="">

        @else

            <img class="header-img" src="/img/logo-1.png" alt="">

        @endif
        


    </div>
    <nav class="header_nav">
            
        @if(Request::route()->getName() === 'about')
            <div class="nav-items nav-items-about">
                <a class="nav-item nav-item-about" href="{{ route('home') }}">Home</a>
                <a class="nav-item nav-item-about" href="{{ route('works', 'Illustrations') }}">Illustrations</a>
                <a class="nav-item nav-item-about" href="{{ route('works', 'Print product') }}">Print product</a>
                <a class="nav-item nav-item-about" href="{{ route('works', '3d\NFT') }}">3d\NFT</a>
                <a class="nav-item nav-item-about" href="{{ route('works', 'UI\UX') }}">UI\UX</a>
                <a class="nav-item nav-item-about" href="{{ route('about') }}">About</a>
            </div>
        @else

            <div class="nav-items">
                <a class="nav-item" href="{{ route('home') }}">Home</a>
                <a class="nav-item" href="{{ route('works', 'Illustrations') }}">Illustrations</a>
                <a class="nav-item" href="{{ route('works', 'Print product') }}">Print product</a>
                <a class="nav-item" href="{{ route('works', '3d\NFT') }}">3d\NFT</a>
                <a class="nav-item" href="{{ route('works', 'UI\UX') }}">UI\UX</a>
                <a class="nav-item" href="{{ route('about') }}">About</a>
            </div> 

        @endif
            

    </nav>

    <div class="header_nav-mob">
        <div class="header_nav-mob_item"></div>
        <div class="header_nav-mob_item"></div>
        <div class="header_nav-mob_item"></div>
    </div>

    <div class="nav-items-mob">
        <a class="nav-item nav-item-mob" href="{{ route('home') }}">Home</a>
        <a class="nav-item nav-item-mob" href="{{ route('works', 'Illustrations') }}">Illustrations</a>
        <a class="nav-item nav-item-mob" href="{{ route('works', 'Print product') }}">Print product</a>
        <a class="nav-item nav-item-mob" href="{{ route('works', '3d\NFT') }}">3d\NFT</a>
        <a class="nav-item nav-item-mob" href="{{ route('works', 'UI\UX') }}">UI\UX</a>
        <a class="nav-item nav-item-mob" href="{{ route('about') }}">About</a>

        <div class="home-title-switch-mob">
            <div class="switch-item switch-item-1"></div>
            <div class="switch-item switch-item-2"></div>
            <div class="switch-item switch-item-3"></div>
        </div>
    </div>


</header>