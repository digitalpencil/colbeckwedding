/**
 * @file navigation
 * @description initiates navigation
 */
var bb = bb ? bb : {};
(function($) {
	$.extend(bb, {
		/**
		 * Setup navigation
		 * @namespace navigation
		 */
		navigation: {
			/**
			 * Initiatialises navigation
			 * @function init
			 * @memberof navigation
			 */
			init: function() {
				var self = this;

				$('.main-nav a').smoothScroll({
					offset: 2
				});
				$(document).on("scroll", self.highlightSection);

				self.highlightSection();

			},
			highlightSection: function(event) {
			    var scrollPos = $(document).scrollTop();
			    $('.main-nav a').each(function () {
			        var currLink = $(this);
			        var refElement = $(currLink.attr("href"));
			        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
			            currLink.addClass("active");
			        }
			        else{
			            currLink.removeClass("active");
			        }
			    });
			}
		}
	});
	$.subscribe('pageReady', function() {
		bb.navigation.init();
	});
}(jQuery));
