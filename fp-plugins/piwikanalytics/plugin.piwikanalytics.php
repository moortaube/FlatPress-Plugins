<?php
/*
Plugin Name: Piwik Analytics (http://PIWIK_URL/)
Plugin URI: http://moortaube.de/
Description: Adds piwik analytics tracking code to FlatPress
Author: moortaube
Version: 1.0
Author URI: http://moortaube.de/
*/ 

function plugin_PiwikAnalytics() {
?>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://PIWIK_URL/" : "http://PIWIK_URL/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", PIWIKID);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://PIWIK_URL/piwik.php?idsite=PIWIK" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Tag -->

<?php
}
add_action('wp_footer', 'plugin_PiwikAnalytics');
?>