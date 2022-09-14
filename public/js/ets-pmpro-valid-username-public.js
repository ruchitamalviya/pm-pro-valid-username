(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	jQuery(document).ready( function($){
		let etsUserErr =   true;
		jQuery("#username").keyup(function(){
			jQuery("#pmpro_btn-submit").removeAttr("disabled");
			let etsUserName = jQuery('#username').val();
			let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if(!emailReg.test(etsUserName)){
				jQuery("#pmpro_btn-submit").removeAttr("disabled");
				jQuery('.pmpro_asterisk:first').html("");
			}else{
				jQuery('.pmpro_asterisk:first').html("It can not be valid username");
				jQuery('.pmpro_asterisk:first').css("color","red");
				jQuery('.pmpro_asterisk:first').css('padding-left','10px');
				jQuery("#pmpro_btn-submit").attr("disabled", true);
				etsUserErr = false;
				return false;
			}
		});
	});

})( jQuery );
