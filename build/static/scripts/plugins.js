/********************************************************
ADD NAVBAR FUNCTION
********************************************************/

// make navbar sticky on scroll

$(window).scroll(function() {
    var distanceFromTop = $(this).scrollTop();
    if (distanceFromTop >= $('#hc-hero').offset().top + $('#hc-nav-header').height()) {
        $('#hc-nav-header').slideDown();
    } else {
        $('#hc-nav-header').slideUp();
    }
});

// Show and hide mobile navbar on hamburger click

$('#hc-hamburger').click(function () {
    $('#hc-nav-mob').show();
    $('.hc-shadow').show();
});

$('#hc-nav-close').click(function () {
    $('#hc-nav-mob').hide();
    $('.hc-shadow').hide();
});

/********************************************************
ADD LOADING SCREEN
********************************************************/

function addLoader() {
    var logo = $('#masthead-logo').html();
    $('.hc-loader-logo').html(logo);

    $('body').css('overflow', 'hidden');
    $('.hc-fluid-img').delay(3000).show();
    $('.hc-loader').delay(2000).fadeOut('slow');
    $('.hc-loader-wrapper').delay(3000).fadeOut('slow');
    $('html, body').scrollTop(0);
    $('body').delay(4000).css('overflow', 'auto');
}
