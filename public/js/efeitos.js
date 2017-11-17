var $w = $(window);

$w.on("scroll", function(){
    if( $w.scrollTop() < 50 ) {
        $("nav").removeClass("cor-menu");
    } else if( $w.scrollTop() > 50 ) {
        $("nav").addClass("cor-menu");
    }
});