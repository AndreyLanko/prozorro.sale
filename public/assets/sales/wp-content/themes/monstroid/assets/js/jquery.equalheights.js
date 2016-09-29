/*parsed HTML*/
jQuery(function () {
    jQuery("[data-equal-group]").each(function () {
        jQuery(this).contents().wrapAll("<div class='box_inner'></div>");
    })
})
/*add event*/
jQuery(window).bind("resize", height_handler).bind("load", height_handler)
function height_handler() {

    var groups = [];
    jQuery("[data-equal-group]").each(function () {
        var g = jQuery(this).data('equal-group');
        if (!groups[g]) {            
            groups[g] = [];
        }
        groups[g].push(this);
    });

    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if(width > 767){
        jQuery.each(groups, function () {
            jQuery(this).equalHeights();
        })
    }else{
        jQuery.each(groups, function () {
            jQuery(this).css('height', 'auto');
        })
    }
}
/*glob function*/
(function (jQuery) {
    jQuery.fn.equalHeights = function (minHeight, maxHeight) {
        tallest = (minHeight) ? minHeight : 0;
        this.each(function () {
            if (jQuery(">.box_inner", this).outerHeight() > tallest) {
                tallest = jQuery(">.box_inner", this).outerHeight()
            }
        });
        if ((maxHeight) && tallest > maxHeight) tallest = maxHeight;
        return this.each(function () {
            jQuery(this).height(tallest)
        })
    }
})(jQuery)
