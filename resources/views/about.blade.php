@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="about-title">

    <div class="about-title-item">
        <div class="about-title-wind">
            <div class="about-title-wind-header">hi world!</div>
            <div class="about-title-wind-content">
                Hello, I’m Oleg! I was born and<br>raised in Ukraine / Ternopil.<br>If you like my site don’t hesitate<br>to reach out&#60;3!
            </div>
            <div class="about-title-wind-slider"></div>
        </div>
        <div class="about-contact">
            <a class="about-contact-item about-contact-item-i" href="https://www.instagram.com/brilpill/">Instagram</a>
            <a class="about-contact-item about-contact-item-b" href="https://www.behance.net/brilpill">Behance</a>
            <a class="about-contact-item about-contact-item-l" href="https://www.linkedin.com/in/oleg-bril-58bb70215/">LinkedIn</a>
            <a class="about-contact-item about-contact-item-f" href="https://www.fiverr.com/brilpill">fiverr.</a>
        </div>

        <div class="about-contact about-contact-mob">
            <a class="about-contact-item about-contact-item-i" href="https://www.instagram.com/brilpill/">Instagram</a>
            <a class="about-contact-item about-contact-item-f" href="https://www.fiverr.com/brilpill">fiverr.</a>
            <a class="about-contact-item about-contact-item-l" href="https://www.linkedin.com/in/oleg-bril-58bb70215/">LinkedIn</a>
            <a class="about-contact-item about-contact-item-b" href="https://www.behance.net/brilpill">Behance</a>
        </div>
    </div>

    <div class="about-title-item">
        <div class="about-title-img-wind">
            <div class="about-title-img-wind-header">C://DIGITAL ARTIST:NN</div>
            <img class="about-title-img-wind-photo" src="img/nn.png" alt="">
        </div>
    </div>

</div>

<div class="about-news">
    <div class="about-news-title">NEWS</div>
    <div class="about-news-items">
        @foreach (News::get() as $news)
            <div class="about-news-item">
                <div class="news-text">
                    <span>{{ $news->text }}</span>
                    <div class="news-text-slide"></div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>

@stop