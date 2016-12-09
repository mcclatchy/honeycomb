$(document).ready(function() {
    // adds logo to loader
        var logo = $('#masthead-logo').html();
        $('.loader-logo').html(logo);

    // makes container and row full-width
        var fluidImg = $('.fluid-img').closest('section');
        fluidImg.removeClass('container').addClass('container-fluid');
        fluidImg.find('.row').removeClass('row').addClass('row-fluid');
        fluidImg.find('.col-sm-12').css('padding', '0');
        $('.container-img').closest('section').find('.col-sm-12').css('padding', '0');

        // $('.fluid-img').closest('.col-sm-12').css('padding', '0');

    // loader scripts while elements load/rewrite
        // removes scroll
        $('body').css('overflow','hidden');
        // shows full-width img after delay for rewriting
        $('.fluid-img').delay(3000).show();
        // fades out loader content
        $('.loader').delay(2000).fadeOut('slow');
        // scrolls to top during fade if user has scrolled
        $('.loader-wrapper').delay(3000).fadeOut('slow');
        $('html, body').scrollTop(0);
        // shows scroll bar after loader fades
        $('body').delay(4000).css('overflow','auto');
});
