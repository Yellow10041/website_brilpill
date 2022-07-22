@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="home-title">
    <div class="home-title-item">
        <div class="home-title-switch">
            <div class="switch-item switch-item-1"></div>
            <div class="switch-item switch-item-2"></div>
            <div class="switch-item switch-item-3"></div>
        </div>
        <div class="home-title-bio">
            <div class="bio-title">HI<br>WORLD!</div>
            <div class="bio-text">
                I’m Oleg Bril,<br>a visual designer<br>specializing in<br>UI/UX and graphic<br>design.
                <div class="bio-text-slide"></div>
            </div>
            
        </div>
    </div>
    <div class="home-title-item home-title-item-img">
        <img class="home-title-img" src="/img/home-header.png">
    </div>
</div>


<div class="home-new">
    <div class="home-new-inner"></div>
</div>


<div class="home-slider">

<!-- <div class="home-sidebar-arrow home-sidebar-arrow-left"><i class="fas fa-chevron-left"></i></div> -->
<div class="home-sidebar-arrow home-sidebar-arrow-left">
<svg width="151" height="24" viewBox="0 0 151 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.939346 13.0607C0.353546 12.4749 0.353546 11.5251 0.939346 10.9393L10.4853 1.3934C11.0711 0.807611 12.0208 0.807611 12.6066 1.3934C13.1924 1.97919 13.1924 2.92893 12.6066 3.51472L4.12132 12L12.6066 20.4853C13.1924 21.0711 13.1924 22.0208 12.6066 22.6066C12.0208 23.1924 11.0711 23.1924 10.4853 22.6066L0.939346 13.0607ZM151 13.5H2V10.5H151V13.5Z" fill="black"/>
</svg>


<svg width="114" height="18" viewBox="0 0 114 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.2091 9.79084C0.772326 9.35407 0.772326 8.64593 1.2091 8.20916L8.32667 1.09159C8.76344 0.654816 9.47158 0.654816 9.90835 1.09159C10.3451 1.52836 10.3451 2.2365 9.90835 2.67327L3.58162 9L9.90835 15.3267C10.3451 15.7635 10.3451 16.4716 9.90835 16.9084C9.47158 17.3452 8.76344 17.3452 8.32667 16.9084L1.2091 9.79084ZM113.096 10.1184H1.99994V7.88158H113.096V10.1184Z" fill="black"/>
</svg>



<svg width="48" height="8" viewBox="0 0 48 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.646446 3.64644C0.451183 3.8417 0.451183 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82842L1.70711 4L4.53553 1.17157C4.7308 0.976307 4.7308 0.659725 4.53553 0.464462C4.34027 0.2692 4.02369 0.2692 3.82843 0.464462L0.646446 3.64644ZM48 3.5L1 3.5L1 4.5L48 4.5L48 3.5Z" fill="black"/>
</svg>

<svg width="48" height="8" viewBox="0 0 48 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.646446 3.64644C0.451183 3.8417 0.451183 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82842L1.70711 4L4.53553 1.17157C4.7308 0.976307 4.7308 0.659725 4.53553 0.464462C4.34027 0.2692 4.02369 0.2692 3.82843 0.464462L0.646446 3.64644ZM48 3.5L1 3.5L1 4.5L48 4.5L48 3.5Z" fill="black"/>
</svg>


</div>

<div class="home-slider-inner">

@foreach($posts as $post_item)
            @php

                $work_item = Works::where('id', $post_item->work_id)->get()->first();

            @endphp
            <div class="{{'home-slider-post slider-post-' . $loop->iteration}}" >

                <div class="home-slider-inner-item">
                    @if($work_item)
                        <div class="home-slider-title">{{ $work_item->name }}</div>
                        <div class="home-slider-category">{{ $work_item->main_tag }}</div>
                        <div class="home-slider-year">{{ $work_item->year }}</div>
                        <div class="home-slider-button"><a class="home-slider-button-inner" href="{{ route('projectView', [$work_item->category, $work_item->id]) }}">View project</a></div>
                    @else
                        <div class="home-slider-title">Work name</div>
                        <div class="home-slider-category">Work main tag</div>
                        <div class="home-slider-year">Work year create</div>
                        <div class="home-slider-button"><a class="home-slider-button-inner">View project</a></div>
                    @endif
                </div>

                <div class="home-slider-object slider-object-1">
                    @include('inc.geometry.geometry_item_' . $post_item->geometry)
                </div>

                <div class="home-slider-inner-item-img"><img class="home-slider-inner-item-img-item" src="{{'/img/mockups/' . $post_item->mockup }}" alt=""></div>

            </div>
        @endforeach

    

</div>

<!-- <div class="home-sidebar-arrow home-sidebar-arrow-right"><i class="fas fa-chevron-right"></i></div> -->

<div class="home-sidebar-arrow home-sidebar-arrow-right">

<svg width="151" height="24" viewBox="0 0 151 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M150.061 13.0606C150.646 12.4749 150.646 11.5251 150.061 10.9393L140.515 1.39339C139.929 0.807599 138.979 0.807599 138.393 1.39339C137.808 1.97917 137.808 2.92892 138.393 3.51471L146.879 12L138.393 20.4853C137.808 21.0711 137.808 22.0208 138.393 22.6066C138.979 23.1924 139.929 23.1924 140.515 22.6066L150.061 13.0606ZM1.31134e-07 13.5L149 13.5L149 10.5L-1.31134e-07 10.5L1.31134e-07 13.5Z" fill="black"/>
</svg>


<svg width="114" height="18" viewBox="0 0 114 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M112.791 9.79083C113.228 9.35406 113.228 8.64592 112.791 8.20915L105.673 1.09158C105.237 0.654807 104.528 0.654807 104.092 1.09158C103.655 1.52835 103.655 2.23649 104.092 2.67326L110.418 8.99999L104.092 15.3267C103.655 15.7635 103.655 16.4716 104.092 16.9084C104.528 17.3452 105.237 17.3452 105.673 16.9084L112.791 9.79083ZM0.903809 10.1184L112 10.1184L112 7.88157L0.903808 7.88158L0.903809 10.1184Z" fill="black"/>
</svg>


<svg width="48" height="8" viewBox="0 0 48 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M47.3536 4.35356C47.5488 4.1583 47.5488 3.84171 47.3536 3.64645L44.1716 0.46447C43.9763 0.269208 43.6597 0.269208 43.4645 0.46447C43.2692 0.659732 43.2692 0.976315 43.4645 1.17158L46.2929 4L43.4645 6.82843C43.2692 7.02369 43.2692 7.34028 43.4645 7.53554C43.6597 7.7308 43.9763 7.7308 44.1716 7.53554L47.3536 4.35356ZM-4.37114e-08 4.5L47 4.5L47 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="black"/>
</svg>

<svg width="48" height="8" viewBox="0 0 48 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M47.3536 4.35356C47.5488 4.1583 47.5488 3.84171 47.3536 3.64645L44.1716 0.46447C43.9763 0.269208 43.6597 0.269208 43.4645 0.46447C43.2692 0.659732 43.2692 0.976315 43.4645 1.17158L46.2929 4L43.4645 6.82843C43.2692 7.02369 43.2692 7.34028 43.4645 7.53554C43.6597 7.7308 43.9763 7.7308 44.1716 7.53554L47.3536 4.35356ZM-4.37114e-08 4.5L47 4.5L47 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="black"/>
</svg>





</div>

<div class="home-slider-line">
    <div class="slider-line-num slider-line-num-before">01</div>
    <div class="slider-line-progress">
        <div class="slider-progress-line"></div>
    </div>
    <div class="slider-line-num slider-line-num-after"></div>
</div>
</div>

@stop