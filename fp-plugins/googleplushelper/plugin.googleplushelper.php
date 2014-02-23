<?php
/*
Plugin Name: Google+ Helper
Plugin URI: http://moortaube.de/
Description: Adds Google+-Badge-Support to your blog
Author: moortaube
Version: 1.0
Author URI: http://Blog.moortaube.de/
*/

function plugin_googleplushelper_head() {
	// you have to add your Google+-ID in the link-tag below
	echo '<!-- Google+ Badge Head START (https://developers.google.com/+/plugins/badge/preview) -->
	<link href="https://plus.google.com/YOUR_ID" rel="publisher" />
	<script type="text/javascript">
		window.___gcfg = {lang: "de"};
		(function() {
			var po = document.createElement("script");
			po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(po, s);
		})();
	</script>';
}

function plugin_googleplushelper_body() {
	// you have to add "{action hook=plugin_googleplushelperbody}" to your template or paste the HTML-Code in on of your entries
	echo '
	<div id="google_plus">
		<div id="googleplusbadge">
			<!-- Google+ Badge Body START (https://developers.google.com/+/plugins/badge/preview) data-height="131" OR data-height="69" -->
			<!-- Place this tag where you want the badge to render -->
			<div class="g-plus" data-href="https://plus.google.com/YOUR_ID?rel=publisher" data-width="300" data-height="69" data-theme="light"></div>
			<!-- Google+ Badge Body ENDE -->
		</div>
		<div id="googleplus">
			<!-- Google+ Body START (http://www.google.com/webmasters/+1/button/) -->
			<!-- Platzieren Sie dieses Tag an der Stelle, an der die +1-Schaltfläche angezeigt werden soll. -->
			<div class="g-plusone" data-size="tall" data-annotation="inline" data-width="280" data-href="http://blog.moortaube.de"></div>
			<!-- Google+ Body ENDE -->
		</div>
	</div>';
}
 
add_action('wp_head', 'plugin_googleplushelper_head');
add_action('plugin_googleplushelperbody', 'plugin_googleplushelper_body');
 
?>