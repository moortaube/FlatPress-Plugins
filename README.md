# FlatPress Plugins #
## by moortaube ##


### googleplushelper Instructions ###
You have to modify the plugin-file for changing your Google+-ID *(Placeholder: YOUR_ID)* in it.

**NOTE**: There are two lines you have to change!

***Line 14***

		<link href="https://plus.google.com/YOUR_ID" rel="publisher" />

***Line 33***

				<div class="g-plus" data-href="https://plus.google.com/YOUR_ID?rel=publisher" data-width="300" data-height="69" data-theme="light"></div>

### pwikianalytics Instructions ###
You have to modify the plugin-file for changing your PIWIK-Url *(Placeholder: PIWIK_URL)* and PIWIK-Side-ID *(Placeholder: PIWIKID)*.

**NOTE**: There are three lines you have to change!


***Line 16***

	var pkBaseURL = (("https:" == document.location.protocol) ? "https://PIWIK_URL/" : "http://PIWIK_URL/");

***Line 20***

	var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", PIWIKID);

***Line 24***

	</script><noscript><p><img src="http://PIWIK_URL/piwik.php?idsite=PIWIK" style="border:0" alt="" /></p></noscript>