$(document).ready(function() {
    var logo = $('#masthead-logo').html();
    $('.loader-logo').html(logo);
    // turns off scroll while loader is active
    $('body').css('overflow','hidden');
    // makes container full-width
    $(".full-width").closest("section").removeClass("container").addClass("container-fluid");
    // when everything is loaded, do these things
    $(window).load(function() {
        $('.full-width').show();
        $("html, body").scrollTop(0);
        $(".loader").fadeOut("fast");
        $(".loader-wrapper").fadeOut("slow");
        $('body').css('overflow','auto');
    });
});
