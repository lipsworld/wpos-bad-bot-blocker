<?php 
/*
	Plugin Name: Bad Bot Blocker
	Description: This plugin secure the site by blocking bad bots from accessing the site. So no resource is wasted
	Author: Achyut Deka
    Email: linkinakd72@gmail.com
	Version: 1.0
 */

/*
	Check to see if agent is bot
	http://www.beautifulcoding.com/snippets/178/a-simple-php-bot-checker-are-you-human/
 */

function is_bot() {
	$spiders = array(
		"abot",
		"dbot",
		"ebot",
		"hbot",
		"kbot",
		"lbot",
		"mbot",
		"nbot",
		"obot",
		"pbot",
		"rbot",
		"sbot",
		"tbot",
		"vbot",
		"ybot",
		"zbot",
		"bot.",
		"bot/",
		"_bot",
		".bot",
		"/bot",
		"-bot",
		":bot",
		"(bot",
		"crawl",
		"slurp",
		"spider",
		"seek",
		"accoona",
		"acoon",
		"adressendeutschland",
		"ah-ha.com",
		"ahoy",
		"altavista",
		"ananzi",
		"anthill",
		"appie",
		"arachnophilia",
		"arale",
		"araneo",
		"aranha",
		"architext",
		"aretha",
		"arks",
		"asterias",
		"atlocal",
		"atn",
		"atomz",
		"augurfind",
		"backrub",
		"bannana_bot",
		"baypup",
		"bdfetch",
		"big brother",
		"biglotron",
		"bjaaland",
		"blackwidow",
		"blaiz",
		"blog",
		"blo.",
		"bloodhound",
		"boitho",
		"booch",
		"bradley",
		"butterfly",
		"calif",
		"cassandra",
		"ccubee",
		"cfetch",
		"charlotte",
		"churl",
		"cienciaficcion",
		"cmc",
		"collective",
		"comagent",
		"combine",
		"computingsite",
		"csci",
		"curl",
		"cusco",
		"daumoa",
		"deepindex",
		"delorie",
		"depspid",
		"deweb",
		"die blinde kuh",
		"digger",
		"ditto",
		"dmoz",
		"docomo",
		"download express",
		"dtaagent",
		"dwcp",
		"ebiness",
		"ebingbong",
		"e-collector",
		"ejupiter",
		"emacs-w3 search engine",
		"esther",
		"evliya celebi",
		"ezresult",
		"falcon",
		"felix ide",
		"ferret",
		"fetchrover",
		"fido",
		"findlinks",
		"fireball",
		"fish search",
		"fouineur",
		"funnelweb",
		"gazz",
		"gcreep",
		"genieknows",
		"getterroboplus",
		"geturl",
		"glx",
		"goforit",
		"golem",
		"grabber",
		"grapnel",
		"gralon",
		"griffon",
		"gromit",
		"grub",
		"gulliver",
		"hamahakki",
		"harvest",
		"havindex",
		"helix",
		"heritrix",
		"hku www octopus",
		"homerweb",
		"htdig",
		"html index",
		"html_analyzer",
		"htmlgobble",
		"hubater",
		"hyper-decontextualizer",
		"ia_archiver",
		"ibm_planetwide",
		"ichiro",
		"iconsurf",
		"iltrovatore",
		"image.kapsi.net",
		"imagelock",
		"incywincy",
		"indexer",
		"infobee",
		"informant",
		"ingrid",
		"inktomisearch.com",
		"inspector web",
		"intelliagent",
		"internet shinchakubin",
		"ip3000",
		"iron33",
		"israeli-search",
		"ivia",
		"jack",
		"jakarta",
		"javabee",
		"jetbot",
		"jumpstation",
		"katipo",
		"kdd-explorer",
		"kilroy",
		"knowledge",
		"kototoi",
		"kretrieve",
		"labelgrabber",
		"lachesis",
		"larbin",
		"legs",
		"libwww",
		"linkalarm",
		"link validator",
		"linkscan",
		"lockon",
		"lwp",
		"lycos",
		"magpie",
		"mantraagent",
		"mapoftheinternet",
		"marvin/",
		"mattie",
		"mediafox",
		"mediapartners",
		"mercator",
		"merzscope",
		"microsoft url control",
		"minirank",
		"miva",
		"mj12",
		"mnogosearch",
		"moget",
		"monster",
		"moose",
		"motor",
		"multitext",
		"muncher",
		"muscatferret",
		"mwd.search",
		"myweb",
		"najdi",
		"nameprotect",
		"nationaldirectory",
		"nazilla",
		"ncsa beta",
		"nec-meshexplorer",
		"nederland.zoek",
		"netcarta webmap engine",
		"netmechanic",
		"netresearchserver",
		"netscoop",
		"newscan-online",
		"nhse",
		"nokia6682/",
		"nomad",
		"noyona",
		"nutch",
		"nzexplorer",
		"objectssearch",
		"occam",
		"omni",
		"open text",
		"openfind",
		"openintelligencedata",
		"orb search",
		"osis-project",
		"pack rat",
		"pageboy",
		"pagebull",
		"page_verifier",
		"panscient",
		"parasite",
		"partnersite",
		"patric",
		"pear.",
		"pegasus",
		"peregrinator",
		"pgp key agent",
		"phantom",
		"phpdig",
		"picosearch",
		"piltdownman",
		"pimptrain",
		"pinpoint",
		"pioneer",
		"piranha",
		"plumtreewebaccessor",
		"pogodak",
		"poirot",
		"pompos",
		"poppelsdorf",
		"poppi",
		"popular iconoclast",
		"psycheclone",
		"publisher",
		"python",
		"rambler",
		"raven search",
		"roach",
		"road runner",
		"roadhouse",
		"robbie",
		"robofox",
		"robozilla",
		"rules",
		"salty",
		"sbider",
		"scooter",
		"scoutjet",
		"scrubby",
		"search.",
		"searchprocess",
		"semanticdiscovery",
		"senrigan",
		"sg-scout",
		"shai'hulud",
		"shark",
		"shopwiki",
		"sidewinder",
		"sift",
		"silk",
		"simmany",
		"site searcher",
		"site valet",
		"sitetech-rover",
		"skymob.com",
		"sleek",
		"smartwit",
		"sna-",
		"snappy",
		"snooper",
		"sohu",
		"speedfind",
		"sphere",
		"sphider",
		"spinner",
		"spyder",
		"steeler/",
		"suke",
		"suntek",
		"supersnooper",
		"surfnomore",
		"sven",
		"sygol",
		"szukacz",
		"tach black widow",
		"tarantula",
		"templeton",
		"/teoma",
		"t-h-u-n-d-e-r-s-t-o-n-e",
		"theophrastus",
		"titan",
		"titin",
		"tkwww",
		"toutatis",
		"t-rex",
		"tutorgig",
		"twiceler",
		"twisted",
		"ucsd",
		"udmsearch",
		"url check",
		"updated",
		"vagabondo",
		"valkyrie",
		"verticrawl",
		"victoria",
		"vision-search",
		"volcano",
		"voyager/",
		"voyager-hc",
		"w3c_validator",
		"w3m2",
		"w3mir",
		"walker",
		"wallpaper",
		"wanderer",
		"wauuu",
		"wavefire",
		"web core",
		"web hopper",
		"web wombat",
		"webbandit",
		"webcatcher",
		"webcopy",
		"webfoot",
		"weblayers",
		"weblinker",
		"weblog monitor",
		"webmirror",
		"webmonkey",
		"webquest",
		"webreaper",
		"websitepulse",
		"websnarf",
		"webstolperer",
		"webvac",
		"webwalk",
		"webwatch",
		"webwombat",
		"webzinger",
		"wget",
		"whizbang",
		"whowhere",
		"wild ferret",
		"worldlight",
		"wwwc",
		"wwwster",
		"xenu",
		"xget",
		"xift",
		"xirq",
		"yandex",
		"yanga",
		"yeti",
		"yodao",
		"zao/",
		"zippp",
		"zyborg",
		"...."
	);

	foreach($spiders as $spider) {
		//If the spider text is found in the current user agent, then return true
		if ( stripos($_SERVER['HTTP_USER_AGENT'], $spider) !== false ) return true;
	}
	//If it gets this far then no bot was found!
	return false;

}

/* 
	Check to see if a bot is good bot
	http://www.phacks.net/detecting-search-engine-bot-and-web-spiders/
*/
function is_good_bot(){ 
	$bots = array(
		'Googlebot', 'Baiduspider', 'ia_archiver',
		'R6_FeedFetcher', 'NetcraftSurveyAgent', 'Sogou web spider',
		'bingbot', 'Yahoo! Slurp', 'facebookexternalhit', 'PrintfulBot',
		'msnbot', 'Twitterbot', 'UnwindFetchor',
		'urlresolver', 'Butterfly', 'TweetmemeBot' );
 
	foreach($bots as $b){
 
		if( stripos( $_SERVER['HTTP_USER_AGENT'], $b ) !== false ) return true;
 
	}
	return false;
}

/* 
	Test logs for bad bots faking their identity
	http://visihow.com/Identify_and_block_fake/bad_bots_in_php_including_fake_google/bing/yahoo_bots
*/


add_action('init', 'block_bad_bots');
function block_bad_bots() {
	if (is_bot()) {
		if (!is_good_bot()) {
			echo "You are a bad bot. Good bye!";
			exit();
		}
	}
	function bbb_warning() {
		echo '<noscript>Bad bot will be blocked by <a href="http://www.wpos.pro/plugins/bad-bot-blocker">Bad Bot Blocker</a> by <a href="http://www.wpos.pro">WordPress Optimisation Service</a></noscript>';
	}
	add_action('wp_footer', 'bbb_warning');
}

