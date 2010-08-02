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
});
