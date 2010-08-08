/** rounded corners **/
jQuery(document).ready(function() {
	jQuery('#header').corner({
	  tl: { radius: 0 },
	  tr: { radius: 0 },
	  bl: { radius: 10 },
	  br: { radius: 10 }});
	jQuery('#primary li.widget-container').corner({
	  tl: { radius: 10 },
	  tr: { radius: 10 },
	  bl: { radius: 10 },
	  br: { radius: 10 }});
	jQuery('.aktt_tweets li').corner({
	  tl: { radius: 10 },
	  tr: { radius: 10 },
	  bl: { radius: 10 },
	  br: { radius: 10 }});
	jQuery('#wpng-cal-widget-events').corner({
	  tl: { radius: 10 },
	  tr: { radius: 10 },
	  bl: { radius: 10 },
	  br: { radius: 10 }});
	jQuery('#slideshow').corner({
	  tl: { radius: 20 },
	  tr: { radius: 20 },
	  bl: { radius: 20 },
	  br: { radius: 20 }});
	jQuery('#loopedSlider a.previous').corner();
	jQuery('#loopedSlider a.next').corner();
		
	/** homepage animation **/	
	jQuery('#projects_front').css('display', 'block');
	jQuery('#bubble_projects a').css('font-size', '1.2em');
	
	function hideall() {
		jQuery('.frontpage_listing').css('display','none');
		jQuery('div.bubble_links a').css('font-size', '1em');
	}
	
	jQuery('#bubble_about a').hover(function() {
		hideall();
		jQuery(this).css('font-size', '1.2em');
		jQuery(this).css('font-weight', 'bold');
		jQuery('#about_front').css('display', 'block');
		}, function() {
			jQuery(this).css('font-weight', 'normal');
	});
	
	jQuery('#bubble_community a').hover(function() {
		hideall();
		jQuery(this).css('font-size', '1.2em');
		jQuery(this).css('font-weight', 'bold');
		jQuery('#community_front').css('display', 'block');
		}, function() {
			jQuery(this).css('font-weight', 'normal');
	});
	
	jQuery('#bubble_projects a').hover(function() {
		hideall();
		jQuery(this).css('font-size', '1.2em');
		jQuery(this).css('font-weight', 'bold');
		jQuery('#projects_front').css('display', 'block');
		}, function() {
			jQuery(this).css('font-weight', 'normal');
	});
	
	jQuery('#bubble_news a').hover(function() {
		hideall();
		jQuery(this).css('font-size', '1.2em');
		jQuery(this).css('font-weight', 'bold');
		jQuery('#news_front').css('display', 'block');
		}, function() {
			jQuery(this).css('font-weight', 'normal');
	});
	
	jQuery('#bubble_events a').hover(function() {
		hideall();
		jQuery(this).css('font-size', '1.2em');
		jQuery(this).css('font-weight', 'bold');
		jQuery('#events_front').css('display', 'block');
		}, function() {
			jQuery(this).css('font-weight', 'normal');
	});
});
