AOS.init();

jQuery(document).ready(function($) {
    //анимация меню хедера
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 1) {
        $('header').addClass('alt');
        $('.top-line').addClass('alt');
        $('.advantages').addClass('alt');
    } else {
        $('header').removeClass('alt');
        $('.top-line').removeClass('alt');
        $('.advantages').removeClass('alt');
    }

    //спрятать все выпадающие окна при внешнем клике
    $(document).click(function(){
        $(".dropdown").slideUp();
        $('.burger.open').removeClass('open');
    });

    //выбор языка
    $('.dropdown-active').click(function(e){
        e.stopPropagation();

        if ($(window).width() > 767) {
            $('.burger.open').removeClass('open');
            $('.dropdown').not($('.dropdown.choices')).slideUp(100);
        }

        $('.dropdown.choices').slideToggle(250);
    });

    //клик по бургеру
    $('.burger').click(function (e) {
        e.stopPropagation();
        $('.dropdown').not('.burger-menu').slideUp(100);

        $(this).toggleClass('open');
        $('.burger-menu').slideToggle();
    });

    //переход по якорной ссылке в меню бургера
    $(".burger-menu a").click(function () {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top - 80;
        console.log(destination);
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
        $('.burger-menu').slideUp();
        $('.burger.open').removeClass('open');
        return false;
    });

    //блок преимуществ - подключение анимаций
    var anim1 = lottie.loadAnimation({
        container: document.getElementById('anim-1'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: templateUrl + '/js/animation/advantages/01-exchanges.json'
    });

    var anim2 = lottie.loadAnimation({
        container: document.getElementById('anim-2'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/02-bot.json'
    });

    var anim3 = lottie.loadAnimation({
        container: document.getElementById('anim-3'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/03-sandbox.json'
    });

    var anim4 = lottie.loadAnimation({
        container: document.getElementById('anim-4'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/04-analytics.json'
    });

    var anim5 = lottie.loadAnimation({
        container: document.getElementById('anim-5'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/05-support.json'
    });

    //блок преимуществ - клик по кнопке
    $(".advantage").click(function() {
        //проверка нажатия по уже нажатой кнопке
        if (!$(this).hasClass("active")) {
            $(".advantage").removeClass("active");
            $(this).addClass("active");

            $('.adv-desc-left > div:first-child > div').stop();
            $('.adv-desc-left > div:first-child > div').fadeOut();

            $('.adv-desc-right > div').stop();
            $('.adv-desc-right > div').fadeOut();

            anim1.stop();
            anim2.stop();
            anim3.stop();
            anim4.stop();
            anim5.stop();

            switch($(this).attr('id')) {
                case 'a1':
                case 'a11':
                    $('.adv-desc-left > div:first-child > div#b1').fadeIn();
                    $('.adv-desc-right #anim-1').fadeIn();
                    anim1.play();
                    break;

                case 'a2':
                case 'a22':
                    $('.adv-desc-left > div:first-child > div#b2').fadeIn();
                    $('.adv-desc-right #anim-2').fadeIn();
                    anim2.play();
                    break;

                case 'a3':
                case 'a33':
                    $('.adv-desc-left > div:first-child > div#b3').fadeIn();
                    $('.adv-desc-right #anim-3').fadeIn();
                    anim3.play();
                    break;

                case 'a4':
                case 'a44':
                    $('.adv-desc-left > div:first-child > div#b4').fadeIn();
                    $('.adv-desc-right #anim-4').fadeIn();
                    anim4.play();
                    break;

                case 'a5':
                case 'a55':
                    $('.adv-desc-left > div:first-child > div#b5').fadeIn();
                    $('.adv-desc-right #anim-5').fadeIn();
                    anim5.play();
                    break;
            }
        }
    });

    //блок бирж, анимация
    lottie.loadAnimation({
        container: document.getElementById('exchanges-anim'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: templateUrl + '/js/animation/exchanges.json'
    });

    //блок схемы работы, анимация
    lottie.loadAnimation({
        container: document.getElementById('scheme-anim'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: templateUrl + '/js/animation/scheme-of-work.json'
    });


    $(window).scroll(function(){
        //рифреш плагина при переходе по якорной ссылке
        if ($(window).scrollTop() < 3500 && $(window).scrollTop() > 3000) AOS.refresh();

        //анимация меню хедера
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 1) {
            $('header').addClass('alt');
            $('.top-line').addClass('alt');
            $('.advantages').addClass('alt');
        } else {
            $('header').removeClass('alt');
            $('.top-line').removeClass('alt');
            $('.advantages').removeClass('alt');
        }

        //блок возможностей, анимация в конце блока
        var my_offset = $('.fir').offset().top - $('.opp-imgs').offset().top;
        var target_offset = 1720;
        if ($(window).width() < 1100) target_offset = 1870;
        if ($(window).width() < 1025) target_offset = 1840;

        if (my_offset >= target_offset) {
            if (!$('.opp-imgs').hasClass('smaller'))
                $('.opp-imgs').addClass('smaller');
        } else {
            $('.opp-imgs').removeClass('smaller');
        }
    });

    //блок тарифов, анимация ховера
    document.addEventListener('aos:in', ({ detail }) => {
        if (detail.className.split(" ")[0] == 'card-tariffs') {
            setTimeout(function() {
                $('.card-tariffs').addClass('animated');
            }, 2400);
        }
    });

    // блок тарифов, слайдер карточек
    $('.cards-tariffs').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: "unslick"
            }
        ]
    });

    //реинициализировать slick при увеличении ширины окна
    $(window).on('resize', function(){
        var width = $(window).width();
        if(width > 1023 && !$('.cards-tariffs').hasClass('slick-initialized')) {
            $('.cards-tariffs').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: "unslick"
                    }
                ]
            });
            AOS.refresh();
        }
    });

    //блок faq, клик по аккордиону
    $('.accordions-head').unbind('click');
    $('.accordions-head').click(function() {
        $('.accordion-content').slideUp().removeClass('opened');
        if ($(this).next().css("display") != 'block') {
            $(this).next().slideDown().addClass('opened');
        };
    });

    // блок новостей, слайдер
    $('.news-cards').slick({
        responsive: true,
        respondTo: 'min',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    centerMode: true,
                    infinite: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerPadding: '5%',
                    initialSlide: 1
                }
            },
            {
                breakpoint: 646,
                settings: {
                    centerMode: true,
                    infinite: false,
                    slidesToShow: 1,
                    centerPadding: '10%',
                    slidesToScroll: 1,
                    initialSlide: 1
                }
            },
            {
                breakpoint: 350,
                settings: {
                    centerMode: true,
                    infinite: false,
                    slidesToShow: 1,
                    centerPadding: '4%',
                    slidesToScroll: 1,
                    initialSlide: 1
                }
            }
        ]
    }).on('setPosition', function (event, slick) {
        slick.$slides.css('height', slick.$slideTrack.height() + 'px');
    });
});