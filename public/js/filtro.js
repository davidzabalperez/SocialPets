$( document ).ready(function() {
    $("#filtroMachos").on( "click", function() {
    $(".hembra").css("display", "none");
    $(".macho").css("display", "");
    });

    $("#filtroHembras").on( "click", function() {
        $(".hembra").css("display", "");
        $(".macho").css("display", "none");
        });
        
    $("#filtroTodos").on( "click", function() {
        $(".hembra").css("display", "");
        $(".macho").css("display", "");
        });
});