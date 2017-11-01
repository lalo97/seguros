/*----------------
INICIAMOS WOW
-----------------*/
new WOW().init();

/*----------------------------------
Iniciamos smoothScroll (Scroll Suave)
--------------------------------*/
new smoothScroll.init({
    speed: 1000,
    offset: 67,

});

/*---------------------------------
    OCULTAR Y MOSTRAR BOTON IR ARRIBA
 ----------------------------------*/
$(function() {
    $(window).scroll(function() {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 50) {
            $(".ir-arriba").fadeIn();
        } else {
            $(".ir-arriba").fadeOut();
        }
    });

});

/*---------------------------------
   CABECERA ANIMADA
 ----------------------------------*/
$(window).scroll(function() {

    var nav = $('.encabezado');
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        nav.addClass("fondo-menu");
    } else {
        nav.removeClass("fondo-menu");
    }
});
/*---------------------------
TABLA RESPONSIVA
---------------------------*/
$(window).scroll(function() {

    var nav = $('.table');
    var width = parseInt($(window).width());

    if (width <= 768) {
        nav.addClass(" table-responsive");
    } else {
        nav.removeClass(" table-responsive");
    }
});