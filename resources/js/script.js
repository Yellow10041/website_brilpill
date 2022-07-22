const { eq } = require("lodash");

$(function() {



    function randomNum(num) {
        return Math.floor(Math.random() * (num - 1) + 1)
    }

    function randomNumZero(num) {
        return Math.floor(Math.random() * num)
    }



    $('.header_nav-mob').click(function() {
        
        if($(this).hasClass('header_nav-mob-active')) {
            $(this).removeClass('header_nav-mob-active')

            $('.header-img').attr('src', '/img/logo-1.png').css({'position' : 'relative'})

            $('.container-bg-mob').removeClass('container-bg-mob-active')
            $('.nav-items-mob').removeClass('nav-items-mob-active')
        }
        else {
            console.log(1);
            $(this).addClass('header_nav-mob-active')

            $('.header-img').attr('src', '/img/logo-2.png').css({'position' : 'fixed'})

            $('.container-bg-mob').addClass('container-bg-mob-active')
            $('.nav-items-mob').addClass('nav-items-mob-active')
        }
    })





    let pathname = (window.location.pathname).replace('%20', ' ').replace('%5C', '\\');
    console.log(pathname);



    let navItems = $(".nav-item").length;

    for (let i = 0; i < navItems; i++) {
        let nameItem = '/' + $(".nav-item:eq(" + i +")").text();
        console.log(nameItem);
        if (nameItem == pathname) {
            $(".nav-item:eq(" + i +")").addClass("active")
        }
        else if ("/works" + nameItem == pathname) {
            $(".nav-item:eq(" + i +")").addClass("active")
        }
    }



    

    let optionVal = $(".works-title-filter-price-title-text").text()
    if (optionVal == 1){
        $('.works-title-filter-title-icon-price').css({'rotate' : '0deg'})
    }
    else if (optionVal == 2) {
        $('.works-title-filter-title-icon-price').css({'rotate' : '180deg'})
    }
    console.log(optionVal);

    



    $('.admin__menu__item').click(function () {
        $('.admin__menu__item').removeClass('admin__menu__item-active');
        $(this).addClass('admin__menu__item-active');

        $('.admin__container').removeClass('admin__container-active');
        $('.admin__container').eq($(this).index()).addClass('admin__container-active');
    });




    $('.projectView-info-item-title-mob').click(function() {
        if($(this).hasClass('projectView-info-item-title-mob-active')) {
            $(this).removeClass('projectView-info-item-title-mob-active')
            $('.projectView-info-item-content-mob').removeClass('projectView-info-item-content-mob-active')
        }
        else {
            $(this).addClass('projectView-info-item-title-mob-active')
            $('.projectView-info-item-content-mob').addClass('projectView-info-item-content-mob-active')
        }
        
    })


    let slideHeightBio = $(".bio-text-slide").parent().outerHeight() - $(".bio-text-slide").outerHeight();
    console.log(slideHeightBio);

    $(".bio-text-slide").css({'top' : Math.floor(Math.random() * slideHeightBio)});

    let newsItems = $(".news-text-slide").length;

    for (let i = 0; i < newsItems; i++) {
        let slideHeightNews = $(".news-text-slide:eq(" + i +")").parent().outerHeight()  - $(".news-text-slide:eq(" + i +")").outerHeight();
        $(".news-text-slide:eq(" + i +")").css({'top' : Math.floor(Math.random() * slideHeightNews)});
    }  


    let slideWidthAbout = $(".about-title-wind-slider").parent().outerWidth() - $(".about-title-wind-slider").outerWidth();
    $(".about-title-wind-slider").css({'left' : Math.floor(Math.random() * slideWidthAbout)});

    let slideWidthWork = $(".view-item-wind-slider").parent().outerWidth() - $(".view-item-wind-slider").outerWidth();
    $(".view-item-wind-slider").css({'left' : Math.floor(Math.random() * slideWidthWork)});

    function sliders() {
        let slideItems = $(".item-wind-slider").length;

        for (let i = 0; i < slideItems; i++) {
            let slideWidthItem = $(".item-wind-slider").eq(i).parents('.works-content-item').outerWidth() - $(".item-wind-slider:eq(" + i +")").outerWidth();
            $(".item-wind-slider:eq(" + i +")").css({'left' : Math.floor(Math.random() * slideWidthItem)});
        } 
    }
    
    sliders();


    let objColor = ['#F3B2B2', '#F6E4DD', '#AADBE1', '#387877', '#A7C8D5'];

    let objItems = $(".projectView-name-object-item").length;

    $(".projectView-name-object-item:eq(" + randomNumZero(objItems) +")").css({'display' : "block", "fill" : objColor[randomNumZero(objColor.length)]});



    let tags = $('.projectView-info-item-content-tag').text().split('`');
    $('.projectView-info-item-content-tag').html("")
    console.log(tags)
    for (let i = 0; i < tags.length; i++) {
        $('.projectView-info-item-content-tag').append($('<div>', { 'text' : tags[i]}))
    }
    


    let bloooool = Math.floor(Math.random() * 99 + 1);
    console.log(bloooool);
    if(bloooool <= 10) {
        $(".home-new-booool").css({'display' : "block"});
    }



    let itemBgW = $("html").outerWidth();
    $(".home-new-inner").append(" new /");
    let itemNewW = $(".home-new-inner").outerWidth()
    console.log('home-new-inner = ' + itemNewW)
    let boolCenter = 0  ;
    for(let i = 0; itemBgW + (itemNewW * 2) > i; i += itemNewW) {
        $(".home-new-inner").append("new / ");
    }
    for(let i = 0; itemBgW / 2 - itemNewW > i; i += itemNewW) {
        boolCenter += itemNewW;
    }
    $(".home-new-booool").css({'left' : 50 + boolCenter});


    let posts = $('.home-slider-post').length;
    if (posts < 10) {
        $(".slider-line-num-after").html("0" + posts);
    }
    else {
        $(".slider-line-num-after").html(posts);
    }


    let postNow = Math.floor(Math.random() * (posts - 1) + 1);
    let progressWidth = $('.slider-line-progress').outerWidth()
    console.log(progressWidth)
    $(".slider-progress-line").css({'width' : progressWidth / posts * postNow});
    $(".slider-post-" + postNow).css({'display' : 'flex'});
    
    let slide = (itemBgW / $(".slider-post-1").outerWidth()) * (itemBgW / 100);
    let slideTime = (0.1 * (slide / 30));
    $(".home-slider-post").css({'transition' : 'all ' + slideTime + 's linear'});

    let postID = $('.home-slider-post').eq(postNow - 1).data('id')

    console.log(postNow, postID);

    $('.admin-input-post-id').val(postID);

    let url = "admin/post/check/" + postID;

    $.ajax({
        type: "GET",
        url: url,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            console.log(data);
            $('.admin-input-geometry-item').removeClass('admin-input-geometry-item-active').eq(data['geometry'] - 1).addClass('admin-input-geometry-item-active');
            $('.admin-input-geometry-id').val(data['geometry'])
            $('.admin-input-id').val(data['work_id'])
        }
    });

    let urlDelete = "admin/post/delete/" + postID;

    $('.admin-post-buttons-item-remove').attr('href', urlDelete);

    console.log(postNow);
    console.log(150 / posts * postNow);
    console.log(boolCenter);
    console.log(slideTime);
    console.log(slide);
    console.log(itemBgW);



    let rotT = 0;

    $(".works-title-filter-premium").children(".works-title-filter-title").click(function(){

        if (rotT == 1) {
            $(this).children(".works-title-filter-title-icon").css({'rotate' : "90deg"});
            
            $(this).next().css({'padding' : "0px", 'bottom' : "5px", 'height' : "0px"});
            rotT = 0;
            }
        else {
            $(this).children(".works-title-filter-title-icon").css({'rotate' : "0deg"});
            $(this).next().css({'padding' : "20px", 'height' : "60px",'bottom' : "-100px"});
            rotT = 1;
        }

    })

    let rotN = 0;

    $(".works-title-filter-new").children(".works-title-filter-title").click(function(){

        if (rotN == 1) {
            $(this).children(".works-title-filter-title-icon").css({'rotate' : "90deg"});
            
            $(this).next().css({'padding' : "0px", 'bottom' : "5px", 'height' : "0px"});
            rotN = 0;
            }
        else {
            console.log($(this).parent().attr("class").split(" "))
            let thisParent = $(this).parent().attr("class").split(" ")
            $(this).children(".works-title-filter-title-icon").css({'rotate' : "0deg"});
            $(this).next().css({'padding' : "20px", 'height' : "20px",'bottom' : "-65px"});
            rotN = 1;
        }

    })

    
    let rot = 0;
    $(".bac-btn-item").click(function(){
        if (rot == 0) {
        $(".bac-btn").css({'left' : 0});
        $(".bac-btn-item-svg").css({'rotate' : "180deg"});
        rot = 1;
        }
        else {
            $(".bac-btn").css({'left' : "-150px"});
            $(".bac-btn-item-svg").css({'rotate' : "0deg"});
            rot = 0;
        }
    })

    $(".switch-item-1").click(function(){

        $(".container-bg").css({'background-blend-mode' : 'difference', 'background-image' : 'url("/img/bg.png")'});
        $(".container-bg-object").css({'display' : 'none'});
    
    });

    $(".switch-item-2").click(function(){

        $(".container-bg").css({'background-blend-mode' : 'normal', 'opacity' : '0.7', 'background-image' : 'url("/img/bg.png")'});
        $(".container-bg-object").css({'display' : 'none'});
        
    });

    $(".switch-item-3").click(function(){

        $(".container-bg").css({'background-blend-mode' : 'color'});
        $(".container-bg-object").css({'display' : 'block'});
    });

    $(".home-title-img").click(function(){

        $(".container-bg").css({'background-blend-mode' : 'normal', 'background-image' : 'url("/img/bg-1.jpg")'});
        $(".container-bg-object").css({'display' : 'none'});
        
    
    });

    var n = postNow;
    var n2;

    function myFunction() {
        $(".slider-post-" + n).css({'display' : 'none'});

        $(".slider-post-" + n2).css({'display' : 'flex'});

        let progressWidth = $('.slider-line-progress').outerWidth()
        $(".slider-progress-line").css({'width' : progressWidth / posts * n2});
    }

    function myFunction2() {

        $(".slider-post-" + n2).css({'transform' : 'translateX(0%)', 'opacity' : '1'});

        n = n2;
    }

    $(".home-sidebar-arrow-left").click(function(){


        $(".slider-post-" + n).css({'transform' : 'translateX(-' + slide + '%)', 'opacity' : '0'});

        n2 = n - 1;
            

        if (n2 < 1) {
            n2 = posts;
        }

        
        $(".slider-post-" + n2).css({'transform' : 'translateX(' + slide + '%)', 'opacity' : '0'});

        setTimeout(myFunction, slideTime * 1000);
        setTimeout(myFunction2, slideTime * 1200);


        let id = $('.home-slider-post').eq(n2 - 1).data('id')

        let urlDelete = "admin/post/delete/" + id;

        $('.admin-post-buttons-item-remove').attr('href', urlDelete);

        $('.admin-input-post-id').val(id);

        let url = "admin/post/check/" + id;

        $.ajax({
            type: "GET",
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data);
                $('.admin-input-geometry-item').removeClass('admin-input-geometry-item-active').eq(data['geometry'] - 1).addClass('admin-input-geometry-item-active');
                $('.admin-input-geometry-id').val(data['geometry'])
                $('.admin-input-id').val(data['work_id'])
            }
        });

    });

    $(".home-sidebar-arrow-right").click(function(){

        $(".slider-post-" + n).css({'transform' : 'translateX(' + slide + '%)', 'opacity' : '0'});

        n2 = n + 1;
            

        if (n2 > posts) {
            n2 = 1;
        }

        
        $(".slider-post-" + n2).css({'transform' : 'translateX(-' + slide + '%)', 'opacity' : '0'});

        setTimeout(myFunction, slideTime * 1000);
        setTimeout(myFunction2, slideTime * 1200);


        let id = $('.home-slider-post').eq(n2 - 1).data('id')

        let urlDelete = "admin/post/delete/" + id;

        $('.admin-post-buttons-item-remove').attr('href', urlDelete);

        $('.admin-input-post-id').val(id);

        let url = "admin/post/check/" + id;

        $.ajax({
            type: "GET",
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data);
                $('.admin-input-geometry-item').removeClass('admin-input-geometry-item-active').eq(data['geometry'] - 1).addClass('admin-input-geometry-item-active');
                $('.admin-input-geometry-id').val(data['geometry'])
                $('.admin-input-id').val(data['work_id'])
            }
        });

    });


    $('.admin-input-geometry-item').click(function() {
        $('.admin-input-geometry-item').removeClass('admin-input-geometry-item-active');
        $(this).addClass('admin-input-geometry-item-active');
        let geometry = $(this).index() + 1;
        $('.admin-input-geometry-id').val(geometry);
    })

    $('.admin-check').click(function() {

        if($('.admin-input-file-input-post')[0].files[0]) {
            let url = URL.createObjectURL($('.admin-input-file-input-post')[0].files[0])
            $('.home-slider-inner-item-img-item').eq(n - 1).attr('src', url);
        }
        
        
        let geometry = $('.admin-input-geometry-item.admin-input-geometry-item-active').index() + 1;
        console.log(n, geometry);

        let requestUrl = "admin/post/geometry/" + geometry;

        $.ajax({
            type: "GET",
            url: requestUrl,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data);
                $('.home-slider-object').eq(n - 1).html(data);
            }
        });


        let work = $('.admin-input-id').val();
        console.log(work);
        requestUrl = "admin/post/work/" + work;

        $.ajax({
            type: "GET",
            url: requestUrl,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data);
                $('.home-slider-title').eq(n - 1).text(data.name);
                $('.home-slider-category').eq(n - 1).text(data.main_tag);
                $('.home-slider-year').eq(n - 1).text(data.year);
                let href = '/works/' + data.category + '/' + data.id;
                $('.home-slider-button-inner').eq(n - 1).attr('href', href);
            }
        });
    })


    let time = 500;
    function fileInput(){
        $('.admin-input-file-input').each((index) => {
            let file = $('.admin-input-file-input').eq(index)[0].files[0]
            if (file) {
                $(".admin-input-file-name").eq(index).text(file.name);
                console.log(file.name);
            }
        })
        
        setTimeout(fileInput, time);
    };

    fileInput();

    

});