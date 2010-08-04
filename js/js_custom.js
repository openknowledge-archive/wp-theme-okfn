$j=jQuery.noConflict();

/** rounded corners **/
$j(document).ready(function() {
		$j('#primary li.widget-container').corner({
		  tl: { radius: 10 },
		  tr: { radius: 10 },
		  bl: { radius: 10 },
		  br: { radius: 10 }});
		$j('.aktt_tweets li').corner({
		  tl: { radius: 10 },
		  tr: { radius: 10 },
		  bl: { radius: 10 },
		  br: { radius: 10 }});
		$j('#wpng-cal-widget-events').corner({
		  tl: { radius: 10 },
		  tr: { radius: 10 },
		  bl: { radius: 10 },
		  br: { radius: 10 }});
		$j('#slideshow').corner({
		  tl: { radius: 20 },
		  tr: { radius: 20 },
		  bl: { radius: 20 },
		  br: { radius: 20 }});
		$j('#loopedSlider a.previous').corner();
		$j('#loopedSlider a.next').corner();
		
/** homepage animation **/	
	$j('#projects_front').css('display', 'block');
	$j('#bubble_projects a').css('font-size', '1.2em');
	
	function hideall(){
		$j('.frontpage_listing').css('display','none');
		$j('div.bubble_links a').css('font-size', '1em');
	}
	
	$j('#bubble_about a').hover(function(){
		hideall();
		$j(this).css('font-size', '1.2em');
		$j(this).css('font-weight', 'bold');
		$j('#about_front').css('display', 'block');
	}, function(){
		$j(this).css('font-weight', 'normal');
	});
	
	$j('#bubble_community a').hover(function(){
		hideall();
		$j(this).css('font-size', '1.2em');
		$j(this).css('font-weight', 'bold');
		$j('#community_front').css('display', 'block');
	}, function(){
			$j(this).css('font-weight', 'normal');
		});
	
	$j('#bubble_projects a').hover(function(){
		hideall();
		$j(this).css('font-size', '1.2em');
		$j(this).css('font-weight', 'bold');
		$j('#projects_front').css('display', 'block');
	}, function(){
			$j(this).css('font-weight', 'normal');
		});

	
	$j('#bubble_news a').hover(function(){
		hideall();
		$j(this).css('font-size', '1.2em');
		$j(this).css('font-weight', 'bold');
		$j('#news_front').css('display', 'block');
	}, function(){
			$j(this).css('font-weight', 'normal');
		});
	
	$j('#bubble_events a').hover(function(){
		hideall();
		$j(this).css('font-size', '1.2em');
		$j(this).css('font-weight', 'bold');
		$j('#events_front').css('display', 'block');
	}, function(){
			$j(this).css('font-weight', 'normal');
		});
	
});
