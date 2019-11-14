jQuery(function() {
    jQuery(".team .cta-wrapper .beginner-btn").click(function(e) {
        jQuery("body").addClass("modal-active");
        jQuery(".modal-master").fadeIn();
        var element = jQuery(this).parent().parent().find(".modal.beginner");
        element.fadeIn();
    });
    jQuery(".team .cta-wrapper .intermediate-btn").click(function(e) {
        jQuery("body").addClass("modal-active");
        jQuery(".modal-master").fadeIn();
        var element = jQuery(this).parent().parent().find(".modal.intermediate");
        element.fadeIn();
    });
    jQuery(".close-master").click(function(e) {
        jQuery(".modal-master").fadeOut();
    });
    jQuery(".close-btn").click(function(e) {
        jQuery("body").removeClass("modal-active");
        jQuery(".modal").hide();
        jQuery(".modal-master").fadeOut();
    });
});