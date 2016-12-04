jQuery(document).ready(function() {
	"use strict";
	// CUSTOM AJAX CONTENT LOADING FUNCTION
	var ajaxRevslider = function(obj) {

		// obj.type : Post Type
		// obj.id : ID of Content to Load
		// obj.aspectratio : The Aspect Ratio of the Container / Media
		// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

		var content = "";

		data = {};

		data.action = 'revslider_ajax_call_front';
		data.client_action = 'get_slider_html';
		data.token = '4d3ee3f20e';
		data.type = obj.type;
		data.id = obj.id;
		data.aspectratio = obj.aspectratio;

		// SYNC AJAX REQUEST
		jQuery.ajax({
			type: "post",
			url: "#",
			dataType: 'json',
			data: data,
			async: false,
			success: function(ret, textStatus, XMLHttpRequest) {
				if (ret.success == true)
					content = ret.data;
			},
			error: function(e) {
				console.log(e);
			}
		});

		// FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
		return content;
	};

	// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
	var ajaxRemoveRevslider = function(obj) {
		return jQuery(obj.selector + " .rev_slider").revkill();
	};

	// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
	var extendessential = setInterval(function() {
		if (jQuery.fn.tpessential != undefined) {
			clearInterval(extendessential);
			if (typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
				jQuery.fn.tpessential.defaults.ajaxTypes.push({
					type: "revslider",
					func: ajaxRevslider,
					killfunc: ajaxRemoveRevslider,
					openAnimationSpeed: 0.3
				});
				// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
				// func: the Function Name which is Called once the Item with the Post Type has been clicked
				// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
				// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
			}
		}
	}, 30);
});



// Javascript String constants for translation
THEMEREX_MESSAGE_BOOKMARK_ADD = "Add the bookmark";
THEMEREX_MESSAGE_BOOKMARK_ADDED = "Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab \'Bookmarks\'";
THEMEREX_MESSAGE_BOOKMARK_TITLE = "Enter bookmark title";
THEMEREX_MESSAGE_BOOKMARK_EXISTS = "Current page already exists in the bookmarks list";
THEMEREX_MESSAGE_SEARCH_ERROR = "Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way.";
THEMEREX_MESSAGE_EMAIL_CONFIRM = "On the e-mail address <b>%s</b> we sent a confirmation email.<br>Please, open it and click on the link.";
THEMEREX_MESSAGE_EMAIL_ADDED = "Your address <b>%s</b> has been successfully added to the subscription list";
THEMEREX_REVIEWS_VOTE = "Thanks for your vote! New average rating is:";
THEMEREX_REVIEWS_ERROR = "Error saving your vote! Please, try again later.";
THEMEREX_MAGNIFIC_LOADING = "Loading image #%curr% ...";
THEMEREX_MAGNIFIC_ERROR = "<a href=\"%url%\">The image #%curr%</a> could not be loaded.";
THEMEREX_MESSAGE_ERROR_LIKE = "Error saving your like! Please, try again later.";
THEMEREX_GLOBAL_ERROR_TEXT = "Global error text";
THEMEREX_NAME_EMPTY = "The name can\'t be empty";
THEMEREX_NAME_LONG = "Too long name";
THEMEREX_EMAIL_EMPTY = "Too short (or empty) email address";
THEMEREX_EMAIL_LONG = "Too long email address";
THEMEREX_EMAIL_NOT_VALID = "Invalid email address";
THEMEREX_SUBJECT_EMPTY = "The subject can\'t be empty";
THEMEREX_SUBJECT_LONG = "Too long subject";
THEMEREX_MESSAGE_EMPTY = "The message text can\'t be empty";
THEMEREX_MESSAGE_LONG = "Too long message text";
THEMEREX_SEND_COMPLETE = "Send message complete!";
THEMEREX_SEND_ERROR = "Transmit failed!";
THEMEREX_LOGIN_EMPTY = "The Login field can\'t be empty";
THEMEREX_LOGIN_LONG = "Too long login field";
THEMEREX_PASSWORD_EMPTY = "The password can\'t be empty and shorter then 5 characters";
THEMEREX_PASSWORD_LONG = "Too long password";
THEMEREX_PASSWORD_NOT_EQUAL = "The passwords in both fields are not equal";
THEMEREX_REGISTRATION_SUCCESS = "Registration success! Please log in!";
THEMEREX_REGISTRATION_FAILED = "Registration failed!";
THEMEREX_REGISTRATION_AUTHOR = "Your account is waiting for the site admin moderation!";
THEMEREX_GEOCODE_ERROR = "Geocode was not successful for the following reason:";
THEMEREX_GOOGLE_MAP_NOT_AVAIL = "Google map API not available!";

THEMEREX_SAVE_SUCCESS = "Post content saved!";
THEMEREX_SAVE_ERROR = "Error saving post data!";
THEMEREX_DELETE_POST_MESSAGE = "You really want to delete the current post?";
THEMEREX_DELETE_POST = "Delete post";
THEMEREX_DELETE_SUCCESS = "Post deleted!";
THEMEREX_DELETE_ERROR = "Error deleting post!";

// AJAX parameters
var THEMEREX_ajax_url = "index.html";
var THEMEREX_ajax_nonce = "007a127b2c";

// Site base url
var THEMEREX_site_url = "index.html";

// Theme base font
var THEMEREX_theme_font = "";

// Theme skin
var THEMEREX_theme_skin = "politics";
var THEMEREX_theme_skin_bg = "#ffffff";

// Slider height
var THEMEREX_slider_height = 670;

// Sound Manager
var THEMEREX_sound_enable = true;
var THEMEREX_sound_folder = 'js/sounds/lib/swf/';
var THEMEREX_sound_mainmenu = 'media/l9.mp3';
var THEMEREX_sound_othermenu = 'media/l2.mp3';
var THEMEREX_sound_buttons = 'media/mouseover3.mp3';
var THEMEREX_sound_links = 'media/l6.mp3';
var THEMEREX_sound_state = {
	all: THEMEREX_sound_enable ? 1 : 0,
	mainmenu: 0,
	othermenu: 0,
	buttons: 1,
	links: 0
};

// System message
var THEMEREX_systemMessage = {
	message: "",
	status: "",
	header: ""
};

// User logged in
var THEMEREX_userLoggedIn = true;

// Show table of content for the current page
var THEMEREX_menu_toc = 'no';
var THEMEREX_menu_toc_home = THEMEREX_menu_toc != 'no' && true;
var THEMEREX_menu_toc_top = THEMEREX_menu_toc != 'no' && true;

// Fix main menu
var THEMEREX_menuFixed = true;

// Use responsive version for main menu
var THEMEREX_menuResponsive = 1024;
var THEMEREX_responsive_menu_click = true;

// Right panel demo timer
var THEMEREX_demo_time = 4000;

// Video and Audio tag wrapper
var THEMEREX_useMediaElement = true;

// Use AJAX search
var THEMEREX_useAJAXSearch = true;
var THEMEREX_AJAXSearch_min_length = 3;
var THEMEREX_AJAXSearch_delay = 200;

// Popup windows engine
var THEMEREX_popupEngine = 'pretty';
var THEMEREX_popupGallery = true;

// E-mail mask
THEMEREX_EMAIL_MASK = '^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$';

// Messages max length
var THEMEREX_msg_maxlength_contacts = 1000;
var THEMEREX_msg_maxlength_comments = 1000;

// Remember visitors settings
var THEMEREX_remember_visitors_settings = true;

// VC frontend edit mode
var THEMEREX_vc_edit_mode = false;


if (THEMEREX_theme_font == '') THEMEREX_theme_font = 'Sintony';


// Isotope

jQuery(document).ready(function() {
	"use strict";
	
	jQuery("#sc_blogger_25 .isotopeFiltr").append("<ul><li class=\"squareButton active\"><a href=\"#\" data-filter=\"*\">All</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_71\">business</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_66\">creative</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_61\">design</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_64\">nature</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_65\">holidays</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_69\">music</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_68\">health</a></li></ul>");
	
	jQuery("#sc_blogger_27 .isotopeFiltr").append("<ul><li class=\"squareButton active\"><a href=\"#\" data-filter=\"*\">All</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_71\">business</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_66\">creative</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_61\">design</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_64\">nature</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_65\">holidays</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_69\">music</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_68\">health</a></li></ul>");
	
	jQuery("#sc_blogger_28 .isotopeFiltr").append("<ul><li class=\"squareButton active\"><a href=\"#\" data-filter=\"*\">All</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_71\">business</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_66\">creative</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_61\">design</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_64\">nature</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_65\">holidays</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_69\">music</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_68\">health</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_67\">toys</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_63\">typography</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_62\">print</a></li><li class=\"squareButton\"><a href=\"#\" data-filter=\".flt_60\">clear</a></li></ul>");
	
	jQuery("#portfolio-classic-1-column.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#portfolio-classic-2-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#portfolio-classic-2-columns-sidebar.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#portfolio-classic-3-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#portfolio-classic-3-columns-sidebar.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#portfolio-classic-4-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#masonry-2-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#masonry-2-columns-with-sidebar.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#masonry-3-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#masonry-3-columns-sidebar.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#masonry-4-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#grid-2-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#grid-2-columns-sidebar.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#grid-3-columns-sidebar.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#grid-3-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
	jQuery("#grid-4-columns.isotopeFiltr").append('<ul><li class="squareButton active"><a href="#" data-filter="*">All</a></li><li class="squareButton"><a href="#" data-filter=".flt_71">business</a></li><li class="squareButton"><a href="#" data-filter=".flt_66">creative</a></li><li class="squareButton"><a href="#" data-filter=".flt_61">design</a></li><li class="squareButton"><a href="#" data-filter=".flt_64">nature</a></li><li class="squareButton"><a href="#" data-filter=".flt_65">holidays</a></li><li class="squareButton"><a href="#" data-filter=".flt_69">music</a></li><li class="squareButton"><a href="#" data-filter=".flt_68">health</a></li></ul>');
	
});


// Portfolio post standart 

var reviews_max_level = 100;
var reviews_levels = "bad,poor,normal,good,great";
var reviews_vote = "";
var marks = "91,63,93,66".split(",");
var users = 1;
var allowUserReviews = true;
