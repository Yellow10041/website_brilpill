@extends('layouts.app')

@section('title', 'admin')

@section('content')

@if($errors->any())
<div class="massage errors">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</div>
@endif

@if(session('success'))
    <div class="massage success">
        {{ session('success') }}
    </div>
@endif

@if(empty($post))
    <div class="admin__menu">
        <div class="admin__menu__item admin__menu__item-active" data-cat="post-add">Add Post</div>
        <div class="admin__menu__item" data-cat="post-all">All Post</div>
        <div class="admin__menu__item" data-cat="post-main-edit">Edit Main Post</div>
        <div class="admin__menu__item" data-cat="news-edit">Edit News</div>
    </div>

    <div class="admin__containers">


        <div class="admin__container admin__container-active">
            <form class="admin-form" action="{{ route('works-add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="admin-inputs">
                    <div class="admin-inputs-item">
                        <div class="admin-inputs-inner">
                            <div class="admin-input-item">
                                <label for="" class="admin-label">Description</label>
                                <textarea class="admin-input admin-input-area" name="description" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="admin-inputs-item">
                        <div class="admin-inputs-inner">

                            <div class="admin-input-item">
                                <label for="" class="admin-label">Photo</label>
                                <div class="admin-input admin-input-file">
                                    <input name="image" id="img" type="file" class="admin-input-file-input">
                                    <label for="img" class="admin-input-file-label">Щоб вибрати зображення натисніть сюди,<br>або перетягніть зображення сюди </label>
                                    <label for="img" class="admin-input-file-label admin-input-file-label-mob">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4004 3.60002H16.1644C16.6774 3.60002 17.1004 4.02302 17.1004 4.53602V16.164C17.1004 16.677 16.6774 17.1 16.1644 17.1H4.53639C4.02339 17.1 3.60039 16.677 3.60039 16.164V14.4H1.83639C1.32339 14.4 0.900391 13.977 0.900391 13.464V1.83602C0.900391 1.32302 1.32339 0.900024 1.83639 0.900024H13.4644C13.9774 0.900024 14.4004 1.32302 14.4004 1.83602V3.60002ZM2.70039 12.6H12.6004V2.70002H2.70039V12.6ZM7.20039 4.95002C7.20039 4.20302 6.59739 3.60002 5.85039 3.60002C5.10339 3.60002 4.50039 4.20302 4.50039 4.95002C4.50039 5.69702 5.10339 6.30002 5.85039 6.30002C6.59739 6.30002 7.20039 5.69702 7.20039 4.95002ZM9.00039 9.00002C9.00039 9.00002 9.90039 4.50002 11.7004 4.50002V11.7H3.60039V6.30002C5.40039 6.30002 5.40039 9.00002 5.40039 9.00002C5.40039 9.00002 5.69739 7.20002 7.20039 7.20002C8.70339 7.20002 9.00039 9.00002 9.00039 9.00002ZM15.3004 15.3V5.40002H14.4004V13.464C14.4004 13.977 13.9774 14.4 13.4644 14.4H5.40039V15.3H15.3004Z" fill="#363636"/>
                                        </svg>
                                    </label>
                                    <span class="admin-input-file-name"></span>
                                </div>

                            </div>

                            <div class="admin-input-item-tags">
                                <div class="admin-input-inner">
                                    <label for="" class="admin-label admin-label-tag">Main tag</label>
                                    <input name="main_tag" type="text" class="admin-input">
                                </div>
                                <div class="admin-input-inner">
                                    <label for="" class="admin-label admin-label-tag">Tags</label>
                                    <input name="tags" type="text" class="admin-input">
                                </div>
                            </div>
                            
                            <div class="admin-input-item-two">
                                <div class="admin-input-item admin-input-item-two-inner">
                                    <label for="" class="admin-label">Name</label>
                                    <input name="name" type="text" class="admin-input">
                                </div>

                                <div class="admin-input-item admin-input-item-two-inner">                        
                                    <label for="" class="admin-label">Category</label>
                                    <select name="category" class="admin-input">
                                        <option value="Illustrations">Illustrations</option>
                                        <option value="Print product">Print product</option>
                                        <option value="3d\NFT">3d\NFT</option>
                                        <option value="UI\UX">UI\UX</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="admin-input-item-two">
                                <div class="admin-input-item admin-input-item-two-inner">  
                                    <label for="" class="admin-label">Year</label>
                                    <input name="year" type="number" class="admin-input">
                                </div>

                                <div class="admin-input-item admin-input-item-two-inner">
                                    <label for="" class="admin-label">Price</label>
                                    <input name="price" type="number" class="admin-input">
                                </div>
                            </div>

                            <div class="admin-input-item-tags">
                                <div class="admin-input-link">
                                    <label for="" class="admin-label admin-label-tag">Link to Behance</label>
                                    <input name="link" type="text" class="admin-input">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="admin-work-buttons">
                    <button class="admin-submit" type="submit">Submit</button>
                </div>
                

            </form>
        </div>

        <div class="admin__container">
            <div class="works-main">
                <div class="works-title">
                    <div class="works-title-text">D:DESIGN BY BRILPILL</div>
                </div>
                <div class="works-content">
                @if (null !== $works->first())
                    @foreach($works as $elem)
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
                            <a class="item-buttons-btn" href="{{ route('works-delete', [$elem->id]) }}">Delete</a>
                                <a class="item-buttons-btn" href="{{ route('admin', ['id' => $elem->id]) }}">Edit</a>
                                <div class="item-buttons-btn">ID:{{$elem->id}}</div>
                            </div>

                        </div>
                        
                    @endforeach
                @endif
                </div>
            </div>
        </div>

        <div class="admin__container">
            <form class="admin-form" action="{{ route('post-change')}}" method="post" enctype="multipart/form-data">
                @csrf

                <input name="post_id" type="number" class="admin-input-hide admin-input-post-id">
                <input name="geometry" type="number" class="admin-input-hide admin-input-geometry-id">

                <div class="admin-inputs">
                    <div class="admin-inputs-item">
                        <div class="admin-inputs-inner">
                            <div class="admin-input-item">
                                <label for="" class="admin-label">Geometry</label>
                                <div class="admin-input admin-input-geometry" >
                                    @for($i=1; $i <= 4; $i++)
                                        <div class="admin-input-geometry-item">
                                            @include('inc.geometry.geometry_item_' . $i)
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="admin-inputs-item">
                        <div class="admin-inputs-inner">

                            <div class="admin-input-item">
                                <label for="" class="admin-label">Photo</label>
                                <div class="admin-input admin-input-file">
                                    <input name="image" id="img" type="file" class="admin-input-file-input admin-input-file-input-post">
                                    <label for="img" class="admin-input-file-label">Щоб вибрати зображення натисніть сюди,<br>або перетягніть зображення сюди </label>
                                    <span class="admin-input-file-name"></span>
                                </div>

                            </div>

                            <div class="admin-input-item">
                                <label for="" class="admin-label admin-label-tag">ID</label>
                                <input name="work_id" type="number" class="admin-input admin-input-id">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="admin-buttons">
                    <div class="admin-submit admin-check">Check</div>
                    <button class="admin-submit" type="submit">Submit</button>
                </div>
                
                

            </form>



            <div class="home-slider home-slider-admin">

    <div class="home-sidebar-arrow home-sidebar-arrow-left"><i class="fas fa-chevron-left"></i></div>
    
    <div class="home-slider-inner">

        @foreach($posts as $post_item)
        
            @php

                $work_item = Works::where('id', $post_item->work_id)->get()->first();

            @endphp

            <div class="{{'home-slider-post slider-post-' . $loop->iteration}}" data-id="{{ $post_item->id }}">

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

    <div class="home-sidebar-arrow home-sidebar-arrow-right"><i class="fas fa-chevron-right"></i></div>

    <div class="home-slider-line">
        <div class="slider-line-num slider-line-num-before">01</div>
        <div class="slider-line-progress">
            <div class="slider-progress-line"></div>
        </div>
        <div class="slider-line-num slider-line-num-after"></div>
    </div>

</div>

    <div class="admin-post-buttons">
        <a class="admin-post-buttons-item admin-post-buttons-item-remove" href="">Remove</a>
        <a class="admin-post-buttons-item admin-post-buttons-item-add" href="{{ route('post-create') }}">Add</a>
    </div>

    </div>




        <div class="admin__container">
            <form class="admin-news" action="{{ route('change-news')}}">
                <div class="admin-news-title">NEWS</div>
                <div class="admin-news-items">
                    @foreach ($news as $news_item)
                        <div class="admin-news-item">
                            <div class="admin-news-text">
                                <textarea class="admin-news-input" name="news{{$news_item->id}}" id="" cols="30" rows="10">{{ $news_item->text }}</textarea>
                                    
                                <div class="news-text-slide"></div>
                            </div>

                            <a class="admin-news-item-delete" href="{{ route('delete-news', $news_item->id) }}">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1.71744" y1="1.68359" x2="13.2082" y2="13.1744" stroke="black" stroke-width="1.85983" stroke-linecap="round"/>
                                    <line x1="0.929914" y1="-0.929914" x2="17.1803" y2="-0.929914" transform="matrix(-0.707107 0.707107 0.707107 0.707107 14.4883 1.68359)" stroke="black" stroke-width="1.85983" stroke-linecap="round"/>
                                </svg>
                            </a>
                        </div>
                        
                    @endforeach
                    
                </div>

                <div class="admin-news-button">
                    <a class="admin-news-button-item" href="{{ route('create-news') }}">Add</a>
                    <button class="admin-news-button-item" type="submit">Submit</button>
                </div>
                
            </form>
        </div>

    </div>

@else

    <form class="admin-form" action="{{ route('works-change', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="admin-inputs">
            <div class="admin-inputs-item">
                <div class="admin-inputs-inner">
                    <div class="admin-input-item">
                        <label for="" class="admin-label">Description</label>
                        <textarea class="admin-input admin-input-area" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
                    </div>
                </div>
            </div>

            <div class="admin-inputs-item">
                <div class="admin-inputs-inner">

                    <div class="admin-input-item">
                        <label for="" class="admin-label">Photo</label>
                        <div class="admin-input admin-input-file">
                            <input name="image" id="img" type="file" class="admin-input-file-input">
                            <label for="img" class="admin-input-file-label">Щоб вибрати зображення натисніть сюди,<br>або перетягніть зображення сюди </label>
                            <label for="img" class="admin-input-file-label admin-input-file-label-mob">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4004 3.60002H16.1644C16.6774 3.60002 17.1004 4.02302 17.1004 4.53602V16.164C17.1004 16.677 16.6774 17.1 16.1644 17.1H4.53639C4.02339 17.1 3.60039 16.677 3.60039 16.164V14.4H1.83639C1.32339 14.4 0.900391 13.977 0.900391 13.464V1.83602C0.900391 1.32302 1.32339 0.900024 1.83639 0.900024H13.4644C13.9774 0.900024 14.4004 1.32302 14.4004 1.83602V3.60002ZM2.70039 12.6H12.6004V2.70002H2.70039V12.6ZM7.20039 4.95002C7.20039 4.20302 6.59739 3.60002 5.85039 3.60002C5.10339 3.60002 4.50039 4.20302 4.50039 4.95002C4.50039 5.69702 5.10339 6.30002 5.85039 6.30002C6.59739 6.30002 7.20039 5.69702 7.20039 4.95002ZM9.00039 9.00002C9.00039 9.00002 9.90039 4.50002 11.7004 4.50002V11.7H3.60039V6.30002C5.40039 6.30002 5.40039 9.00002 5.40039 9.00002C5.40039 9.00002 5.69739 7.20002 7.20039 7.20002C8.70339 7.20002 9.00039 9.00002 9.00039 9.00002ZM15.3004 15.3V5.40002H14.4004V13.464C14.4004 13.977 13.9774 14.4 13.4644 14.4H5.40039V15.3H15.3004Z" fill="#363636"/>
                                </svg>
                            </label>
                            <span class="admin-input-file-name">{{ $post->img }}</span>
                        </div>

                    </div>

                    <div class="admin-input-item-tags">
                        <div class="admin-input-inner">
                            <label for="" class="admin-label admin-label-tag">Main tag</label>
                            <input name="main_tag" type="text" class="admin-input" value="{{ $post->main_tag }}">
                        </div>
                        <div class="admin-input-inner">
                            <label for="" class="admin-label admin-label-tag">Tags</label>
                            <input name="tags" type="text" class="admin-input" value="{{ $post->tags }}">
                        </div>
                    </div>
                    
                    <div class="admin-input-item-two">
                        <div class="admin-input-item admin-input-item-two-inner">
                            <label for="" class="admin-label">Name</label>
                            <input name="name" type="text" class="admin-input" value="{{ $post->name }}">
                        </div>

                        @php
                            $categories = ['Illustrations', 'Print product', '3d\NFT', 'UI\UX'];
                        @endphp

                        <div class="admin-input-item admin-input-item-two-inner">                        
                            <label for="" class="admin-label">Category</label>
                            <select name="category" class="admin-input">
                                @foreach($categories as $category)
                                    @if($category == $post->category)
                                        <option value="{{$category}}" selected>{{$category}}</option>
                                    @else
                                        <option value="{{$category}}">{{$category}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="admin-input-item-two">
                        <div class="admin-input-item admin-input-item-two-inner">  
                            <label for="" class="admin-label">Year</label>
                            <input name="year" type="number" class="admin-input" value="{{ $post->year }}">
                        </div>

                        <div class="admin-input-item admin-input-item-two-inner">
                            <label for="" class="admin-label">Price</label>
                            <input name="price" type="number" class="admin-input" value="{{ $post->price }}">
                        </div>
                    </div>

                    <div class="admin-input-item-tags">
                        <div class="admin-input-link">
                            <label for="" class="admin-label admin-label-tag">Link to Behance</label>
                            <input name="link" type="text" class="admin-input"  value="{{ $post->link }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="admin-change-buttons">
            <a class="admin-back" href="{{ url()->previous() }}">
                <svg width="42" height="16" viewBox="0 0 42 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M41 9C41.5523 9 42 8.55228 42 8C42 7.44772 41.5523 7 41 7V9ZM0.292894 7.29289C-0.0976301 7.68342 -0.0976301 8.31658 0.292894 8.70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65686 0.928932L0.292894 7.29289ZM41 7L1 7V9L41 9V7Z" fill="black"/>
                </svg>
                Back
            </a>
            <button class="admin-submit" type="submit">Submit</button>
        </div>
        

    </form>

@endif

@stop

@section('custom-js')

<script>
    $(document).ready(function () {
        

    }
</script>

@stop