jQuery(document).ready(function($) {

    // убираем баг в слайдере мини-изображений в карточке товара
    document.addEventListener('click', function () {
        $.each( $('.product-item-detail-slider-controls-block'), function(index,value){
            //console.log(value.style.display);
            if (value.style.display == 'block') {
                value.style.display = 'flex';
            }
        });
    });

    //стрелочка при выборе города в карточке товара
    $('.delivery_choise span').click(function(event) {
        $(this).toggleClass('active');

        $('.delivery_choise .city_window').toggleClass('open');
        $('.delivery_choise .city_window').css('width', $('.delivery_choise').width());

        console.log($(this).text());
    });
    $('.city_window ul li').click(function(event) {
        
        $('.delivery_choise span').text( $(this).text() );
    });


    

    //табы в карточке товара (доставка + оплата)
    $('#delivery_tab_title').click(function(event) {
        $('#pay_tab_content').removeClass('show');
        $('#delivery_tab_content').addClass('show');

        $('#pay_tab_title').removeClass('active');
        $('#delivery_tab_title').addClass('active');

    });
    $('#pay_tab_title').click(function(event) {
        $('#delivery_tab_content').removeClass('show');
        $('#pay_tab_content').addClass('show');

        $('#delivery_tab_title').removeClass('active');
        $('#pay_tab_title').addClass('active');
    });



    

    //табы в карточке товара (описание + отзывы)
    $('#tab_decription').click(function(event) {
        $('#comments_box').removeClass('show');
        $('#desription_box').addClass('show');

        $('#tab_comments').removeClass('active');
        $('#tab_decription').addClass('active');

    });
    $('#tab_comments').click(function(event) {
        $('#desription_box').removeClass('show');
        $('#comments_box').addClass('show');

        $('#tab_decription').removeClass('active');
        $('#tab_comments').addClass('active');
    });



    
    $('.subscribe__form input').focusin(function () {
        $('.subscribe__form placeholder').addClass('hide');
        $('.subscribe__form input').addClass('active');
    }).focusout(function () {
        $('.subscribe__form placeholder').removeClass('hide');
        $('.subscribe__form input').removeClass('active');
    });

    $(document).on('click', '.pop_load_more', function(){
        var targetContainer = $('.pop_home_tabs_grid'),          //  Контейнер, в котором хранятся элементы
            url =  $('.pop_load_more').attr('data-url');    //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                //  Удаляем старую навигацию
                $('.pop_load_more').remove();

                var elements = $(data).find('.pop_home_tabs__item'),  //  Ищем элементы
                    pagination = $(data).find('.pop_load_more');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

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

    }})}});

    $(document).on('click', '.new_load_more', function(){
        var targetContainer = $('.new_home_tabs_grid'),          //  Контейнер, в котором хранятся элементы
            url =  $('.new_load_more').attr('data-url');    //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                //  Удаляем старую навигацию
                $('.new_load_more').remove();

                var elements = $(data).find('.new_home_tabs__item'),  //  Ищем элементы
                    pagination = $(data).find('.new_load_more');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

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

    }})}});

    $(document).on('click', '.sale_load_more', function(){
        var targetContainer = $('.sale_home_tabs_grid'),          //  Контейнер, в котором хранятся элементы
            url =  $('.sale_load_more').attr('data-url');    //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                //  Удаляем старую навигацию
                $('.sale_load_more').remove();

                var elements = $(data).find('.sale_home_tabs__item'),  //  Ищем элементы
                    pagination = $(data).find('.sale_load_more');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

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

    }})}});

    $('#home_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        speed: 700,
        arrows: false, 
        dots: true
    });

    $('#home_recommend').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        speed: 400,
        arrows: true, 
        dots: true,
        responsive: [
            {
                breakpoint: 1001,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 751,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('#compilation_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        speed: 700,
        arrows: false, 
        dots: true
    });

    $('#home_news__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        speed: 400,
        arrows: false, 
        dots: true,
        responsive: [
            {
                breakpoint: 801,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('#recommend_in_section--slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        speed: 400,
        arrows: true, 
        dots: true
    });

    var pop_link = $('.home_tabs .links .pop_link')[0];
    var new_link = $('.home_tabs .links .new_link')[0];
    var sale_link = $('.home_tabs .links .sale_link')[0];

    var pop_tab = $('.home_tabs .tabs .pop_tab')[0];
    var new_tab = $('.home_tabs .tabs .new_tab')[0];
    var sale_tab = $('.home_tabs .tabs .sale_tab')[0];

    $(pop_link).click(function(event) {
        $(new_tab).removeClass('active');
        $(sale_tab).removeClass('active');
        $(pop_tab).addClass('active');

        $(sale_link).removeClass('open');
        $(new_link).removeClass('open');
        $(pop_link).addClass('open');
    });
    $(new_link).click(function(event) {
        $(sale_tab).removeClass('active');
        $(pop_tab).removeClass('active');
        $(new_tab).addClass('active');

        $(pop_link).removeClass('open');
        $(sale_link).removeClass('open');
        $(new_link).addClass('open');
    });
    $(sale_link).click(function(event) {
        $(pop_tab).removeClass('active');
        $(new_tab).removeClass('active');
        $(sale_tab).addClass('active');

        $(pop_link).removeClass('open');
        $(new_link).removeClass('open');
        $(sale_link).addClass('open');
    });

    var w_w = $(window).width();
    var wrap_w = $('.wrapper').width();
    var result_w = (w_w - wrap_w) / 2;
    $('#home_slider .slick-dots').css('margin-left', result_w);



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