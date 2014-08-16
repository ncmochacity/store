$(document).ready(function() {
    function filterPath(string) {
        return string
            .replace(/^\//, '')
            .replace(/(index|default).[a-zA-Z]{3,4}$/, '')
            .replace(/\/$/, '');
    }
    var locationPath = filterPath(location.pathname);
    var scrollElem = scrollableElement('html', 'body');

    $('a[href*=#]').each(function() {
        var thisPath = filterPath(this.pathname) || locationPath;
        if (locationPath == thisPath && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/, '')) {
            var $target = $(this.hash),
                target = this.hash;
                //target points to hash element such as #contact
            if (target && 0 < $target.length) {
                var targetOffset = $target.offset().top;
                $(this).click(function(event) {
                    event.preventDefault();
                    $(scrollElem).animate({
                        scrollTop: targetOffset
                    }, 400, function() {
                        location.hash = target;
                    });
                });
            }
        }
    });

    // use the first element that is "scrollable"
    function scrollableElement() {
        for (var i = 0, argLength = arguments.length; i < argLength; i++) {
            var el = arguments[i],
                $scrollElement = $(el);
            if ($scrollElement.scrollTop() > 0) {
                return el;
            } else {
                $scrollElement.scrollTop(1);
                var isScrollable = $scrollElement.scrollTop() > 0;
                $scrollElement.scrollTop(0);
                if (isScrollable) {
                    return el;
                }
            }
        }
        return [];
    }
    
    
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 1000) {
                jQuery('.back-to-top').fadeIn();
            } else {
                jQuery('.back-to-top').fadeOut();
            }
        });
        jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 800);
        return false;
        })
    
    
    
    
    var offset=0;
    var duration=500;
    jQuery(window).scroll(function(){
        if(jquery(this).scrollTop() > offset){
            jquery("#top").fadeIn(duration);
        }
        else{
            jquery("#top").fadeOut(duration);
        }
    });
    jQuery("#top").click(function(event){
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 700
        }, duration);
    })
});