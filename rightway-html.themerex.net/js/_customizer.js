// Customization panel

/* Add custom sidebar */
var custom_options  = '<div class="swpRightPos">';
custom_options  +=		'<div class="swpRightPosButton"><span class="icon-cog animate-spin"></span></div>';
custom_options  +=       '<div class="sc_tabs" data-active="0">';
custom_options  +=            '<ul class="tabsMenuHead">';
custom_options  +=              '<li class="right_tab_custom">';
custom_options  +=                  '<a class="tabsCustom" href="#tabsCustom" title="Custom panel"></a>';
custom_options  +=             '</li>';
custom_options  +=              '<li class="right_tab_widgets">';
custom_options  +=                 '<a class="tabsWidget" href="#tabsWidget" title="Widgets"></a>';
custom_options  +=               '</li>';
custom_options  +=                '<li class="right_tab_menu">';
custom_options  +=                    '<a class="tabsMenu" href="#tabsMenu" title="Custom menu"></a>';
custom_options  +=                '</li>';
custom_options  +=                '<li class="right_tab_favorites">';
custom_options  +=                    '<a class="tabsFavorite" href="#tabsFavorite" title="Bookmarks"></a>';
custom_options  +=                '</li>';
custom_options  +=            '</ul>';
custom_options  +=            '<div id="tabsCustom" class="tabsMenuBody">';
custom_options  +=                '<div id="custom_options">';
custom_options  +=                    '<div id="custom_options_scroll" class="sc_scroll sc_scroll_vertical swiper-slider-container scroll-container">';
custom_options  +=                        '<div class="sc_scroll_wrapper swiper-wrapper">';
custom_options  +=                            '<div class="sc_scroll_slide swiper-slide">';
custom_options  +=                                '<div class="co_header">';
custom_options  +=                                    '<h4 class="co_title">Choose Your Style</h4>';
//custom_options  +=                                    '<a href="index.html" class="co_reset_to_default icon-arrows-cw" title="Reset to default"></a>';
custom_options  +=                                '</div>';
custom_options  +=                                '<div class="co_options">';
custom_options  +=                                    '<form name="co_form">';
custom_options  +=                                        '<div class="co_form_row">';
custom_options  +=                                           '<input type="hidden" name="co_menu_style" value="line" />';
custom_options  +=                                            '<span class="co_label">Menu style:</span>';
custom_options  +=                                            '<div class="co_switch_box">';
custom_options  +=                                                '<a href="#" class="co_switch_label line">Line</a>';
custom_options  +=                                                '<div class="switcher2">';
custom_options  +=                                                    '<a href="#"></a>';
custom_options  +=                                                '</div>';
custom_options  +=                                               '<a href="#" class="co_switch_label fon">Block</a>';
custom_options  +=                                            '</div>';
custom_options  +=                                        '</div>';
custom_options  +=                                        '<div class="co_form_row">';
custom_options  +=                                            '<input type="hidden" name="co_body_style" value="wide" />';
custom_options  +=                                            '<span class="co_label">Body style:</span>';
custom_options  +=                                            '<div class="co_switch_box">';
custom_options  +=                                                '<a href="#" class="co_switch_label wide">Wide</a>';
custom_options  +=                                               '<div class="switcher">';
custom_options  +=                                                    '<a href="#"></a>';
custom_options  +=                                                '</div>';
custom_options  +=                                                '<a href="#" class="co_switch_label boxed">Boxed</a>';
custom_options  +=                                            '</div>';
custom_options  +=                                        '</div>';
custom_options  +=                                        '<div class="co_form_row">';
custom_options  +=                                            '<span class="co_label">Theme colors:</span>';
custom_options  +=                                            '<div class="co_form_subrow">';
custom_options  +=                                                '<input type="hidden" name="co_theme_color" value="#000001" />';
custom_options  +=                                                '<span class="co_label one_row">Main:</span>';
custom_options  +=                                                '<div id="co_theme_color" class="iColorPicker"></div>';
custom_options  +=                                                '<input type="hidden" name="co_menu_color" value="#000002" />';
custom_options  +=                                                '<span class="co_label one_row">Menu:</span>';
custom_options  +=                                                '<div id="co_menu_color" class="iColorPicker"></div>';
custom_options  +=                                                '<input type="hidden" name="co_user_menu_color" value="#000003" />';
custom_options  +=                                                '<span class="co_label one_row">User:</span>';
custom_options  +=                                                '<div id="co_user_menu_color" class="iColorPicker margin_right_0"></div>';
custom_options  +=                                            '</div>';
custom_options  +=                                        '</div>';
custom_options  +=                                        '<div class="co_form_row">';
custom_options  +=                                            '<input type="hidden" name="co_bg_color" value="" />';
custom_options  +=                                            '<span class="co_label">Background color:</span>';
custom_options  +=                                            '<div id="co_bg_color" class="iColorPicker"></div>';
custom_options  +=                                        '</div>';
custom_options  +=                                        '<div class="co_form_row">';
custom_options  +=                                            '<input type="hidden" name="co_bg_pattern" value="0" />';
custom_options  +=                                            '<span class="co_label">Background pattern:</span>';
custom_options  +=                                            '<div id="co_bg_pattern_list">';
custom_options  +=                                                '<a href="#" id="pattern_0" class="co_pattern_wrapper current">';
custom_options  +=													'<img src="images/bg/pattern_0_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_1" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_1_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                               '<a href="#" id="pattern_2" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_2_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_3" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_3_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_4" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_4_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_5" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_5_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_6" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_6_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_7" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_7_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_8" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_8_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="pattern_9" class="co_pattern_wrapper">';
custom_options  +=													'<img src="images/bg/pattern_9_thumb2.png" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                           '</div>';
custom_options  +=                                        '</div>';
custom_options  +=                                        '<div class="co_form_row">';
custom_options  +=                                            '<input type="hidden" name="co_bg_image" value="0" />';
custom_options  +=                                            '<span class="co_label">Background image:</span>';
custom_options  +=                                            '<div id="co_bg_images_list">';
custom_options  +=                                                '<a href="#" id="image_1" class="co_image_wrapper">';
custom_options  +=													'<img src="images/bg/image_1_thumb2.jpg" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="image_2" class="co_image_wrapper">';
custom_options  +=													'<img src="images/bg/image_2_thumb2.jpg" alt="" /></a>';
custom_options  +=                                                '<a href="#" id="image_3" class="co_image_wrapper">';
custom_options  +=													'<img src="images/bg/image_3_thumb2.jpg" alt="" />';
custom_options  +=												 '</a>';
custom_options  +=                                                '<a href="#" id="image_4" class="co_image_wrapper">';
custom_options  +=													'<img src="images/bg/image_4_thumb2.jpg" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="image_5" class="co_image_wrapper">';
custom_options  +=													'<img src="images/bg/image_5_thumb2.jpg" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                                '<a href="#" id="image_6" class="co_image_wrapper">';
custom_options  +=													'<img src="images/bg/image_6_thumb2.jpg" alt="" />';
custom_options  +=												'</a>';
custom_options  +=                                            '</div>';
custom_options  +=                                        '</div>';
custom_options  +=                                    '</form>';
custom_options  +=                                '</div>';
custom_options  +=                            '</div>';
custom_options  +=                        '</div>';
custom_options  +=                        '<div id="custom_options_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical custom_options_scroll_bar">';
custom_options  +=                        '</div>';
custom_options  +=                    '</div>';
custom_options  +=                '</div>';
custom_options  +=            '</div>';
custom_options  +=            '<div id="tabsWidget" class="tabsMenuBody">';
custom_options  +=                '<div id="sidebar_panel" class="widget_area sidebar_panel sidebar">';
custom_options  +=                   '<div id="sidebar_panel_scroll" class="sc_scroll sc_scroll_vertical swiper-slider-container scroll-container">';
custom_options  +=                        '<div class="sc_scroll_wrapper swiper-wrapper">';
custom_options  +=                            '<div class="sc_scroll_slide swiper-slide">';
custom_options  +=								'<!-- Widget Archive -->';
custom_options  +=                                '<aside class="widgetWrap widget widget_archive">';
custom_options  +=                                    '<h3 class="title">Archives</h3>';
custom_options  +=                                    '<ul>';
custom_options  +=                                        '<li><a href="#">September 2015</a>&nbsp;(16)</li>';
custom_options  +=                                        '<li><a href="#">August 2015</a>&nbsp;(29)</li>';
custom_options  +=                                        '<li><a href="#">July 2015</a>&nbsp;(14)</li>';
custom_options  +=                                        '<li><a href="#">June 2015</a>&nbsp;(35)</li>';
custom_options  +=                                        '<li><a href="#">May 2015</a>&nbsp;(4)</li>';
custom_options  +=                                        '<li><a href="#">April 2015</a>&nbsp;(2)</li>';
custom_options  +=                                    '</ul>';
custom_options  +=                               '</aside>';
custom_options  +=								'<!-- /Widget Archive -->';
custom_options  +=								'<!-- Widget Pages -->';
custom_options  +=                                '<aside class="widgetWrap widget widget_pages">';
custom_options  +=                                    '<h3 class="title">Pages</h3>';
custom_options  +=                                    '<ul>';
custom_options  +=                                        '<li><a href="about-us.html">About Us</a></li>';
custom_options  +=                                        '<li><a href="blog-streampage.html">Blog streampage</a></li>';
custom_options  +=                                        '<li><a href="cart.html">Cart</a></li>';
custom_options  +=                                        '<li><a href="checkout.html">Checkout</a></li>';
custom_options  +=                                        '<li><a href="contact-us.html">Contact Us</a></li>';
custom_options  +=                                        '<li><a href="donation.html">Donation</a></li>';
custom_options  +=                                        '<li><a href="faq.html">FAQ</a></li>';
custom_options  +=                                        '<li><a href="shop.html">Featured Products</a></li>';
custom_options  +=                                        '<li><a href="index.html">Homepage (Politics)</a></li>';
custom_options  +=                                        '<li><a href="homepage-e-commerce.html">Homepage E-Commerce</a></li>';
custom_options  +=                                        '<li><a href="homepage-fullscreen.html">Homepage fullscreen</a></li>';
custom_options  +=                                        '<li><a href="homepage-topic-business.html">Homepage Topic Business</a></li>';
custom_options  +=                                        '<li><a href="homepage-topic-news.html">Homepage Topic News</a></li>';
custom_options  +=                                        '<li><a href="homepage-with-one-page-navigation.html">Homepage with one page navigation</a></li>';
custom_options  +=                                        '<li><a href="homepage-with-one-page-navigation-without-menu.html">Homepage with one page navigation (without menu)</a></li>';
custom_options  +=                                        '<li><a href="homepage-with-parallax.html">Homepage with Parallax</a></li>';
custom_options  +=                                        '<li><a href="homepage-with-portfolio.html">Homepage with Portfolio</a></li>';
custom_options  +=                                        '<li><a href="homepage-with-sidebar.html">Homepage with sidebar</a></li>';
custom_options  +=                                        '<li><a href="homepage-with-sidemenu.html">Homepage with sidemenu</a></li>';
custom_options  +=                                        '<li><a href="homepage-with-video-background.html">Homepage with Video Background</a></li>';
custom_options  +=                                        '<li><a href="my-account.html">My Account</a></li>';
custom_options  +=                                        '<li><a href="page-404.html">Page 404</a></li>';
custom_options  +=                                       '<li><a href="portfolio-hover-styles-circle.html">Portfolio Hover styles (Circle)</a></li>';
custom_options  +=                                        '<li><a href="portfolio-hover-styles-square.html">Portfolio Hover styles (Square)</a></li>';
custom_options  +=                                        '<li><a href="posts-slider.html">Posts Slider</a></li>';
custom_options  +=                                        '<li><a href="posts-slider-fullscreen.html">Posts Slider Fullscreen</a></li>';
custom_options  +=                                        '<li><a href="pricing-tables.html">Pricing Tables</a></li>';
custom_options  +=                                        '<li><a href="search-results.html">Search results</a></li>';
custom_options  +=                                       '<li><a href="tribe-events-template.html">Tribe Events Template</a></li>';
custom_options  +=                                        '<li><a href="typography.html">Typography</a></li>';
custom_options  +=                                        '<li><a href="under-construction.html">Under Construction</a></li>';
custom_options  +=                                    '</ul>';
custom_options  +=                                '</aside>';
custom_options  +=								'<!-- /Widget Pages -->';
custom_options  +=								'<!-- Widget Recent Comments -->';
custom_options  +=                                '<aside class="widgetWrap widget">';
custom_options  +=                                    '<h3 class="title">Recent Comments</h3>';
custom_options  +=                                    '<ul id="recentcomments">';
custom_options  +=                                        '<li class="recentcomments">';
custom_options  +=											'<span class="comment-author-link">TRX_admin</span> on <a href="#">Abraham Lincoln</a>';
custom_options  +=										'</li>';
custom_options  +=                                        '<li class="recentcomments">';
custom_options  +=											'<span class="comment-author-link">TRX_admin</span> on <a href="#">The American West</a>';
custom_options  +=										'</li>';
custom_options  +=                                       '<li class="recentcomments">';
custom_options  +=											'<span class="comment-author-link">TRX_admin</span> on <a href="#">T-shirt Obama</a>';
custom_options  +=										'</li>';
custom_options  +=                                        '<li class="recentcomments">';
custom_options  +=											'<span class="comment-author-link">TRX_admin</span> on <a href="#">I voted</a>';
custom_options  +=										'</li>';
custom_options  +=                                        '<li class="recentcomments">';
custom_options  +=											'<span class="comment-author-link">TRX_admin</span> on <a href="#">Multi-card hybrid phones.</a>';
custom_options  +=										'</li>';
custom_options  +=                                   '</ul>';
custom_options  +=                                '</aside>';
custom_options  +=								'<!-- /Widget Recent Comments -->';
custom_options  +=                            '</div>';
custom_options  +=                        '</div>';
custom_options  +=                        '<div id="sidebar_panel_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical sidebar_panel_scroll_bar"></div>';
custom_options  +=                    '</div>';
custom_options  +=                '</div>';
custom_options  +=            '</div>';
custom_options  +=            '<div id="tabsMenu" class="tabsMenuBody">';
custom_options  +=                '<div class="sc_scroll sc_scroll_vertical swiper-slider-container scroll-container" id="panelmenu_scroll">';
custom_options  +=                   '<div class="sc_scroll_wrapper swiper-wrapper">';
custom_options  +=                        '<div class="sc_scroll_slide swiper-slide">';
custom_options  +=                           '<nav class="panelmenu_area widget_area">';
custom_options  +=                                '<ul id="panelmenu">';
custom_options  +=                                    '<li class="menu-item">';
custom_options  +=										'<a href="homepage-e-commerce.html">E-Commerce</a>';
custom_options  +=									'</li>';
custom_options  +=                                    '<li class="menu-item">';
custom_options  +=										'<a href="events-calendar.html">Events Calendar</a>';
custom_options  +=									'</li>';
custom_options  +=                                    '<li class="menu-item menu-item-has-children">';
custom_options  +=										'<a href="#">Sliders</a>';
custom_options  +=                                        '<ul class="sub-menu">';
custom_options  +=                                           '<li class="menu-item">';
custom_options  +=												'<a href="index.html">Revolution Slider Fullscreen</a>';
custom_options  +=											'</li>';
custom_options  +=                                            '<li class="menu-item">';
custom_options  +=												'<a href="homepage-fullscreen.html">Royal Slider Fullscreen</a>';
custom_options  +=											'</li>';
custom_options  +=                                            '<li class="menu-item">';
custom_options  +=												'<a href="posts-slider-fullscreen.html">Posts Slider Fullscreen</a>';
custom_options  +=											'</li>';
custom_options  +=                                        '</ul>';
custom_options  +=                                    '</li>';
custom_options  +=                                    '<li class="menu-item">';
custom_options  +=										'<a href="homepage-with-one-page-navigation-without-menu.html">One page navigation</a>';
custom_options  +=									'</li>';
custom_options  +=                                '</ul>';
custom_options  +=                            '</nav>';
custom_options  +=                            '<div class="searchBlock">';
custom_options  +=                               '<form method="get" class="search-form" action="#">';
custom_options  +=                                    '<button type="submit" class="searchSubmit"></button>';
custom_options  +=                                    '<input type="text" class="searchField" placeholder="Search &hellip;" value="" name="s" title="Search for:" />';
custom_options  +=                                '</form>';
custom_options  +=                            '</div>';
custom_options  +=                        '</div>';
custom_options  +=                    '</div>';
custom_options  +=                    '<div id="panelmenu_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical panelmenu_scroll_bar"></div>';
custom_options  +=                '</div>';
custom_options  +=            '</div>';
custom_options  +=            '<div id="tabsFavorite" class="tabsMenuBody">';
custom_options  +=                '<div class="addBookmarkArea"><a href="#" class="addBookmark">add bookmark</a></div>';
custom_options  +=               '<div class="sc_scroll sc_scroll_vertical swiper-slider-container scroll-container scroll-no-swiping" id="bookmarks_scroll">';
custom_options  +=                    '<div class="sc_scroll_wrapper swiper-wrapper">';
custom_options  +=                       '<div class="sc_scroll_slide swiper-slide swiper-no-swiping">';
custom_options  +=                            '<ol class="listBookmarks">';
custom_options  +=                            '</ol>';
custom_options  +=                        '</div>';
custom_options  +=                   '</div>';
custom_options  +=                    '<div id="bookmarks_scroll_bar" class="sc_scroll_bar sc_scroll_bar_vertical bookmarks_scroll_bar"></div>';
custom_options  +=                '</div>';
custom_options  +=            '</div>';
custom_options  +=        '</div>';
custom_options  +=    '</div>';


jQuery('body').append(custom_options);

jQuery(document).ready(function() {
	"use strict";

	if (jQuery("#custom_options").length===1) {

		// Reset custom settings to default
		jQuery("#custom_options .co_reset_to_default" ).click(function(e) {
			"use strict";
			clearCustomCookies();
			window.location = jQuery("#custom_options #co_site_url").val();
			e.preventDefault();
			return false;
		});

		// Body and Main menu style
		jQuery("#custom_options .switcher a,#custom_options .switcher2 a" ).draggable({
			axis: 'x',
			containment: 'parent',
			stop: function() {
				var left = parseInt(jQuery(this).css('left'), 10);
				var curStyle = left < 25 ? (jQuery(this).parent().hasClass('switcher') ? 'wide' : 'line') : (jQuery(this).parent().hasClass('switcher') ? 'boxed' : 'fon');
				switchBox(jQuery(this).parent(), curStyle, true);
			}
		});
		jQuery("#custom_options .switcher, #custom_options .switcher2" ).click(function(e) {
			"use strict";
			switchBox(jQuery(this));
			e.preventDefault();
			return false;
		});
		jQuery("#custom_options .co_switch_box .co_switch_label").click(function(e) {
			"use strict";
			var state = jQuery(this).hasClass('boxed') ? 'boxed' : (jQuery(this).hasClass('wide') ? 'wide' : (jQuery(this).hasClass('line') ? 'line' : 'fon'));
			switchBox(jQuery(this).siblings('div'), state);
			e.preventDefault();
			return false;
		});

		// Main theme color and Background color
		iColorPicker();
		jQuery('#custom_options .iColorPicker').click(function (e) {
			"use strict";
			iColorShow(null, jQuery(this), changeThemeColor);
		});
		
		// Background patterns
		jQuery('#custom_options #co_bg_pattern_list a').click(function(e) {
			"use strict";
			jQuery("#custom_options .co_switch_box .boxed").trigger('click');
			jQuery('#custom_options #co_bg_pattern_list .co_pattern_wrapper,#custom_options #co_bg_images_list .co_image_wrapper').removeClass('current');
			var obj = jQuery(this).addClass('current');
			var val = obj.attr('id').substr(-1);
			if (THEMEREX_remember_visitors_settings) {
				jQuery.cookie('bg_color', null, {expires: -1, path: '/'});
				jQuery.cookie('bg_image', null, {expires: -1, path: '/'});
				jQuery.cookie('bg_pattern', val, {expires: 1, path: '/'});
			}
			jQuery(document).find('body').removeClass('bg_pattern_1 bg_pattern_2 bg_pattern_3 bg_pattern_4 bg_pattern_5 bg_pattern_6 bg_pattern_7 bg_pattern_8 bg_pattern_9 bg_pattern_0 bg_image_1 bg_image_2 bg_image_3 bg_image_4 bg_image_5 bg_image_6').addClass('bg_pattern_' + val);
			e.preventDefault();
			return false;
		});
		// Background images
		jQuery('#custom_options #co_bg_images_list a').click(function(e) {
			"use strict";
			jQuery("#custom_options .co_switch_box .boxed").trigger('click');
			jQuery('#custom_options #co_bg_images_list .co_image_wrapper,#custom_options #co_bg_pattern_list .co_pattern_wrapper').removeClass('current');
			var obj = jQuery(this).addClass('current');
			var val = obj.attr('id').substr(-1);
			if (THEMEREX_remember_visitors_settings) {
				jQuery.cookie('bg_color', null, {expires: -1, path: '/'});
				jQuery.cookie('bg_pattern', null, {expires: -1, path: '/'});
				jQuery.cookie('bg_image', val, {expires: 1, path: '/'});
			}
			jQuery(document).find('body').removeClass('bg_pattern_1 bg_pattern_2 bg_pattern_3 bg_pattern_4 bg_pattern_5 bg_pattern_6 bg_pattern_7 bg_pattern_8 bg_pattern_9 bg_pattern_0 bg_image_1 bg_image_2 bg_image_3 bg_image_4 bg_image_5 bg_image_6').addClass('bg_image_' + val);
			e.preventDefault();
			return false;
		});
		jQuery('#custom_options #co_bg_pattern_list a,#custom_options #co_bg_images_list a').hover(
			function() {
				"use strict";
				var pattern = jQuery(this).parent().attr('id')=='co_bg_pattern_list';
				jQuery(this).parent().parent().css({
					'backgroundImage': 'url('+jQuery(this).find('img').attr('src').replace('_thumb2', '_thumb')+')',
					'backgroundRepeat': pattern ? 'repeat' : 'no-repeat'
				});
			},
			function() {
				"use strict";
				jQuery(this).parent().parent().css('backgroundImage', 'none');
			}
		);
	}
});


function clearCustomCookies() {
	"use strict";
	jQuery.cookie('theme_color', null, {expires: -1, path: '/'});
	jQuery.cookie('menu_color', null, {expires: -1, path: '/'});
	jQuery.cookie('user_menu_color', null, {expires: -1, path: '/'});
	jQuery.cookie('bg_image', null, {expires: -1, path: '/'});
	jQuery.cookie('bg_pattern', null, {expires: -1, path: '/'});
	jQuery.cookie('bg_color', null, {expires: -1, path: '/'});
	jQuery.cookie('body_style', null, {expires: -1, path: '/'});
	jQuery.cookie('menu_style', null, {expires: -1, path: '/'});
}


function switchBox(box) {
	"use strict";
	var toStyle = arguments[1] ? arguments[1] : '';
	var important = arguments[2] ? arguments[2] : false;
	var switcher = box.find('a').eq(0);
	var left = parseInt(switcher.css('left'), 10);
	var newStyle = left < 5 ? (box.hasClass('switcher') ? 'boxed' : 'fon') : (box.hasClass('switcher') ? 'wide' : 'line');
	if (toStyle==='' || important || newStyle === toStyle) {
		if (toStyle==='') {toStyle = newStyle;}
		var right = box.width() - switcher.width() - 7;
		if (toStyle === 'wide' || toStyle === 'line')
			switcher.animate({left: 0}, 200);
		else
			switcher.animate({left: right}, 200);
		if (box.hasClass('switcher')) {
			if (THEMEREX_remember_visitors_settings) jQuery.cookie('body_style', toStyle, {expires: 1, path: '/'});
			jQuery(document).find('body').removeClass(toStyle==='boxed' ? 'wide' : 'boxed').addClass(toStyle);
			jQuery(document).trigger('resize');
		} else {
			if (THEMEREX_remember_visitors_settings) jQuery.cookie('menu_style', toStyle, {expires: 1, path: '/'});
			jQuery(document).find('.menuTopWrap').removeClass(toStyle==='fon' ? 'topMenuStyleLine' : 'topMenuStyleFon').addClass('topMenuStyle'+(toStyle==='fon' ? 'Fon' : 'Line'));
			calcMenuColumnsWidth();
		}
	}
	return newStyle;
}


function changeThemeColor(fld, clr) {
	"use strict";	
	fld.css('backgroundColor', clr);
	fld.siblings('input').attr('value', clr);
	
	if (fld.attr('id') === 'co_bg_color') {
		jQuery("#custom_options .co_switch_box .boxed").trigger('click');
	jQuery('#custom_options #co_bg_pattern_list .co_pattern_wrapper,#custom_options #co_bg_images_list .co_image_wrapper').removeClass('current');
	
	jQuery(document).find('body').removeClass('bg_pattern_1 bg_pattern_2 bg_pattern_3 bg_pattern_4 bg_pattern_5 bg_pattern_6 bg_pattern_7 bg_pattern_8 bg_pattern_9 bg_pattern_0 bg_image_1 bg_image_2 bg_image_3 bg_image_4 bg_image_5 bg_image_6').css('backgroundColor', clr);
	return;
}
	

	// This way - with page reload
	//window.location = jQuery("#custom_options #co_site_url").val();
	// This way - without reload
	
	var styles = jQuery('#theme-skin-inline-css').length > 0 ? jQuery('#theme-skin-inline-css') : '';	
	if (styles.length > 0 && styles.attr('type')=='text/css') {
		clr = rgb2hex(jQuery('#co_theme_color').css('backgroundColor'));
		var rgb = hex2rgb(clr);
		var css_text = 
			// Main color for site
			'a:hover,.theme_accent,.topTabsWrap .speedBar a:hover,	.topWrap .topMenuStyleFon > ul li a:hover,	.topWrap .topMenuStyleFon > ul > li.sfHover > a,.topWrap .topMenuStyleFon > ul > li > a.sf-with-ul:hover,.topWrap .topMenuStyleFon > ul > li ul a.sf-with-ul:after,.topWrap .topMenuStyleLine > ul > li ul li a:hover,	.topMenuStyleFon ul#mainmenu .menu-panel ul.columns > li > a,	.topMenuStyleFon ul#mainmenu .menu-panel ul.columns > li a:hover,	.topMenuStyleFon ul#mainmenu .menu-panel ul.columns > li ul li a:hover,	.topMenuStyleFon ul#mainmenu .menu-panel ul.thumb_title > li > a,	.topMenuStyleFon ul#mainmenu .menu-panel ul.thumb_title > li > a:hover,	.infoPost a:hover,	.tabsButton ul li a:hover,	.widgetWrap  ul  li:before,	.widget_popular_posts article h3:before,	.widgetTabs .widget_popular_posts article .post_info .post_date a:hover,	.sidebar .widget_popular_posts article .post_info .post_date a:hover,	.sidebar .widget_recent_posts article .post_info .post_date a:hover,	.main .widgetWrap a:hover,	.main .widgetWrap a:hover span,	.widgetWrap a:hover span,	.roundButton:hover a,			input[type="submit"]:hover,	input[type="button"]:hover,	.squareButton.border > a,	.roundButton.border > a,	.nav_pages_parts > a:hover,	.nav_comments > a:hover,	.comments_list a.comment-edit-link:hover,	.widget_area ul.tabs > li.squareButtonlite.ui-state-active > a,#wp-calendar tbody td a,#wp-calendar tbody td.today a:hover,	.wp-calendar tbody td a,	.wp-calendar tbody td.today a:hover,	blockquote cite,	blockquote cite a,	.sc_quote_title,	.sc_quote_title a,	.postLink a,	.masonry article .masonryInfo a:hover,	.masonry article .masonryInfo span.infoTags a:hover,	.relatedPostWrap article .relatedInfo a:hover,	.relatedPostWrap article .relatedInfo span.infoTags a:hover,	.infoPost span.infoTags a:hover,	.page404 p a,	.page404 .searchAnimation.sFocus .searchIcon,	.sc_team .sc_team_item .sc_team_item_position,	.comments .commBody li.commItem .replyWrap .posted a:hover,	.comments .commBody li.commItem h4 a:hover,	.ratingItem span:before,	.reviewBlock .totalRating,	.widget_area .contactInfo .fContact:before,	.widget_area .widgetWrap a:hover,	.widget_area .widgetWrap a:hover span,	.widget_area .widgetWrap ul > li > a:hover,	.widget_area .widgetWrap ul > li > a:hover span,	.footerStyleLight .widget_area article .post_title:before,	.footerStyleLight .widget_area article .post_info a:hover,	.footerStyleLight .widget_area article .post_info .post_date a:hover,	.sc_list_style_arrows li:before,	.sc_list_style_arrows li a:hover,	.sc_list_style_iconed li a:hover,	.sc_accordion.sc_accordion_style_1 .sc_accordion_item .sc_accordion_title,	.sc_accordion.sc_accordion_style_2 .sc_accordion_item.sc_active .sc_accordion_title,	.sc_accordion.sc_accordion_style_3 .sc_accordion_item.sc_active .sc_accordion_title,	.sc_toggles.sc_toggles_style_1 .sc_toggles_item .sc_toggles_title,	.sc_toggles.sc_toggles_style_1 .sc_toggles_item .sc_toggles_title:before,	.sc_toggles.sc_toggles_style_2 .sc_toggles_item.sc_active .sc_toggles_title,	.sc_toggles.sc_toggles_style_2 .sc_toggles_item.sc_active .sc_toggles_title:before,	.sc_toggles.sc_toggles_style_3 .sc_toggles_item.sc_active .sc_toggles_title,	.sc_tabs .sc_tabs_titles li a:hover,	.sc_dropcaps.sc_dropcaps_style_3 .sc_dropcap,	.sc_dropcaps.sc_dropcaps_style_4 .sc_dropcap,	.sc_dropcaps.sc_dropcaps_style_5 .sc_dropcap,	.sc_dropcaps.sc_dropcaps_style_6 .sc_dropcap,	.sc_highlight.sc_highlight_style_2,	.sc_tooltip_parent,	.sc_title_icon:before,	.sc_scroll_controls .flex-direction-nav a:hover:before,	.sc_testimonials_style_1 .flex-direction-nav a:hover:before,	.sc_testimonials_style_3 .flex-direction-nav a:hover:before,	.sc_testimonials_style_3 .flex-direction-nav a:active:before,	.pagination .pageLibrary > li.libPage > .pageFocusBlock .flex-direction-nav a:hover:before,	.topWrap .usermenu_area ul.usermenu_list li.usermenu_currency > a:hover,	.topWrap .usermenu_area ul.usermenu_list li.usermenu_currency > a,	.topWrap .usermenu_area ul.usermenu_list li.usermenu_currency.sfHover > a,	.topWrap .usermenu_area ul.usermenu_list li ul li a:hover,	.topWrap .usermenu_area ul.usermenu_list li.usermenu_cart .widget_area ul li a:hover, 	.sidemenu_wrap .usermenu_area ul.usermenu_list li.usermenu_currency > a:hover,	.sidemenu_wrap .usermenu_area ul.usermenu_list li.usermenu_currency > a,	.sidemenu_wrap .usermenu_area ul.usermenu_list li.usermenu_currency.sfHover > a,	.sidemenu_wrap .usermenu_area ul.usermenu_list li ul li a:hover,	.sidemenu_wrap .usermenu_area ul.usermenu_list li.usermenu_cart .widget_area ul li a:hover,	.sc_blogger a:hover,	.sc_blogger.style_date .load_more:before,	.sc_blogger.style_date .sc_blogger_item .sc_blogger_date .day_month,	.sc_blogger.style_date .sc_blogger_item .sc_blogger_info .comments_number,	.sc_blogger.style_accordion .sc_blogger_info .comments_number,	.widgetTabs .widgetTop ul > li:not(.tabs):before,	.widgetTabs .widgetTop ul > li:not(.tabs) > a:hover,	.widgetTabs .widgetTop ul > li:not(.tabs) > a:hover span,	.widgetTabs .widgetTop.widget_popular_posts article .post_title:before,	.swpRightPos .tabsMenuBody a:hover,	.swpRightPos .tabsMenuBody a:hover:before,	.openRightMenu:hover:before,	.topWrap .search:not(.searchOpen):hover:before,	.user-popUp .formItems.loginFormBody .remember .forgotPwd,	.user-popUp .formItems.loginFormBody .loginProblem,	.user-popUp .formItems.registerFormBody .i-agree a, 	.sc_slider_pagination_area .flex-control-nav.manual .slide_info .slide_title,		h1 > a, h2 > a, h4 > a, h5 > a, h6 > a,	.h1 > a, .h2 > a, .h4 > a, .h5 > a, .h6 > a,	.sc_blogger a,	.relatedPostWrap article .relatedInfo a, 	.sc_list_style_iconed li:before,	.sc_list_style_arrows li:before,	.sc_team .sc_team_item .sc_team_item_title,	.sc_team .sc_team_item .sc_team_item_title a,	.footerStyleLight .footerWidget .widgetWrap .title,#wp-calendar thead th span,	.wp-calendar thead th span,#footerStyleLight .footerWidget .wp-calendar thead th,	.footerStyleLight .footerWidget .wp-calendar thead th,#wp-calendar thead tr th,	.wp-calendar thead tr + tr th,	.page404 .h2,	.usermenu_area .sidemenu_button i,	.relatedPostWrap article .relatedInfo .separator,	.relatedPostWrap article .relatedInfo span.infoTags a,	.openResponsiveMenu:hover,	.sidemenu_wrap .sidemenu_area ul li ul li ul li a:hover,	.sidebar > .widget > ul > li a:hover,	.booking_weekdays_custom,	.woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce #content div.product span.price, .woocommerce #content div.product p.price, .woocommerce-page div.product span.price, .woocommerce-page div.product p.price, .woocommerce-page #content div.product span.price, .woocommerce-page #content div.product p.price,	.topWrap .topMenuStyleFon > ul > li > a:hover,	.topWrap .topMenuStyleLine > ul > li > a:hover, .topWrap .topMenuStyleFon > ul > li.highlight > a,	.topWrap .topMenuStyleLine > ul > li.highlight > a, ul > li.share > ul.shareDrop > li > a:hover'
				+' { color: '+clr+'; }'
				
			+'h1, h2, h4, h5, h6, .h1, .h2, .h4, .h5, .h6, h1 > a, h2 > a, h4 > a, h5 > a, h6 > a, .h1 > a, .h2 > a, .h4 > a, .h5 > a, .h6 > a, .sc_blogger a, .relatedPostWrap article .relatedInfo a, .sc_list_style_iconed li::before, .sc_list_style_arrows li::before, .sc_team .sc_team_item .sc_team_item_title, .footerStyleLight .footerWidget .widgetWrap .title, .wp-calendar thead th span, .footerStyleLight .footerWidget .wp-calendar thead th, .wp-calendar thead tr + tr th' + '{ color: '+clr+'; }'

				+'.topWrap .topMenuStyleLine > ul > li ul li a:hover, 	.footerStyleDark .widget_area a.button:hover,	.flip-clock-wrapper ul li a div div.inn,	.footerStyleDark .widget_area .squareButton > a,	.tabsButton ul li.ui-tabs-active a,	.sc_testimonials .flex-direction-nav a:hover:after,	.sc_testimonials .flex-direction-nav a:hover:before,	.themerex_message_info,	.themerex_message_info .themerex_message_close,	.themerex_message_info .themerex_message_icon, 	.themerex_message_info .themerex_message_header,	.woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce #content div.product span.price, .woocommerce #content div.product p.price, .woocommerce-page div.product span.price, .woocommerce-page div.product p.price, .woocommerce-page #content div.product span.price, .woocommerce-page #content div.product p.price,#booking_slot_form > div > a:hover,	.woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price'
			+'{ color:'+clr+' !important; }'

			+'.theme_accent_bgc, .sc_video_player:active .sc_video_play_button:after,	input[type="submit"]:active, input[type="button"]:active,	.nav_pages_parts > span.page_num,	.nav_comments > span.current,	ul > li.likeActive:active > a,	.sc_table.sc_table_style_1 table tr:first-child th,	.sc_table.sc_table_style_1 table tr:first-child td,	.masonry article .status, 	.post .postStatus,	.sc_team .sc_team_item .sc_team_item_avatar:after,	.itemPageFull .itemDescriptionWrap .toggleButton:active,	.footerWrap .footerWidget .sc_video_player:active .sc_video_play_button:after,	.topMenuStyleLine > ul .menu-panel,	.userFooterSection.global,	.sliderLogo .elastislide-wrapper nav span:active:before,	.sc_skills_bar .sc_skills_item .sc_skills_count,	.sc_skills_counter .sc_skills_item.sc_skills_style_3 .sc_skills_count,	.sc_skills_counter .sc_skills_item.sc_skills_style_4 .sc_skills_count,	.sc_skills_counter .sc_skills_item.sc_skills_style_4 .sc_skills_info,	.sc_dropcaps.sc_dropcaps_style_1 .sc_dropcap,	.sc_dropcaps.sc_dropcaps_style_2 .sc_dropcap,	.sc_tooltip_parent .sc_tooltip,	.sc_tooltip_parent .sc_tooltip:before,	.sc_title_bg:before,	.sc_accordion.sc_accordion_style_3 .sc_accordion_item .sc_accordion_title,	.sc_toggles.sc_toggles_style_3 .sc_toggles_item .sc_toggles_title,	.sc_scroll_controls .flex-direction-nav a:active,	.sc_testimonials_style_1 .flex-direction-nav a:active,	.sc_testimonials_style_3 .sc_testimonials_items, 	.sc_testimonials_style_3 .flex-direction-nav li,	.sc_testimonials_style_3 .flex-direction-nav a,	.pagination .pageLibrary > li.libPage > .pageFocusBlock .flex-direction-nav a:active,	.sc_popup_light:before,	.user-popUp ul.loginHeadTab li.ui-tabs-active:before,	.sc_banner:before,	.global_bg,	.widgetWrap .tagcloud a:hover,	.widgetWrap .tagcloud a:active,	.sc_scroll_bar .swiper-scrollbar-drag:before,	.widgetTabs .widgetTop .tagcloud a:hover,	.widgetTabs .widgetTop .tagcloud a:active,#custom_options .co_options #co_bg_images_list a.current,#custom_options .co_options #co_bg_pattern_list a.current,	.fullScreenSlider.globalColor .sliderHomeBullets .rsContent:before,	.fullScreenSlider .sliderHomeBullets .rsContent .slide-3 .order p span,		ul.sc_list_style_disk li:before,	.sc_slider_pagination_area .flex-control-nav.manual .slide_date, 	.sc_tabs.sc_tabs_style_2 .sc_tabs_titles li.ui-state-active a,	.sc_contact_form_custom .bubble label:hover,	.sc_contact_form_custom .bubble label.selected,	.sc_video_player:hover .sc_video_play_button:after,	.footerStyleLight .footerWidget .sc_video_player:hover .sc_video_play_button:after,	.sliderHomeBullets.slider_alias_13 .textPrice,	.sliderHomeBullets.slider_alias_13 .slide-2 .textPrice, .portfolio .isotopeElement .folioShowBlock:before,	.squareButton > a:hover,.squareButton.active > span,	.squareButton.active > a,	.squareButton.ui-state-active > a,	.roundButton > a:active,	.squareButton > a:active,	.squareButton.global > a,	.squareButton.dark > a:active,	.squareButton.border > a:hover,	.roundButton.border:hover > a,	.sc_pricing_table .sc_pricing_columns .sc_pricing_title,	.sc_pricing_table .sc_pricing_columns:hover ul li.sc_pricing_title,	.sc_highlight.sc_highlight_style_1,	.topWrap .usermenu_area .phone_number,	.sc_pricing_table .sc_pricing_columns ul:hover,	.sc_accordion .sc_accordion_item.sc_active .sc_accordion_title:before,	.days_container_all .booking_day_container:hover .booking_day_slots,	.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button,	.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt,	.sliderHomeBullets.slider_alias_13 .order a'
				+'{ background-color:'+clr+'; }'

				+'#booking_submit_button,	.content .booking_clear_custom:hover,	.booking_book_now_custom,	.booking_book_now_custom:hover,	.booking_ok_button,	.booking_ok_button:hover,	.sliderHomeBullets.slider_alias_13 .order2 a:hover,	.themerex_message_dialog .themerex_message_button:hover,	.post-password-form input[type="submit"]:hover'
				+'{ background-color:'+clr+' !important; }'

				+'.sc_table.sc_table_style_1 table tr:first-child th,	.sc_table.sc_table_style_1 table tr:first-child td'
				+'{	border-top-color: '+clr+';	}'

				+'.sc_table.sc_table_style_1 table tr:first-child th:first-child,	.sc_table.sc_table_style_1 table tr:first-child td:first-child '
				+'{border-left-color: '+clr+';}'

				+'.sc_table.sc_table_style_1 table tr:first-child th:last-child,	.sc_table.sc_table_style_1 table tr:first-child td:last-child'
				+'{border-right-color: '+clr+';}'


				+'.theme_accent_bg,	.ih-item.circle.effect1.colored .info,	.ih-item.circle.effect2.colored .info,	.ih-item.circle.effect3.colored .info,	.ih-item.circle.effect4.colored .info,	.ih-item.circle.effect5.colored .info .info-back,	.ih-item.circle.effect6.colored .info,	.ih-item.circle.effect7.colored .info,	.ih-item.circle.effect8.colored .info,	.ih-item.circle.effect9.colored .info,	.ih-item.circle.effect10.colored .info,	.ih-item.circle.effect11.colored .info,	.ih-item.circle.effect12.colored .info,	.ih-item.circle.effect13.colored .info,	.ih-item.circle.effect14.colored .info,	.ih-item.circle.effect15.colored .info,	.ih-item.circle.effect16.colored .info,	.ih-item.circle.effect18.colored .info .info-back,	.ih-item.circle.effect19.colored .info,	.ih-item.circle.effect20.colored .info .info-back,	.ih-item.square.effect1.colored .info,	.ih-item.square.effect2.colored .info,	.ih-item.square.effect3.colored .info,	.ih-item.square.effect4.colored .mask1,	.ih-item.square.effect4.colored .mask2,	.ih-item.square.effect5.colored .info,	.ih-item.square.effect6.colored .info,	.ih-item.square.effect7.colored .info,	.ih-item.square.effect8.colored .info,	.ih-item.square.effect9.colored .info .info-back,	.ih-item.square.effect10.colored .info,	.ih-item.square.effect11.colored .info,	.ih-item.square.effect12.colored .info,	.ih-item.square.effect13.colored .info,	.ih-item.square.effect14.colored .info,	.ih-item.square.effect15.colored .info'
				+'{ background:'+clr+'; }'

				+'.ih-item.circle.effect1.colored .info,	.ih-item.circle.effect2.colored .info,	.ih-item.circle.effect5.colored .info .info-back,	.ih-item.circle.effect19.colored .info,	.ih-item.circle.effect20.colored .info .info-back,	.ih-item.square.effect4.colored .mask1,	.ih-item.square.effect4.colored .mask2,	.ih-item.square.effect6.colored .info,	.ih-item.square.effect7.colored .info,	.ih-item.square.effect12.colored .info,	.ih-item.square.effect13.colored .info,	.sc_image_shape_round:hover figcaption,	.post .sc_image_shape_round:hover figcaption'
				+'{ background: rgba('+rgb.r+','+rgb.g+','+rgb.b+',0.6); }'

				+'.ih-item.circle.effect17.colored a:hover .img:before'
				+'{	box-shadow: inset 0 0 0 110px '+clr+', inset 0 0 0 16px rgba(255, 255, 255, 0.8), 0 1px 2px rgba(0, 0, 0, 0.1);box-shadow: inset 0 0 0 110px rgba('+rgb.r+','+rgb.g+','+rgb.b+',0.6), inset 0 0 0 16px rgba(255, 255, 255, 0.8), 0 1px 2px rgba(0, 0, 0, 0.1);}'

				+'.ih-item.circle.effect1 .spinner'
				+'{	border-right-color: '+clr+';	border-bottom-color: '+clr+';	}'

				+'.mejs-embed, .mejs-embed body, .mejs-container .mejs-controls'
				+'{ background:'+clr+' !important; }'

				+'.mejs-controls .mejs-volume-button .mejs-volume-slider'
				+'{ background: rgba('+rgb.r+','+rgb.g+','+rgb.b+',0.7) !important; }'

				/*+'.top_panel_above .fullScreenSlider .topWrap,	.top_panel_above .fullScreenSlider .topWrap .topMenuStyleLine > ul > li ul,	.top_panel_above .fullScreenSlider .topWrap .topMenuStyleLine > ul > li .menu-panel'
							
				+'{ background-color: rgba('+rgb.r+','+rgb.g+','+rgb.b+',0.8);}' */


				+'.sc_slider_flex .sc_slider_info,	.sc_slider_swiper .sc_slider_info,	.sc_slider_flex .flex-direction-nav li,.sc_slider_swiper .flex-direction-nav li'
				+'{ background-color:rgba('+rgb.r+','+rgb.g+','+rgb.b+',0.8) !important; }'

				+'.theme_accent_border,	.postSharing > ul > li > a:active,	.postSharing > ul > li > span:active,			.squareButton.active > span,	.squareButton.active > a,	.roundButton > a:active,	.squareButton > a:active,	.squareButton > a:hover,	.squareButton.ui-state-active > a,	.squareButton.global > a,	.squareButton.dark > a:active,	.squareButton.border > a,	.roundButton.border > a,	.nav_pages_parts > span.page_num,	.nav_comments > span.current,#wp-calendar thead tr th,	.wp-calendar thead tr + tr th,	.sc_skills_bar .sc_skills_item .sc_skills_count,	.itemPageFull .itemDescriptionWrap .toggleButton:active,	.footerWidget .sc_video_player:active .sc_video_play_button:after,	.topWrap .topMenuStyleLine > ul > li ul,	.topMenuStyleLine > ul#mainmenu ul.menu-panel,	.sc_scroll_controls .flex-direction-nav a:active,	.sc_testimonials_style_1 .flex-direction-nav a:active,	.pagination .flex-direction-nav a:active,	.sliderLogo .elastislide-wrapper nav span:active:before,	.sc_dropcaps.sc_dropcaps_style_4 .sc_dropcap,	.sc_dropcaps.sc_dropcaps_style_5 .sc_dropcap,	.sc_dropcaps.sc_dropcaps_style_6 .sc_dropcap,	.sc_accordion.sc_accordion_style_3 .sc_accordion_item,	.sc_toggles.sc_toggles_style_3 .sc_toggles_item,	.sc_tooltip_parent,		pre.code,	.widgetWrap .tagcloud a:hover,	.widgetWrap .tagcloud a:active,	.sc_accordion .sc_accordion_item.sc_active .sc_accordion_title:before,	.sc_accordion.sc_accordion_style_3 .sc_accordion_item.sc_active .sc_accordion_title:before'
				+'{ border-color:'+clr+'; }'

				+'.hover_red .sc_section:hover .sc_title{ border-bottom-color:'+clr+'; }'

				+'::selection { background-color:'+clr+';}'
				+'::-moz-selection { background-color:'+clr+';}'

				+'.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page #content input.button:hover,	.woocommerce .quantity input[type="button"]:hover, .woocommerce #content input[type="button"]:hover, .woocommerce-page .quantity input[type="button"]:hover, .woocommerce-page #content .quantity input[type="button"]:hover,	.woocommerce ul.cart_list li > .amount, .woocommerce ul.product_list_widget li > .amount, .woocommerce-page ul.cart_list li > .amount, .woocommerce-page ul.product_list_widget li > .amount,	.woocommerce ul.cart_list li span .amount, .woocommerce ul.product_list_widget li span .amount, .woocommerce-page ul.cart_list li span .amount, .woocommerce-page ul.product_list_widget li span .amount,	.woocommerce ul.cart_list li ins .amount, .woocommerce ul.product_list_widget li ins .amount, .woocommerce-page ul.cart_list li ins .amount, .woocommerce-page ul.product_list_widget li ins .amount,	.woocommerce.widget_shopping_cart .total .amount, .woocommerce .widget_shopping_cart .total .amount, .woocommerce-page.widget_shopping_cart .total .amount, .woocommerce-page .widget_shopping_cart .total .amount,	.woocommerce a:hover h3, .woocommerce-page a:hover h3,	.woocommerce .cart-collaterals .order-total strong, .woocommerce-page .cart-collaterals .order-total strong,	.woocommerce .checkout #order_review .order-total .amount, .woocommerce-page .checkout #order_review .order-total .amount,	.woocommerce .star-rating, .woocommerce-page .star-rating, .woocommerce .star-rating:before, .woocommerce-page .star-rating:before,	.widget_area .widgetWrap ul > li .star-rating span, .woocommerce #review_form #respond .stars a, .woocommerce-page #review_form #respond .stars a'
				+'{	color: '+clr+';}'

				+'.woocommerce .woocommerce-message:before, .woocommerce-page .woocommerce-message:before,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range'
				+'{background-color: '+clr+';}'

				+'.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle'
				+'{background: '+clr+';}'

				+'.woocommerce .woocommerce-message, .woocommerce-page .woocommerce-message,	.woocommerce a.button.alt:active, .woocommerce button.button.alt:active, .woocommerce input.button.alt:active, .woocommerce #respond input#submit.alt:active, .woocommerce #content input.button.alt:active, .woocommerce-page a.button.alt:active, .woocommerce-page button.button.alt:active, .woocommerce-page input.button.alt:active, .woocommerce-page #respond input#submit.alt:active, .woocommerce-page #content input.button.alt:active,	.woocommerce a.button:active, .woocommerce button.button:active, .woocommerce input.button:active, .woocommerce #respond input#submit:active, .woocommerce #content input.button:active, .woocommerce-page a.button:active, .woocommerce-page button.button:active, .woocommerce-page input.button:active, .woocommerce-page #respond input#submit:active, .woocommerce-page #content input.button:active'
				+'{border-top-color: '+clr+';}'

				+'.theme_accent2,	.sc_team .sc_team_item .sc_team_item_position,			h3, .h3, h3 > a, .h3 > a,	.sc_blogger h3 > a, .sc_blogger .h3 > a,	.openRightMenu:hover:before,	.topWrap .search:not(.searchOpen):hover:before,	.sliderHomeBullets.slider_alias_15 .order a:hover,	.sc_blogger.style_date .sc_blogger_item .sc_blogger_info .post_author,	.sc_blogger.style_date .sc_blogger_item .sc_blogger_info .comments_number,#wp-calendar tbody td.today, #wp-calendar tbody td.today a,	.wp-calendar tbody td.today,	.wp-calendar tbody td.today a'
				+'{ color:'+clr+'; }'

				+'.theme_accent2_bgc,	.sc_title_divider.theme_accent2 .sc_title_divider_before,	.sc_title_divider.theme_accent2 .sc_title_divider_after,	.sliderHomeBullets.slider_alias_15 .order a,	.dark .sc_slider_pagination_area .flex-control-nav.manual li.active .slide_date,	.dark .sc_slider_pagination_area .flex-control-nav.manual li.cs-active-pagination .slide_date,	.dark .sc_slider_pagination_area .flex-control-nav.manual li:hover .slide_date,	.sc_blogger.style_date .sc_blogger_item .sc_blogger_date,	.sc_video_player .sc_video_play_button:after,	.footerStyleLight .footerWidget .sc_video_player .sc_video_play_button:after,	.twitBlock,	.twitBlockWrap,	.sliderHomeBullets.slider_alias_13 .order a:hover'
				+'{ background-color:'+clr+'; }'

				+'.twitBlock .sc_slider .flex-direction-nav li'
				+'{ background-color:'+clr+' !important; }'

				+'.theme_accent2_bg { background:'+clr+'; }'

				+'.tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"], .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"] > a, #tribe_events_filters_wrapper input[type="submit"], .tribe-events-button, #tribe-events .tribe-events-button, .tribe-events-button.tribe-inactive, #tribe-events .tribe-events-button:hover, .tribe-events-button:hover, .tribe-events-button.tribe-active:hover'
				+'{	background-color: '+clr+';}'

				+'#tribe-bar-form .tribe-bar-submit input[type="submit"] { background:'+clr+'; }';

		if (window.theme_skin_set_theme_color)
			css_text = theme_skin_set_theme_color(css_text, clr);


        // Main menu (Top panel) background
        clr = rgb2hex(jQuery('#co_menu_color').css('backgroundColor'));
        rgb = hex2rgb(clr);

        css_text +=
            '.topWrap,.topWrap .topMenuStyleLine > ul > li ul,.topMenuStyleLine > ul .menu-panel,.usermenu_area' + ' { background-color: ' + clr + '; }'

        + '.top_panel_above .fullScreenSlider .topWrap,.top_panel_above .fullScreenSlider .topWrap .topMenuStyleLine > ul > li ul,.top_panel_above .fullScreenSlider .topWrap .topMenuStyleLine > ul > li .menu-panel' + ' { background-color: rgba(' + rgb.r + ',' + rgb.g + ',' + rgb.b + ',0.8); }'

        + '.topWrap .topMenuStyleLine > ul > li ul,.topMenuStyleLine > ul#mainmenu ul.menu-panel' + ' { border-color: ' + clr + '; }';

        if (window.theme_skin_set_menu_bgcolor)
            css_text = theme_skin_set_menu_bgcolor(css_text, clr);

        // Main menu (Top panel) colors
        var hsb = hex2hsb(clr);
        var clr01, clr02, clr04, clr05, clr07;
        if (hsb.b > 90 && ((hsb.h >= 45 && hsb.h <= 185) || hsb.s < 20)) {
            clr = '#272727';
            clr01 = 'rgba(39,39,39,0.1)';
            clr02 = 'rgba(39,39,39,0.2)';
            clr04 = 'rgba(39,39,39,0.4)';
            clr05 = 'rgba(39,39,39,0.5)';
            clr07 = 'rgba(39,39,39,0.7)';
        } else {
            clr = '#ffffff';
            clr01 = 'rgba(255,255,255,0.1)';
            clr02 = 'rgba(255,255,255,0.2)';
            clr04 = 'rgba(255,255,255,0.4)';
            clr05 = 'rgba(255,255,255,0.5)';
            clr07 = 'rgba(255,255,255,0.7)';
        }
        css_text +=
            '.logo, .logo_text,.logo a,.topWrap .topMenuStyleLine > ul > li > a,.topWrap .topMenuStyleLine > ul > li ul li a,.topMenuStyleLine ul#mainmenu .menu-panel .item_placeholder .item_title,.topMenuStyleLine ul#mainmenu .menu-panel .item_placeholder .item_title a,.topMenuStyleLine ul#mainmenu .menu-panel.thumb .item_placeholder .item_title,.topMenuStyleLine ul#mainmenu .menu-panel.thumb .item_placeholder .item_title a,.topMenuStyleLine ul#mainmenu .menu-panel .item_placeholder .item_info > * > span,.topMenuStyleLine ul#mainmenu .menu-panel .item_placeholder .item_info > * > em,.topMenuStyleLine ul#mainmenu .menu-panel ul.columns > li a,.topWrap .topMenuStyleFon > ul > li > a,.top_panel_above .fullScreenSlider .topWrap .topMenuStyleLine > ul > li a,.topMenuStyleLine ul#mainmenu > li ul li a .menu_icon' + ' { color: ' + clr + '; }' + '.topMenuStyleLine ul#mainmenu .menu-panel ul.columns > li > a,.topMenuStyleLine ul#mainmenu .menu-panel ul.thumb_title > li > a,.topMenuStyleLine ul#mainmenu .menu-panel ul.columns > li > a:hover,.topMenuStyleLine ul#mainmenu .menu-panel ul.thumb_title > li > a:hover' + ' { color: ' + clr + ' !important;	}' + '.topWrap .topMenuStyleLine > ul > li:after' + ' { background:' + clr + '; }' + '.topWrap .search:before,.topWrap .search .searchForm .searchSubmit .icoSearch:before,.openRightMenu:before' + ' { color: ' + clr04 + '; }' + '.topWrap .usermenu_area,.topWrap .search .searchForm .searchField' + ' { color: ' + clr05 + '; }' + '.topWrap .usermenu_area a,.menu_item_description,.logo .logo_slogan' + ' { color: ' + clr07 + '; }' + '.topWrap .usermenu_area a:hover,.topWrap .usermenu_area ul.usermenu_list > li.sfHover > a' + ' { color: ' + clr + '; }' + '.topWrap .search, .openRightMenu' + ' { border-color: ' + clr04 + '; }' + '.topMenuStyleLine ul#mainmenu .menu-panel ul.columns > li + li' + ' { border-color: ' + clr02 + '; }' + '.openResponsiveMenu' + ' { border-top-color: ' + clr02 + '; color: ' + clr + '; }' + '.responsive_menu .menuTopWrap > ul > li' + ' { border-bottom-color: ' + clr01 + '; }';

       /* if (window.theme_skin_set_menu_color)
	   css_text = theme_skin_set_menu_color(css_text, clr);*/

		// User panel background
        clr = rgb2hex(jQuery('#co_user_menu_color').css('backgroundColor'));
        rgb = hex2rgb(clr);

        css_text +=
            '.usermenu_area' + ' { background-color: ' + clr + '; }';

        if (window.theme_skin_set_user_menu_bgcolor)
            css_text = theme_skin_set_user_menu_bgcolor(css_text, clr);

        // User menu color
        hsb = hex2hsb(clr);
        if (hsb.b > 90 && ((hsb.h >= 45 && hsb.h <= 185) || hsb.s < 20)) {
            clr = '#272727';
            clr01 = 'rgba(39,39,39,0.1)';
            clr05 = 'rgba(39,39,39,0.5)';
            clr07 = 'rgba(39,39,39,0.7)';
        } else {
            clr = '#ffffff';
            clr01 = 'rgba(255,255,255,0.1)';
            clr05 = 'rgba(255,255,255,0.5)';
            clr07 = 'rgba(255,255,255,0.7)';
        }
        css_text +=
            '.topWrap .usermenu_area' + ' { color: ' + clr05 + '; }' + '.topWrap .usermenu_area a' + ' { color: ' + clr07 + '; }' + '.topWrap .usermenu_area a:hover,.topWrap .usermenu_area ul.usermenu_list > li.sfHover > a' + ' { color: ' + clr + '; }';
       /* if (window.theme_skin_set_user_menu_color)
	   css_text = theme_skin_set_user_menu_color(css_text, clr);*/
		
		// Apply styles
		styles.html(css_text);
	}
}


jQuery(document).ready(function() {
	"use strict";
	// Theme & Background color
	jQuery('#co_theme_color').css('backgroundColor', '#0f6fa9');
	jQuery('#co_menu_color').css('backgroundColor', '#e33c1c');
	jQuery('#co_user_menu_color').css('backgroundColor', '#191d1e');
	jQuery('#co_bg_color').css('backgroundColor', '');
});
