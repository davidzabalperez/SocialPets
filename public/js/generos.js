$( document ).ready(function() {
    $('#imagen_macho').click(function() {
        $(this).addClass('i-macho-activado');
        $('#imagen_hembra').removeClass('i-hembra-activado');
        $('#imagen_hembra').addClass('i-hembra-desactivado');
    });

    $('#imagen_hembra').click(function() {
        $(this).addClass('i-hembra-activado');
        $('#imagen_macho').removeClass('i-macho-activado');
        $('#imagen_macho').addClass('i-macho-desactivado');
    });
});