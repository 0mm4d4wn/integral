$( document ).ready(function() {
    $(".page-servicios .views-row-1").attr('id','creacion-portafolios');
    $(".page-servicios .views-row-2").attr('id','diseno-obras');
    $(".page-servicios .views-row-3").attr('id','alquiler');
    $(".page-servicios .views-row-4").attr('id','admin');
    $(".page-servicios .views-row-5").attr('id','ventas');
    $(".page-servicios .views-row-6").attr('id','org-agendas');
    $(".page-servicios .panels-flexible-region-5-menu_servicios").attr('id','menu-servicios');
    $("#menu-servicios").scrollspy({
                        min: $('#menu-servicios').offset().top-40,
                        max: 9999999,
                        onEnter: function(element, position) {
                            $('#menu-servicios').addClass('locked');
                        },
                        onLeave: function(element, position) {
                            $('#menu-servicios').removeClass('locked');
                        }
                    });
});