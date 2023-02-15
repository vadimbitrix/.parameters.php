(function($) {
    if(id_slider){
        var owl = $('#' + id_slider);
        owl.owlCarousel({
            loop: true,
            nav: false,
            dots: (dot_slider === 'Y'),
            center: true,
            margin: 15,
            slideSpeed: 1000,
            autoplay: (auto_slider === 'Y'),
            autoplayTimeout: (autoplayTimeout)?autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass: true,
            responsiveRefreshRate: true,
            responsive : {
                0 : {
                    items: 1
                },
                768 : {
                    items: 2
                },
                960 : {
                    items: 3
                },
                1200 : {
                    items: 3
                },
                1920 : {
                    items: 3
                }
            }
        });
    }

}(jQuery));
