$(document).ready(function() {

    addLoader();
    setImgWidth();
    setShareURL();

    function addLoader() {
        var logo = $('#masthead-logo').html();
        $('.loader-logo').html(logo);

        $('body').css('overflow', 'hidden');
        $('.fluid-img').delay(3000).show();
        $('.loader').delay(2000).fadeOut('slow');
        $('.loader-wrapper').delay(3000).fadeOut('slow');
        $('html, body').scrollTop(0);
        $('body').delay(4000).css('overflow', 'auto');
    }

    function setImgWidth() {
        var fluidImg = $('.fluid-img').closest('section');
        fluidImg.removeClass('container').addClass('container-fluid');
        fluidImg.find('.row').removeClass('row').addClass('row-fluid');
        fluidImg.find('.col-sm-12').css('padding', '0');
        $('.container-img').closest('section').find('.col-sm-12').css('padding', '0');
    }

    function setShareURL() {
        var projectURL = window.location.href;

        var facebookURL = "http://www.facebook.com/sharer/sharer.php?u=" + projectURL;
        $('#facebook-share').attr("href", facebookURL);

        var twitterPartial = "https://twitter.com/intent/tweet?text=Voters%20Make%20the%20Call%3A%2025%20States%2069%20Sentiments%20";
        var twitterURL = twitterPartial + projectURL;
        $("#twitter-share").attr("href", twitterURL);

        var emailPartial = "mailto:?subject=Voters Make the Call: 69 voicemails from 25 states&body=";
        var emailURL = emailPartial + projectURL;
        $("#email-share").attr("href", emailURL);
    }
});
