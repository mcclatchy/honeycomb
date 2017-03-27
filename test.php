
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<script>
var gomez={
gs: new Date().getTime(),
acctId:"D3FD89",
grpId:"Escenic",
grpId1:"mdc",
grpId2:window.location.hostname,
grpId3:"ece_frontpage",
pgId:"story-detail",
wrate:1
};
</script>
<script type='text/javascript'>
(function(){var a=window;a.dT_?a.console&&a.console.log("Duplicate agent injection detected, turning off redundant initConfig."):window.dT_||(window.dT_={cfg:"cors=1|async=1|tp=500,50,5,1,10|reportUrl=//mcclatchy.dynatracesaas.com/dynaTraceMonitor|agentUri=//mcclatchy.dynatracesaas.com/dtagent_23jpqrstxz_6000500041014.js|auto=#AUTO#|domain=#DOMAIN#|rid=RID_#REQUEST_ID#|rpid=#RESPONSE_ID#"})})();(function(){function s(){var a=0;try{a=window.performance.timing.navigationStart+Math.floor(window.performance.now())}catch(b){}return 0>=a?(new Date).getTime():a}function Z(a,b){return $(a,b)}function l(a,b){for(var c=1;c<arguments.length;c++)a.push(arguments[c])}function v(a,b){return parseInt(a,b||10)}function E(a){try{if(w)return w[a]}catch(b){}return null}function F(a,b){try{window.sessionStorage.setItem(a,b)}catch(c){}}function m(a,b){var c=-1;b&&(a&&a.indexOf)&&(c=a.indexOf(b));return c}function G(a){document.cookie=
a+'="";path=/'+(d.domain?";domain="+d.domain:"")+"; expires=Thu, 01-Jan-70 00:00:01 GMT;"}function H(a){a=encodeURIComponent(a);var b=[];if(a)for(var c=0;c<a.length;c++){var k=a.charAt(c),d=aa[k];d?l(b,d):l(b,k)}return b.join("")}function x(a,b,c){b||0==b?(b=(""+b).replace(/[;\n\r]/g,"_"),b="DTSA"===a.toUpperCase()?H(b):b,a=a+"="+b+";path=/"+(d.domain?";domain="+d.domain:""),c&&(a+=";expires="+c.toUTCString()),document.cookie=a):G(a)}function r(a){var b,c,k,d=document.cookie.split(";");for(b=0;b<
d.length;b++)if(c=m(d[b],"="),k=d[b].substring(0,c),c=d[b].substring(c+1),k=k.replace(/^\s+|\s+$/g,""),k===a)return"DTSA"===a.toUpperCase()?decodeURIComponent(c):c;return""}function I(a){return/^[0-9A-Za-z_$\+\/\.\-\*%\|]*$/.test(a)}function J(){var a=r(K);return a&&I(a)?a:""}function L(a){a=a||J();var b={sessionId:null,serverId:null};if(a){var c=m(a,"|"),d=a;-1!==c&&(d=a.substring(0,c));c=m(d,"$");-1!==c?(b.sessionId=d.substring(c+1),b.serverId=d.substring(0,c)):b.sessionId=d}return b}function ba(a){return L(a).serverId}
function ca(a){if(a)return L(a).sessionId;if(a=e.gSC()){var b=a.indexOf("|");-1!==b&&(a=a.substring(0,b))}return a}function M(a,b){return Math.floor(Math.random()*(b-a+1))+a}function N(a){var b=window.crypto||window.msCrypto,c;if(b)c=new Int8Array(a),b.getRandomValues(c);else{c=[];for(b=0;b<a;b++)c.push(M(0,O))}a=[];for(b=0;b<c.length;b++){var d=Math.abs(c[b]%O),d=9>=d?String.fromCharCode(d+48):String.fromCharCode(d+55);a.push(d)}return a.join("")}function P(a){return document.getElementsByTagName(a)}
function Q(a){var b=a.length;if("number"===typeof b)a=b;else{for(var b=0,c=2048;a[c-1];)b=c,c+=c;for(var d=7;1<c-b;)d=(c+b)/2,a[d-1]?b=d:c=d;a=a[d]?c:b}return a}function da(){var a=d.csu,a=(a.indexOf("dbg")==a.length-3?a.substr(0,a.length-3):a)+"_"+d.app+"_Store";try{if(y){var b=y.getItem(a);if(b){for(var a={},c=b.split("|"),b=0;b<c.length;b++){var e=c[b].split("=");2==e.length&&(a[e[0]]=decodeURIComponent(e[1]))}if(!d.lastModification||parseInt(a.lastModification.substr(0,13),10)>=parseInt(d.lastModification.substr(0,
13),10))for(var q in a)a.hasOwnProperty(q)&&("config"==q?z(a[q]):d[q]=a[q])}}}catch(g){}}function z(a){a=a.split("|");for(var b=0;b<a.length;b++){var c=m(a[b],"=");-1===c?d[a[b]]="1":d[a[b].substring(0,c)]=a[b].substring(c+1,a[b].length)}}function ea(a,b){if(a){var c=/([a-zA-Z]*)[0-9]{0,3}_[a-zA-Z_0-9]*_[0-9]+/g.exec(a);if(c&&c.length){var k=c[0];d.csu=c[1];c=k.split("_");d.legacy="1";d.featureHash=c[1];d.dtVersion=e.version[0]+""+e.version[1]}}b&&z(b);c=location.hostname;k=d.domain;c=c&&k?c==k||
-1!==c.indexOf("."+k,c.length-("."+k).length)?!0:!1:!0;c||(delete d.domain,d.domainOverride="true")}function fa(){return K}function ga(){return ha}function ia(){return ja}function A(a){d[a]=0>m(d[a],"#"+a.toUpperCase())?d[a]:""}function ka(){return t}function R(a,b){for(var c=S(b),d=!1,e=0;e<c.length;e++)c[e].frameId===t&&(c[e].actionId=a,d=!0);d||l(c,{frameId:t,actionId:a});T(c)}function T(a,b){var c="";if(a){for(var c=[],d=0;d<a.length;d++)0<d&&0<c.length&&l(c,"p"),l(c,a[d].frameId),l(c,"h"),l(c,
a[d].actionId);c=c.join("")}c||(c="-");x(B,c)}function S(a){var b=r(B),c=[];if(b&&"-"!==b)for(var b=b.split("p"),d=0;d<b.length;d++){var e=b[d].split("h");if(2===e.length&&e[0]&&e[1]){var g=e[0],f;if(!(f=a)){f=g.split("_");f=v(f[0]);var h=s()%C;h<f&&(h+=C);f=f+9E5>h}f&&l(c,{frameId:g,actionId:e[1]})}}return c}function U(){var a=r(u);if(!a||""==a||a.length&&a.length!=V)a=E(u),a&&a.length==V||(W=!0,a=s()+N(la));var b=a,c=new Date;c.setFullYear(c.getFullYear()+2);x(u,b,c);F(u,b);return a}function ma(){return W}
var g=window;if(!g.dT_||!g.dT_.cfg||"string"!=typeof g.dT_.cfg||g.dT_.initialized)g.console&&g.console.log("Initconfig not found or agent already initialized! This is an injection issue.");else{var $=window.setTimeout,w=window.sessionStorage,e={version:[6,5,4,"1014"],cfg:window.dT_&&window.dT_.cfg,ica:1};e.version[3]=parseInt(e.version[3],10);window.dT_=e;e.agentStartTime=s();e.nw=s;e.apush=l;e.st=Z;var O=32,aa={"!":"%21","~":"%7E","*":"%2A","(":"%28",")":"%29","'":"%27",$:"%24",";":"%3B",",":"%2C"};
e.gSSV=E;e.sSSV=F;e.pn=v;e.iVSC=I;e.io=m;e.dC=G;e.sC=x;e.esc=H;e.gSId=ba;e.gDtc=ca;e.gSC=J;e.gC=r;e.cRN=M;e.cRS=N;e.gEL=Q;e.gEBTN=P;var d={reportUrl:"dynaTraceMonitor",initializedModules:"",csu:"dtagent",domainOverride:"false",dataDtConfig:e.cfg},y;try{y=window.localStorage}catch(na){}if(-1==m(d.dataDtConfig,"#CONFIGSTRING")&&(z(d.dataDtConfig),A("domain"),A("auto"),A("app"),(g=d.agentUri)&&-1<m(g,"_")))g=/([a-zA-Z0-9]*)[0-9]*_([a-zA-Z0-9]*)_[0-9]*/.exec(g),d.csu=g[1],d.featureHash=g[2],d.dtVersion=
e.version[0]+""+e.version[1];var g=P("script"),X=Q(g);if(0<X)for(var h,Y=d.csu+"_bootstrap.js",D=0;D<X;D++)if(h=g[D],h.attributes){var n=h.attributes.getNamedItem("data-dtconfig");h=h.src;if(n){ea(h,n.value);break}if((n=h&&h.indexOf(Y))&&0<=n)n=n+Y.length+5,d.app=h.length>n?h.substr(n):"Default%20Application"}da();try{var f=d.ign;if(f&&RegExp(f).test(window.location.href)){document.dT_=window.dT_=null;return}}catch(oa){}var B="dtPC",K="dtCookie",ha="x-dtPC",ja="x-dtReferer";e.gSCN=fa;e.gPCHN=ga;e.gRHN=
ia;e.pageContextCookieName=B;e.latencyCookieName="dtLatC";e.cfg=d;var C=6E8,t=e.agentStartTime%C+"_"+v(1E3*Math.random());e.gFId=ka;e.frameId=t;R(1);e.gPC=S;e.cPC=R;e.sPC=T;var p;try{p=w.getItem("dtDisabled")}catch(pa){}!d.auto&&(!d.legacy&&!p)&&(f=d.agentname||d.csu||"dtagent",f=r("dtUseDebugAgent")?d.debugName||f+"dbg":d.name||f,p=d.agentUri||d.agentLocation+"/"+f+"_"+d.featureHash+"_"+d.buildNumber,d.async?(f=document.createElement("script"),f.setAttribute("src",p),d.async&&f.setAttribute("defer",
"true"),f.setAttribute("crossorigin","anonymous"),p=document.getElementsByTagName("script")[0],p.parentElement.insertBefore(f,p)):document.write('<script type="text/javascript" src="'+p+'">\x3c/script>'));var u="rxVisitor",la=32,V=45,W=!1;U();e.iNV=ma;e.gVID=U}})();
</script>
<!-- paywall disabled -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donald Trump will try to outdo Obama in boosting historically black colleges | McClatchy DC</title>
<meta name="copyright" content="http://www.mcclatchydc.com/news/nation-world/national/article134825779.html"/>
<meta name="keywords" content="Donald Trump, Trump, HBCUs, Historically black colleges and universities, education, colleges, black Americans, Barack Obama, Obama, White House"/>
<meta name="news_keywords" content="Donald Trump, Trump, HBCUs, Historically black colleges and universities, education, colleges, black Americans, Barack Obama, Obama, White House"/>
<meta name="allow-comments" content="true"/>
<meta name="description" content="President Donald Trump is expected to provide historically black colleges and universities a long-awaited boost as he looks to outdo his predecessors — including the nation’s first African-American president — on a surprising issue."/>
<meta name="title" content="Trump seeks to outdo Obama in backing black colleges | McClatchy DC"/>
<meta name="googlebot" content="noodp, noarchive"/>
<meta name="original-source" content="http://pics.mcclatchyinteractive.com/news/politics-government/article134827019.html"/>
<link rel="canonical" href="http://pics.mcclatchyinteractive.com/news/politics-government/article134827019.html"/>
<meta name="google-site-verification" content="EedtwJCD34vv_4BAyiBZEQMjnQ_W3-NUVzBgXyT6ooY"/>
<meta property="og:title" content="Trump seeks to outdo Obama in backing black colleges"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="http://www.mcclatchydc.com/article134827019.html"/>
<meta property="og:description" content="President Donald Trump is expected to provide historically black colleges and universities a long-awaited boost as he looks to outdo his predecessors &mdash; including the nation&rsquo;s first African-American president &mdash; on a surprising issue."/>
<meta property="og:image" content="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/LANDSCAPE_1140/Trump"/>
<meta property="og:site_name" content="mcclatchydc"/>
<meta property="fb:app_id" content="1407731799445564"/>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="McClatchyDC">
<meta name="twitter:title" content="Trump seeks to outdo Obama in backing black colleges">
<meta name="twitter:description" content="President Donald Trump is expected to provide historically black colleges and universities a long-awaited boost as he looks to outdo his predecessors &mdash; including the nation&rsquo;s first African-American president &mdash; on a surprising issue.">
<meta name="twitter:image" content="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/LANDSCAPE_1140/Trump">
<meta name="msapplication-TileImage" content="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/windowsmetro-144.png"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="http://www.mcclatchydc.com/static/theme/mcclatchydc/base/ico/favicon.png">
<link href="http://www.mcclatchydc.com/static/theme/mcclatchydc-2020/base/css/main-1.0.100-98b9c26.css?sVer=1.0.100-98b9c26" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://www.mcclatchydc.com/static/js/html5shiv.js?sVer=1.0.100-98b9c26"></script>
<script src="http://www.mcclatchydc.com/static/js/respond.min.js?sVer=1.0.100-98b9c26"></script>
<script type="text/javascript" src="http://www.mcclatchydc.com/static/js/mi-scripts/pollyfill.js?sVer=1.0.100-98b9c26"></script>
<![endif]-->
<script type="text/javascript" src="http://www.mcclatchydc.com/static/js/jquery-1.10.2.min.js?sVer=1.0.100-98b9c26"></script>
<script type="text/javascript" src="http://www.mcclatchydc.com/static/js/mi-wf-site-1.0.100-98b9c26-min.js"></script>
<script type="text/javascript">
mi.pageInfo.setConf({
'marketInfo.pagelevel':'story',
'wufoo.formID':'',
'publication.mediadomain':'media.mcclatchydc.com',
'headerDateDisplay':'false',
'accuweather.apiKey':'2ce96fe9da724185a27db1e6a3ecf580',
'marketInfo.application_version':'1.0.100-98b9c26',
'marketInfo.logoAltText':'McClatchy DC',
'marketInfo.allow_ads':'true',
'nativo.story.placements':'840234,840253,844382',
'marketInfo.pagelevel_informational':'false',
'marketInfo.addcities':'New York, Los Angeles, Chicago, Houston',
'marketInfo.staticDirectory':'mcclatchydc',
'marketInfo.state_abbreviation':'DC',
'publication.domain':'McClatchyDC.com',
'accuweather.partnerCode':'MCCLATCHY',
'marketInfo.domain':'mcclatchydc',
'facebook.app.id':'1407731799445564',
'marketInfo.clipped_taxonomy':'_HomePage',
'nativo.video.placements':'869363,869362',
'marketInfo.careerbuilder.lr':'na',
'marketInfo.CarsSEO':'na',
'marketInfo.CarsAFF':'na',
'accuweather.locationString':'',
'marketInfo.Jobslr':'na',
'marketInfo.adretargeting.kill_list':["simpli.fi"],
'marketInfo.webmaster_email':'web@mcclatchydc.com',
'marketInfo.phone':'202-383-6001',
'marketInfo.sourcelevel':'ecefrontpage',
'pressPlus.zone':'yhcckue46lomxwNAPLOCaa',
'marketInfo.zipcode':'20005',
'marketInfo.shortURL':'breaking',
'marketInfo.viewsizes':[{"Large":[1200,600]},{"Medium":[992,300]},{"Small":[768,300]},{"Extra-Small":[0,0]}],
'findnsave.tracking':'findnsave',
'marketInfo.JobsSEO':'naa',
'accuweather.dev':'false',
'marketInfo.state':'District of Columbia',
'cs.circ_phone':'202-383-6001',
'marketInfo.siteId':'91',
'marketInfo.county':'Washington metropolitan area',
'marketInfo.adsizes':{"outofpage":{},"default":{"None":[],"970x90":[970,90],"Billboard Flex":[[960,30],[970,30],[970,90],[970,250]],"960x30":[960,30],"728x90":[728,90],"600x250":[600,250],"500x300":[500,300],"468x60":[468,60],"336x280":[336,280],"320x450":[320,450],"320x50":[320,50],"300x600":[300,600],"Flex Ad":[[300,250],[300,600]],"Welcome Ad":[[300,250],[300,600],[550,480],[600,500]],"300x250":[300,250],"300x100":[300,100],"300x75":[300,75],"300x50":[300,50],"240x400":[240,400],"234x60":[234,60],"216x36":[216,36],"180x150":[180,150],"168x28":[168,28],"160x600":[160,600],"160x90":[160,90],"146x60":[146,60],"120x600":[120,600],"120x240":[120,240],"120x20":[120,20],"Rising Star":[500,300]},"floorboard":{"None":[],"285x70":[285,70]},"wallpaper":{"None":[],"1600x600":[1600,600]}},
'obituaries.deathNoticeUrl':'',
'marketInfo.name':'McClatchy DC',
'marketInfo.location':'Washington',
'marketInfo.region':'across the US',
'marketInfo.JobsSiteID':'na',
'marketInfo.careerbuilder.dmc_id':'',
'marketInfo.code':'MDC',
'marketInfo.careerbuilder.dmc_code':'',
'cs.circ_url':'http://www.mcclatchydc.com/plus/',
'marketInfo.market_identifier':'MDC.site_mcclatchydc',
'accuweather.locationString1':'',
'wf.resource.static.rootUrl':'/static/',
'marketInfo.JobsQSSTS':'DC,US',
'accuweather.locationString3':'',
'financialContent.account':'bellinghamherald',
'accuweather.locationString2':'',
'accuweather.locationKey3':'',
'marketInfo.followLinks':'1',
'marketInfo.networkid':'7675',
'accuweather.locationKey2':'',
'accuweather.locationKey1':'',
'marketInfo.product':'site',
'marketInfo.JobsQSCTY':'Washington',
'obituaries.deathNoticeEmail':'web@mcclatchydc.com',
'marketInfo.street_address':'700 12th St. NW, Suite 1000, Washington, DC 20005',
'obituaries.deathNoticePhone':'202-383-6001',
'accuweather.locationKey':'',
'marketInfo.taxonomy':'_HomePage////',
'marketInfo.city':'Washington',
});
</script>
<script type="text/javascript" >
mi_Ads.env.create();
</script>
<script type="text/javascript" src="http://ad.crwdcntrl.net/5/c=7436/pe=y/callback=extractPid" async></script>
<script type="text/javascript" src="http://c.amazon-adsystem.com/aax2/amzn_ads.js"></script>
<script type="text/javascript">
try {
amznads.getAds('3108'); } catch(e) { /*ignore*/}
</script>
<script type="text/javascript">
try {
amznads.setTargetingForGPTAsync('amznslots');
} catch(e) { /*ignore*/}
</script>
<script type="text/javascript">
var _prx = window._prx || [];
_prx.push(['cfg.SetNoAutoStart']);
</script>
<script type="text/javascript" src="//s.ntv.io/serve/load.js" async></script>
<script type="text/javascript">
var mistats = mistats || {};
mistats.pagelevel="Story";
mistats.cmsid="Story: 134827019";
mistats.pagename="Story: 134827019|Trump seeks to outdo Obama in backing black colleges";
mistats.taxonomy="_HomePage||||";
mistats.channel="Homepage";
mistats.contentsource="DCBureau|By Anita Kumar and William DouglasMcClatchy Washington Bureau";
mistats.pubdate="2017/02/27";
mistats.moddate="2017/02/27 H10";
mistats.keywords="Donald Trump Trump HBCUs Historically black colleges and universities education colleges black Americans Barack Obama Obama White House";
</script>
<script type='text/javascript' src='http://media.mcclatchydc.com/misites/mcd/mcclatchydc.js'></script>
<script src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5" async></script>
</head>
<body>
<!-- Powered by Escenic Content Engine and Widget Framework. http://escenic.com -->
<div class=" " >
<script type="text/javascript">
var $window = $window || $(window);
var $document = $document || $(document);
function hidePhotoTitle() {
if( $(document.getElementById("top-galleries")).height() === 0) {
$(document.getElementById("top-photos-carousel")).hide();
} if($(document.getElementById("top-galleries-with-counter")).height() === 0) {
$(document.getElementById("top-photos-carousel")).hide();
console.log('found');
}
}
$window.on("load", hidePhotoTitle);
</script>
</div>
<div class="">
<header class=" " role="banner">
<div class="hidden">
<div>
<div class="ad-widget" id="div-gpt-ad-oop-1" adtype="outofpage" pkg="None" data-ad-policy="onPageLoad"
articleId="134827019" ></div>
</div>
</div>
<!--
Widget ID: Feature Master with title feature master masthead top:
Referenced feature mi.masterConfig.searchBarType, which was empty. Attempting fall-back value.
-->
<div id="masthead-container"
>
<div class="container">
<div class="masthead-row">
<div id="masthead-main"
>
<div id="masthead-logo"
>
<a href="http://www.mcclatchydc.com/" target="_top"><img src="http://www.mcclatchydc.com/static/images/mcclatchydc/logo-lg.png" alt="McClatchy DC | McClatchyDC.com" class="img-responsive center-block"></a>
</div>
<div id="quick-nav"
class="hidden-xs">
<ul class=" nav navbar-nav">
<li>
<a href="/news/politics-government/white-house/#navlink=subnav">
White House
</a>
</li>
<li>
<a href="/news/politics-government/congress/#navlink=navbar">
Congress
</a>
</li>
<li>
<a href="/news/nation-world/national/#navlink=navbar">
Nation
</a>
</li>
<li>
<a href="/opinion/editorial-cartoons/#navlink=navbar">
Cartoons
</a>
</li>
</ul>
<div id="site-search-lg" class="visible-lg">
<form action="/search/" class="form-inline" id="site-search" role="search">
<input type="text" name="q" class="form-control" />
<button class="input-group-addon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
</form>
</div>
<div id="search-icon-sm-md" class="site-search dropdown visible-md visible-sm">
<a href="#" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-search"></span></a>
<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
<li class="input-group">
<form action="/search/" class="form-inline" id="site-search" role="search">
<input type="text" name="q" class="form-control" placeholder="Search the site" />
<button class="input-group-addon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
</form>
</li>
</ul>
</div>
</div>
</div>
<!--
Widget ID: Feature Master with title feature master masthead switch:
Referenced feature mi.masterConfig.masthead-extra, which was empty. Attempting fall-back value.
-->
<div id="masthead-ad"
class="visible-md visible-lg">
<div>
<div class="ad-widget" id="div-gpt-ad-2" adtype="default" data-ad-policy="onPageLoad" atf="y"
pkg="None"
defaultsize="Large"
Small = "None"
Medium = "234x60"
Extra-Small = "None"
Large = "234x60"
articleId="134827019"
></div>
</div>
</div>
</div>
<div id="main-nav-container"
>
<div class="weather-container hidden-xs">
<div class="miWeather">
<a href="/weather">
<div class="miWeatherCurrent">
<div class="mi-weather-alert"></div>
</div>
</a>
</div>
</div>
<div id="login-subscribe"
class="hidden-xs">
<!--
Widget ID: Feature Master with title feature master masthead login subscribe links:
Referenced feature mi.masterConfig.masthead.mpp, which was empty. Attempting fall-back value.
-->
</div>
<div id="main-nav"
>
<nav class="navbar navbar-default " role="navigation" >
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div id="navbar-collapse-1" class="navbar-collapse collapse">
<div id="search-icon-xs" class="site-search dropdown visible-xs">
<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-search"></span></a>
<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
<li class="input-group">
<form action="/search/" class="form-inline" id="site-search" role="search">
<input type="text" name="q" class="form-control" placeholder="Search the site" />
<button class="input-group-addon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
</form>
</li>
</ul>
</div>
<div class="weather-container visible-xs">
<div class="miWeather">
<a href="/weather">
<div class="miWeatherCurrent">
<div class="mi-weather-alert"></div>
</div>
</a>
</div>
</div>
<!--
Widget ID: Feature Master with title feature master masthead login subscribe links:
Referenced feature mi.masterConfig.masthead.mpp, which was empty. Attempting fall-back value.
-->
<ul class=" nav navbar-nav">
<li class="dropdown">
<a href="/customer-service/#navlink=subnav" class="dropdown-toggle" data-toggle="dropdown" target=""><span class="glyphicon glyphicon-chevron-left"></span>Customer Service <span class="glyphicon glyphicon-chevron-right"></span><b class="caret"></b></a>
<ul class="dropdown-menu" style="padding-top: 0px;">
<li><a href="/customer-service/#navlink=subnav">Customer Service</a></li>
<li><a href="/customer-service/contact-us/#navlink=subnav">Contact Us</a></li>
<li><a href="/customer-service/newsletter-signup/#navlink=subnav">Newsletters</a></li>
<li><a href="/customer-service/#navlink=subnav">Subscriber Services</a></li>
</ul>
</li>
<li class="nav-divider"> </li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" target=""><span class="glyphicon glyphicon-chevron-left"></span>Politics <span class="glyphicon glyphicon-chevron-right"></span><b class="caret"></b></a>
<ul class="dropdown-menu" style="padding-top: 0px;">
<li><a href="/news/politics-government/#navlink=subnav">All Politics</a></li>
<li><a href="/news/politics-government/congress/#navlink=subnav">Congress</a></li>
<li><a href="/news/politics-government/white-house/#navlink=subnav">White House</a></li>
<li><a href="/news/politics-government/election/#navlink=subnav">Elections</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" target=""><span class="glyphicon glyphicon-chevron-left"></span>Nation <span class="glyphicon glyphicon-chevron-right"></span><b class="caret"></b></a>
<ul class="dropdown-menu" style="padding-top: 0px;">
<li><a href="/news/nation-world/national/#navlink=subnav">All Nation</a></li>
<li><a href="/news/crime/#navlink=subnav">Courts &amp; Crime</a></li>
<li><a href="/news/nation-world/national/economy/#navlink=subnav">Economy</a></li>
<li><a href="/news/nation-world/national/national-security/#navlink=subnav">National Security</a></li>
</ul>
</li>
<li>
<a href="/opinion/editorial-cartoons/#navlink=subnav">
Cartoons
</a>
</li>
<li class="nav-divider"> </li>
<li>
<a href="/customer-service/about-us/#navlink=subnav">
About Us
</a>
</li>
<li>
<a href="/customer-service/contact-us/article24465067.html#navlink=subnav">
Our Newsrooms
</a>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</div>
<script type="text/javascript">
var language = "en-us";
var mast_options = {
language: language,
locationKey: mi.pageInfo.getConf('accuweather.locationKey'),
locationString: mi.pageInfo.getConf('accuweather.locationString'),
isDevEnv: mi.pageInfo.getConf('accuweather.dev'),
publicationUrl: 'http://www.mcclatchydc.com/',
iconPath: 'static/images/widgets/weather/2020/',
detail: 'false'
};
var windowSize = jQuery(window).width();
if (windowSize > 767) {
jQuery(".mi-weather-alert").populateWeatherAlert("description", mast_options);
}
jQuery(".miWeatherCurrent").populateCurrentWeather(mast_options);
</script>
<style type="text/css">
/* Navigation Menu-specific styles */
/* @media screen and (min-width: 1200px) {
#masthead-container .dropdown:hover .dropdown-menu {
display: block; } }
*/
</style>
<script type="text/javascript">
/*
var $window = $window || $(window);
var $nav = $(document.getElementById("main-nav-container"));
var $toggle = $nav.find(".navbar-header").find(".navbar-toggle");
var $dropdown = $(".dropdown");
var $navbarNav = $nav.find(".navbar-nav");
var $navbarDropdown = $navbarNav.find(".dropdown-menu");
if ( location.hostname.split('.')[ 1 ] === "elnuevoherald" || language === "es" ) {
$toggle.prepend('<span class="nav-label hidden-xs">Secciones</span>');
$dropdown.find(".form-control").attr('placeholder', 'Búsqueda');
}
else {
// add Menu label to nav toggle for small and up
$toggle.prepend('<span class="nav-label hidden-xs">Full Menu</span>');
}
$dropdown.children('a').attr('data-target', '#');
// Make subnav same height as main nav
$(document.getElementById('navbar-collapse-1')).on('shown.bs.collapse', function () {
var navHeight = $navbarNav.height();
$navbarDropdown.css("min-height", navHeight + "px");
});
*/
if (location.hostname.split('.')[1] == 'elnuevoherald') {
jQuery('#main-nav-container .navbar-header .navbar-toggle').prepend('<span class="nav-label hidden-xs">Secciones</span>');
jQuery('.dropdown .form-control').attr('placeholder','Búsqueda');
} else {
// add Menu label to nav toggle for small and up
jQuery('#main-nav-container .navbar-header .navbar-toggle').prepend('<span class="nav-label hidden-xs">Full Menu</span>');
}
jQuery('.dropdown > a').attr('data-target','#');
// Make dropdowns work on hover at large breakpoint
jQuery(function() {
jQuery("#masthead-container .dropdown").hover(
function(){ if ($(window).width() > 1200) { $(this).addClass('open') } },
function(){ if ($(window).width() > 1200) { $(this).removeClass('open') } }
);
});
// Make subnav same height as main nav
$('#navbar-collapse-1').on('shown.bs.collapse', function () {
var nav_height = jQuery("#main-nav .navbar-nav").height();
jQuery("#main-nav .navbar-nav .dropdown-menu").css( "min-height", nav_height + "px" );
}); </script>
</header>
<div class="container " >
<div id="leaderboard-ad"
class="ad border-bottom">
<div class="visible-xs">
<div>
<div class="ad-widget" id="div-gpt-ad-3" adtype="default" data-ad-policy="onPageLoad" atf="y"
pkg="b"
defaultsize="Large"
Small = "None"
Medium = "None"
Extra-Small = "320x50"
Large = "None"
articleId="134827019"
></div>
</div>
</div>
<div class="hidden-xs">
<div>
<div class="ad-widget" id="div-gpt-ad-4" adtype="default" data-ad-policy="onPageLoad" atf="y"
pkg="d"
defaultsize="Large"
Small = "728x90"
Medium = "728x90"
Extra-Small = "None"
Large = "728x90"
articleId="134827019"
></div>
</div>
</div>
</div>
</div>
<section class="container story " role="main">
<div id="story-header"
>
<h1 class="heading section-main-heading link">
<a href="http://www.mcclatchydc.com/">
Homepage
</a>
</h1>
<p
class="published-date">
February 27, 2017 6:00 AM
</p>
<h1
class="title">
Trump seeks to outdo Obama in backing black colleges
</h1>
</div>
<div class="row
story-rail-wrapper">
<div class="wide-rail">
<div class="story-gallery ">
<div id="slick-gallery-container-29508010"
class="mi-slick-gallery-container clearfix" style="visibility: hidden;">
<div class="preroll-container" data-uniqueID="29508010">
<!--"Gallery pre-roll turned off as page level is: story . Must be: gallery" -->
<script type="text/javascript">
$(function () {
$(document).trigger("slickgallery.init", [
29508010,
1,
{
}
]);
});
</script>
<div class="slick-gallery">
<div class="gallery-item image">
<span class="test-temp" data-src="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/FREE_320/Trump" data-width-320></span>
<span class="test-temp" data-src="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/FREE_480/Trump" data-width-480></span>
<span class="test-temp" data-src="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/FREE_640/Trump" data-width-640></span>
<span class="test-temp" data-src="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/FREE_768/Trump" data-width-768></span>
<span class="test-temp" data-src="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/FREE_960/Trump" data-width-960></span>
<span class="test-temp" data-src="http://pics.mcclatchyinteractive.com/news/politics-government/ki5fip/picture134827014/ALTERNATES/FREE_1140/Trump" data-width-1140></span>
<img alt="President Donald Trump gives a thumbs up during a tour of the National Museum of African American History and Culture with Housing and Urban Development Secretary-designate Dr. Ben Carson and his wife Candy Carson, Tuesday, Feb. 21, 2017, in Washington." title="President Donald Trump gives a thumbs up during a tour of the National Museum of African American History and Culture with Housing and Urban Development Secretary-designate Dr. Ben Carson and his wife Candy Carson, Tuesday, Feb. 21, 2017, in Washington." />
<div class="caption">
<span class="caption-text">
President Donald Trump gives a thumbs up during a tour of the National Museum of African American History and Culture with Housing and Urban Development Secretary-designate Dr. Ben Carson and his wife Candy Carson, Tuesday, Feb. 21, 2017, in Washington.
</span>
<span class="photographer">Evan Vucci</span>
<span class="credits">AP</span>
</div>
</div>
</div>
</div>
<div class="gallery-counter-container">
</div>
<div class="caption-toggle">i</div>
<div class="current-caption"></div>
</div>
</div>
<div id="story-body-items"
>
<div
class="byline element-spacing-small">
<p><span class="ng_byline_name">By Anita Kumar and William Douglas</span></p><p><span class="ng_byline_email"><a href="mailto:akumar@mcclatchydc.com" title="">McClatchy Washington Bureau</a></span></p>
</div>
<div class="share-tools-wrapper">
<!--
Widget ID: Feature Master with title feature master share buttons:
Referenced feature mi.masterConfig.shareButtons, which was empty. Attempting fall-back value.
-->
<ul class="share-icons">
<li class="facebook">
<a class="facebook-share" title="Share on Facebook" href="http://www.facebook.com/sharer/sharer.php?u=http://www.mcclatchydc.com/article134827019.html" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"></a>
<div class="glyphicon glyphicon-facebook"></div>
</li>
<li class="twitter">
<a title="Share on Twitter" href="https://twitter.com/share?text=Trump%20seeks%20to%20outdo%20Obama%20in%20backing%20black%20colleges&url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"></a>
<div class="glyphicon glyphicon-twitter"></div>
</li>
<li class="email">
<a href="mailto:?subject=Trump+seeks+to+outdo+Obama+in+backing+black+colleges&body=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html"></a>
<div class="glyphicon glyphicon-envelope"></div>
</li>
<li class="more" onClick="return true">
<ul class="share-options">
<li class="linked-in"><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html&title=Trump+seeks+to+outdo+Obama+in+backing+black+colleges"><span class="glyphicon glyphicon-linkedin"></span>LinkedIn</a></li>
<li class="google"><a title="Share on Google Plus" href="https://plus.google.com/share?url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><span class="glyphicon glyphicon-google-plus"></span>Google+</a></li>
<li class="pinterest"><a href="http://www.pinterest.com/pin/create/button/?url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html&description=Trump+seeks+to+outdo+Obama+in+backing+black+colleges&media=http%3a%2f%2fpics.mcclatchyinteractive.com%2fnews%2fpolitics-government%2fki5fip%2fpicture134827014%2fALTERNATES%2fLANDSCAPE_1140%2fTrump"><span class="glyphicon glyphicon-pinterest-p"></span>Pinterest</a></li>
<li class="reddit"><a href="http://www.reddit.com/submit?url=http://www.mcclatchydc.com/article134827019.html"><span class="glyphicon glyphicon-reddit"></span>Reddit</a></li>
<li class="print"><a href="javascript:window.print();"><span class="glyphicon glyphicon-print"></span>Print</a></li>
<li class="reprints"><a href="http://www.mcclatchyreprints.com">Order Reprint of this Story</a></li>
</ul>
<div class="glyphicon glyphicon-share"></div>
</li>
</ul>
</div>
<div class="ndn_embed" id="ndn-video-player-1" data-config-distributor-id="91440" data-config-width="100%" data-config-height="9/16w"></div>
<div class="dateline-storybody">
<span
class="dateline">
WASHINGTON
</span>
<div id="story-target" class="clearfix">
<div id="content-body-23894221-134827019"
>
<p> President <a href="http://www.mcclatchydc.com/news/politics-government/white-house/article127333179.html" target="_blank" title="">Donald Trump</a> is expected to provide historically black colleges and universities a long-awaited boost as he looks to outdo his predecessors — including the nation’s first African-American president – on a surprising issue.</p><p>Trump will sign an executive order as early as Monday, when the schools’ presidents arrive in Washington for a visit. It’s expected to significantly strengthen the <a href="https://sites.ed.gov/whhbcu/" target="_blank" title="">office</a> that pushes the federal government to do business with the colleges by moving it to the White House and providing it specific goals, according to those who are helping to write the document.</p><p>
<div class="embed-media inline-video">
<div class="teaser ">
<div class="media-body">
<div class="container-121076708" id="container-121076708"> <script type="text/javascript">
if ( typeof wpsCSS === 'undefined' ) {
var wpsCSS = document.createElement('link');
wpsCSS.href = '/wps/build/wps-css/theme-262a89ef28.mcclatchydc.css';
wpsCSS.rel = 'stylesheet';
wpsCSS.type = 'text/css';
document.getElementsByTagName('head')[ 0 ].appendChild(wpsCSS);
}
</script> <div id="video-detail-121076708-1488221337899" class="media-wrap"> <div class="video-media" data-id="121076708" data-index> <div id="player-121076708-1488221337899" class="player" data-id="121076708"> <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%; background: url('http://www.mcclatchydc.com/latest-news/2m1atf-Will-Trump-support-black-colleges/alternates/LANDSCAPE_560/Will%20Trump%20support%20black%20colleges-') no-repeat center center; background-size: cover;"> </div> </div> <div class="mi-video-utilty-bar share-icons "> <a class="facebook-share mi-video-utility-item" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Facebook"> <span class="glyphicon glyphicon-facebook"></span> <span class="utility-text">facebook</span> </a> <a class="twitter-share mi-video-utility-item" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Twitter"> <span class="glyphicon glyphicon-twitter"></span> <span class="utility-text">twitter</span> </a> <a class="email-share mi-video-utility-item" href="" title="Share by Email"> <span class="jw-icon jw-icon-email"></span> <span class="utility-text">email</span> </a> <a class="mi-video-share-btn mi-video-utility-item" title="Share"> <span class="jw-icon jw-icon-share"></span> <span class="utility-text">Share</span> </a> </div> <div class="clearfix"></div> <div id="mi-video-overlay-121076708-1488221337899" class="mi-video-custom-overlay-wrap" style="display:none;"> <div class="mi-video-eos-wrap"> <h3 class="mi-video-overlay-title">More Videos</h3> <div class="mi-video-eos"> <div class="mi-overlay-item" data-index="0"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_200/Smartphones%20getting%20smarter" alt="Smartphones getting smarter"> <span class="duration">1:26</span> </div> <div class="media-desc"> <h4 class="video-title">Smartphones getting smarter</h4> </div> <div class="svg-timer-wrap"> <svg class="svg-timer" viewbox="0 0 34 34"> <g> <circle class="svg-timer-circle" cx="15" cy="17" r="15.9" transform="rotate(-90 16 16)"></circle> <text class="svg-timer-text" x="17" y="24"></text> </g> </svg> <a class="svg-timer-pause" href="javascript:void(0)"> <span class="glyphicon glyphicon-pause"></span> Pause </a> </div> </div> <div class="mi-overlay-item" data-index="1"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/latest-news/x5vlyj-travel-ban-protest-seattle-airport.jpg/alternates/LANDSCAPE_200/travel%20ban%20protest%20seattle%20airport.jpg" alt="Federal judge temporarily halts Trump’s travel ban"> <span class="duration">4:07</span> </div> <div class="media-desc"> <h4 class="video-title">Federal judge temporarily halts Trump’s travel ban</h4> </div> </div> <div class="mi-overlay-item" data-index="2"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_200/trump%20team%20cpac%20key.jpg" alt="Trump and team descend on CPAC"> <span class="duration">2:09</span> </div> <div class="media-desc"> <h4 class="video-title">Trump and team descend on CPAC</h4> </div> </div> <div class="mi-overlay-item" data-index="3"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/congress/yqv82u-Warren-Shocked-to-find-truth-was-out-of-order-on-the-Senate-floor/alternates/LANDSCAPE_200/Warren%3A%20Shocked%20to%20find%20%27truth%20was%20out%20of%20order%27%20on%20the%20Senate%20floor" alt="Warren: Shocked to find 'truth was out of order' on the Senate floor"> <span class="duration">2:19</span> </div> <div class="media-desc"> <h4 class="video-title">Warren: Shocked to find 'truth was out of order' on the Senate floor</h4> </div> </div> <div class="mi-overlay-item" data-index="4"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/azniuj-TrumpCPAC17.jpg/alternates/LANDSCAPE_200/TrumpCPAC17.jpg" alt="Trump touts 'America first' message at CPAC"> <span class="duration">6:51</span> </div> <div class="media-desc"> <h4 class="video-title">Trump touts 'America first' message at CPAC</h4> </div> </div> <div class="mi-overlay-item" data-index="5"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/white-house/df4sk2-TrumpRussia1.jpg/alternates/LANDSCAPE_200/TrumpRussia1.jpg" alt="Trump spars with reporters over Russian ties during campaign"> <span class="duration">2:30</span> </div> <div class="media-desc"> <h4 class="video-title">Trump spars with reporters over Russian ties during campaign</h4> </div> </div> <div class="mi-overlay-item" data-index="6"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nation-world/ellrfn-Hollywoods-greatest-trick-teaser-trailer/alternates/LANDSCAPE_200/Hollywood%27s%20greatest%20trick%3A%20teaser%20trailer" alt="Hollywood's greatest trick: teaser"> <span class="duration">2:01</span> </div> <div class="media-desc"> <h4 class="video-title">Hollywood's greatest trick: teaser</h4> </div> </div> <div class="mi-overlay-item" data-index="7"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/white-house/a4p420-McMaster.jpg/alternates/LANDSCAPE_200/McMaster.jpg" alt="Trump picks Lt. Gen. H.R. McMaster as national security adviser"> <span class="duration">2:28</span> </div> <div class="media-desc"> <h4 class="video-title">Trump picks Lt. Gen. H.R. McMaster as national security adviser</h4> </div> </div> <div class="mi-overlay-item" data-index="8"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nation-world/national/da0obp-devos_protesters.png/alternates/LANDSCAPE_200/devos_protesters.png" alt="One arrest as protesters block DeVos from D.C. middle school"> <span class="duration">2:23</span> </div> <div class="media-desc"> <h4 class="video-title">One arrest as protesters block DeVos from D.C. middle school</h4> </div> </div> <div class="mi-overlay-item" data-index="9"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nessdg-blackinobamaswhitehouse.jpg/alternates/LANDSCAPE_200/blackinobamaswhitehouse.jpg" alt="Black in Obama's White House"> <span class="duration">7:26</span> </div> <div class="media-desc"> <h4 class="video-title">Black in Obama's White House</h4> </div> </div> </div> </div> <div class="mi-video-share-wrap"> <span class="mi-video-close-share jw-icon jw-icon-close"></span> <h3 class="mi-video-overlay-title">Share Video</h3> <ul class="share-icons video"> <li class="embed"> <div class="form-group"> <label>Video link:</label> <input class="mi-share-link" type="text" readonly value=""> <div class="btn btn-primary select-btn">
Select
</div> </div> <div class="form-group"> <label>Embed code:</label> <input class="overlay-embed-share" type="text" readonly value=""> <div class="btn btn-primary select-btn">
Select
</div> </div> </li> <li class="facebook"> <a class="facebook-share" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Facebook"> <span class="glyphicon glyphicon-facebook"></span> facebook </a> </li> <li class="twitter"> <a class="twitter-share" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Twitter"> <span class="glyphicon glyphicon-twitter"></span> twitter </a> </li> <li class="email"> <a class="email-share" href=""> <span class="jw-icon jw-icon-email"></span> email </a> </li> </ul> </div> </div> </div> </div> <script type="text/javascript">
if ( typeof allowAds === 'undefined' ) {
var allowAds = true;
}
if ( typeof wpsConfig === 'undefined' ) {
var wpsConfig = {
baseUrl: '/wps/source/scripts/src',
urlArgs: 'misv=3a04764',
paths: {
'fastdom': '../libs/fastdom.min',
'moment': '../libs/moment.min',
'jwplayer': ['https://d12j9jiosu7f.cloudfront.net/jwplayer-7.8.7/jwplayer',
'../libs/jwplayer'],
'flickity': '../libs/flickity.pkgd.min'
},
waitSeconds: 0
};
var wpsRequire = requirejs.config(wpsConfig);
}
wpsRequire([ 'video' ], function ( video ) {
return video({"id":"121076708","url":"http://www.mcclatchydc.com/latest-news/article121076708.html","asset_type":"videoIngest","title":"Will Trump support black colleges?","publication":"mcclatchydc","home":"/web/v1/sections/21309","modified_date":1488210481,"published_date":1481825864,"credit":"McClatchy DC","dateline":"","thumbnail":"http://www.mcclatchydc.com/latest-news/2m1atf-Will-Trump-support-black-colleges/alternates/LANDSCAPE_768/Will%20Trump%20support%20black%20colleges-","photographer":"William Douglas","duration":73,"media_id":"FgB3zMsC","href":"/web/v1/content/121076708","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D121076708%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=121076708&eid=121076708&pl="}],"byline":"","template_type":"","leadtext":[{"text":"Rep. Alma Adams talks Donald Trump and funding for HBCUs in her office in Washington, D.C., on Dec. 8, 2016."}],"sources":[{"height":360,"mime_type":"video/mp4","mrid":"binary/2016/12/15/17/1437582013143-p5k4ma/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710191.mp4","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437582013143-p5k4ma/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710191.mp4","width":640},{"height":720,"mime_type":"video/mp4","mrid":"binary/2016/12/15/17/1437580321678-6bjrso/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710620.mp4","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437580321678-6bjrso/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710620.mp4","width":1280},{"height":0,"mime_type":"application/x-mpegURL","mrid":"binary/2016/12/15/17/art_121076708/bf010122_7808_4035_bbe3_d42f7a42b440.m3u8","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/art_121076708/bf010122_7808_4035_bbe3_d42f7a42b440.m3u8","width":0}],"videos":[{"id":"121076708","url":"http://www.mcclatchydc.com/latest-news/article121076708.html","duration":"1:13","image":"http://www.mcclatchydc.com/latest-news/2m1atf-Will-Trump-support-black-colleges/alternates/LANDSCAPE_768/Will%20Trump%20support%20black%20colleges-","title":"Will Trump support black colleges?","description":"Will Trump support black colleges? <span class=\"title-duration\">1:13</span>","displayDescription":"Rep. Alma Adams talks Donald Trump and funding for HBCUs in her office in Washington, D.C., on Dec. 8, 2016.","videographer":"William Douglas","credit":"McClatchy DC","published":1481825864,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437582013143-p5k4ma/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710191.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437580321678-6bjrso/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710620.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/art_121076708/bf010122_7808_4035_bbe3_d42f7a42b440.m3u8"}],"mediaid":"FgB3zMsC","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D121076708%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=121076708&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D121076708%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}}],"endscreen":[{"id":"134263874","url":"http://www.mcclatchydc.com/latest-news/article134263874.html","duration":"1:26","image":"http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_768/Smartphones%20getting%20smarter","title":"Smartphones getting smarter","description":"Smartphones getting smarter <span class=\"title-duration\">1:26</span>","displayDescription":"UnifyID chief executive John Whaley talks about how smartphones can use 'implicit authentication' so that users don't need to always be identifying themselves on the internet.","videographer":"","credit":"tjohnson@mcclatchydc.com","published":1488198326,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437582013143-p5k4ma/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198323619.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437580321678-6bjrso/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198324402.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/art_134263874/85c6e9ec_13aa_49bf_b33d_ab4196689f98.m3u8"}],"mediaid":"v2juZQzu","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D134263874%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=134263874&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D134263874%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"130766009","url":"http://www.mcclatchydc.com/latest-news/article130766009.html","duration":"4:07","image":"http://www.mcclatchydc.com/latest-news/x5vlyj-travel-ban-protest-seattle-airport.jpg/alternates/LANDSCAPE_768/travel%20ban%20protest%20seattle%20airport.jpg","title":"Federal judge temporarily halts Trump’s travel ban","description":"Federal judge temporarily halts Trump’s travel ban <span class=\"title-duration\">4:07</span>","displayDescription":"Judge James L. Robart granted a temporary nationwide restraining order on the travel ban that blocks travelers from seven majority-Muslim countries from coming to America. ","videographer":"","credit":"United States Courts","published":1486228960,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/4/17/1437582013143-p5k4ma/Federal%20judge%20restraining%20order-1486228954309.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/4/17/1437580321678-6bjrso/Federal%20judge%20restraining%20order-1486228955634.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/4/17/art_130766009/Federal_judge_restraining_order.m3u8"}],"mediaid":"olRGd9jL","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D130766009%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=130766009&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D130766009%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134922674","url":"http://www.mcclatchydc.com/news/politics-government/article134922674.html","duration":"2:09","image":"http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_768/trump%20team%20cpac%20key.jpg","title":"Trump and team descend on CPAC","description":"Trump and team descend on CPAC <span class=\"title-duration\">2:09</span>","displayDescription":"President Donald Trump and his team discussed points within the administration's conservative agenda – from repealing Obamacare to school choice – at the Conservative Political Action Conference (CPAC). ","videographer":"","credit":"Alexa Ard / McClatchy ","published":1487997156,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437582013143-p5k4ma/CPAC%20highlights%20trump%20and%20team%202017-1487997950274.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437580321678-6bjrso/CPAC%20highlights%20trump%20and%20team%202017-1487997952137.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/art_134922674/CPAC_highlights_trump_and_team_2017.m3u8"}],"mediaid":"L4SsnYE7","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134922674&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"131435819","url":"http://www.mcclatchydc.com/news/politics-government/congress/article131435819.html","duration":"2:19","image":"http://www.mcclatchydc.com/news/politics-government/congress/yqv82u-Warren-Shocked-to-find-truth-was-out-of-order-on-the-Senate-floor/alternates/LANDSCAPE_768/Warren%3A%20Shocked%20to%20find%20%27truth%20was%20out%20of%20order%27%20on%20the%20Senate%20floor","title":"Warren: Shocked to find 'truth was out of order' on the Senate floor","description":"Warren: Shocked to find 'truth was out of order' on the Senate floor <span class=\"title-duration\">2:19</span>","displayDescription":"Banned from speaking on the floor of the U.S. Senate during the nomination of Jeff Sessions to be Attorney General, Senator Elizabeth Warren (D-Mass.) met with civil rights leaders and other Democrats right outside the Senate floor. Warren suggested everyone re-read the 1986 letter from Coretta Scott King urging the Senate to reject Sen. Jeff Sessions' nomination as a federal judge.","videographer":"","credit":"Facebook / Sen. Elizabeth Warren","published":1486571361,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/1437582013143-p5k4ma/16462184_1862914463984506_7624289071841411072_n-1486571357270.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/1437580321678-6bjrso/16462184_1862914463984506_7624289071841411072_n-1486571358161.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/art_131435819/16462184_1862914463984506_7624289071841411072_n.m3u8"}],"mediaid":"r3qx7T7P","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D131435819%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=congress&id=131435819&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D131435819%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134751889","url":"http://www.mcclatchydc.com/news/politics-government/article134751889.html","duration":"6:51","image":"http://www.mcclatchydc.com/news/politics-government/azniuj-TrumpCPAC17.jpg/alternates/LANDSCAPE_768/TrumpCPAC17.jpg","title":"Trump touts 'America first' message at CPAC","description":"Trump touts 'America first' message at CPAC <span class=\"title-duration\">6:51</span>","displayDescription":"President Donald Trump criticized the news media and 'fake news,' talked about cracking down on illegal immigration, blasted Obama care, and touted his plan to put \"America first\" at the Conservative Political Action Conference on Friday. ","videographer":"","credit":"C-SPAN","published":1487962375,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/1437582013143-p5k4ma/TrumpCPAC-1487962362067.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/1437580321678-6bjrso/TrumpCPAC-1487962364914.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/art_134751889/TrumpCPAC.m3u8"}],"mediaid":"5t9wvpoW","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134751889%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134751889&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134751889%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"133164014","url":"http://www.mcclatchydc.com/news/politics-government/white-house/article133164014.html","duration":"2:30","image":"http://www.mcclatchydc.com/news/politics-government/white-house/df4sk2-TrumpRussia1.jpg/alternates/LANDSCAPE_768/TrumpRussia1.jpg","title":"Trump spars with reporters over Russian ties during campaign","description":"Trump spars with reporters over Russian ties during campaign <span class=\"title-duration\">2:30</span>","displayDescription":"President Donald Trump said during a White House news conference on Thursday that he \"had nothing to do with Russia\" during the campaign. He initially did not provide a straight answer whether or not anyone on his staff had made contacts, but when pressed by reporters, he later said he wasn't aware of any.","videographer":"","credit":"AP","published":1487277710,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/1437582013143-p5k4ma/TrumpRussia1-1487277707165.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/1437580321678-6bjrso/TrumpRussia1-1487277707809.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/art_133164014/TrumpRussia1.m3u8"}],"mediaid":"Xzn7FWWR","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133164014%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=white_house&id=133164014&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133164014%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"128737819","url":"http://www.mcclatchydc.com/news/nation-world/article128737819.html","duration":"2:01","image":"http://www.mcclatchydc.com/news/nation-world/ellrfn-Hollywoods-greatest-trick-teaser-trailer/alternates/LANDSCAPE_768/Hollywood%27s%20greatest%20trick%3A%20teaser%20trailer","title":"Hollywood's greatest trick: teaser","description":"Hollywood's greatest trick: teaser <span class=\"title-duration\">2:01</span>","displayDescription":"Visual effects artists have created some of the most iconic moments in movie history. It's so lucrative for the Big Six studios, that the top 10 highest grossing films of 2016 garnered over $9 billion alone. But to have us believe these visual effects artists share in this success? That’s Hollywood’s greatest trick of all.","videographer":"","credit":"Ali Rizvi and Sohail Al-Jamea/McClatchy","published":1485381742,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/1437582013143-p5k4ma/tease%20REV%206-1485381739433.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/1437580321678-6bjrso/tease%20REV%206-1485381740019.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/art_128737819/tease_REV_6.m3u8"}],"mediaid":"y2s1gWBb","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnation_world%26id%3D128737819%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=nation_world&id=128737819&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnation_world%26id%3D128737819%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"133888614","url":"http://www.mcclatchydc.com/news/politics-government/white-house/article133888614.html","duration":"2:28","image":"http://www.mcclatchydc.com/news/politics-government/white-house/a4p420-McMaster.jpg/alternates/LANDSCAPE_768/McMaster.jpg","title":"Trump picks Lt. Gen. H.R. McMaster as national security adviser","description":"Trump picks Lt. Gen. H.R. McMaster as national security adviser <span class=\"title-duration\">2:28</span>","displayDescription":"President Donald Trump announced Army Lt. Gen. H.R. McMaster as his new pick for national security adviser. During an unscheduled event at his Palm Beach club, Trump said McMaster was \"a man of tremendous talent and tremendous experience.\" Keith Kellogg, who had been his acting adviser, will now serve as the National Security Council chief of staff.","videographer":"","credit":"AP","published":1487625612,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/1437582013143-p5k4ma/McMaster-1487625606641.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/1437580321678-6bjrso/McMaster-1487625610088.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/art_133888614/McMaster.m3u8"}],"mediaid":"1IVKBGbu","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133888614%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=white_house&id=133888614&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133888614%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"131980949","url":"http://www.mcclatchydc.com/news/nation-world/national/article131980949.html","duration":"2:23","image":"http://www.mcclatchydc.com/news/nation-world/national/da0obp-devos_protesters.png/alternates/LANDSCAPE_768/devos_protesters.png","title":"One arrest as protesters block DeVos from D.C. middle school","description":"One arrest as protesters block DeVos from D.C. middle school <span class=\"title-duration\">2:23</span>","displayDescription":"Education Secretary Besty DeVos' visit to Jefferson Middle School Academy in Southwest Washington, D.C. on Friday was blocked by protesters. One eyewitness who was streaming the protest on Periscope captured the arrest of one protester. DeVos eventually made it inside the school, meeting with district officials, as well as Jefferson Academy administration, teachers and students.","videographer":"","credit":"Courtesy of Tiffany Flowers","published":1486756504,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/1437582013143-p5k4ma/20170210b_DeVos_Protesters-1486756501908.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/1437580321678-6bjrso/20170210b_DeVos_Protesters-1486756502656.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/art_131980949/20170210b_DeVos_Protesters.m3u8"}],"mediaid":"5oTkmBmt","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnational%26id%3D131980949%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=national&id=131980949&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnational%26id%3D131980949%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"125664324","url":"http://www.mcclatchydc.com/news/article125664324.html","duration":"7:26","image":"http://www.mcclatchydc.com/news/nessdg-blackinobamaswhitehouse.jpg/alternates/LANDSCAPE_768/blackinobamaswhitehouse.jpg","title":"Black in Obama's White House","description":"Black in Obama's White House <span class=\"title-duration\">7:26</span>","displayDescription":"In a series of interviews, several African-American presidential appointees describe the thrills and challenges of working for a historic administration.","videographer":"Cheryl Diaz Meyer","credit":"McClatchy DC","published":1484079359,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437582013143-p5k4ma/Obama%20Legacy%20V6b-1484562668133.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437580321678-6bjrso/Obama%20Legacy%20V6b-1484562670246.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/art_125664324/Obama_Legacy_V6b.m3u8"}],"mediaid":"jUGR1j9K","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnews%26id%3D125664324%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=news&id=125664324&eid=121076708&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnews%26id%3D125664324%26eid%3D121076708%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}}],"pageType":"detail-page"}, {"wpsInclude":true,"wpsArea":"video_inline","autoPlay":false,"pubName":"mcclatchydc","embed":false,"cacheBust":"3a04764","iterator":1,"uniqueID":"121076708-1488221337899","paywallEnabled":false,"domainName":"www.mcclatchydc.com","baseTemplate":"video"});
});
</script> </div>
</div>
<div class="embed-media-details">
<h4 class="title ">
<a href="http://www.mcclatchydc.com/latest-news/article121076708.html">
Will Trump support black colleges?
</a>
</h4>
<p class="leadtext ">
Rep. Alma Adams talks Donald Trump and funding for HBCUs in her office in Washington, D.C., on Dec. 8, 2016.
</p>
<span class="photographer">William Douglas</span>
<span class="credits">McClatchy DC</span>
</div>
</div>
</div>
</p><p>The potential is huge. Federal agencies have thousands of contracts with colleges, universities and think tanks worth billions of dollars, primarily for research that includes studying everything from cancer to poverty. </p><p>“It would be truly, truly historic,” said <a href="http://www.cheyney.edu/about-cheyney-university/Dr-Leonard-L-Haynes,-III-.cfm" target="_blank" title="">Leonard Haynes</a>, a longtime educator who ran the office and is helping to write the executive order. “It’s part of a long time dream...none of (the other presidents) had the courage to do it.”</p><p>Though African-Americans overwhelmingly support Democrats at the polls, many education experts credit <a href="http://www.mcclatchydc.com/news/politics-government/congress/article129211874.html" target="_blank" title="">Republican leaders</a> for helping to improve HBCUs, the common shorthand for historically black schools. </p><p>Some black college administrators say they were disappointed in President <a href="http://www.mcclatchydc.com/news/politics-government/white-house/article125521334.html" target="_blank" title="">Barack Obama</a> for not making the schools a priority and, in some cases, harming their financial health and contributing to declining enrollment with the changes he made to loan programs.</p><p>Some campuses are <a href="http://www.myrtlebeachonline.com/news/state/south-carolina/article80619617.html" target="_blank" title="">struggling</a>, suffering from budget cuts, <a href="http://www.philly.com/philly/blogs/campus_inq/Penn-issues-report-on-historically-black-universities.html" target="_blank" title="">low endowments</a>, aging facilities and fiscal mismanagement.</p><p>The schools receive money from the federal government through grants, contracts, appropriations and student aid. They received $4.7 billion in federal financial assistance in 2013, according to the latest <a href="https://sites.ed.gov/whhbcu/files/2011/12/HBCU-2013-Annual-Report-HBCU-final-.pdf" target="_blank" title="">annual report</a> available. The money accounted for 2.8 percent of federal funds awarded to all institutions of higher education.</p><p>
<div class="embed-media inline-video">
<div class="teaser ">
<div class="media-body">
<div class="container-125664324" id="container-125664324"> <script type="text/javascript">
if ( typeof wpsCSS === 'undefined' ) {
var wpsCSS = document.createElement('link');
wpsCSS.href = '/wps/build/wps-css/theme-262a89ef28.mcclatchydc.css';
wpsCSS.rel = 'stylesheet';
wpsCSS.type = 'text/css';
document.getElementsByTagName('head')[ 0 ].appendChild(wpsCSS);
}
</script> <div id="video-detail-125664324-1488221338941" class="media-wrap"> <div class="video-media" data-id="125664324" data-index> <div id="player-125664324-1488221338941" class="player" data-id="125664324"> <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%; background: url('http://www.mcclatchydc.com/news/nessdg-blackinobamaswhitehouse.jpg/alternates/LANDSCAPE_560/blackinobamaswhitehouse.jpg') no-repeat center center; background-size: cover;"> </div> </div> <div class="mi-video-utilty-bar share-icons "> <a class="facebook-share mi-video-utility-item" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Facebook"> <span class="glyphicon glyphicon-facebook"></span> <span class="utility-text">facebook</span> </a> <a class="twitter-share mi-video-utility-item" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Twitter"> <span class="glyphicon glyphicon-twitter"></span> <span class="utility-text">twitter</span> </a> <a class="email-share mi-video-utility-item" href="" title="Share by Email"> <span class="jw-icon jw-icon-email"></span> <span class="utility-text">email</span> </a> <a class="mi-video-share-btn mi-video-utility-item" title="Share"> <span class="jw-icon jw-icon-share"></span> <span class="utility-text">Share</span> </a> </div> <div class="clearfix"></div> <div id="mi-video-overlay-125664324-1488221338941" class="mi-video-custom-overlay-wrap" style="display:none;"> <div class="mi-video-eos-wrap"> <h3 class="mi-video-overlay-title">More Videos</h3> <div class="mi-video-eos"> <div class="mi-overlay-item" data-index="0"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_200/Smartphones%20getting%20smarter" alt="Smartphones getting smarter"> <span class="duration">1:26</span> </div> <div class="media-desc"> <h4 class="video-title">Smartphones getting smarter</h4> </div> <div class="svg-timer-wrap"> <svg class="svg-timer" viewbox="0 0 34 34"> <g> <circle class="svg-timer-circle" cx="15" cy="17" r="15.9" transform="rotate(-90 16 16)"></circle> <text class="svg-timer-text" x="17" y="24"></text> </g> </svg> <a class="svg-timer-pause" href="javascript:void(0)"> <span class="glyphicon glyphicon-pause"></span> Pause </a> </div> </div> <div class="mi-overlay-item" data-index="1"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_200/trump%20team%20cpac%20key.jpg" alt="Trump and team descend on CPAC"> <span class="duration">2:09</span> </div> <div class="media-desc"> <h4 class="video-title">Trump and team descend on CPAC</h4> </div> </div> <div class="mi-overlay-item" data-index="2"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/congress/yqv82u-Warren-Shocked-to-find-truth-was-out-of-order-on-the-Senate-floor/alternates/LANDSCAPE_200/Warren%3A%20Shocked%20to%20find%20%27truth%20was%20out%20of%20order%27%20on%20the%20Senate%20floor" alt="Warren: Shocked to find 'truth was out of order' on the Senate floor"> <span class="duration">2:19</span> </div> <div class="media-desc"> <h4 class="video-title">Warren: Shocked to find 'truth was out of order' on the Senate floor</h4> </div> </div> <div class="mi-overlay-item" data-index="3"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/azniuj-TrumpCPAC17.jpg/alternates/LANDSCAPE_200/TrumpCPAC17.jpg" alt="Trump touts 'America first' message at CPAC"> <span class="duration">6:51</span> </div> <div class="media-desc"> <h4 class="video-title">Trump touts 'America first' message at CPAC</h4> </div> </div> <div class="mi-overlay-item" data-index="4"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/white-house/df4sk2-TrumpRussia1.jpg/alternates/LANDSCAPE_200/TrumpRussia1.jpg" alt="Trump spars with reporters over Russian ties during campaign"> <span class="duration">2:30</span> </div> <div class="media-desc"> <h4 class="video-title">Trump spars with reporters over Russian ties during campaign</h4> </div> </div> <div class="mi-overlay-item" data-index="5"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nation-world/ellrfn-Hollywoods-greatest-trick-teaser-trailer/alternates/LANDSCAPE_200/Hollywood%27s%20greatest%20trick%3A%20teaser%20trailer" alt="Hollywood's greatest trick: teaser"> <span class="duration">2:01</span> </div> <div class="media-desc"> <h4 class="video-title">Hollywood's greatest trick: teaser</h4> </div> </div> <div class="mi-overlay-item" data-index="6"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/white-house/a4p420-McMaster.jpg/alternates/LANDSCAPE_200/McMaster.jpg" alt="Trump picks Lt. Gen. H.R. McMaster as national security adviser"> <span class="duration">2:28</span> </div> <div class="media-desc"> <h4 class="video-title">Trump picks Lt. Gen. H.R. McMaster as national security adviser</h4> </div> </div> <div class="mi-overlay-item" data-index="7"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nation-world/national/da0obp-devos_protesters.png/alternates/LANDSCAPE_200/devos_protesters.png" alt="One arrest as protesters block DeVos from D.C. middle school"> <span class="duration">2:23</span> </div> <div class="media-desc"> <h4 class="video-title">One arrest as protesters block DeVos from D.C. middle school</h4> </div> </div> <div class="mi-overlay-item" data-index="8"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/latest-news/2m1atf-Will-Trump-support-black-colleges/alternates/LANDSCAPE_200/Will%20Trump%20support%20black%20colleges-" alt="Will Trump support black colleges?"> <span class="duration">1:13</span> </div> <div class="media-desc"> <h4 class="video-title">Will Trump support black colleges?</h4> </div> </div> <div class="mi-overlay-item" data-index="9"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/congress/5uxfur-Infrastructure.jpg/alternates/LANDSCAPE_200/Infrastructure.jpg" alt="Senate Democrats unveil $1 trillion infrastructure plan"> <span class="duration">2:17</span> </div> <div class="media-desc"> <h4 class="video-title">Senate Democrats unveil $1 trillion infrastructure plan</h4> </div> </div> </div> </div> <div class="mi-video-share-wrap"> <span class="mi-video-close-share jw-icon jw-icon-close"></span> <h3 class="mi-video-overlay-title">Share Video</h3> <ul class="share-icons video"> <li class="embed"> <div class="form-group"> <label>Video link:</label> <input class="mi-share-link" type="text" readonly value=""> <div class="btn btn-primary select-btn">
Select
</div> </div> <div class="form-group"> <label>Embed code:</label> <input class="overlay-embed-share" type="text" readonly value=""> <div class="btn btn-primary select-btn">
Select
</div> </div> </li> <li class="facebook"> <a class="facebook-share" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Facebook"> <span class="glyphicon glyphicon-facebook"></span> facebook </a> </li> <li class="twitter"> <a class="twitter-share" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Twitter"> <span class="glyphicon glyphicon-twitter"></span> twitter </a> </li> <li class="email"> <a class="email-share" href=""> <span class="jw-icon jw-icon-email"></span> email </a> </li> </ul> </div> </div> </div> </div> <script type="text/javascript">
if ( typeof allowAds === 'undefined' ) {
var allowAds = true;
}
if ( typeof wpsConfig === 'undefined' ) {
var wpsConfig = {
baseUrl: '/wps/source/scripts/src',
urlArgs: 'misv=3a04764',
paths: {
'fastdom': '../libs/fastdom.min',
'moment': '../libs/moment.min',
'jwplayer': ['https://d12j9jiosu7f.cloudfront.net/jwplayer-7.8.7/jwplayer',
'../libs/jwplayer'],
'flickity': '../libs/flickity.pkgd.min'
},
waitSeconds: 0
};
var wpsRequire = requirejs.config(wpsConfig);
}
wpsRequire([ 'video' ], function ( video ) {
return video({"id":"125664324","url":"http://www.mcclatchydc.com/news/article125664324.html","asset_type":"videoIngest","title":"Black in Obama's White House","publication":"mcclatchydc","home":"/web/v1/sections/23109","modified_date":1488210482,"published_date":1484079359,"credit":"McClatchy DC","keywords":"black, african, american, white, house,appointee, appoint, obama, barack, president, bpaa, black presidential appointees, association, ","dateline":"","thumbnail":"http://www.mcclatchydc.com/news/nessdg-blackinobamaswhitehouse.jpg/alternates/LANDSCAPE_768/blackinobamaswhitehouse.jpg","photographer":"Cheryl Diaz Meyer","duration":446,"media_id":"jUGR1j9K","href":"/web/v1/content/125664324","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnews%26id%3D125664324%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=news&id=125664324&eid=125664324&pl="}],"byline":"","template_type":"","leadtext":[{"text":"In a series of interviews, several African-American presidential appointees describe the thrills and challenges of working for a historic administration."}],"sources":[{"height":360,"mime_type":"video/mp4","mrid":"binary/2017/1/10/19/1437582013143-p5k4ma/Obama Legacy V6b-1484562668133.mp4","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437582013143-p5k4ma/Obama%20Legacy%20V6b-1484562668133.mp4","width":640},{"height":720,"mime_type":"video/mp4","mrid":"binary/2017/1/10/19/1437580321678-6bjrso/Obama Legacy V6b-1484562670246.mp4","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437580321678-6bjrso/Obama%20Legacy%20V6b-1484562670246.mp4","width":1280},{"height":0,"mime_type":"application/x-mpegURL","mrid":"binary/2017/1/10/19/art_125664324/Obama_Legacy_V6b.m3u8","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/art_125664324/Obama_Legacy_V6b.m3u8","width":0}],"videos":[{"id":"125664324","url":"http://www.mcclatchydc.com/news/article125664324.html","duration":"7:26","image":"http://www.mcclatchydc.com/news/nessdg-blackinobamaswhitehouse.jpg/alternates/LANDSCAPE_768/blackinobamaswhitehouse.jpg","title":"Black in Obama's White House","description":"Black in Obama's White House <span class=\"title-duration\">7:26</span>","displayDescription":"In a series of interviews, several African-American presidential appointees describe the thrills and challenges of working for a historic administration.","videographer":"Cheryl Diaz Meyer","credit":"McClatchy DC","published":1484079359,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437582013143-p5k4ma/Obama%20Legacy%20V6b-1484562668133.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437580321678-6bjrso/Obama%20Legacy%20V6b-1484562670246.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/art_125664324/Obama_Legacy_V6b.m3u8"}],"mediaid":"jUGR1j9K","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnews%26id%3D125664324%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=news&id=125664324&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnews%26id%3D125664324%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}}],"endscreen":[{"id":"134263874","url":"http://www.mcclatchydc.com/latest-news/article134263874.html","duration":"1:26","image":"http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_768/Smartphones%20getting%20smarter","title":"Smartphones getting smarter","description":"Smartphones getting smarter <span class=\"title-duration\">1:26</span>","displayDescription":"UnifyID chief executive John Whaley talks about how smartphones can use 'implicit authentication' so that users don't need to always be identifying themselves on the internet.","videographer":"","credit":"tjohnson@mcclatchydc.com","published":1488198326,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437582013143-p5k4ma/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198323619.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437580321678-6bjrso/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198324402.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/art_134263874/85c6e9ec_13aa_49bf_b33d_ab4196689f98.m3u8"}],"mediaid":"v2juZQzu","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D134263874%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=134263874&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D134263874%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134922674","url":"http://www.mcclatchydc.com/news/politics-government/article134922674.html","duration":"2:09","image":"http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_768/trump%20team%20cpac%20key.jpg","title":"Trump and team descend on CPAC","description":"Trump and team descend on CPAC <span class=\"title-duration\">2:09</span>","displayDescription":"President Donald Trump and his team discussed points within the administration's conservative agenda – from repealing Obamacare to school choice – at the Conservative Political Action Conference (CPAC). ","videographer":"","credit":"Alexa Ard / McClatchy ","published":1487997156,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437582013143-p5k4ma/CPAC%20highlights%20trump%20and%20team%202017-1487997950274.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437580321678-6bjrso/CPAC%20highlights%20trump%20and%20team%202017-1487997952137.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/art_134922674/CPAC_highlights_trump_and_team_2017.m3u8"}],"mediaid":"L4SsnYE7","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134922674&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"131435819","url":"http://www.mcclatchydc.com/news/politics-government/congress/article131435819.html","duration":"2:19","image":"http://www.mcclatchydc.com/news/politics-government/congress/yqv82u-Warren-Shocked-to-find-truth-was-out-of-order-on-the-Senate-floor/alternates/LANDSCAPE_768/Warren%3A%20Shocked%20to%20find%20%27truth%20was%20out%20of%20order%27%20on%20the%20Senate%20floor","title":"Warren: Shocked to find 'truth was out of order' on the Senate floor","description":"Warren: Shocked to find 'truth was out of order' on the Senate floor <span class=\"title-duration\">2:19</span>","displayDescription":"Banned from speaking on the floor of the U.S. Senate during the nomination of Jeff Sessions to be Attorney General, Senator Elizabeth Warren (D-Mass.) met with civil rights leaders and other Democrats right outside the Senate floor. Warren suggested everyone re-read the 1986 letter from Coretta Scott King urging the Senate to reject Sen. Jeff Sessions' nomination as a federal judge.","videographer":"","credit":"Facebook / Sen. Elizabeth Warren","published":1486571361,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/1437582013143-p5k4ma/16462184_1862914463984506_7624289071841411072_n-1486571357270.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/1437580321678-6bjrso/16462184_1862914463984506_7624289071841411072_n-1486571358161.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/art_131435819/16462184_1862914463984506_7624289071841411072_n.m3u8"}],"mediaid":"r3qx7T7P","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D131435819%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=congress&id=131435819&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D131435819%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134751889","url":"http://www.mcclatchydc.com/news/politics-government/article134751889.html","duration":"6:51","image":"http://www.mcclatchydc.com/news/politics-government/azniuj-TrumpCPAC17.jpg/alternates/LANDSCAPE_768/TrumpCPAC17.jpg","title":"Trump touts 'America first' message at CPAC","description":"Trump touts 'America first' message at CPAC <span class=\"title-duration\">6:51</span>","displayDescription":"President Donald Trump criticized the news media and 'fake news,' talked about cracking down on illegal immigration, blasted Obama care, and touted his plan to put \"America first\" at the Conservative Political Action Conference on Friday. ","videographer":"","credit":"C-SPAN","published":1487962375,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/1437582013143-p5k4ma/TrumpCPAC-1487962362067.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/1437580321678-6bjrso/TrumpCPAC-1487962364914.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/art_134751889/TrumpCPAC.m3u8"}],"mediaid":"5t9wvpoW","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134751889%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134751889&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134751889%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"133164014","url":"http://www.mcclatchydc.com/news/politics-government/white-house/article133164014.html","duration":"2:30","image":"http://www.mcclatchydc.com/news/politics-government/white-house/df4sk2-TrumpRussia1.jpg/alternates/LANDSCAPE_768/TrumpRussia1.jpg","title":"Trump spars with reporters over Russian ties during campaign","description":"Trump spars with reporters over Russian ties during campaign <span class=\"title-duration\">2:30</span>","displayDescription":"President Donald Trump said during a White House news conference on Thursday that he \"had nothing to do with Russia\" during the campaign. He initially did not provide a straight answer whether or not anyone on his staff had made contacts, but when pressed by reporters, he later said he wasn't aware of any.","videographer":"","credit":"AP","published":1487277710,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/1437582013143-p5k4ma/TrumpRussia1-1487277707165.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/1437580321678-6bjrso/TrumpRussia1-1487277707809.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/art_133164014/TrumpRussia1.m3u8"}],"mediaid":"Xzn7FWWR","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133164014%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=white_house&id=133164014&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133164014%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"128737819","url":"http://www.mcclatchydc.com/news/nation-world/article128737819.html","duration":"2:01","image":"http://www.mcclatchydc.com/news/nation-world/ellrfn-Hollywoods-greatest-trick-teaser-trailer/alternates/LANDSCAPE_768/Hollywood%27s%20greatest%20trick%3A%20teaser%20trailer","title":"Hollywood's greatest trick: teaser","description":"Hollywood's greatest trick: teaser <span class=\"title-duration\">2:01</span>","displayDescription":"Visual effects artists have created some of the most iconic moments in movie history. It's so lucrative for the Big Six studios, that the top 10 highest grossing films of 2016 garnered over $9 billion alone. But to have us believe these visual effects artists share in this success? That’s Hollywood’s greatest trick of all.","videographer":"","credit":"Ali Rizvi and Sohail Al-Jamea/McClatchy","published":1485381742,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/1437582013143-p5k4ma/tease%20REV%206-1485381739433.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/1437580321678-6bjrso/tease%20REV%206-1485381740019.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/art_128737819/tease_REV_6.m3u8"}],"mediaid":"y2s1gWBb","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnation_world%26id%3D128737819%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=nation_world&id=128737819&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnation_world%26id%3D128737819%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"133888614","url":"http://www.mcclatchydc.com/news/politics-government/white-house/article133888614.html","duration":"2:28","image":"http://www.mcclatchydc.com/news/politics-government/white-house/a4p420-McMaster.jpg/alternates/LANDSCAPE_768/McMaster.jpg","title":"Trump picks Lt. Gen. H.R. McMaster as national security adviser","description":"Trump picks Lt. Gen. H.R. McMaster as national security adviser <span class=\"title-duration\">2:28</span>","displayDescription":"President Donald Trump announced Army Lt. Gen. H.R. McMaster as his new pick for national security adviser. During an unscheduled event at his Palm Beach club, Trump said McMaster was \"a man of tremendous talent and tremendous experience.\" Keith Kellogg, who had been his acting adviser, will now serve as the National Security Council chief of staff.","videographer":"","credit":"AP","published":1487625612,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/1437582013143-p5k4ma/McMaster-1487625606641.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/1437580321678-6bjrso/McMaster-1487625610088.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/art_133888614/McMaster.m3u8"}],"mediaid":"1IVKBGbu","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133888614%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=white_house&id=133888614&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133888614%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"131980949","url":"http://www.mcclatchydc.com/news/nation-world/national/article131980949.html","duration":"2:23","image":"http://www.mcclatchydc.com/news/nation-world/national/da0obp-devos_protesters.png/alternates/LANDSCAPE_768/devos_protesters.png","title":"One arrest as protesters block DeVos from D.C. middle school","description":"One arrest as protesters block DeVos from D.C. middle school <span class=\"title-duration\">2:23</span>","displayDescription":"Education Secretary Besty DeVos' visit to Jefferson Middle School Academy in Southwest Washington, D.C. on Friday was blocked by protesters. One eyewitness who was streaming the protest on Periscope captured the arrest of one protester. DeVos eventually made it inside the school, meeting with district officials, as well as Jefferson Academy administration, teachers and students.","videographer":"","credit":"Courtesy of Tiffany Flowers","published":1486756504,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/1437582013143-p5k4ma/20170210b_DeVos_Protesters-1486756501908.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/1437580321678-6bjrso/20170210b_DeVos_Protesters-1486756502656.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/art_131980949/20170210b_DeVos_Protesters.m3u8"}],"mediaid":"5oTkmBmt","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnational%26id%3D131980949%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=national&id=131980949&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnational%26id%3D131980949%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"121076708","url":"http://www.mcclatchydc.com/latest-news/article121076708.html","duration":"1:13","image":"http://www.mcclatchydc.com/latest-news/2m1atf-Will-Trump-support-black-colleges/alternates/LANDSCAPE_768/Will%20Trump%20support%20black%20colleges-","title":"Will Trump support black colleges?","description":"Will Trump support black colleges? <span class=\"title-duration\">1:13</span>","displayDescription":"Rep. Alma Adams talks Donald Trump and funding for HBCUs in her office in Washington, D.C., on Dec. 8, 2016.","videographer":"William Douglas","credit":"McClatchy DC","published":1481825864,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437582013143-p5k4ma/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710191.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437580321678-6bjrso/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710620.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/art_121076708/bf010122_7808_4035_bbe3_d42f7a42b440.m3u8"}],"mediaid":"FgB3zMsC","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D121076708%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=121076708&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D121076708%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"128449254","url":"http://www.mcclatchydc.com/news/politics-government/congress/article128449254.html","duration":"2:17","image":"http://www.mcclatchydc.com/news/politics-government/congress/5uxfur-Infrastructure.jpg/alternates/LANDSCAPE_768/Infrastructure.jpg","title":"Senate Democrats unveil $1 trillion infrastructure plan","description":"Senate Democrats unveil $1 trillion infrastructure plan <span class=\"title-duration\">2:17</span>","displayDescription":"Senate Democrats present a $1 trillion infrastructure bill for the nation's roads, airports, bridges and seaports, which they say would create 15 million jobs over 10 years. Sens. Chuck Schumer (D-NY) and Bernie Sanders (I-VT) called on President Trump to follow through on his campaign promise to invest in infrastructure and back their proposal.","videographer":"","credit":"C-SPAN","published":1485287046,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/24/19/1437582013143-p5k4ma/Infrastructure-1485287041420.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/24/19/1437580321678-6bjrso/Infrastructure-1485287043882.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/24/19/art_128449254/Infrastructure.m3u8"}],"mediaid":"FIJMwJdj","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D128449254%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=congress&id=128449254&eid=125664324&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D128449254%26eid%3D125664324%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}}],"pageType":"detail-page"}, {"wpsInclude":true,"wpsArea":"video_inline","autoPlay":false,"pubName":"mcclatchydc","embed":false,"cacheBust":"3a04764","iterator":1,"uniqueID":"125664324-1488221338941","paywallEnabled":false,"domainName":"www.mcclatchydc.com","baseTemplate":"video"});
});
</script> </div>
</div>
<div class="embed-media-details">
<h4 class="title ">
<a href="http://www.mcclatchydc.com/news/article125664324.html">
Black in Obama's White House
</a>
</h4>
<p class="leadtext ">
In a series of interviews, several African-American presidential appointees describe the thrills and challenges of working for a historic administration.
</p>
<span class="photographer">Cheryl Diaz Meyer</span>
<span class="credits">McClatchy DC</span>
</div>
</div>
</div>
</p><p>While Trump’s rival, Hillary Clinton, had proposed <a href="https://www.hillaryclinton.com/briefing/factsheets/2015/08/12/college-compact-hbcu/" target="_blank" title="">$25 billion</a> to help support low- and middle-income students at private HBCU campuses, Trump’s plans were unknown.</p><p></p><div class="highline highline-quote" id="highline-quote-3"><p>It’s a myth that HBCUs have not been a priority under Republican presidents <span class="ng_highline_attrib">Gerard Robinson, who lead Trump’s education policy during the transition and is a resident fellow at the American Enterprise Institute, a conservative think tank. </span></p></div><p>Trump’s interest<strong> </strong>this early in his presidency is surprising. The Republican won a mere 8 percent of the African-American vote after Trump upset many by suggesting they live largely in crime-infested cities. He tried to woo them with this line: “What the hell do you have to lose?” </p><p>Helping black colleges is “an easy win for President Trump,” said <a href="http://www.juliannemalveaux.com/bio" target="_blank" title="">Julianne Malveaux</a>, former president of Bennett College, a historically black liberal arts college for women in Greensboro, N.C. “It’s an easy way to say to black people ‘I’m not ignoring you.’ ”</p><p>It also is politically shrewd. Predominantly black colleges tend to be clustered in Republican-dominated states, including South Carolina, Georgia and Texas. North Carolina tops the list, with five public and five private four-year institutions.</p><p>But, she and others caution, Trump’s support on this issue will not erase other concerns about his personnel choices and his policies involving discrimination and voting rights.</p><p>“The president’s history in this matter of public policy leads one to be suspect of his motives because he doesn’t have a track record,” said <a href="https://www.agb.org/bios/alvin-j-schexnider" target="_blank" title="">Alvin Schexnider</a>, a former chancellor of Winston-Salem State University and author of “Saving Black Colleges: Leading Change in a Complex Organization.” </p><p>The White House declined to comment on the executive order except to say Trump is committed to announcing an HBCU plan prior to the end of February, which is <a href="https://www.whitehouse.gov/the-press-office/2017/02/01/remarks-president-trump-african-american-history-month-listening-session" target="_blank" title="">Black History Month</a>.</p><p>“The president has a strong commitment to them and understands over the last eight years they've been woefully neglected,” White House Press Secretary <a href="https://twitter.com/PressSec?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" title="">Sean Spicer</a> said. “And I think he wants to really show a commitment. ... And so you’ll see, I think, not just a push this month, but in his budget and going forward.”</p><p></p><div class="highline highline-quote" id="highline-quote-1"><p>I also think they’re trying to gain some support, increase their support, he only got 8 percent of the African-American community. ... I hope it’s genuine, but I do think there’s a lot of politics at play here <span class="ng_highline_attrib">Rep. Alma Adams, D-N.C., co-founder of the Bipartisan Congressional HBCU Caucus of Trump’s interest</span></p></div><p>The nation is home to more than 100 HBCUs, colleges or universities established before 1964 with the principal mission of educating African-Americans, who were barred from attending majority-white schools in the pre-civil-rights era. They serve about 300,000 students.</p><p>Black colleges represent 3 percent of the country’s two-year and four-year institutions but account for about 20 percent of degrees awarded to African-Americans and generate 25 percent of all the bachelor’s degrees in science, technology, engineering and mathematics fields earned by African-Americans annually, according to U.S. Department of Education and Thurgood Marshall College Fund statistics.</p><p>During the transition and into the start of his presidency, Trump’s advisers <a href="http://www.mcclatchydc.com/news/politics-government/article121988224.html" target="_blank" title="">met</a> with HBCU officials as they considered how to make good on Trump’s “New Deal For Black America,” which he unveiled at a <a href="http://www.charlotteobserver.com/news/politics-government/election/article110546817.html" target="_blank" title="">speech in Charlotte, N.C</a>.that alluded to black colleges.</p><p>Those meetings included <a href="http://www.omarosa.com/" target="_blank" title="">Omarosa Manigault</a>, a graduate of Central State University in Ohio and Washington’s Howard University, both HBCUs. She gained fame in the first season of “The Apprentice” and now serves as communications director for the Office of Public Liaison in the White House.</p><p>In the 1980s, Ronald Reagan created the White House Initiative on Historically Black Colleges and Universities. In 1989, George H. W. Bush established an advisory board to advise the president and the secretary of education on HBCUs. </p><p>The White House Initiative urges 32 federal agencies, including the Defense Department, Department of Agriculture and NASA, to contract with black colleges. It was initially housed at the White House but, despite its name, it is now located at the Education Department. Many experts have been advocating for it to be moved back for years. During Obama’s tenure, the initiative had a staff of six.</p><p></p><div class="highline highline-quote" id="highline-quote-2"><p>I’m a skeptic. I think the best predictor of future behavior is past behavior, and past behavior in this instance is not very encouraging <span class="ng_highline_attrib">Alvin Schexnider, a former chancellor of Winston-Salem State University and author of “Saving Black Colleges: Leading Change in a Complex Organization”</span></p></div><div class="ng_infobox_label" hidden="hidden"><p>EDITORS: STORY CAN END HERE</p><span class="ng-command" data-value="252"> </span></div><p>Trump is also likely to give federal agencies goals for how many contracts<strong> </strong>black schools should receive according to those who are helping to write the document.</p><p>Some are pushing him to to commit to a goal that HBCUs be awarded 5 percent of total federal grant, internship and cooperative agreement funding; and 10 percent of total federal contract funding awarded to colleges and universities, which would nearly double federal support to HBCUs. They also hope he will boost funding in his budget to be released mid-March.</p><p>Rep. <a href="https://adams.house.gov/" target="_blank" title="">Alma Adams</a>, D-N.C., co-founder of the <a href="https://tmcf.org/our-policy/government-relations" target="_blank" title="">Bipartisan Congressional HBCU Caucus</a>, said the efforts should be moved to the White House in part because she has little faith in Education Secretary Betsy DeVos.</p><p>“Let’s put it in the White House and put somebody over it who really understands the HBCU movement and what we need for these universities,” she said. “I think it will be better off there.”</p><p>But <a href="http://www.qem.org/presidentbio/" target="_blank" title="">Ivory Toldson</a>, who served as initiative director during Obama’s presidency, said putting the office back into the White House “might have potential to politicize the office in a way that shouldn’t.”</p><p>The executive order will coincide with the visit of about 90 presidents of historically black colleges and universities, who will be in Washington for a daylong conference. House Speaker Paul Ryan, R-Wis, Sen. Marco Rubio, R-Fla., and Sen. Tim Scott, R-S.C. are scheduled to attend. </p><div class="ng_endnote_contact"><p>Anita Kumar: <a href="tel:202-383-6017" title="">202-383-6017</a>, <a href="https://twitter.com/anitakumar01" target="_blank" title="">@anitakumar01</a></p><span class="ng-command" data-value="252"> </span><p>William Douglas: <a href="tel:202-383-6026" title="">202-383-6026</a>, @williamgdouglas</p><span class="ng-command" data-value="252"> </span></div><div class="ng_factbox"><p>Top 10 historically black college and universities by federal funding: </p><p>1. Howard University</p><p>2. North Carolina A &amp; T</p><p>2. Florida A&amp;M University</p><p>3. Jackson State University</p><p>4. Morehouse College</p><p>5. Tennessee State University</p><p>6. Morgan State University</p><p>7. Tuskegee University</p><p>8. Alabama A&amp;M</p><p>9. Meharry Medical College</p><p>10. Hampton University</p><p>Source: USASpending.gov</p></div>
</div>
<script type="text/javascript" language="javascript">
$(document).ready(function () {
// Removing empty paragraphs first
$("#content-body-23894221-134827019 p").filter(function () {
var html = $.trim($(this).html());
if (html == '' || html == '&nbsp;')
return true;
}).remove();
// Taking a subset of paragraphs using offset and maximum
var offset = 1;
var max = -1;
if (offset > 1) {
$("#content-body-23894221-134827019").children().slice(0, offset - 1).remove();
}
if (max > -1) {
$("#content-body-23894221-134827019").children().slice(max).remove();
}
// Show dateline field at the beginning of the first paragraph
var showDateline = false;
var datelineStr = "WASHINGTON";
if (offset <= 1 && showDateline == true && datelineStr != "") {
var firstChild = $("#content-body-23894221-134827019").children().get(0);
if ("P" == firstChild.nodeName.toUpperCase()) {
$(firstChild).prepend("<span>" + datelineStr + " - </span>");
}
else {
$(firstChild).before("<span>" + datelineStr + "</span>");
}
}
});
</script>
</div>
</div>
<div class="ndn_embed" id="ndn-video-player-2" data-config-distributor-id="91440" data-config-width="100%" data-config-height="9/16w"></div>
<div id="related-gallery"
class="reorder_story-target_2 reorder">
</div>
<div class="hidden">
<div>
<div class="ad-widget" id="div-gpt-ad-5" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="None"
defaultsize="Large"
Small = "336x280"
Medium = "336x280"
Extra-Small = "336x280"
Large = "336x280"
articleId="134827019"
></div>
</div>
</div>
<div class="ad visible-xs reorder_story-target_6 reorder">
<div>
<div class="ad-widget" id="div-gpt-ad-6" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="c"
defaultsize="Extra-Small"
Small = "None"
Medium = "None"
Extra-Small = "300x250"
Large = "None"
articleId="134827019"
></div>
</div>
</div>
<div class="ad visible-xs reorder_story-target_11 reorder">
<div>
<div class="ad-widget" id="div-gpt-ad-7" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="e"
defaultsize="Extra-Small"
Small = "None"
Medium = "None"
Extra-Small = "300x250"
Large = "None"
articleId="134827019"
></div>
</div>
</div>
<div class="ad visible-xs reorder_story-target_16 reorder">
<div>
<div class="ad-widget" id="div-gpt-ad-8" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="f"
defaultsize="Extra-Small"
Small = "None"
Medium = "None"
Extra-Small = "300x250"
Large = "None"
articleId="134827019"
></div>
</div>
</div>
<div class="element-spacing-medium">
</div>
<div id="story-related"
class="story-related element-spacing-large">
<h1 >
Related content
</h1>
<div id="related-links" >
</div>
</div>
<script type="text/javascript">
var $storyRelated = $(document.getElementById('story-related'));
if ($storyRelated.find('article').length === 0) {
$storyRelated.hide();
}
</script>
<div class="share-tools-wrapper visible-sm visible-xs element-spacing-medium">
<!--
Widget ID: Feature Master with title feature master share buttons:
Referenced feature mi.masterConfig.shareButtons, which was empty. Attempting fall-back value.
-->
<ul class="share-icons">
<li class="facebook">
<a class="facebook-share" title="Share on Facebook" href="http://www.facebook.com/sharer/sharer.php?u=http://www.mcclatchydc.com/article134827019.html" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"></a>
<div class="glyphicon glyphicon-facebook"></div>
</li>
<li class="twitter">
<a title="Share on Twitter" href="https://twitter.com/share?text=Trump%20seeks%20to%20outdo%20Obama%20in%20backing%20black%20colleges&url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"></a>
<div class="glyphicon glyphicon-twitter"></div>
</li>
<li class="email">
<a href="mailto:?subject=Trump+seeks+to+outdo+Obama+in+backing+black+colleges&body=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html"></a>
<div class="glyphicon glyphicon-envelope"></div>
</li>
<li class="more" onClick="return true">
<ul class="share-options">
<li class="linked-in"><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html&title=Trump+seeks+to+outdo+Obama+in+backing+black+colleges"><span class="glyphicon glyphicon-linkedin"></span>LinkedIn</a></li>
<li class="google"><a title="Share on Google Plus" href="https://plus.google.com/share?url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><span class="glyphicon glyphicon-google-plus"></span>Google+</a></li>
<li class="pinterest"><a href="http://www.pinterest.com/pin/create/button/?url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html&description=Trump+seeks+to+outdo+Obama+in+backing+black+colleges&media=http%3a%2f%2fpics.mcclatchyinteractive.com%2fnews%2fpolitics-government%2fki5fip%2fpicture134827014%2fALTERNATES%2fLANDSCAPE_1140%2fTrump"><span class="glyphicon glyphicon-pinterest-p"></span>Pinterest</a></li>
<li class="reddit"><a href="http://www.reddit.com/submit?url=http://www.mcclatchydc.com/article134827019.html"><span class="glyphicon glyphicon-reddit"></span>Reddit</a></li>
<li class="print"><a href="javascript:window.print();"><span class="glyphicon glyphicon-print"></span>Print</a></li>
<li class="reprints"><a href="http://www.mcclatchyreprints.com">Order Reprint of this Story</a></li>
</ul>
<div class="glyphicon glyphicon-share"></div>
</li>
</ul>
</div>
<div class="more-stories-link">
<a href="http://www.mcclatchydc.com/">
Homepage
</a>
</div>
<h2 class='heading'>Suggested for you</h2>
<div id="exchange-embed-widget-77e55"></div>
<script>
$(document).ready(function(){
var divElem ="exchange-embed-widget-77e55"; 
var aggr = new Aggrego(document.getElementById(divElem), "77e5529c3c4437e05991453c39753e43");
aggr.init();
});
</script>
<div id="commenting-container"
class="commenting-container
element-spacing-large">
<h1 class="heading">
Comments
</h1>
<!--
Widget ID: Feature Master with title feature master comments:
Referenced feature mi.masterConfig.comments, which was empty. Attempting fall-back value.
-->
<script>
if($("meta[property='fb:app_id']").length === 1 && $("meta[name='allow-comments']").prop("content") === "true") {
mi.commenting = new mi.Commenting();
mi.commenting.setConf( {
accountName: mi.pageInfo.getConf('marketInfo.domain'),
fbapp_id: mi.pageInfo.getConf('facebook.app.id'),
fb_comment_div: {'data-width': '100%'}
});
$(document).ready(function() {
mi.commenting.display();
});
} else {
$(document).ready(function() {
var disabledText = 'Comments have been disabled for this story.';
$("#commentingStage").prepend("<p><strong>" + disabledText + "</strong></p>");
});
}
</script>
<div id="commentingStage"
>
</div>
</div>
</div>
<div id="nativoArticlePage"
>
</div>
</div>
<div class="narrow-rail">
<div class="ad hidden-xs">
<div>
<div class="ad-widget" id="div-gpt-ad-9" adtype="default" data-ad-policy="onPageLoad" atf="y"
pkg="b"
defaultsize="Large"
Small = "300x250"
Medium = "Flex Ad"
Extra-Small = "None"
Large = "Flex Ad"
articleId="134827019"
></div>
</div>
</div>
<div class="element-spacing-medium">
<div id="video-widget"
class="headline-list">
<h1 class="heading link">
<a href="http://www.mcclatchydc.com/video/">
Videos
</a>
</h1>
<section >
<div class="teaser ">
<div class="container-134263874" id="container-134263874"> <script type="text/javascript">
if ( typeof wpsCSS === 'undefined' ) {
var wpsCSS = document.createElement('link');
wpsCSS.href = '/wps/build/wps-css/theme-262a89ef28.mcclatchydc.css';
wpsCSS.rel = 'stylesheet';
wpsCSS.type = 'text/css';
document.getElementsByTagName('head')[ 0 ].appendChild(wpsCSS);
}
</script> <div class="wf-wps-side-bar"> <div class="mi-video-sidebar-widget" id="video-detail-134263874-1488221340006"> <div id="video-container-134263874-1488221340006"> <div class="video-media" data-id="134263874" data-index> <div id="player-134263874-1488221340006" class="player" data-id="134263874"> <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%; background: url('http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_560/Smartphones%20getting%20smarter') no-repeat center center; background-size: cover;"> </div> </div> <div class="mi-video-utilty-bar share-icons "> <a class="facebook-share mi-video-utility-item" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Facebook"> <span class="glyphicon glyphicon-facebook"></span> <span class="utility-text">facebook</span> </a> <a class="twitter-share mi-video-utility-item" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Twitter"> <span class="glyphicon glyphicon-twitter"></span> <span class="utility-text">twitter</span> </a> <a class="email-share mi-video-utility-item" href="" title="Share by Email"> <span class="jw-icon jw-icon-email"></span> <span class="utility-text">email</span> </a> <a class="mi-video-share-btn mi-video-utility-item" title="Share"> <span class="jw-icon jw-icon-share"></span> <span class="utility-text">Share</span> </a> </div> <div class="clearfix"></div> <div id="mi-video-overlay-134263874-1488221340006" class="mi-video-custom-overlay-wrap" style="display:none;"> <div class="mi-video-eos-wrap"> <h3 class="mi-video-overlay-title">More Videos</h3> <div class="mi-video-eos"> <div class="mi-overlay-item" data-index="0"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/latest-news/x5vlyj-travel-ban-protest-seattle-airport.jpg/alternates/LANDSCAPE_200/travel%20ban%20protest%20seattle%20airport.jpg" alt="Federal judge temporarily halts Trump’s travel ban"> <span class="duration">4:07</span> </div> <div class="media-desc"> <h4 class="video-title">Federal judge temporarily halts Trump’s travel ban</h4> </div> <div class="svg-timer-wrap"> <svg class="svg-timer" viewbox="0 0 34 34"> <g> <circle class="svg-timer-circle" cx="15" cy="17" r="15.9" transform="rotate(-90 16 16)"></circle> <text class="svg-timer-text" x="17" y="24"></text> </g> </svg> <a class="svg-timer-pause" href="javascript:void(0)"> <span class="glyphicon glyphicon-pause"></span> Pause </a> </div> </div> <div class="mi-overlay-item" data-index="1"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_200/trump%20team%20cpac%20key.jpg" alt="Trump and team descend on CPAC"> <span class="duration">2:09</span> </div> <div class="media-desc"> <h4 class="video-title">Trump and team descend on CPAC</h4> </div> </div> <div class="mi-overlay-item" data-index="2"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/congress/yqv82u-Warren-Shocked-to-find-truth-was-out-of-order-on-the-Senate-floor/alternates/LANDSCAPE_200/Warren%3A%20Shocked%20to%20find%20%27truth%20was%20out%20of%20order%27%20on%20the%20Senate%20floor" alt="Warren: Shocked to find 'truth was out of order' on the Senate floor"> <span class="duration">2:19</span> </div> <div class="media-desc"> <h4 class="video-title">Warren: Shocked to find 'truth was out of order' on the Senate floor</h4> </div> </div> <div class="mi-overlay-item" data-index="3"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/azniuj-TrumpCPAC17.jpg/alternates/LANDSCAPE_200/TrumpCPAC17.jpg" alt="Trump touts 'America first' message at CPAC"> <span class="duration">6:51</span> </div> <div class="media-desc"> <h4 class="video-title">Trump touts 'America first' message at CPAC</h4> </div> </div> <div class="mi-overlay-item" data-index="4"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/white-house/df4sk2-TrumpRussia1.jpg/alternates/LANDSCAPE_200/TrumpRussia1.jpg" alt="Trump spars with reporters over Russian ties during campaign"> <span class="duration">2:30</span> </div> <div class="media-desc"> <h4 class="video-title">Trump spars with reporters over Russian ties during campaign</h4> </div> </div> <div class="mi-overlay-item" data-index="5"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nation-world/ellrfn-Hollywoods-greatest-trick-teaser-trailer/alternates/LANDSCAPE_200/Hollywood%27s%20greatest%20trick%3A%20teaser%20trailer" alt="Hollywood's greatest trick: teaser"> <span class="duration">2:01</span> </div> <div class="media-desc"> <h4 class="video-title">Hollywood's greatest trick: teaser</h4> </div> </div> <div class="mi-overlay-item" data-index="6"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/politics-government/white-house/a4p420-McMaster.jpg/alternates/LANDSCAPE_200/McMaster.jpg" alt="Trump picks Lt. Gen. H.R. McMaster as national security adviser"> <span class="duration">2:28</span> </div> <div class="media-desc"> <h4 class="video-title">Trump picks Lt. Gen. H.R. McMaster as national security adviser</h4> </div> </div> <div class="mi-overlay-item" data-index="7"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nation-world/national/da0obp-devos_protesters.png/alternates/LANDSCAPE_200/devos_protesters.png" alt="One arrest as protesters block DeVos from D.C. middle school"> <span class="duration">2:23</span> </div> <div class="media-desc"> <h4 class="video-title">One arrest as protesters block DeVos from D.C. middle school</h4> </div> </div> <div class="mi-overlay-item" data-index="8"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/latest-news/2m1atf-Will-Trump-support-black-colleges/alternates/LANDSCAPE_200/Will%20Trump%20support%20black%20colleges-" alt="Will Trump support black colleges?"> <span class="duration">1:13</span> </div> <div class="media-desc"> <h4 class="video-title">Will Trump support black colleges?</h4> </div> </div> <div class="mi-overlay-item" data-index="9"> <div class="media-wrap"> <img data-flickity-lazyload="http://www.mcclatchydc.com/news/nessdg-blackinobamaswhitehouse.jpg/alternates/LANDSCAPE_200/blackinobamaswhitehouse.jpg" alt="Black in Obama's White House"> <span class="duration">7:26</span> </div> <div class="media-desc"> <h4 class="video-title">Black in Obama's White House</h4> </div> </div> </div> </div> <div class="mi-video-share-wrap"> <span class="mi-video-close-share jw-icon jw-icon-close"></span> <h3 class="mi-video-overlay-title">Share Video</h3> <ul class="share-icons video"> <li class="embed"> <div class="form-group"> <label>Video link:</label> <input class="mi-share-link" type="text" readonly value=""> <div class="btn btn-primary select-btn">
Select
</div> </div> <div class="form-group"> <label>Embed code:</label> <input class="overlay-embed-share" type="text" readonly value=""> <div class="btn btn-primary select-btn">
Select
</div> </div> </li> <li class="facebook"> <a class="facebook-share" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Facebook"> <span class="glyphicon glyphicon-facebook"></span> facebook </a> </li> <li class="twitter"> <a class="twitter-share" href="" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;" title="Share on Twitter"> <span class="glyphicon glyphicon-twitter"></span> twitter </a> </li> <li class="email"> <a class="email-share" href=""> <span class="jw-icon jw-icon-email"></span> email </a> </li> </ul> </div> </div> </div> <div class="video-details"> <time class="published-date timeago hidden">6 hours ago</time> <h2 class="title video-title"> <a href="http://www.mcclatchydc.com/latest-news/article134263874.html">Smartphones getting smarter</a> </h2> </div> </div> <div id="playlist-134263874-1488221340006"> <div class="mi-playlist-sidebar"> <a class="playlist-item" href="#0" data-index="0"> <div class="media posterframe-wrapper"> <img src="http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_200/Smartphones%20getting%20smarter" alt="Smartphones getting smarter"> <span class="glyphicon glyphicon-play-circle"></span> <span class="duration">1:26</span> </div> <div class="media-desc"> <time class="published-date hidden">6 hours ago</time> <h4 class="title video-title">Smartphones getting smarter</h4> </div> </a> <a class="playlist-item" href="#1" data-index="1"> <div class="media posterframe-wrapper"> <img src="http://www.mcclatchydc.com/news/politics-government/fy9mgh-Perez-key.jpg/alternates/LANDSCAPE_200/Perez%20key.jpg" alt="Perez calls Trump " worst president in history" after winning dnc chair"> <span class="glyphicon glyphicon-play-circle"></span> <span class="duration">1:48</span> </div> <div class="media-desc"> <time class="published-date hidden">2 days ago</time> <h4 class="title video-title">Perez calls Trump "worst president in history" after winning DNC chair</h4> </div> </a> <a class="playlist-item" href="#2" data-index="2"> <div class="media posterframe-wrapper"> <img src="http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_200/trump%20team%20cpac%20key.jpg" alt="Trump and team descend on CPAC"> <span class="glyphicon glyphicon-play-circle"></span> <span class="duration">2:09</span> </div> <div class="media-desc"> <time class="published-date hidden">3 days ago</time> <h4 class="title video-title">Trump and team descend on CPAC</h4> </div> </a> </div> </div> </div> </div> <script type="text/javascript">
if ( typeof allowAds === 'undefined' ) {
var allowAds = true;
}
if ( typeof wpsConfig === 'undefined' ) {
var wpsConfig = {
baseUrl: '/wps/source/scripts/src',
urlArgs: 'misv=3a04764',
paths: {
'fastdom': '../libs/fastdom.min',
'moment': '../libs/moment.min',
'jwplayer': ['https://d12j9jiosu7f.cloudfront.net/jwplayer-7.8.7/jwplayer',
'../libs/jwplayer'],
'flickity': '../libs/flickity.pkgd.min'
},
waitSeconds: 0
};
var wpsRequire = requirejs.config(wpsConfig);
}
wpsRequire([ 'video' ], function ( video ) {
return video({"id":"134263874","url":"http://www.mcclatchydc.com/latest-news/article134263874.html","asset_type":"videoIngest","title":"Smartphones getting smarter","publication":"mcclatchydc","home":"/web/v1/sections/21309","modified_date":1488201624,"published_date":1488198326,"credit":"tjohnson@mcclatchydc.com","dateline":"","thumbnail":"http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_768/Smartphones%20getting%20smarter","duration":86,"media_id":"v2juZQzu","href":"/web/v1/content/134263874","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D134263874%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=134263874&eid=134263874&pl="}],"byline":"","template_type":"","leadtext":[{"text":"UnifyID chief executive John Whaley talks about how smartphones can use 'implicit authentication' so that users don't need to always be identifying themselves on the internet."}],"sources":[{"height":360,"mime_type":"video/mp4","mrid":"binary/2017/2/22/18/1437582013143-p5k4ma/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198323619.mp4","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437582013143-p5k4ma/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198323619.mp4","width":640},{"height":720,"mime_type":"video/mp4","mrid":"binary/2017/2/22/18/1437580321678-6bjrso/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198324402.mp4","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437580321678-6bjrso/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198324402.mp4","width":1280},{"height":0,"mime_type":"application/x-mpegURL","mrid":"binary/2017/2/22/18/art_134263874/85c6e9ec_13aa_49bf_b33d_ab4196689f98.m3u8","uri":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/art_134263874/85c6e9ec_13aa_49bf_b33d_ab4196689f98.m3u8","width":0}],"videos":[{"id":"134263874","url":"http://www.mcclatchydc.com/latest-news/article134263874.html","duration":"1:26","image":"http://www.mcclatchydc.com/latest-news/g5kufd-Smartphones-getting-smarter/alternates/LANDSCAPE_768/Smartphones%20getting%20smarter","title":"Smartphones getting smarter","description":"Smartphones getting smarter <span class=\"title-duration\">1:26</span>","displayDescription":"UnifyID chief executive John Whaley talks about how smartphones can use 'implicit authentication' so that users don't need to always be identifying themselves on the internet.","videographer":"","credit":"tjohnson@mcclatchydc.com","published":1488198326,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437582013143-p5k4ma/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198323619.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/1437580321678-6bjrso/85c6e9ec-13aa-49bf-b33d-ab4196689f98-1488198324402.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/22/18/art_134263874/85c6e9ec_13aa_49bf_b33d_ab4196689f98.m3u8"}],"mediaid":"v2juZQzu","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D134263874%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=134263874&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D134263874%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134983339","url":"http://www.mcclatchydc.com/news/politics-government/article134983339.html","duration":"1:48","image":"http://www.mcclatchydc.com/news/politics-government/fy9mgh-Perez-key.jpg/alternates/LANDSCAPE_768/Perez%20key.jpg","title":"Perez calls Trump \"worst president in history\" after winning DNC chair","description":"Perez calls Trump \"worst president in history\" after winning DNC chair <span class=\"title-duration\">1:48</span>","displayDescription":"Tom Perez is the first Latino chairman of the Democratic National Committee and former labor secretary under the Obama administration. He took on Trump and challenged Democrats to unite across the country during his victory speech for DNC chair. ","videographer":"","credit":"C-SPAN","published":1488058448,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/21/1437582013143-p5k4ma/Perez%20DNC%20victory%20speech-1488058446489.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/21/1437580321678-6bjrso/Perez%20DNC%20victory%20speech-1488058446911.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/21/art_134983339/Perez_DNC_victory_speech.m3u8"}],"mediaid":"","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134983339%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134983339&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134983339%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134922674","url":"http://www.mcclatchydc.com/news/politics-government/article134922674.html","duration":"2:09","image":"http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_768/trump%20team%20cpac%20key.jpg","title":"Trump and team descend on CPAC","description":"Trump and team descend on CPAC <span class=\"title-duration\">2:09</span>","displayDescription":"President Donald Trump and his team discussed points within the administration's conservative agenda – from repealing Obamacare to school choice – at the Conservative Political Action Conference (CPAC). ","videographer":"","credit":"Alexa Ard / McClatchy ","published":1487997156,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437582013143-p5k4ma/CPAC%20highlights%20trump%20and%20team%202017-1487997950274.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437580321678-6bjrso/CPAC%20highlights%20trump%20and%20team%202017-1487997952137.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/art_134922674/CPAC_highlights_trump_and_team_2017.m3u8"}],"mediaid":"L4SsnYE7","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134922674&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}}],"endscreen":[{"id":"130766009","url":"http://www.mcclatchydc.com/latest-news/article130766009.html","duration":"4:07","image":"http://www.mcclatchydc.com/latest-news/x5vlyj-travel-ban-protest-seattle-airport.jpg/alternates/LANDSCAPE_768/travel%20ban%20protest%20seattle%20airport.jpg","title":"Federal judge temporarily halts Trump’s travel ban","description":"Federal judge temporarily halts Trump’s travel ban <span class=\"title-duration\">4:07</span>","displayDescription":"Judge James L. Robart granted a temporary nationwide restraining order on the travel ban that blocks travelers from seven majority-Muslim countries from coming to America. ","videographer":"","credit":"United States Courts","published":1486228960,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/4/17/1437582013143-p5k4ma/Federal%20judge%20restraining%20order-1486228954309.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/4/17/1437580321678-6bjrso/Federal%20judge%20restraining%20order-1486228955634.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/4/17/art_130766009/Federal_judge_restraining_order.m3u8"}],"mediaid":"olRGd9jL","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D130766009%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=130766009&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D130766009%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134922674","url":"http://www.mcclatchydc.com/news/politics-government/article134922674.html","duration":"2:09","image":"http://www.mcclatchydc.com/news/politics-government/eebb4k-trump-team-cpac-key.jpg/alternates/LANDSCAPE_768/trump%20team%20cpac%20key.jpg","title":"Trump and team descend on CPAC","description":"Trump and team descend on CPAC <span class=\"title-duration\">2:09</span>","displayDescription":"President Donald Trump and his team discussed points within the administration's conservative agenda – from repealing Obamacare to school choice – at the Conservative Political Action Conference (CPAC). ","videographer":"","credit":"Alexa Ard / McClatchy ","published":1487997156,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437582013143-p5k4ma/CPAC%20highlights%20trump%20and%20team%202017-1487997950274.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/1437580321678-6bjrso/CPAC%20highlights%20trump%20and%20team%202017-1487997952137.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/25/4/art_134922674/CPAC_highlights_trump_and_team_2017.m3u8"}],"mediaid":"L4SsnYE7","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134922674&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134922674%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"131435819","url":"http://www.mcclatchydc.com/news/politics-government/congress/article131435819.html","duration":"2:19","image":"http://www.mcclatchydc.com/news/politics-government/congress/yqv82u-Warren-Shocked-to-find-truth-was-out-of-order-on-the-Senate-floor/alternates/LANDSCAPE_768/Warren%3A%20Shocked%20to%20find%20%27truth%20was%20out%20of%20order%27%20on%20the%20Senate%20floor","title":"Warren: Shocked to find 'truth was out of order' on the Senate floor","description":"Warren: Shocked to find 'truth was out of order' on the Senate floor <span class=\"title-duration\">2:19</span>","displayDescription":"Banned from speaking on the floor of the U.S. Senate during the nomination of Jeff Sessions to be Attorney General, Senator Elizabeth Warren (D-Mass.) met with civil rights leaders and other Democrats right outside the Senate floor. Warren suggested everyone re-read the 1986 letter from Coretta Scott King urging the Senate to reject Sen. Jeff Sessions' nomination as a federal judge.","videographer":"","credit":"Facebook / Sen. Elizabeth Warren","published":1486571361,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/1437582013143-p5k4ma/16462184_1862914463984506_7624289071841411072_n-1486571357270.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/1437580321678-6bjrso/16462184_1862914463984506_7624289071841411072_n-1486571358161.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/8/16/art_131435819/16462184_1862914463984506_7624289071841411072_n.m3u8"}],"mediaid":"r3qx7T7P","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D131435819%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=congress&id=131435819&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dcongress%26id%3D131435819%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"134751889","url":"http://www.mcclatchydc.com/news/politics-government/article134751889.html","duration":"6:51","image":"http://www.mcclatchydc.com/news/politics-government/azniuj-TrumpCPAC17.jpg/alternates/LANDSCAPE_768/TrumpCPAC17.jpg","title":"Trump touts 'America first' message at CPAC","description":"Trump touts 'America first' message at CPAC <span class=\"title-duration\">6:51</span>","displayDescription":"President Donald Trump criticized the news media and 'fake news,' talked about cracking down on illegal immigration, blasted Obama care, and touted his plan to put \"America first\" at the Conservative Political Action Conference on Friday. ","videographer":"","credit":"C-SPAN","published":1487962375,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/1437582013143-p5k4ma/TrumpCPAC-1487962362067.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/1437580321678-6bjrso/TrumpCPAC-1487962364914.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/24/18/art_134751889/TrumpCPAC.m3u8"}],"mediaid":"5t9wvpoW","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134751889%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=politics_government&id=134751889&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dpolitics_government%26id%3D134751889%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FLocal%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"133164014","url":"http://www.mcclatchydc.com/news/politics-government/white-house/article133164014.html","duration":"2:30","image":"http://www.mcclatchydc.com/news/politics-government/white-house/df4sk2-TrumpRussia1.jpg/alternates/LANDSCAPE_768/TrumpRussia1.jpg","title":"Trump spars with reporters over Russian ties during campaign","description":"Trump spars with reporters over Russian ties during campaign <span class=\"title-duration\">2:30</span>","displayDescription":"President Donald Trump said during a White House news conference on Thursday that he \"had nothing to do with Russia\" during the campaign. He initially did not provide a straight answer whether or not anyone on his staff had made contacts, but when pressed by reporters, he later said he wasn't aware of any.","videographer":"","credit":"AP","published":1487277710,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/1437582013143-p5k4ma/TrumpRussia1-1487277707165.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/1437580321678-6bjrso/TrumpRussia1-1487277707809.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/16/20/art_133164014/TrumpRussia1.m3u8"}],"mediaid":"Xzn7FWWR","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133164014%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=white_house&id=133164014&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133164014%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"128737819","url":"http://www.mcclatchydc.com/news/nation-world/article128737819.html","duration":"2:01","image":"http://www.mcclatchydc.com/news/nation-world/ellrfn-Hollywoods-greatest-trick-teaser-trailer/alternates/LANDSCAPE_768/Hollywood%27s%20greatest%20trick%3A%20teaser%20trailer","title":"Hollywood's greatest trick: teaser","description":"Hollywood's greatest trick: teaser <span class=\"title-duration\">2:01</span>","displayDescription":"Visual effects artists have created some of the most iconic moments in movie history. It's so lucrative for the Big Six studios, that the top 10 highest grossing films of 2016 garnered over $9 billion alone. But to have us believe these visual effects artists share in this success? That’s Hollywood’s greatest trick of all.","videographer":"","credit":"Ali Rizvi and Sohail Al-Jamea/McClatchy","published":1485381742,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/1437582013143-p5k4ma/tease%20REV%206-1485381739433.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/1437580321678-6bjrso/tease%20REV%206-1485381740019.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/25/21/art_128737819/tease_REV_6.m3u8"}],"mediaid":"y2s1gWBb","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnation_world%26id%3D128737819%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=nation_world&id=128737819&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnation_world%26id%3D128737819%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"133888614","url":"http://www.mcclatchydc.com/news/politics-government/white-house/article133888614.html","duration":"2:28","image":"http://www.mcclatchydc.com/news/politics-government/white-house/a4p420-McMaster.jpg/alternates/LANDSCAPE_768/McMaster.jpg","title":"Trump picks Lt. Gen. H.R. McMaster as national security adviser","description":"Trump picks Lt. Gen. H.R. McMaster as national security adviser <span class=\"title-duration\">2:28</span>","displayDescription":"President Donald Trump announced Army Lt. Gen. H.R. McMaster as his new pick for national security adviser. During an unscheduled event at his Palm Beach club, Trump said McMaster was \"a man of tremendous talent and tremendous experience.\" Keith Kellogg, who had been his acting adviser, will now serve as the National Security Council chief of staff.","videographer":"","credit":"AP","published":1487625612,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/1437582013143-p5k4ma/McMaster-1487625606641.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/1437580321678-6bjrso/McMaster-1487625610088.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/20/21/art_133888614/McMaster.m3u8"}],"mediaid":"1IVKBGbu","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133888614%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=white_house&id=133888614&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dwhite_house%26id%3D133888614%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FState%2FGovtPolitics&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"131980949","url":"http://www.mcclatchydc.com/news/nation-world/national/article131980949.html","duration":"2:23","image":"http://www.mcclatchydc.com/news/nation-world/national/da0obp-devos_protesters.png/alternates/LANDSCAPE_768/devos_protesters.png","title":"One arrest as protesters block DeVos from D.C. middle school","description":"One arrest as protesters block DeVos from D.C. middle school <span class=\"title-duration\">2:23</span>","displayDescription":"Education Secretary Besty DeVos' visit to Jefferson Middle School Academy in Southwest Washington, D.C. on Friday was blocked by protesters. One eyewitness who was streaming the protest on Periscope captured the arrest of one protester. DeVos eventually made it inside the school, meeting with district officials, as well as Jefferson Academy administration, teachers and students.","videographer":"","credit":"Courtesy of Tiffany Flowers","published":1486756504,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/1437582013143-p5k4ma/20170210b_DeVos_Protesters-1486756501908.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/1437580321678-6bjrso/20170210b_DeVos_Protesters-1486756502656.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/2/10/19/art_131980949/20170210b_DeVos_Protesters.m3u8"}],"mediaid":"5oTkmBmt","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnational%26id%3D131980949%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=national&id=131980949&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnational%26id%3D131980949%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews%2FNational&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"121076708","url":"http://www.mcclatchydc.com/latest-news/article121076708.html","duration":"1:13","image":"http://www.mcclatchydc.com/latest-news/2m1atf-Will-Trump-support-black-colleges/alternates/LANDSCAPE_768/Will%20Trump%20support%20black%20colleges-","title":"Will Trump support black colleges?","description":"Will Trump support black colleges? <span class=\"title-duration\">1:13</span>","displayDescription":"Rep. Alma Adams talks Donald Trump and funding for HBCUs in her office in Washington, D.C., on Dec. 8, 2016.","videographer":"William Douglas","credit":"McClatchy DC","published":1481825864,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437582013143-p5k4ma/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710191.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/1437580321678-6bjrso/bf010122-7808-4035-bbe3-d42f7a42b440-1482260710620.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2016/12/15/17/art_121076708/bf010122_7808_4035_bbe3_d42f7a42b440.m3u8"}],"mediaid":"FgB3zMsC","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D121076708%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=ece_incoming&id=121076708&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dece_incoming%26id%3D121076708%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}},{"id":"125664324","url":"http://www.mcclatchydc.com/news/article125664324.html","duration":"7:26","image":"http://www.mcclatchydc.com/news/nessdg-blackinobamaswhitehouse.jpg/alternates/LANDSCAPE_768/blackinobamaswhitehouse.jpg","title":"Black in Obama's White House","description":"Black in Obama's White House <span class=\"title-duration\">7:26</span>","displayDescription":"In a series of interviews, several African-American presidential appointees describe the thrills and challenges of working for a historic administration.","videographer":"Cheryl Diaz Meyer","credit":"McClatchy DC","published":1484079359,"sources":[{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437582013143-p5k4ma/Obama%20Legacy%20V6b-1484562668133.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/1437580321678-6bjrso/Obama%20Legacy%20V6b-1484562670246.mp4"},{"file":"http://dr6lcqo3bxtwa.cloudfront.net/binary/2017/1/10/19/art_125664324/Obama_Legacy_V6b.m3u8"}],"mediaid":"jUGR1j9K","ads":[{"publication":"mcclatchydc","tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnews%26id%3D125664324%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll","lang":"en","sz":"400x300","vpos":"preroll","cust_params":"sect=news&id=125664324&eid=134263874&pl="}],"adschedule":{"adbreak":{"tag":"http://pubads.g.doubleclick.net/gampad/ads?ciu_szs=300x250&correlator=%5Btimestamp%5D&cust_params=sect%3Dnews%26id%3D125664324%26eid%3D134263874%26pl%3D&env=vp&gdfp_req=1&hl=en&impl=s&iu=%2F7675%2FMDC.site_mcclatchydc%2FNews&output=vast&sz=400x300&unviewed_position_start=1&url=%5Breferrer_url%5D&vpos=preroll"}}}],"pageType":"detail-page"}, {"wpsInclude":true,"wpsArea":"side_bar","autoPlay":false,"pubName":"mcclatchydc","embed":false,"cacheBust":"3a04764","iterator":1,"uniqueID":"134263874-1488221340006","paywallEnabled":false,"domainName":"www.mcclatchydc.com","baseTemplate":"video"});
});
</script> </div>
</div>
</section>
<div class="clearfix footer element_spacing_large">
<p class="readmore">
<a href="http://www.mcclatchydc.com/video/">
View more video
</a>
</p>
</div>
</div>
</div>
<div class="ad hidden-xs">
<div>
<div class="ad-widget" id="div-gpt-ad-10" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="c"
defaultsize="Large"
Small = "300x250"
Medium = "300x250"
Extra-Small = "None"
Large = "300x250"
articleId="134827019"
></div>
</div>
</div>
<div id="market-widget-1"
class="element-spacing-medium">
</div>
<div class="element-spacing-medium">
<!--
Widget ID: Feature Master with title feature master more stories:
Referenced feature mi.masterConfig.moreStories, which was empty. Attempting fall-back value.
-->
<section id="more-stories-widget"
class="headline-list element_spacing_large">
<h1 class="heading link">
<a href="http://www.mcclatchydc.com/">
Homepage
</a>
</h1>
<article class="ece_frontpage media ">
<div class="teaser ">
<h2 class="title ">
<a href="http://www.mcclatchydc.com/article134827019.html#wgt=trending">
Trump seeks to outdo Obama in backing black colleges
</a>
</h2>
</div>
</article>
<article class="ece_frontpage media ">
<div class="teaser ">
<h2 class="title ">
<a href="http://www.mcclatchydc.com/article134849184.html#wgt=trending">
Enough with the tweets, annoyed Americans tell Trump in new poll
</a>
</h2>
</div>
</article>
<article class="ece_frontpage media ">
<div class="teaser ">
<h2 class="title ">
<a href="http://www.mcclatchydc.com/article134777499.html#wgt=trending">
Smartphones have you pegged, and for better or worse they&rsquo;ll soon ID you
</a>
</h2>
</div>
</article>
<article class="national media ">
<div class="teaser ">
<h2 class="title ">
<a href="http://www.mcclatchydc.com/news/nation-world/national/article135243694.html#wgt=trending">
Donald Trump and the mansion that no one wanted. Then came a Russian fertilizer king
</a>
</h2>
</div>
</article>
<article class="national media ">
<div class="teaser ">
<h2 class="title ">
<a href="http://www.mcclatchydc.com/news/nation-world/national/article135243119.html#wgt=trending">
Slain SEAL&rsquo;s dad wants answers: &lsquo;Don&rsquo;t hide behind my son&rsquo;s death&rsquo;
</a>
</h2>
</div>
</article>
</section>
</div>
<div class="ad hidden-xs">
<div>
<div class="ad-widget" id="div-gpt-ad-11" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="e"
defaultsize="Large"
Small = "300x250"
Medium = "Flex Ad"
Extra-Small = "None"
Large = "Flex Ad"
articleId="134827019"
></div>
</div>
</div>
<div class="element-spacing-medium">
<section class="element_spacing_large ndn">
<script async src="http://launch.newsinc.com/js/embed.js" id="_nw2e-js"></script>
<h1 class="heading">Editor's Choice Videos</h1>
<div class="center-block ndn_embed text-center" data-config-widget-id="31562" data-config-type="VideoLauncher/Slider300x250" data-config-tracking-group="91440"></div>
<script async type="text/javascript">var _informq = _informq || []; _informq.push(['embed']);</script>
</section>
</div>
<div >
</div>
<!--
Widget ID: Feature Master with title feature master extra ads story:
Referenced feature mi.masterConfig.extraAdsStory, which was empty. Attempting fall-back value.
-->
<div class="ad hidden-xs">
<div>
<div class="ad-widget" id="div-gpt-ad-12" adtype="default" data-ad-policy="onPageLoad" atf="n"
oom="y"
pkg="None"
defaultsize="Large"
Small = "300x250"
Medium = "300x250"
Extra-Small = "None"
Large = "300x250"
articleId="134827019"
></div>
</div>
</div>
<div class="ad hidden-xs">
<div>
<div class="ad-widget" id="div-gpt-ad-13" adtype="default" data-ad-policy="onPageLoad" atf="n"
oom="y"
pkg="None"
defaultsize="Large"
Small = "300x250"
Medium = "300x250"
Extra-Small = "None"
Large = "300x250"
articleId="134827019"
></div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
/*
look for elements with classes in the format of
reorder_<id of target container element>_<position>
e.g. reorder_story-target_3 would be moved after
the 3rd child element of #story-target.
If there aren't enough child elements,
(e.g., targeting the 7th element of a 4-paragraph story)
jQuery won't move it.
*/
var $document = $document || $(document);
var reorderRegEx = /\breorder_([a-z0-9\-]+)_(\d+)/;
var reorderFunc = function ( index, element ) {
var classes = element.className;
var parts = reorderRegEx.exec(classes);
$(document.getElementById(parts[1])).find('>div>:nth-child(' + parts[2] + ')').after(element);
};
$('.reorder').each(reorderFunc);
$document.ready(function () {
// And now actually show the related content, if we should.
// Except this actually hides it if we should. ¯\_(ツ)_/¯
if ( $("#related-gallery").children().length == 0 ) {
$("#related-gallery").hide();
} });
</script>
<script type="text/javascript">
var $window = $window || $(window);
var $document = $document || $(document);
var isSticky = false;
$document.ready(function() {
var $shareTools = $('.share-tools-wrapper');
var $commentingContainer = $(document.getElementById("commenting-container"));
var $storyBody = $(document.getElementById("story-body-items"));
var stickyTools = function () {
var scrollTop = $window.scrollTop(),
storyBodyTop = $storyBody.offset().top - 50,
commentingTop = $commentingContainer.offset().top;
/* Check if user scrolls to the share tools but grab it 50px early
* to accommodate the top: 50px CSS once sticky'd (this eliminates
* the slight jump in the beginning).
*/
if ( isSticky === false && scrollTop > storyBodyTop && scrollTop < commentingTop ) {
isSticky = true;
return $shareTools.toggleClass('sticky-tools');
}
if ( isSticky === true && ( scrollTop >= commentingTop || scrollTop < storyBodyTop ) ) {
isSticky = false;
return $shareTools.toggleClass('sticky-tools'); }
};
stickyTools();
$window.on("scroll", stickyTools);
//Story Numberlines
var rearrangeHighline = function() {
var $this = $(this);
var $leadIn = $this.find('.ng_number_leadin').detach();
$this.wrapInner('<span></span>');
$this.prepend($leadIn);
};
$('.highline-number').find('p').each(rearrangeHighline);
});
</script>
</section>
<div class="container " >
<div class="ad ad-sense">
<div>
<div class="ad-widget" id="div-gpt-ad-14" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="m"
defaultsize="Large"
Small = "300x250"
Medium = "300x250"
Extra-Small = "300x250"
Large = "300x250"
articleId="134827019"
></div>
</div>
</div>
</div>
<footer class=" " >
<div class="container">
<div class="ad">
<div>
<div class="ad-widget" id="div-gpt-ad-15" adtype="default" data-ad-policy="onPageLoad" atf="n"
pkg="None"
defaultsize="Large"
Small = "728x90"
Medium = "728x90"
Extra-Small = "300x250"
Large = "728x90"
articleId="134827019"
></div>
</div>
</div>
</div>
<div id="footer"
>
<header id="footer-logo"
>
<div class="container text-center">
<a href="http://www.mcclatchydc.com/" target="_top"><img src="http://www.mcclatchydc.com/static/images/mcclatchydc/logo-sm.png" alt="McClatchy DC | McClatchyDC.com" class="img-responsive"></a>
</div>
</header>
<div class="container hidden-xs">
<div class="row " >
<div class="col-sm-12 ">
<div id="footer-columns"
>
<div class="row " id="footer-menu-columns">
<div class="col-sm-3 footer-column border-right border-xs-remove-right">
<h2 class="heading">
<a href="http://#collapseOne">
Subscriptions
</a>
</h2>
<ul class=" footer-menu">
<li>
<a href="/customer-service/newsletter-signup/#navlink=mi_footer">
Newsletters
</a>
</li>
</ul>
</div>
<div class="col-sm-3 footer-column border-lg-right">
<h2 class="heading">
<a href="http://#collapseTwo">
Site Information
</a>
</h2>
<ul class=" footer-menu">
<li>
<a href="/customer-service/#navlink=mi_footer">
Customer Service
</a>
</li>
<li>
<a href="/customer-service/about-us/#navlink=mi_footer">
About Us
</a>
</li>
<li>
<a href="/customer-service/contact-us/#navlink=mi_footer">
Contact Us
</a>
</li>
</ul>
</div>
<div class="col-sm-3 footer-column border-right border-xs-remove-right">
<h2 class="heading">
<a href="http://#collapseThree">
Social, Mobile & More
</a>
</h2>
<ul class=" footer-menu">
<li>
<a href="https://www.facebook.com/pages/McClatchyDC/27177163800#navlink=mi_footer" target="_blank">
Facebook
</a>
</li>
<li>
<a href="https://twitter.com/McClatchyDC#navlink=mi_footer" target="_blank">
Twitter
</a>
</li>
<li>
<a href="https://www.youtube.com/user/McClatchyDC#navlink=mi_footer" target="_blank">
YouTube
</a>
</li>
<li>
<a href="/mobile/#navlink=mi_footer">
Mobile Options
</a>
</li>
<li>
<a href="https://itunes.apple.com/us/podcast/beyond-the-bubble/id1199102479?mt=2#navlink=mi_footer">
Beyond The Bubble Podcast
</a>
</li>
<li>
<a href="https://itunes.apple.com/us/podcast/acc-now-podcast/id1173645386?mt=2#navlink=mi_footer">
The ACC Now Podcast
</a>
</li>
</ul>
</div>
<div class="col-sm-3 footer-column">
<h2 class="heading">
<a href="http://#collapseFour">
Advertising
</a>
</h2>
<ul class=" footer-menu">
<li>
<a href="http://www.mcclatchy.com/advertise/#navlink=mi_footer" target="_blank">
Advertise With Us
</a>
</li>
</ul>
</div>
</div>
<div class="row " id="footer-legal">
<ul class=" footer-menu-legal">
<li>
<a href="/customer-service/copyright/#navlink=mi_footer">
Copyright
</a>
</li>
<li>
<a href="/customer-service/privacy-policy/#navlink=mi_footer">
Privacy Policy
</a>
</li>
<li>
<a href="/customer-service/terms-of-service/#navlink=mi_footer">
Terms of Service
</a>
</li>
</ul>
<script>
jQuery('#footer #footer-columns .heading > a').each(function(){ $(this).attr('href',$(this).attr('href').split('//')[1]);})
</script>
</div>
</div>
</div>
</div>
</div>
<div id="accordion"
class="visible-xs panel-group">
<div class="panel">
<div class="panel-heading">
<h2 class="heading">
<a href="http://#collapseOne">
Subscriptions
</a>
</h2>
</div>
<div id="collapseOne"
class="panel-collapse collapse">
<div class="panel-body">
<ul class=" footer-menu">
<li>
<a href="/customer-service/newsletter-signup/#navlink=mi_footer">
Newsletters
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading">
<h2 class="heading">
<a href="http://#collapseTwo">
Site Information
</a>
</h2>
</div>
<div id="collapseTwo"
class="panel-collapse collapse">
<div class="panel-body">
<ul class=" footer-menu">
<li>
<a href="/customer-service/#navlink=mi_footer">
Customer Service
</a>
</li>
<li>
<a href="/customer-service/about-us/#navlink=mi_footer">
About Us
</a>
</li>
<li>
<a href="/customer-service/contact-us/#navlink=mi_footer">
Contact Us
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading">
<h2 class="heading">
<a href="http://#collapseThree">
Social, Mobile & More
</a>
</h2>
</div>
<div id="collapseThree"
class="panel-collapse collapse">
<div class="panel-body">
<ul class=" footer-menu">
<li>
<a href="https://www.facebook.com/pages/McClatchyDC/27177163800#navlink=mi_footer" target="_blank">
Facebook
</a>
</li>
<li>
<a href="https://twitter.com/McClatchyDC#navlink=mi_footer" target="_blank">
Twitter
</a>
</li>
<li>
<a href="https://www.youtube.com/user/McClatchyDC#navlink=mi_footer" target="_blank">
YouTube
</a>
</li>
<li>
<a href="/mobile/#navlink=mi_footer">
Mobile Options
</a>
</li>
<li>
<a href="https://itunes.apple.com/us/podcast/beyond-the-bubble/id1199102479?mt=2#navlink=mi_footer">
Beyond The Bubble Podcast
</a>
</li>
<li>
<a href="https://itunes.apple.com/us/podcast/acc-now-podcast/id1173645386?mt=2#navlink=mi_footer">
The ACC Now Podcast
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading">
<h2 class="heading">
<a href="http://#collapseFour">
Advertising
</a>
</h2>
</div>
<div id="collapseFour"
class="panel-collapse collapse">
<div class="panel-body">
<ul class=" footer-menu">
<li>
<a href="http://www.mcclatchy.com/advertise/#navlink=mi_footer" target="_blank">
Advertise With Us
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading">
<h2 class="heading">
<a href="http://#collapseFive">
More
</a>
</h2>
</div>
<div id="collapseFive"
class="panel-collapse collapse">
<div class="panel-body">
<script>
jQuery('#footer #accordion .heading > a').attr({'data-toggle':'collapse','data-parent':'#accordion'}).each(function(){ $(this).attr('href',$(this).attr('href').split('//')[1]);})
</script>
<ul class=" footer-menu-legal">
<li>
<a href="/customer-service/copyright/#navlink=mi_footer">
Copyright
</a>
</li>
<li>
<a href="/customer-service/privacy-policy/#navlink=mi_footer">
Privacy Policy
</a>
</li>
<li>
<a href="/customer-service/terms-of-service/#navlink=mi_footer">
Terms of Service
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 968074018;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/968074018/?value=0&guid=ON&script=0"/>
</div>
</noscript>
<div class="hidden">
<div>
<div class="ad-widget" id="div-gpt-ad-16" adtype="default" data-ad-policy="onPageLoad" atf="y"
pkg="a"
defaultsize="Extra-Small"
Small = "None"
Medium = "None"
Extra-Small = "300x75"
Large = "None"
articleId="134827019"
></div>
</div>
</div>
<div id="floorboard"
class="hidden-xs">
<div>
<div id="floorboard_outer">
<div id="floorTagWrapper" style="display:none;">
<div class="ad-widget" id="div-gpt-ad-17" adtype="floorboard" atf="y" pkg="a"
defaultsize="Large" data-ad-policy="onPageLoad"
Small='285x70'
Medium='285x70'
Extra-Small='None'
Large='285x70'
articleId='134827019'
></div>
</div>
</div>
</div>
</div>
</footer>
</div>
<!-- Render Footer from Escenic or WPS based on switch-->
<script type="text/javascript">
/* Front end properties configured in nursery */
var FrontEndConfig = {"media.jwplayer.script.location":"http://static.mcclatchyinteractive.com/escenic/jwplayer-7.1.4/jwplayer.js","media.jwplayer.hls.mimeTypes":"vnd.apple.mpegURL,application/x-mpegURL","audioPlayer":"mediaelement","media.jwplayer.sharing.enabled":"true","videoPlayer":"jwplayer","media.jwplayer.options.primary":"html5","media.jwplayer.ga.enabled":"true ","media.jwplayer.hls.enabled":"true","media.jwplayer.key":"tTakaWDwaA/5t6sLfLhYBB4EfEa1ETrJDYnTPw=="};
if (typeof(FrontEndConfig) == 'undefined') {
FrontEndConfig = {};
}
FrontEndConfig.rootURL = "http://www.mcclatchydc.com/";
/* Client-side device detection */
var WFClientTypeDef = {"extraSmall":"(max-width: 767px)","medium":"(min-width: 992px) and (max-width: 1199px)","large":"(min-width: 1200px)","small":"(min-width: 768px) and (max-width: 991px)"};
var imageSizes = [80, 160, 200, 320, 400, 480, 560, 640, 720, 768, 960, 1080, 1140];
$(function(){
$.each(FrontEndConfig, function(key, value) {
/* Regular properties other than JW Player setup options
are being processed here */
if (key.indexOf('media.jwplayer.options') < 0) {
FrontEndConfig[key] = WFUtils.parseStringToJSONObject(value);
}
});
});
</script>
<script type="text/javascript"
src="http://www.mcclatchydc.com/static/js/wps-wf-site-1.0.100-98b9c26-min.js"></script>
<script type="text/javascript" >
mi_Ads.env.init();
</script>
<script type="text/javascript">
//<![CDATA[
var clientDT = new Date().getTime();
document.write('<img style="display:none;" src="http://ece-logger.nandomedia.com:8083/analysis-logger/Logger?rt=1&ctxId=21306&contextPath=21306-&pubId=57&cat=&meta=read-story&objId=134827019&type=article&title=Trump+seeks+to+outdo+Obama+in+backing+black+colleges&url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html&amp;clientDT=' + clientDT + '" alt="" width="1" height="1"/>');
//]]>
</script>
<noscript>
<div>
<img src="http://ece-logger.nandomedia.com:8083/analysis-logger/Logger?rt=1&amp;ctxId=21306&amp;contextPath=21306-&amp;pubId=57&amp;cat=&amp;meta=read-story&amp;objId=134827019&amp;type=article&amp;title=Trump+seeks+to+outdo+Obama+in+backing+black+colleges&amp;url=http%3a%2f%2fwww.mcclatchydc.com%2farticle134827019.html" alt="one pixel graphics" width="1" height="1"/>
</div>
</noscript>
<script>
var trackerConfig = null;
if (typeof {} != 'object') {
trackerConfig = '{}';
trackerSend = 'send';
}
else {
trackerConfig = {};
if (!trackerConfig.hasOwnProperty('name')) {
trackerConfig.name = 'wf';
}
trackerSend = trackerConfig.name + '.send';
}
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-3858463-13', trackerConfig);
ga(trackerSend, 'pageview');
</script>
<script type="text/javascript">
/*Device width fix for Windows Phone 8 and IE 10*/
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
var msViewportStyle = document.createElement("style");
msViewportStyle.appendChild(
document.createTextNode(
"@-ms-viewport{width:auto!important}"
)
);
document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
}
</script>
<script type="text/javascript">
mi.pageInfo.setConf("chartbeat.uid", 62447);
</script>
<div id="mistatstag" style="display:none;">
<script type="text/javascript" src="http://media.mcclatchydc.com/mistats/products/escenic_s_code.js"></script>
<script type="text/javascript" src="http://media.mcclatchydc.com/mistats/products/escenic.js"></script>
<script type="text/javascript" src="http://media.mcclatchydc.com/mistats/finalizestats.js"></script>
</div>
<!-- Lotame Tracking Tag -->
<script src="http://tags.crwdcntrl.net/c/7871/cc.js?ns=_cc7871" id="LOTCC_7871"></script>
<script>_cc7871.bcp();</script>
</body>
</html>
a
