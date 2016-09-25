/**
 * @file rsvp
 * @description initiates rsvp
 */
var bb = bb ? bb : {};
(function($) {
	$.extend(bb, {
		/**
		 * Setup rsvp
		 * @namespace rsvp
		 */
		rsvp: {
			/**
			 * Initiatialises rsvp
			 * @function init
			 * @memberof rsvp
			 */
			init: function() {
				var self = this;

				$('.guestinput').val('NA');
				$('.guest-entry').hide();

				$('.guest-radio').change(function() {
			        if (this.value == 'yes') {
			            $('.guest-entry').fadeIn(800);
			            if($('.guestinput').length > 0) {
			            	$('.guestinput').val('');
			            }
			        } else {
			        	$('.guest-entry').fadeOut(300);
			        	$('.guestinput').val('NA');
			        }
			    });

			}
		}
	});
	$.subscribe('pageReady', function() {
		bb.rsvp.init();
	});
}(jQuery));
