/*
* File:        jquery.rowreordering.js
* Version:     1.0.0.
* Author:      ChiLT
* 
*
* Parameters:
* @div_selector_id	|String      ID of container
* @url 				|String      URL of the server-side page used for loading data
* @hash 			|String      param in URL

*/
(function ($) {
	//$("#bible-paragraph").hashLoading( "bible-paragraph", "<?php echo $this->url->get( $this->router->getControllerName() . '/hash-bible/');?>" );
	$.fn.hashLoading = function (div_selector_id, url) {

		var bible_hash = window.location.hash.replace('#', '');
		if(bible_hash == "") bible_hash = "gen-001-001";

	    //loading bible
	    alert(url + bible_hash);
	    var target = document.getElementById(div_selector_id);
		var spinner = new Spinner().spin();
		target.appendChild(spinner.el);

	    //$( "#" + div_selector_id ).html('<center><span class="glyphicon glyphicon-refresh spinner"></span> Loading...</center>');

		$( "#" + div_selector_id ).load( url + bible_hash, function( response, status, xhr ) {
		  
		  if ( status == "error" ) {
		    var msg = "Sorry, we could not found your request: ";
		    $( "#" + div_selector_id ).html( msg + xhr.status + " " + xhr.statusText );
		  } else {
			$( "#" + div_selector_id ).html(response);
		  }

		});
		// returns the jQuery object to allow for chainability.
		return this;

	};

})(jQuery);