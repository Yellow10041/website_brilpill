@extends('layouts.app')

@section('title', $category )

@section('content')


<div class="works-main">
    <div class="works-title">
        <div class="works-title-text">D:DESIGN BY BRILPILL</div>
        <div class="works-title-filter">

            <form class="works-title-filter-form" action="{{ route('works', $category) }}" method = "GET">
                @csrf
                <input class="works-title-filter-form-all" name="all" type="text">
                <input class="works-title-filter-form-new" name="new" type="text">
            </form>

            <form class="works-title-filter-price-form" action="{{ route('works', $category) }}" method = "GET">
                @csrf
                <input class="works-title-filter-form-price" name="price" type="text">
            </form>

            <div class="works-title-filter-item works-title-filter-premium">
                <div class="works-title-filter-title">
                    @if ( isset($all) )
                        <div class="works-title-filter-title-text works-title-filter-all-title-text">{{ $all }}</div>
                    @else
                        <div class="works-title-filter-title-text works-title-filter-all-title-text">ALL</div>
                    @endif
                    <svg class="works-title-filter-title-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 8L0.669873 0.5L9.33013 0.500001L5 8Z" fill="white"/>
                    </svg>
                </div>
                <div class="works-title-filter-option">
                    
                    @if ( isset($all) )
                        @php
                            $allCategory = ['ALL', 'FREE', 'PREMIUM'];
                            $i=0;
                        @endphp
                        @for ($i ; $i < count($allCategory); $i++) 
                            @if ($all != $allCategory[$i])
                                <div class="works-title-filter-option-item works-title-filter-all-option-item">{{ $allCategory[$i] }}</div>
                            @endif
                        @endfor
                    @else
                        <div class="works-title-filter-option-item works-title-filter-all-option-item">FREE</div>
                        <div class="works-title-filter-option-item works-title-filter-all-option-item">PREMIUM</div>
                    @endif
                </div>
                
            </div>
            <div class="works-title-filter-item works-title-filter-new">
                <div class="works-title-filter-title">
                    @if ( isset($new) )
                        <div class="works-title-filter-title-text works-title-filter-new-title-text">{{ $new }}</div>
                    @else
                        <div class="works-title-filter-title-text works-title-filter-new-title-text">NEW</div>
                    @endif
                    
                    
                    <svg class="works-title-filter-title-icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 8L0.669873 0.5L9.33013 0.500001L5 8Z" fill="white"/>
                    </svg>
                </div>
                <div class="works-title-filter-option">
                    @if ( isset($new) )
                        @php
                            $newCategory = ['NEW', 'OLD'];
                            $i=0;
                        @endphp
                        @for ($i ; $i < count($newCategory); $i++) 
                            @if ($new != $newCategory[$i])
                                <div class="works-title-filter-option-item works-title-filter-new-option-item">{{ $newCategory[$i] }}</div>
                            @endif
                        @endfor
                    @else
                        <div class="works-title-filter-option-item works-title-filter-new-option-item">OLD</div>
                    @endif
                    
                        
                </div>
                
            </div>
            @if (isset($all) && $all == 'FREE')
                <div class="works-title-filter-item">
                    <div class="works-title-filter-title">
                        <div class="works-title-filter-title-text">PRICE</div>
                        <div class="works-title-filter-title-text-val works-title-filter-price-title-text">
                            @if ( isset($price) )
                                {{ $price }}
                            @endif
                        </div>
                        
                        <svg class="works-title-filter-title-icon works-title-filter-title-icon-price" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 8L0.669873 0.5L9.33013 0.500001L5 8Z" fill="white"/>
                        </svg>
                    </div>
                    
                </div>
            @else
                <div class="works-title-filter-item works-title-filter-item-price">
                    <div class="works-title-filter-title">
                        <div class="works-title-filter-title-text">PRICE</div>
                        <div class="works-title-filter-title-text-val works-title-filter-price-title-text">
                            @if ( isset($price) )
                                {{ $price }}
                            @endif
                        </div>
                        
                        <svg class="works-title-filter-title-icon works-title-filter-title-icon-price" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 8L0.669873 0.5L9.33013 0.500001L5 8Z" fill="white"/>
                        </svg>
                    </div>
                    
                </div>
            @endif
        </div>
    </div>
    <div class="works-content">
        @if (null !== $data->first())
            @foreach($data as $elem)
                <div class="works-content-item">

                    <div class="content-item-wind">
                        <div class="item-wind-title">
                            @if ($elem->price)
                                <div class="item-wind-title-name">D:/{{ $elem->category }}/{{ $elem->name }}/{{ $elem->price }}$</div>
                            @else
                                <div class="item-wind-title-name">D:/{{ $elem->category }}/{{ $elem->name }}</div>
                            @endif
                            <div>
                                    <svg width="35" height="11" viewBox="0 0 35 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="24.8944" y="0.246479" width="9.85915" height="9.85915" rx="1.23239" stroke="#010101" stroke-width="0.492958"/>
                                    <line x1="27.8098" y1="2.95773" x2="32.0422" y2="7.19016" stroke="black" stroke-width="0.985915" stroke-linecap="round"/>
                                    <line x1="0.492958" y1="-0.492958" x2="6.47852" y2="-0.492958" transform="matrix(-0.707107 0.707107 0.707107 0.707107 32.5352 2.95773)" stroke="black" stroke-width="0.985915" stroke-linecap="round"/>
                                    <rect x="12.5705" y="0.246479" width="9.85915" height="9.85915" rx="1.23239" stroke="#010101" stroke-width="0.492958"/>
                                    <rect x="15.0353" y="3.20421" width="4.92958" height="3.94366" stroke="black" stroke-width="0.492958" stroke-linejoin="round"/>
                                    <rect x="15.0352" y="2.71126" width="4.92958" height="4.43662" stroke="black" stroke-width="0.492958" stroke-linejoin="round"/>
                                    <rect x="0.246479" y="0.246479" width="9.85915" height="9.85915" rx="1.23239" stroke="#010101" stroke-width="0.492958"/>
                                    <line x1="2.71132" y1="7.64085" x2="6.65498" y2="7.64085" stroke="black" stroke-width="0.492958" stroke-linecap="round"/>
                                    </svg></div>
                        </div>
                        <div class="item-wind-content">
                            <div class="item-wind-photo">
                                @if ($elem->img)
                                    <img class="item-wind-img" loading="lazy" src="/img/works/{{ $elem->img }}" alt="">
                                @else
                                    <img class="item-wind-img" loading="lazy" src="/img/post-default.png" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="item-wind-slider"></div>
                    </div>

                    <div class="content-item-buttons">
                        @if ($elem->price)
                            <a class="item-buttons-btn" href="#">BUY</a>
                        @else
                            <a class="item-buttons-btn" href="/img/works/{{ $elem->img }}" download>DOWNLOAD</a>
                        @endif
                        <a class="item-buttons-btn" href="{{ route('projectView', [$elem->category, $elem->id]) }}">VIEW PROJECT</a>
                    </div>

                </div>
                
            @endforeach
        @endif
    </div>
</div>
@stop

@section('custom-js')  
    <script>
        $(document).ready(function() {

        function sliders() {
            let slideItems = $(".item-wind-slider").length;

            for (let i = 0; i < slideItems; i++) {
                $(".item-wind-slider:eq(" + i +")").css({'left' : Math.floor(Math.random() * 220 + 10)});
            } 
        }

            if($(".works-title-filter-all-title-text").text() == 'FREE') {
                $('.works-title-filter-item').last().addClass('works-title-filter-item-price-noActive');
            }

            $(".works-title-filter-all-option-item").click(function(){
                if($(this).text() == 'FREE') {
                    $('.works-title-filter-item').last().addClass('works-title-filter-item-price-noActive');
                    let optionValPriceTitle = 0
                }
                else {
                    $('.works-title-filter-item').last().removeClass('works-title-filter-item-price-noActive');
                    let optionValPriceTitle = parseInt($('.works-title-filter-price-title-text').text())
                }
                let optionVal = $(this).text()
                console.log(optionVal);

                let optionValAllTitle = $('.works-title-filter-all-title-text').text()
                let optionValNewTitle = $('.works-title-filter-new-title-text').text()
                let optionValPriceTitle = parseInt($('.works-title-filter-price-title-text').text())
                $('.works-title-filter-all-title-text').text(optionVal)
                $(this).text(optionValAllTitle)
                optionValAllTitle = $('.works-title-filter-all-title-text').text()

                console.log(optionValPriceTitle);
                let link = location.pathname;
                let newLink = link + '?';
                newLink += 'all=' +  optionValAllTitle + '&new=' + optionValNewTitle + '&price=' + optionValPriceTitle;
                history.pushState({}, '', newLink)

                console.log("hello")
                $.ajax({
                    type: "GET",
                    url: "{{ route('works', [$category]) }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        all : optionValAllTitle,
                        new : optionValNewTitle,
                        price : optionValPriceTitle
                    },

                    success: (data) => {
                        console.log(data);
                        $('.works-content').html(data[0]);
                        sliders();
                    }
                });
            });


            $(".works-title-filter-item-price").click(function(){
                console.log(location.pathname)
                if(!$(this).hasClass('works-title-filter-item-price-noActive')){
                    let optionVal = parseInt($(".works-title-filter-price-title-text").text()) + 1;
                    if (optionVal > 2) {
                        optionVal = 1;
                    }
                    console.log(optionVal);
                    let optionValAllTitle = $('.works-title-filter-all-title-text').text()
                    let optionValNewTitle = $('.works-title-filter-new-title-text').text()
                    let optionValPriceTitle = $('.works-title-filter-price-title-text').text()
                    $('.works-title-filter-price-title-text').text(optionVal)
                    optionValPriceTitle = $('.works-title-filter-price-title-text').text()
                    console.log(optionValPriceTitle);
                    console.log("hello")

                    let link = location.pathname;
                    let newLink = link + '?'
                    newLink += 'all=' +  optionValAllTitle + '&new=' + optionValNewTitle + '&price=' + optionValPriceTitle;
                    history.pushState({}, '', newLink)

                    $.ajax({
                        type: "GET",
                        url: "{{ route('works', [$category]) }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            all : optionValAllTitle,
                            new : optionValNewTitle,
                            price : optionValPriceTitle
                        },

                        success: (data) => {
                            
                            console.log(data);
                            $('.works-title-filter-price-title-text').text(data[1])
                            if (data[1] == 2){
                                $('.works-title-filter-title-icon-price').css({'transform' : 'rotate(0deg)'})
                            }
                            else if (data[1] == 1) {
                                $('.works-title-filter-title-icon-price').css({'transform' : 'rotate(180deg)'})
                            }
                            else if (data[1] == 0) {
                                $('.works-title-filter-title-icon-price').css({'transform' : 'rotate(90deg)'})
                            }
                            $('.works-content').html(data[0]);
                            sliders();
                        }
                    });
                }
            })



            $(".works-title-filter-new-option-item").click(function(){
                let price = 0;
                let optionVal = $(this).text()
                console.log(optionVal);

                let optionValAllTitle = $('.works-title-filter-all-title-text').text()
                let optionValNewTitle = $('.works-title-filter-new-title-text').text()
                $('.works-title-filter-new-title-text').text(optionVal)
                $(this).text(optionValNewTitle)
                optionValNewTitle = $('.works-title-filter-new-title-text').text()

                console.log("hello")
                console.log(optionValAllTitle)
                console.log(optionValNewTitle)
                let link = location.pathname;
                let newLink = link + '?'
                newLink += 'all=' +  optionValAllTitle + '&new=' + optionValNewTitle + '&price=' + price;
                history.pushState({}, '', newLink)

                $.ajax({
                    type: "GET",
                    url: "{{ route('works', [$category]) }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        all : optionValAllTitle,
                        new : optionValNewTitle,
                        price : price
                    },

                    success: (data) => {
                        console.log(data);
                        $('.works-title-filter-price-title-text').text(data[1])
                            if (data[1] == 2){
                                $('.works-title-filter-title-icon-price').css({'transform' : 'rotate(0deg)'})
                            }
                            else if (data[1] == 1) {
                                $('.works-title-filter-title-icon-price').css({'transform' : 'rotate(180deg)'})
                            }
                            else if (data[1] == 0) {
                                $('.works-title-filter-title-icon-price').css({'transform' : 'rotate(90deg)'})
                            }
                        $('.works-content').html(data[0]);
                        sliders();
                    }
                });
            })

        });
    </script>
@stop