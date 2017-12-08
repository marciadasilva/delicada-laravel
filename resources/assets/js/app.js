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


    // Slider
    var sliderImages = document.querySelectorAll(".slide"),
        arrowLeft = document.querySelector("#arrow-left"),
        arrowRight = document.querySelector("#arrow-right"),
        current = 0;

    // Clear all images
    function reset() {
        for (var i = 0; i < sliderImages.length; i++) {
            sliderImages[i].style.display = "none";
        }
    }

    // Init slider
    function startSlide() {
        reset();
        sliderImages[0].style.display = "block";
    }

    // Show prev
    function slideLeft() {
        reset();
        sliderImages[current - 1].style.display = "block";
        current--;
    }

    // Show next
    function slideRight() {
        reset();
        sliderImages[current + 1].style.display = "block";
        current++;
    }

    // Left arrow click
    arrowLeft.addEventListener("click", function() {
        if (current === 0) {
            current = sliderImages.length;
        }
        slideLeft();
    });

    // Right arrow click
    arrowRight.addEventListener("click", function() {
        if (current === sliderImages.length - 1) {
            current = -1;
        }
        slideRight();
    });

    startSlide();

});