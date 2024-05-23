
jQuery(document).ready(function() {
    jQuery(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        jQuery(this).ekkoLightbox();
    });
    jQuery('.box-img4v-crop').on("load", function() {
        var iw, ih;
        var cw = 265; /*トリミング後の横幅*/
        var ch = 265; /*トリミング後の縦幅*/
        iw = (jQuery(this).width() - cw) / 2;
        ih = (jQuery(this).height() - ch) / 2;
        jQuery(this).css("top", "-" + ih + "px");
        jQuery(this).css("left", "-" + iw + "px");
    });

    var nav = jQuery('.menu-fixed');
    var offset = nav.offset();
    jQuery(window).scroll(function() {
        /* スクロール位置がnavの位置より下だったらクラスfixedを追加 */
        if (jQuery(window).scrollTop() > offset.top) {
            nav.addClass('fixed')
        } else {
            nav.removeClass('fixed')
        }
    });

    /* ---- */
    jQuery('.sub_menu').hide();
    jQuery('.main_menu').click(function() {
        jQuery('.sub_menu').toggle();
    });
    /* ---- */
    jQuery('.tips_filter_button').click(function(e) {
        e.preventDefault();
        jQuery('.tips_filter_button').removeClass('_active');
        jQuery(this).addClass('_active');
        if (jQuery(this).attr("data-filter")) {
            jQuery(".tips_index_box").hide();
            jQuery(jQuery(this).attr("data-filter")).show();
        } else {
            jQuery(".tips_index_box").show();
        }
        return false;
    });
});


//smooth scroll to top 20220705
jQuery(document).ready(function() {

    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = jQuery('.cd-top');
    //hide or show the "back to top" link
    jQuery(window).scroll(function() {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top
            .removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });
});

// $('.carousel').carousel()

if (document.documentMode || /Edge/.test(navigator.userAgent)) {
    jQuery('.art-img').each(function(){
        var t = jQuery(this),
            s = 'url(' + t.attr('src') + ')',
            p = t.parent(),
            d = jQuery('<div></div>');

        p.append(d);
        d.css({
            'height'                : t.parent().css('height'),
            'background-size'       : 'contain',
            'background-repeat'     : 'no-repeat',
            'background-position'   : 'center',
            'background-image'      : s
        });
        t.hide();
    });
}

function scrollToTop(duration) {
    // cancel if already on top
    if (document.scrollingElement.scrollTop === 0) return;

    const cosParameter = document.scrollingElement.scrollTop / 2;
    let scrollCount = 0, oldTimestamp = null;

    function step (newTimestamp) {
        if (oldTimestamp !== null) {
            // if duration is 0 scrollCount will be Infinity
            scrollCount += Math.PI * (newTimestamp - oldTimestamp) / duration;
            if (scrollCount >= Math.PI) return document.scrollingElement.scrollTop = 0;
            document.scrollingElement.scrollTop = cosParameter + cosParameter * Math.cos(scrollCount);
        }
        oldTimestamp = newTimestamp;
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}
