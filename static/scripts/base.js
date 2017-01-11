$(document).ready(function() {
    // http://media.mcclatchydc.com/static/honeycomb/v1/newsroom-sites.json
    $.getJSON('static/scripts/newsroom-sites.json', function(data) {
        addSiteColor(data);
        addLoader();
        setShareURL();
    });

    $(window).scroll(function() {
		var distanceFromTop = $(this).scrollTop();
		if (distanceFromTop >= $('#hc-hero').offset().top + $('#hc-nav-header').height()) {
			$('#hc-nav-header').slideDown();
		} else {
			$('#hc-nav-header').slideUp();
		}
    });

    $('#hc-hamburger').click(function () {
        $('#hc-nav-mob').show();
        $('.hc-shadow').show();
    });

    $('#hc-nav-close').click(function () {
        $('#hc-nav-mob').hide();
        $('.hc-shadow').hide();
    });

    // look through all site urls and find the one that your page matches
    // add the class that corresponds to that url
    function addSiteColor(data) {
        var siteURL = mast_options.publicationUrl;

        $.each(data, function(k, v) {
            if (v.site === siteURL) {
                $('.hc-primary-color').addClass(v.name + "-primary-color");
                $('.hc-primary-background').addClass(v.name + "-primary-background");
                $('.hc-accent-color').addClass(v.name + "-accent-color");
                $('.hc-accent-background').addClass(v.name + "-accent-background");
            }
        });
    }

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

    function setShareURL() {
        var projectURL = window.location.href;
        projectURL = "http://www.mcclatchydc.com/news/nation-world/world/article117747598.html";

        // Facebook
        var facebookURL = "http://www.facebook.com/sharer/sharer.php?u=" + projectURL;
        $('#hc-facebook-share').attr("href", facebookURL);

        // Twitter
        var metaTitle = $('meta[name=title]').attr('content');
        var title = metaTitle.split(' | ');
        var twitterPartial = encodeURI(title[0]);
        twitterPartial = amperOctoPlus(twitterPartial);
        var twitterURL = "https://twitter.com/home?status=" + twitterPartial + "%20" + projectURL;
        $("#hc-twitter-share").attr("href", twitterURL);

        // Email
        var emailPartial = "mailto:?subject=Voters Make the Call: 69 voicemails from 25 states&body=";
        var emailURL = emailPartial + projectURL;
        $("#hc-email-share").attr("href", emailURL);
    }

    // Clean up ampersands, octothorpes, and pluses
    function amperOctoPlus(url) {
        url = url.replace(/&/g, '%26');
        url = url.replace(/#/g, '%23');
        url = url.replace(/\+/g, '%2B');
        url = url.replace(/@/g, '%40');
        url = url.replace(/:/g, '%3A');
        return url;
    }

    var sourcesList = $('#hc-sources-well').html();
    $('.hc-sources-header').html(sourcesList);

    $('.hc-sources-btn').click(function() {
        $('.hc-sources-btn').hide();
        $('.hc-sources-header').show().css('display', 'block');
    });

    $('.hc-sources-header').click(function() {
        $('.hc-sources-header').hide();
        $('.hc-sources-btn').show().css('display', 'block');
    });
});
