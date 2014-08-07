$( document ).ready(function() {
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
    /*   $(".page-servicios .panels-flexible-region-5-menu_servicios").attr('id','menu-servicios');
     $("#menu-servicios").scrollspy({
                        min: $('#menu-servicios').offset().top-40,
                        max: 9999999,
                        onEnter: function(element, position) {
                            $('#menu-servicios').addClass('locked');
                        },
                        onLeave: function(element, position) {
                            $('#menu-servicios').removeClass('locked');
                        }
                    });  */
    $('ul.side-nav a').smoothScroll();
    $('p.subnav a').click(function(event) {
      event.preventDefault();
      var link = this;
      $.smoothScroll({
        scrollTarget: link.hash
    });
  });
});