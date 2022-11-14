
var minWidthMenu = $('.content').width() + 176;

$('#toggleSidebar').on('click', e => {
    $('.menu').toggleClass('minMenu');  
    $('.menu__icon').slideToggle();
    $('.menu__item').toggleClass('change_menu');
    setTimeout(() => {
        $('.menu__text').toggle();
    }, 100);
    $('.content').toggleClass('minContent');
});

