(function ($) {
    
    $(document).ready(function (argument) {
        
        function carousel( elem ) {
            elem.owlCarousel({
                autoPlay: true,
                itemsCustom : [
                  [0, 1],
                  [450, 2],
                  [600, 2],
                  [700, 3],
                  [1000, 4],
                  [1200, 4],
                  [1600, 4]
                ],
                pagination : true,
                navigation : false,
                stopOnHover: true,
            });
        }

        carousel($(".programmesrow"));
        carousel($(".newsrow"));

        $('.timer').each(function () {
           $(this).countdown($(this).attr('finishdate'), function (event) {
                $(this).html(event.strftime('%D days %H:%M:%S'));
            });
        });

        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    });

})(jQuery);