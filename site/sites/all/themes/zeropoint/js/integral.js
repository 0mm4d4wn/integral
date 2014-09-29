$( document ).ready(function() {
    /* $(window).scroll(function() {
       if($(window).scrollTop()) {
           $('.page-servicios .panels-flexible-region-5-menu_servicios').removeClass('.end').addClass('start');
       }
       if($(window).scrollTop() + $(window).height() == $(document).height()) {
           $('.page-servicios .panels-flexible-region-5-menu_servicios').removeClass('start').addClass('end');
       }
    }); */

    $('.bxslider').bxSlider({
      mode: 'fade',
      useCSS: false,
      infiniteLoop: true,
      easing: 'easeOutElastic',
      autoControls: true,
      pause: 3000,
      speed: 500
    });
    $(".page-servicios .views-row-1").attr('id','creacion-portafolios');
    $(".page-servicios .views-row-2").attr('id','diseno-obras');
    $(".page-servicios .views-row-3").attr('id','alquiler');
    $(".page-servicios .views-row-4").attr('id','admin');
    $(".page-servicios .views-row-5").attr('id','ventas');
    $(".page-servicios .views-row-6").attr('id','org-agendas');
    $("#edit-submit-busqueda").attr('class','boton');
    $("#edit-submit").attr('class','button');

    // Carrousel Home FIX
    $('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(0) h2.pane-title').prependTo('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(0) .jcarousel-container');
    $('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(1) h2.pane-title').prependTo('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(1) .jcarousel-container');
    $('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(2) h2.pane-title').prependTo('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(2) .jcarousel-container');
    $('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(3) h2.pane-title').prependTo('.front #block-system-main .panel-1col .panel-panel > div .pane-home:eq(3) .jcarousel-container');


    $('ul.side-nav a').smoothScroll();
    $('p.subnav a').click(function(event) {
      event.preventDefault();
      var link = this;
      $.smoothScroll({
        scrollTarget: link.hash
    });
  });
});