(function ($) {
    $(document).ready(function () {
        var main_news = new Swiper('.main_news-list', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            spaceBetween: 60,
            slidesPerView: 3,
        });

        var mail_complects = new Swiper('.mail_complects_slider', {
            loop: true,
            autoplay: {
                delay: 7000,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
        });

        var main_recommended = new Swiper('.main_recommended_slider', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            navigation: {
                nextEl: '.main_recommended_slider-next',
                prevEl: '.main_recommended_slider-prev',
            },
            spaceBetween: 0,
            slidesPerView: 3,
        });
        main_recommended.on('slideChangeTransitionStart', function () {
            let $slidesArray = $('.main_recommended_slider .swiper-slide');
            showSlides(3, $slidesArray);
        });

        showSlides(3, $('.main_recommended_slider .swiper-slide'));

        function showSlides(countSlides, $slidesArray) {
            $slidesArray.addClass('slide-hidden');

            let count = 0;
            $.each($slidesArray, function () {
                if ($(this).hasClass('swiper-slide-active')) {
                    count = countSlides;
                }
                if (count > 0) {
                    $(this).removeClass('slide-hidden');
                }
                count--;
            });
        }


        var main_slider = new Swiper('.main_slider', {
            loop: true,
            autoplay: {
                delay: 6000,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
        });

        var top_show = 150;
        var delay = 500;
        $(window).scroll(function () {
            if ($(this).scrollTop() > top_show) $('#to-top').fadeIn();
            else $('#to-top').fadeOut();
        });
        $('#to-top').click(function () {
            $('body, html').animate({
                scrollTop: 0
            }, delay);
        });






        // ДЛЯ СТИКЕРОВ
        var stickers = $('.item_stickers li');
        
        for(let i = 0; i<stickers.length; i++) {

            if(stickers[i].innerHTML == 'Скидка') {
                $(stickers[i]).addClass('discount');
            } else if(stickers[i].innerHTML == 'Наш выбор') {
                $(stickers[i]).addClass('our_choise');
            } else if(stickers[i].innerHTML == 'Новинка') {
                $(stickers[i]).addClass('new');
            }
        }


        // ДЛЯ PLACEHOLDER-A НА СТРАНИЦЕ ABOUT
        $('.subscribe form input, .sub_form form input').focusin(function () {
            $('.subscribe .placeholder, .sub_form .placeholder').addClass('hide');
        }).focusout(function () {
            $('.subscribe .placeholder, .sub_form .placeholder').removeClass('hide');
        });
    });
})(jQuery);