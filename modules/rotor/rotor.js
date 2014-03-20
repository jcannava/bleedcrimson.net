// $Id: rotor.js,v 1.1.2.4.2.7 2009/04/08 23:37:45 mrfelton Exp $ 

(function($) {

Drupal.RotorBanner = {};

Drupal.RotorBanner.initialize = function() {
    Drupal.RotorBanner.animate();
};

Drupal.RotorBanner.animate = function() {
	// redefine Cycle's updateActivePagerLink function 
	$.fn.cycle.updateActivePagerLink = function(pager, currSlideIndex){
		$(pager).find('.rotor-tab').removeClass('selected')
		.filter('.rotor-tab:eq(' + currSlideIndex + ')').addClass('selected');
	};
	
  for (rotor_item in Drupal.settings.RotorBanner) {
    var settings = Drupal.settings.RotorBanner[rotor_item];
    // cache the jquery context for a performance boost
    var $rotor = $('#rotor-view-id-'+ settings.view_id +'-view-display-id-'+ settings.display_id);
    
  	$('div.rotor-items', $rotor).cycle({
  		timeout: settings.time * 1000,
  		speed: settings.speed,
  		fx: settings.effect,
  		pause: settings.pause,
  		pager: $('div.rotor-tabs', $rotor),
  		pagerAnchorBuilder: function(idx, slide){
  			return $('div.rotor-tabs .rotor-tab:eq(' + idx + ')', $rotor); 
  		}
  	}); 
  }
};

if (Drupal.jsEnabled) {
  $(document).ready(function() {
    Drupal.RotorBanner.initialize();
  });
}

})(jQuery);
