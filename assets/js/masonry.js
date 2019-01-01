(function($) {
"use strict";
    $(document).ready(function(){
    //substr so there isn't a '#'
    var hashFilter = location.hash.substr(1);
    var mainEl = $('#grid');
    var transitionDuration = 800;
    var columnWidth = 0;
    mainEl.isotope({
        filter: hashFilter,
        animationEngine: 'best-available', //CSS3 if browser supports it, jQuery otherwise
        animationOptions: {
            duration: transitionDuration
        },
        containerStyle: {
            position: 'relative',
            overflow: 'visible'
        },
        masonry: {
            columnWidth: 1
        }
    }); 
    function setSizes(){
        var availableSpace = $(window).width();
        var potentialColumns = availableSpace/columnWidth;
        potentialColumns = Math.floor(potentialColumns);
        var newWidth = potentialColumns * columnWidth;
        $('#grid').width(newWidth);
    }
    setSizes();
    function layoutTimer(){
        setTimeout(function(){
            mainEl.isotope('layout');
        }, transitionDuration);
    }
    layoutTimer();
    $(window).resize(function(){
        setSizes();
        layoutTimer();
    });
    });
})(jQuery);