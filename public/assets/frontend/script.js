$(document).ready(function () {
    $(window).scroll(function () {
        var value = $(window).scrollTop();
        $(".nav-link").removeClass("active");

        var offsetMain = $("#main").offset();
        var topMain = offsetMain.top;
        var heightMain = $("#main").height();

        if (value >= topMain && value < topMain + heightMain) {
            $(".nav-link[href='#']").addClass("active");
        } else {
            $(".section").each(function (index, element) {
                var offset = $(element).offset();
                var top = offset.top;
                var height = $(element).height();

                if (value >= top && value < top + height) {
                    var id = $(element).attr("id");
                    const target = document.querySelector(`[href='#${id}']`);
                    $(target).addClass("active");
                }
            });
        }
    });

    var lang = $("html").attr("lang");
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        navigation: true,

        dots: true,
        rtl: lang == "ar" ? true : false,
        autoplayHoverPause: true,
        autoplay: true,
        lazyLoad: true,
        autoHeight: true,

        margin: 15,

        slideTransition: "linear",
        autoplayTimeout: 4000,
        autoplaySpeed: 300,

        stagePadding: 20,
        rewind: true,
        items: 5,
        dotsEach: true,
        responsive: {
            0: {
                items: 2,
                // nav:true
            },
            768: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    owl.on("mousewheel", ".owl-stage", function (e) {
        if (e.deltaY > 0) {
            owl.trigger("next.owl");
        } else {
            owl.trigger("prev.owl");
        }
        e.preventDefault();
    });
});
