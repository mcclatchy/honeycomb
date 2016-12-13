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
        projectURL = "http://www.mcclatchydc.com/news/nation-world/world/article117747598.html";

        var facebookURL = "http://www.facebook.com/sharer/sharer.php?u=" + projectURL;
        $('#facebook-share').attr("href", facebookURL);

        /* Clean up ampersands, octothorpes, and pluses */
        var metaTitle = $('meta[name=title]').attr('content');
        var title = metaTitle.split(' | ');

        var twitterPartial = encodeURI(title[0]);
        twitterPartial = amperOctoPlus(twitterPartial);
        var twitterURL = "https://twitter.com/home?status=" + twitterPartial + "%20" + projectURL;
        $("#twitter-share").attr("href", twitterURL);
        console.log(twitterURL);

        var emailPartial = "mailto:?subject=Voters Make the Call: 69 voicemails from 25 states&body=";
        var emailURL = emailPartial + projectURL;
        $("#email-share").attr("href", emailURL);
    }

    function amperOctoPlus(s) {
    	s = s.replace(/&/g, '%26');
    	s = s.replace(/#/g, '%23');
    	s = s.replace(/\+/g, '%2B');
    	s = s.replace(/@/g, '%40');
    	s = s.replace(/:/g, '%3A');
    	return s;
    }
});
