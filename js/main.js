$(window).load(function() {
    $(".before-after").twentytwenty({
        before_label: 'До нашей обработки',
        after_label: 'Результат нашей обработки'
    });
    $('.before-slider').slick({
        draggable: false,
        dots: true,
        dotsClass: 'before-slider__dots',
        prevArrow: $('.arrow-left'),
        nextArrow: $('.arrow-right')
    });
    $('.menu-button').on('click', function(){
        $('.menu').toggleClass('menu_active');
    });
    /* Настройка select */
    $('.select__checked').on('click', function(){
        $('.select__dropdown').toggleClass('select__dropdown_open');
    });
    $('.select__option').on('click', function () {
        var value = $(this).attr('data-value');
        $('#select-type').val(value);
        $('.select__checked').text(value);
        $('.select__dropdown').toggleClass('select__dropdown_open');
    });
})