$(document).ready(function() {

    // adds logo to loader
    var logo = $('#masthead-logo').html();
    $('.loader-logo').html(logo);

    // makes container and row full-width
    $(".full-width").closest("section").removeClass("container").addClass("container-fluid");
    $(".full-width").closest("section").find('.row').removeClass("row").addClass("row-fluid");

    // loader scripts while elements load/rewrite
        // removes scroll
        $('body').css('overflow','hidden');
        // shows full-width img after delay for rewriting
        $('.full-width').delay(3000).show();
        // fades out loader content
        $(".loader").delay(2000).fadeOut("slow");
        // scrolls to top during fade if user has scrolled
        $(".loader-wrapper").delay(3000).fadeOut("slow");
        $("html, body").scrollTop(0);
        // shows scroll bar after loader fades
        $('body').delay(4000).css('overflow','auto');
});
