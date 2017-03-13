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

    $('.rateit').rateit();
    $('.rateit').bind('rated', function() {
       $(this).next('.rateit-value-now').text($(this).rateit('value'));
    });

    ///////////////////////////////////////// add contact telephone ///////////////////////////////////////////

    $('.contact-info').on('click', function(e){
        e.preventDefault();
        var target = e.target;
        var telBlock ='<div class="row">'+
                            '<div class="col-sm-2"></div>'+
                            '<div class="col-sm-7">'+
                                '<div class="row">'+
                                    '<div class="col-sm-6"><input type="tel" class="border-input col-sm-12 col-xs-12" placeholder="+38(0__) ___-____"></div>'+
                                    '<div class="col-sm-6"><input type="text" class="border-input col-sm-12 col-xs-12" placeholder="Название отдела"></div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-sm-3">'+
                            '</div>'+
                        '</div>';
        if(target.className == 'add-item') {
            $('.add-tel-number').append(telBlock);
            $('input[type="tel"]').mask("+38(099) 999-9999");
        }
    });

    /////////////////////////////////////////////  checkout stream custom scrollbar ///////////////////////////////////

    $('.checkout-stream__list').mCustomScrollbar({
        autoDraggerLength: false,
        scrollEasing:"easeOut",
        setHeight: "210px"
    });

    ///////////////////////////////////////////// add trainer to add-form //////////////////////////////////////////

    $('#add-your-trainer').click(function(){
        var trainerName = $('#trainer-names').val();
        var trainerBlock = '<li class="add-sport-trainer__item border-input">'+
                                '<i class="icon-trainer"></i>' +
                                '<span>'+trainerName+'</span>' +
                                '<i class="icon-close-red"></i>'+
                            '</li>';
        $('.add-sport-trainer__list').append(trainerBlock);
    });

    $('.add-sport-trainer__list').on('click', function(e){
        var target = e.target;
        if (target.className === "icon-close-red") {
           $(target).parent().remove();
        }
    });

    /////////////////////////////////// sticky right sidebar //////////////////

    $('.sticky-block').stick_in_parent({
        offset_top: 20
    });


    function bindClickOnTabMenu(widthScreen){

        if (widthScreen < 992) {

            $('.navbar-nav').find('.with-drop-menu a').unbind('click ').bind('click ', function(e){
                e.preventDefault();
                $(this).next('.site-header__main-menu').slideToggle();
            });

            $('.menu-trigger').unbind('click ').bind('click ', function(e){
                e.preventDefault();
                $(this).toggleClass('open');
                $('.site-header--menu').find('.navbar-nav').slideToggle();
            });

            $('.left-sidebar--title').unbind('click touchstart').bind('click ', function(){
                $(this).toggleClass('open');
                $(this).next().slideToggle();
            });

        } else {
            $('.navbar-nav').find('.with-drop-menu a').unbind('click ');
            $('.left-sidebar--title').unbind('click');
            $('.left-sidebar--title').removeClass('open');
            $('.left-sidebar--title').next().slideDown();
        }
    }

    $(window).ready(bindClickOnTabMenu(widthScreen)).resize(function(){
        bindClickOnTabMenu($(window).width()+17);
    });






});