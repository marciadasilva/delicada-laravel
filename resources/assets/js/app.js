jQuery(document).ready(function($) {
    var url_atual = window.location.href;

    // Código para que apenas a página inicial fique sem a cor de fundo da barra de menu
    if(!url_atual.endsWith("/")){
        $("#nav").addClass("nav-color");
    }

    var $w = $(window);

    $w.on("scroll", function () {
        if (($w.scrollTop() < 50 ) && (url_atual.endsWith("/"))) {
            $("#nav").removeClass("nav-color");
        } else if ($w.scrollTop() > 50) {
            $("#nav").addClass("nav-color");
        }
    });

    $('.edit').click(function () {
        $('.show-form').toggle();
    });

});