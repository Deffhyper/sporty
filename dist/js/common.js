$(function() {

    var widthScreen = $(window).width() + 17;

    //show and hide search

    $(document).on('click', function(e){
        var target = e.target;
        var searchField = $('#search-field');
        if(target.className == 'icon-search') {
            e.preventDefault();
            $(target).addClass('open');
            searchField.slideDown();
            searchField.find('input').focus();
        } else {
            $('.icon-search').removeClass('open');
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

    // just 0-9 in text input
    $('.input-number').on('keydown', function(e){
        -1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/
            .test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)
            ||35<=e.keyCode&&40>=e.keyCode
            ||(e.shiftKey||48>e.keyCode||57<e.keyCode)
            &&(96>e.keyCode||105<e.keyCode)
            &&e.preventDefault()
    });


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
        e.preventDefault();
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

    /////////////////////////////// datepicker ///////////////////////
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        language: 'ru'
    });

    ////////////////////////////////// responsive table //////////////////////////////////////////


    //////////////////////////////////////// object image slider ///////////////////////////////////////
    $('.object-img-slider').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        mode: "fade",
        thumbItem:3,
        slideMargin:0,
        enableDrag: true,
        galleryMargin: 7,
        currentPagerPosition:'middle',
        nextHtml: '<span class="ctrl right-arrow"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"viewBox="0 0 477.175 477.175" xml:space="preserve" xmlns:xml="http://www.w3.org/XML/1998/namespace"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5   c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z" fill="#fff"></path></svg></span>',
        prevHtml: '<span class="ctrl left-arrow"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"viewBox="0 0 477.175 477.175" xml:space="preserve" xmlns:xml="http://www.w3.org/XML/1998/namespace"><path xmlns="http://www.w3.org/2000/svg" d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225   c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z" fill="#fff"></path></svg></span>',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '.object-img-gallery .lslide'
            });
        }
    });


    /////////////////////////////////////////////////////object tabs //////////////////////////////////////////////


    $('#responsive-tab').responsiveTabs({
        startCollapsed: 'accordion'
    });

    /////////////////////////////////////////////////// photo gallery ////////////////////////////////////////////////

    $('.three-photo-block').lightGallery();


    ////////////////////////////////////////////////// object scroll to anchor //////////////////////////////////////

    ////////////////////// scroll to map

    $('a[href*="#map"]').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#map').offset().top-15
        }, 1000);
    });

    ////////////////////// scroll to section price

     $('a[href*="#section-anchor"]').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#section-anchor').offset().top-15
        }, 1000);
         $('#section-anchor').trigger('click');
    });

    ////////////////////// scroll to reviews

    $('a[href*="#reviews-anchor"]').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#reviews-anchor').offset().top-15
        }, 1000);
         $('#reviews-anchor').trigger('click');
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

            $("#sticky-block").trigger("sticky_kit:detach");



        } else {
            $('.navbar-nav').find('.with-drop-menu a').unbind('click ');
            $('.left-sidebar--title').unbind('click');
            $('.left-sidebar--title').removeClass('open');
            $('.left-sidebar--title').next().slideDown();

            /////////////////////////////////// sticky right sidebar //////////////////
            var styckyHeight = $("#sticky-left").height();

            $('#sticky-block').stick_in_parent({
                offset_top: 20
            }).on("sticky_kit:stick", function() {
                $(this).parent().css("height", styckyHeight -20);
            });


        }
    }

    $(window).ready(bindClickOnTabMenu(widthScreen)).resize(function(){
        bindClickOnTabMenu($(window).width()+17);
    });






});