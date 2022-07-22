@extends('layouts.app')

@section('title', $data->first()->category . $data->first()->id )

@section('content')




<div class="projectView">

    <div class="projectView-title">
        <div class="projectView-title-item">{{ $data->first()->main_tag }}</div>
        <div class="projectView-title-item">{{ $data->first()->year }}</div>
    </div>

    <div class="projectView-name">
        <div class="projectView-name-text">
            <div class="projectView-name-object-box">

                <svg class="projectView-name-object" width="49" height="42" viewBox="0 0 49 42" xmlns="http://www.w3.org/2000/svg">
                    <path class="projectView-name-object-item" d="M24.5 0L48.3157 41.25H0.684301L24.5 0Z" fill="white"/>
                </svg>

                <svg class="projectView-name-object" width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect class="projectView-name-object-item" width="43" height="42" fill="white"/>
                </svg>

                <svg class="projectView-name-object" width="43" height="49" viewBox="0 0 43 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="projectView-name-object-item" d="M21.5 0L42.7176 12.25V36.75L21.5 49L0.282377 36.75V12.25L21.5 0Z" fill="white"/>
                </svg>

                <svg class="projectView-name-object" width="62" height="61" viewBox="0 0 62 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="projectView-name-object-item" d="M31 0L41.0833 20.5793L62 30.5L41.0833 40.4207L31 61L20.9167 40.4207L0 30.5L20.9167 20.5793L31 0Z" fill="white"/>
                </svg>

                <svg class="projectView-name-object" width="66" height="60" viewBox="0 0 66 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="projectView-name-object-item" d="M33 0L40.6335 22.8024H65.3359L45.3512 36.8951L52.9847 59.6976L33 45.6049L13.0153 59.6976L20.6488 36.8951L0.664078 22.8024H25.3665L33 0Z" fill="white"/>
                </svg>

                <svg class="projectView-name-object" width="73" height="48" viewBox="0 0 73 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse class="projectView-name-object-item" cx="36.5" cy="24" rx="36.5" ry="24" fill="white"/>
                </svg>

                <svg class="projectView-name-object" width="62" height="61" viewBox="0 0 62 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse class="projectView-name-object-item" cx="31" cy="30.5" rx="31" ry="30.5" fill="white"/>
                </svg>


            </div>

            <span class="projectView-name-text-item">{{ $data->first()->name }}</span>

        </div>
    </div>

    <div class="projectView-info">
        <div class="projectView-info-item">
            <div class="projectView-info-item-title">Tag</div>
            <div class="projectView-info-item-content">
                {{ $data->first()->main_tag }}
                <div class="projectView-info-item-content-tag">
                    {{ $data->first()->tags }}
                </div>
            </div>
        </div>
        <div class="projectView-info-item projectView-info-item-desc">
            <div class="projectView-info-item-title">Summary</div>
            <div class="projectView-info-item-content">
                {{ $data->first()->description }}
            </div>
        </div>

        <div class="projectView-info-item projectView-info-item-mob">
            <div class="projectView-info-item-title projectView-info-item-title-mob">
                Summary
                <svg class="projectView-info-item-title-svg-mob" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 8L0.669873 0.5L9.33013 0.500001L5 8Z" fill="black"/>
                </svg>

            </div>
            <div class="projectView-info-item-content projectView-info-item-content-mob">
                {{ $data->first()->description }}
            </div>
        </div>
    </div>

    <div class="projectView-view-img">

        <div class="view-item-wind">
            <div class="view-item-wind-title">
                
                @if($data->first()->link)
                    <a class="view-item-wind-title-behance" href="{{ $data->first()->link }}">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9553 13.6154C12.2441 13.4062 12.3836 13.0609 12.3836 12.5861C12.3936 12.3604 12.3471 12.1379 12.2475 11.9354C12.1578 11.7727 12.025 11.6365 11.8623 11.5402C11.6936 11.4379 11.5063 11.3702 11.3111 11.341C11.0986 11.3012 10.8828 11.2812 10.6703 11.2846H8.33613V13.9309H10.8629C11.2979 13.9342 11.6664 13.8279 11.9553 13.6154ZM12.3471 16.0061C12.0217 15.757 11.5867 15.6342 11.0455 15.6342H8.32949V18.7553H10.9924C11.2414 18.7553 11.4705 18.732 11.693 18.6855C11.9035 18.6444 12.1041 18.5632 12.284 18.4465C12.4533 18.3369 12.5895 18.1875 12.6924 17.9949C12.792 17.8023 12.8418 17.5566 12.8418 17.2611C12.8418 16.6734 12.6758 16.2584 12.3471 16.0061ZM15 0.125C6.78555 0.125 0.125 6.78555 0.125 15C0.125 23.2145 6.78555 29.875 15 29.875C23.2145 29.875 29.875 23.2145 29.875 15C29.875 6.78555 23.2145 0.125 15 0.125ZM17.8721 9.65098H22.4674V10.7699H17.8721V9.65098ZM15 18.8781C14.7851 19.2861 14.4781 19.6385 14.1035 19.9074C13.7117 20.1797 13.2768 20.3789 12.8152 20.4951C12.3324 20.6245 11.8343 20.6882 11.3344 20.6844H5.83594V9.35879H11.1816C11.7229 9.35879 12.2143 9.40859 12.6625 9.50156C13.1074 9.59453 13.4859 9.75391 13.8047 9.96973C14.1201 10.1855 14.3691 10.4744 14.5451 10.833C14.7178 11.1883 14.8074 11.6332 14.8074 12.1611C14.8074 12.7322 14.6779 13.2037 14.4189 13.5855C14.1566 13.9674 13.7781 14.2762 13.2635 14.5186C13.9641 14.7178 14.4787 15.073 14.8174 15.5711C15.1627 16.0758 15.332 16.6801 15.332 17.3906C15.332 17.9684 15.2225 18.4631 15 18.8781ZM24.257 17.125H18.3336C18.3336 17.7691 18.5561 18.3867 18.8914 18.7188C19.2301 19.0475 19.7148 19.2135 20.349 19.2135C20.8072 19.2135 21.1957 19.0973 21.5277 18.8682C21.8564 18.6391 22.0557 18.3967 22.1287 18.1443H24.1143C23.7955 19.1305 23.3107 19.8344 22.6533 20.2594C22.0025 20.6844 21.2057 20.8969 20.2793 20.8969C19.6318 20.8969 19.0508 20.7906 18.5295 20.5881C18.0281 20.3922 17.5766 20.0934 17.2047 19.7082C16.838 19.3127 16.5546 18.8475 16.3713 18.3402C16.1687 17.7791 16.0691 17.1881 16.0758 16.5938C16.0758 15.9795 16.1787 15.4084 16.3779 14.8771C16.7598 13.8445 17.5533 13.0178 18.566 12.5895C19.1072 12.3637 19.6883 12.2508 20.276 12.2574C20.9732 12.2574 21.5775 12.3902 22.1021 12.6625C22.6072 12.9225 23.0457 13.2951 23.3838 13.7516C23.7191 14.2064 23.9549 14.7244 24.1043 15.3088C24.2471 15.8832 24.2969 16.4875 24.257 17.125ZM20.2062 13.9508C19.8477 13.9508 19.5455 14.0139 19.3131 14.1367C19.0807 14.2596 18.8881 14.4123 18.742 14.5883C18.6029 14.7582 18.5 14.9548 18.4398 15.166C18.3867 15.342 18.3502 15.5213 18.3369 15.7039H22.0059C21.9527 15.1295 21.7535 14.7045 21.4879 14.4057C21.209 14.1102 20.7607 13.9508 20.2062 13.9508Z" fill="black"/>
                        </svg>
                    </a>
                @else
                <div class="view-item-wind-title-behance"></div>
                @endif
                

                <div class="item-wind-title-icon">
                    <svg width="91" height="28" viewBox="0 0 91 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="64.5504" y="0.779776" width="25.9624" height="25.9624" rx="2.32478" stroke="#010101" stroke-width="0.929914"/>
                        <line x1="71.8034" y1="7.99835" x2="83.2942" y2="19.4891" stroke="black" stroke-width="1.85983" stroke-linecap="round"/>
                        <line x1="0.929914" y1="-0.929914" x2="17.1803" y2="-0.929914" transform="matrix(-0.707107 0.707107 0.707107 0.707107 84.5747 7.99835)" stroke="black" stroke-width="1.85983" stroke-linecap="round"/>
                        <rect x="32.5358" y="0.76409" width="25.9624" height="25.9624" rx="2.32478" stroke="#010101" stroke-width="0.929914"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M52.0414 8.78882H39.1272V19.7068H52.0414V8.78882ZM38.145 7.7384V20.7572H53.0236V7.7384H38.145Z" fill="black"/>
                        <rect x="38.61" y="7.27346" width="13.9487" height="13.0188" stroke="black" stroke-width="0.929914" stroke-linejoin="round"/>
                        <rect x="0.520133" y="0.779776" width="25.9624" height="25.9624" rx="2.32478" stroke="#010101" stroke-width="0.929914"/>
                        <line x1="6.92345" y1="20.3393" x2="17.5188" y2="20.3393" stroke="black" stroke-width="0.929914" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            @if ($data->first()->img)
                <div class="view-item-wind-photo"><img class="view-item-wind-img" src="/img/works/{{ $data->first()->img }}" alt=""></div>
            @else
                <div class="view-item-wind-photo"><img class="view-item-wind-img" src="/img/works/{{ $data->first()->img }}" alt=""></div>
            @endif
            <div class="view-item-wind-slider">
                <div class="view-item-wind-slider-icon"></div>
            </div>
        </div>

        <div class="content-item-buttons">
            @if($data->first()->price)
                <a class="view-item-buttons-btn" href="#"><div>BUY</div><div>{{ $data->first()->price }}$</div></a>
            @else
                <a class="view-item-buttons-btn" href="/img/works/{{ $data->first()->img }}" download>DOWNLOAD</a>
            @endif
        </div>

    </div>

</div>

@stop

