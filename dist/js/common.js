$(function() {

    var widthScreen = $(window).width() + 17;

    //show and hide search

    $(document).on('click', function(e){
        var target = e.target;
        var searchField = $('#search-field');
        if(target.className == 'icon-search') {
            searchField.slideDown();
            searchField.find('input').focus();
        } else {
            searchField.slideUp();
        }
        //if(!$(e.target).closest('.navbar-nav').length) {
        //    $('.site-header--menu').find('.navbar-nav').slideUp();
        //    $('.menu-trigger').removeClass('open');
        //    e.stopPropagation();
        //
        //}
    });

    // remove pseudo labels from input after touch

    $('input[type="tel"]').mask("+38(099) 999-9999");

    $('input[type="tel"], input[type="text"], input[type="password"], input[type="email"]').on('click touchstart', function(){
        if($(this).hasClass('touch')) {
            return;
        } else {
            $(this).addClass('touch')
        }
    });
    $('input[type="tel"], input[type="text"], input[type="password"], input[type="email"]').on('blur', function(){
       if($(this).val() == ""){
           $(this).removeClass('touch');
       }
    });

    // custom bootstrap select

    $('.custom-select').selectpicker({
        size: 7,
        iconBase: 'sprite-icon'
    });

    //goods slider on index page
    $('.goods-slider').slick({
        dots: false,
        infinite: true,
        arrows: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    infinite: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    //news slider on index page

    //4 item

    $('.news-slider').slick({
        dots: false,
        infinite: true,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //3 item
    $('.news-slider-1').slick({
        dots: false,
        infinite: true,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $("#modal-select").click(function(){
        $('#sort-choice').modal('show');
    });

    $("#toRegister").click(function(e){
        $("#logIn").modal('hide');
    });


    function bindClickOnTabMenu(widthScreen){

        if (widthScreen < 992) {

            $('.navbar-nav').find('.with-drop-menu a').unbind('click touchstart').bind('click touchstart', function (e) {
                e.preventDefault();
                $(this).next('.site-header__main-menu').slideToggle();
            });

            $('.menu-trigger').unbind('click touchstart').bind('click touchstart', function(e){
                e.preventDefault();
                $(this).toggleClass('open');
                $('.site-header--menu').find('.navbar-nav').slideToggle();
            });

            $('.left-sidebar--title').unbind('click touchstart').bind('click touchstart', function(){
                $(this).toggleClass('open');
                $(this).next('#accordion').slideToggle();
            });

        } else {
            $('.navbar-nav').find('.with-drop-menu a').unbind('click touchstart');
            $('.left-sidebar--title').unbind('click touchstart');
            $('.left-sidebar--title').removeClass('open');
        }
    }

    $(window).ready(bindClickOnTabMenu(widthScreen)).resize(function(){
        bindClickOnTabMenu($(window).width()+17);
    });






});