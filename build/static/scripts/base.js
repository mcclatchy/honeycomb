$(document).ready(function() {

    /********************************************************
    APPENDS TEMPLATES
    ********************************************************/

    // require.config({
    // 	paths: {
    // 		text: 'lib/text/text',
    // 		hb: 'lib/requirejs-handlebars/hb',
    // 		'handlebars.runtime': 'node_modules/handlebars/handlebars.runtime.amd'
    // 	},
    // 	packages: [
    // 		{
    // 			name: 'handlebars',
    // 			location: 'node_modules/handlebars/dist/amd',
    // 			main: './handlebars'
    // 		}
    // 	]
    // });

    // var handlebars = require('handlebars');
    var storyTemplate = Handlebars.templates.story;
    $("#story").append(storyTemplate);

    /********************************************************
    ADD LINKS TO SHARE ICONS
    ********************************************************/

    var projectURL = window.location.href;
    projectURL = "http://www.mcclatchydc.com/news/nation-world/national/article138656403.html";

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
    var emailPartial = "mailto:?subject=Paul Ryan’s<br /> Obamacare replacement bill is in serious trouble&body=";
    var emailURL = emailPartial + projectURL;
    $("#hc-email-share").attr("href", emailURL);

    // Cleans up ampersands, octothorpes, and pluses
    function amperOctoPlus(url) {
        url = url.replace(/&/g, '%26');
        url = url.replace(/#/g, '%23');
        url = url.replace(/\+/g, '%2B');
        url = url.replace(/@/g, '%40');
        url = url.replace(/:/g, '%3A');
        return url;
    }

    /********************************************************
    GETS AND ADDS NEWSROOM COLORS
    ********************************************************/

    $.getJSON('static/scripts/newsroom-sites.json', function(data) {
        addSiteColor(data);
    });

    /*
    Looks through all site urls and find the one that your page matches.
    Adds the class that corresponds to that url.
    */

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
});
