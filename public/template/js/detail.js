var selectCallback = function (variant, selector) {
    if (variant) {
        $('.details-product .form-detail-action .iwishAddWrapper').attr('data-variant', variant.id);
        var form = jQuery('#' + selector.domIdPrefix).closest('form');
        for (var i = 0, length = variant.options.length; i < length; i++) {
            var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
            if (radioButton.size()) {
                radioButton.get(0).checked = true;
            }
        }
    }
    /*begin variant image*/
    if (variant && variant.image) {
        var originalImage = jQuery(".large-image img");
        var newImage = variant.image;
        var element = originalImage[0];
        Zozoweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
            jQuery(element).parents('a').attr('href', newImageSizedSrc);
            jQuery(element).attr('src', newImageSizedSrc);
        });
        $('.checkurl').attr('href', $(this).attr('src'));
        if ($(window).width() > 1200) {
            setTimeout(function () {
                $('.zoomContainer').remove();
                $('#zoom_01').elevateZoom({
                    gallery           : 'gallery_01',
                    zoomWindowWidth   : 420,
                    zoomWindowHeight  : 500,
                    zoomWindowOffetx  : 10,
                    easing            : true,
                    scrollZoom        : false,
                    cursor            : 'pointer',
                    galleryActiveClass: 'active',
                    imageCrossfade    : true
                });
            }, 300);
        }
    }
    /*end of variant image*/
};
jQuery(function ($) {
    /*  Add label if only one product option and it isn't 'Title'. Could be 'Size'. */
    /*  Hide selectors if we only have 1 variant and its title contains 'Default'. */
    $('.selector-wrapper').css({
        'text-align'   : 'left',
        'margin-bottom': '15px'
    });
});
jQuery('.swatch :radio').change(function () {
    var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
    var optionValue = jQuery(this).val();
    jQuery(this).closest('form').find('.single-option-selector').eq(optionIndex).val(optionValue).trigger('change');
});
$(document).ready(function () {
    if ($(window).width() > 1200) {
        $('#zoom_01').elevateZoom({
            gallery           : 'gallery_01',
            zoomWindowWidth   : 420,
            zoomWindowHeight  : 500,
            zoomWindowOffetx  : 10,
            easing            : true,
            scrollZoom        : false,
            cursor            : 'pointer',
            galleryActiveClass: 'active',
            imageCrossfade    : true
        });
    }
});
$('#gallery_01 img').click(function (e) {
    e.preventDefault();
    $('.large-image img').attr('src', $(this).parent().attr('data-zoom-image'));
});
$('#gallery_01 img, .swatch-element label').click(function (e) {
    $('.checkurl').attr('href', $(this).attr('src'));
    if ($(window).width() > 1200) {
        setTimeout(function () {
            $('.zoomContainer').remove();
            $('#zoom_01').elevateZoom({
                gallery           : 'gallery_01',
                zoomWindowWidth   : 420,
                zoomWindowHeight  : 500,
                zoomWindowOffetx  : 10,
                easing            : true,
                scrollZoom        : false,
                cursor            : 'pointer',
                galleryActiveClass: 'active',
                imageCrossfade    : true
            });
        }, 300);
    }
});
function scrollToxx() {
    $('html, body').animate({scrollTop: $('.product-tab.e-tabs').offset().top}, 'slow');
    $('.tab-content, .product-tab .tab-link').removeClass('current');
    $('.tab-3, .product-tab .tab-link:nth-child(3)').addClass('current');
    return false;
}