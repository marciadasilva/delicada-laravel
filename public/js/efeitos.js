jQuery(document).ready(function($) {
    var url_atual = window.location.href;

    // Código para que apenas a página inicial fique sem a cor de fundo da barra de menu
    if(!url_atual.endsWith("/")){
        $("nav").addClass("cor-menu");
    }

    var $w = $(window);

    $w.on("scroll", function () {
        if (($w.scrollTop() < 50 ) && (url_atual.endsWith("/"))) {
            $("nav").removeClass("cor-menu");
        } else if ($w.scrollTop() > 50) {
            $("nav").addClass("cor-menu");
        }
    });

});