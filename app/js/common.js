$(function() {

    var widthScreen = $(window).width() + 17;
    var scrollTop = $(window).scrollTop();

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

    // telephone masked input

    $('input[type="tel"]').mask("+38(099) 999-9999",{placeholder:"+38(0__) ___ ____ "});

    // entry ban for email

    $('input[type="email"]').on('keyup keydown',function() {
        this.value = this.value.replace(/[а-я|\s|\/|\\]/i, "");
    });

    // just 0-9 in text input
    $('.input-number').on('keyup keydown', function(e){
        -1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/
            .test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)
            ||35<=e.keyCode&&40>=e.keyCode
            ||(e.shiftKey||48>e.keyCode||57<e.keyCode)
            &&(96>e.keyCode||105<e.keyCode)
            &&e.preventDefault()
    });

    // remove pseudo labels from input after touch

    $('input[type="tel"], input[type="text"], input[type="password"], input[type="email"]').on('click touchstart', function(){
        if(!$(this).hasClass('touch')) {
            $(this).addClass('touch');

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



    $("#toRegister").click(function(e){
        e.preventDefault();
        $("#logIn").modal('hide');
    });

    $("#toLogIn").click(function(e){
        e.preventDefault();
        $("#register").modal('hide');
    });

    $('.rateit').rateit();
    $('.rateit').bind('rated', function() {
       $(this).next('.rateit-value-now').text($(this).rateit('value'));
    });

    ///////////////////////////////////////// add contact telephone ///////////////////////////////////////////

    $('.contact-info').on('click', function(e){
        e.preventDefault();
        var target = e.target;
        var telBlock ='<div class="row new-tel-block">'+
                            '<div class="col-sm-2"></div>'+
                            '<div class="col-sm-7">'+
                                '<div class="row">'+
                                    '<div class="col-sm-6"><input type="tel" class="border-input col-sm-12 col-xs-12" placeholder="+38(0__) ___-____"></div>'+
                                    '<div class="col-sm-6"><input type="text" class="border-input col-sm-12 col-xs-12" placeholder="Название отдела"></div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-sm-3">'+
                                '<a href="#"><i class="icon-close-red"></i></a>'+
                            '</div>'+
                        '</div>';
        if(target.className == 'add-item') {
            $('.add-tel-number').append(telBlock);
            $('input[type="tel"]').mask("+38(099) 999-9999");
        } else if($(target).closest('.new-tel-block').length) {
           if(target.className == 'icon-close-red') {
               $(target).closest('.new-tel-block').remove();
           }
        }
    });

    var randomId = 10;

    $('#add-s-s').on('click', function(e){
        e.preventDefault();
        var sportDirection = $('#sportDirection').val();
        var sportMonthCost = $('#sportMonthCost').val();
        var sportOnceCost = $('#sportOnceCost').val();
        var sportYearCost = $('#sportYearCost').val();
        var sportOneFree = $('#sportOneFree').val();
        var sportForKids = $('#sportForKids').is(':checked');
        if (sportForKids) {
            sportForKids ='checked';
        } else {
            sportForKids = ''
        }
        if(sportOneFree == "") {
            sportOneFree="Да";
        } else {
            sportOneFree;
        }

        var addSportSectionBlock = $('.add-sport-section-block');
        var addSportSectionItem =
            '<div class="add-sport-section--item">' +
                '<div class="add-sport-section">' +
                    '<h4 class="section-block__title--light top-zero">'+sportDirection+'</h4>' +
                    '<div class="row">' +
                        '<div class="col-sm-6">' +
                            '<div class="row">' +
                                '<div class="col-sm-6 col-xs-12"><span class="info__label">Стоимость за месяц от:</span></div>' +
                                '<div class="col-sm-6 col-xs-12 no-left-padding">' +
                                    '<input type="text" value="' +sportMonthCost+ '" class="input-number border-input border-input--short col-sm-12 col-xs-12">' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-sm-6">' +
                            '<div class="row">' +
                                '<div class="col-sm-6 col-xs-12"><span class="info__label">Разовое посещение от:</span></div>' +
                                '<div class="col-sm-6 col-xs-12 no-left-padding">' +
                                    '<input type="text" value="' +sportOnceCost+ '" class="input-number border-input border-input--short col-sm-12 col-xs-12">' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="row">' +
                        '<div class="col-sm-6">' +
                            '<div class="row">' +
                                '<div class="col-sm-6 col-xs-12"><span class="info__label">Годовой абонемент от:</span></div>' +
                                '<div class="col-sm-6 col-xs-12 no-left-padding">' +
                                    '<input type="text" value="' +sportYearCost+ '" class="input-number border-input border-input--short col-sm-12 col-xs-12">' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="col-sm-6">' +
                            '<div class="row">' +
                                '<div class="col-sm-6 col-xs-12"><span class="info__label">Бесплатное занятие</span></div>' +
                                    '<div class="col-sm-6 col-xs-12 no-left-padding">' +
                                        '<select class="custom-select" val="'+sportOneFree+'"  title="'+sportOneFree+'" data-width="70px">' +
                                        '<option value="Да">Да</option>' +
                                        '<option value="Нет">Нет</option>' +
                                        '</select>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="row">' +
                            '<div class="col-sm-12">' +
                                '<input type="checkbox" name="checkbox" id="add-'+randomId+'" class="custom-checkbox">' +
                                '<label for="add-'+randomId+'" class="label-medium">Уточняйте</label>'+
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="sub-section clearfix">' +
                        '<input type="checkbox" name="checkbox" id="addd-'+randomId+'" class="custom-checkbox" '+sportForKids+'>' +
                        '<label for="addd-'+randomId+'" class="label-medium">Для детей</label>'+
                        '<button class="btn btn-danger pull-right">Удалить</button>' +
                    '</div>' +
                '</div>' +
            '</div>';

        addSportSectionBlock.append(addSportSectionItem);

        randomId++;

        $('.custom-select').selectpicker({
            iconBase: 'sprite-icon'
        });
        console.log(sportOneFree);
    });

    ////////////////////////////// section remover ////////////////////////////////

    $('.add-sport-section-block').click(function(e){
        if($(e.target).hasClass('btn-danger')&&$(e.target).closest('.add-sport-section--item').length) {
            //e.preventDefault();
            $(e.target).closest('.add-sport-section--item').remove();
        }
    });



    //$('.checkout-stream__list').mCustomScrollbar({
    //    autoDraggerLength: false,
    //    scrollEasing:"easeOut",
    //    setHeight: "210px"
    //});

    ///////////////////////////////////////////// add trainer to add-form //////////////////////////////////////////

    $('#add-your-trainer').click(function(){
        var trainerName = $('#trainer-names').val();
        var trainerBlock = '<li class="add-sport-trainer__item border-input">'+
                                '<i class="icon-trainer"></i>' +
                                '<span>'+trainerName+'</span>' +
                                '<i class="icon-close-red"></i>'+
                            '</li>';
        if(trainerName) {
            $('.add-sport-trainer__list').append(trainerBlock);
        }

    });

    $('.add-sport-trainer__list').on('click', function(e){
        var target = e.target;
        if (target.className === "icon-close-red") {
           $(target).parent().remove();
        }
    });

    /////////////////////////////// date picker ///////////////////////

    $('.datepicker').datetimepicker({
        viewMode: 'years',
        useCurrent: false,
        format: 'DD/MM/YYYY',
        locale: 'ru'
    });

    //////////////////////////////// time picker //////////////////////

    $('.time-picker').datetimepicker({
        locale: 'ru',
        useCurrent: false,
        format: 'LT'
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
    $('.two-photo-block').lightGallery();


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

    ///////////////////////////// direction popap select ///////////////////////////////

    $('#direct-select').on('click', function(){
        var $that = $(this);
        var $sortChoice = $('#sort-choice');
        $sortChoice.modal('show');
        if($sortChoice.length) {
            $('.site-header__main-menu').on('click', function(e){
                var target = e.target;
                if($(target).text() && $(target).attr('href')){
                    var directSelectData = $(target).text();
                    $sortChoice.modal('hide');
                    directSelectData = String(directSelectData).replace(/\(+\d+\)/g, "");
                    $that.val(directSelectData);
                }
            });
        }
    });

    //$("#modal-select").click(function(){
    //    $('#sort-choice').modal('show');
    //});

    $('#modal-select').on('click', function(){
        var $that = $('#filter-search');
        var $sortChoice = $('#sort-choice');
        $sortChoice.modal('show');
        if($sortChoice.length) {
            $('.site-header__main-menu').on('click', function(e){
                var target = e.target;
                if($(target).text() && $(target).attr('href')){
                    var directSelectData = $(target).text();
                    $sortChoice.modal('hide');
                    directSelectData = String(directSelectData).replace(/\(+\d+\)/g, "");
                    $that.val(directSelectData);
                }
            });
        }
    });

    $('#filter-search').quicksearch('#filter-search-result ul li', {
        selector: 'a',
        delay: "500",
        noResults: 'li#noResult'
    });

    $('#filter-search').focus(function(){
       $(this).val('');
    });

    $(document).on('click', function (e) {
        if ($(e.target).hasClass('touch')) {
            $('#filter-search-result').addClass('show');
        } else {
            $('#filter-search-result').removeClass('show');
        }
    });

    $('#filter-search-result').on('click', function(e){
        e.preventDefault();
        var target = e.target;
        if($(target).text() && $(target).attr('href')){
            var targetText = $(target).text();
            console.log(targetText);
            $('#filter-search').val(String(targetText).replace(/\(+\d+\)/g, ""));
        }
    });


    ///////////////////////////////////////////////// sticky head menu ///////////////////////////////////////////

    $(document).on('scroll', function(){
        if($(this).width() > 768 && $(this).scrollTop() > 180){
            $('.site-header--menu').addClass('fix-menu');
            setTimeout(function(){
                $('.site-header--menu').addClass('change');
                },100);
        } else {
            $('.site-header--menu').removeClass('fix-menu');
            $('.site-header--menu').removeClass('change');

        }
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
            $('.navbar-nav').removeAttr('style');

            /////////////////////////////////// sticky right sidebar //////////////////
            var styckyHeight = $("#sticky-left").height();

            $('#sticky-block').stick_in_parent({
                offset_top: 20
            })
                .on("sticky_kit:stick", function() {
                $(this).parent().css("height", styckyHeight -20);
            });


        }
    }

    $(window).ready(bindClickOnTabMenu(widthScreen)).resize(function(){
        bindClickOnTabMenu($(window).width()+17);
    });















});

