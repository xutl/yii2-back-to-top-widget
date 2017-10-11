/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

jQuery(function(){
    var btn = jQuery('#back-to-top');
    var scrollBtnIsVisible = false;
    var scrollTriggerPoint = jQuery('html, body').offset().top + 150;

    jQuery(document).on('scroll', function() {
        var pos = jQuery(window).scrollTop();
        if (pos > scrollTriggerPoint && !scrollBtnIsVisible) {
            btn.stop().fadeIn();
            scrollBtnIsVisible = true;
        } else if (pos < scrollTriggerPoint && scrollBtnIsVisible) {
            btn.stop().fadeOut();
            scrollBtnIsVisible = false;
        }
    }).scroll();

    btn.on('click', function(e) {
        jQuery('html, body').animate({ scrollTop: 0 }, 300);
    });
});
