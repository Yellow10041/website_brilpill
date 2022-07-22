@foreach($posts as $post)
    <div class="works-content-item">
        <div class="content-item-wind">
            <div class="item-wind-title">
                @if ($post->price)
                    <div class="item-wind-title-name">D:/{{ $post->category }}/{{ $post->name }}/{{ $post->price }}$</div>
                @else
                    <div class="item-wind-title-name">D:/{{ $post->category }}/{{ $post->name }}</div>
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
                    @if ($post->img)
                        <img class="item-wind-img" loading="lazy" src="/img/works/{{ $post->img }}" alt="">
                    @else
                        <img class="item-wind-img" loading="lazy" src="/img/post-default.png" alt="">
                    @endif
                </div>
            </div>
            <div class="item-wind-slider"></div>
        </div>
        <div class="content-item-buttons">
            @if ($post->price)
                <a class="item-buttons-btn" href="#">BUY</a>
            @else
                <a class="item-buttons-btn" href="#">DOWNLOAD</a>
            @endif
            <a class="item-buttons-btn" href="{{ route('projectView', [$post->category, $post->id]) }}">VIEW PROJECT</a>
        </div>
    </div>
    
@endforeach