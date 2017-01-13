define(['jquery','owl_carousel','flexslider'], function($, owlCarousel)
{
    return new function(){
        var self = this;
        self.run = function(){
            // BRAND SLIDER
            $('#brand-slide').owlCarousel({
                itemsCustom : [
                    [320, 1],
                    [350, 1],
                    [700, 3],
                    [1000, 3],
                    [1200, 3],
                    [1400, 3]
                ],
                navigation : true,
                pagination: false,
                navigationText: false
            });

            // BIG SLIDER
            $('#p-slide .flexslider').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: false,
                prevText: "",
                nextText: ""
            });

            //TAB HOME
            $('.menu-new li').first().addClass("current");
            $('.new-content').first().css("display", "block");
            $(".menu-new a").click(function(event) {
                event.preventDefault();
                $(this).parent().addClass("current");
                $(this).parent().siblings().removeClass("current");
                var tab = $(this).attr("href");
                $(".new-content").not(tab).css("display", "none");
                $(tab).fadeIn();
            });
        };
    }
});