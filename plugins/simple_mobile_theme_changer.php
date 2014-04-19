<?php
// get correct id for plugin
$thisfile = basename(__FILE__, ".php"); // This gets the correct ID for the plugin.

// register plugin
register_plugin(
    $thisfile,    // ID of plugin, should be filename minus php
    'Mobile Theme Changer',    # Title of plugin
    '2.0',    // Version of plugin
    'OWS_Matthew',    // Author of plugin
    'http://OwassoWebSolutions.com/',    // Author URL
    "'This plugin automatically detects a user's browser and sets the theme accordingly.'",    // Plugin Description
    'plugins',    // Page type of plugin
    'sm_options'    // Function that displays content
);

add_action('plugins-sidebar', 'createSideMenu', array($thisfile, 'Mobile Theme Changer'));
add_action('index-pretemplate','sm_change_theme',array());

// Show options in plugin page
function sm_options() {
	// Get Settings
	 if (file_exists(GSDATAOTHERPATH . 'sm_settings.xml')) {
		 $data = getXML(GSDATAOTHERPATH . 'sm_settings.xml');
		// Get iPhone settings
		$iphone_active = $data->iphone_active;
		$iphone = $data->iphone;
		// Get webOS settings
		$webos_active = $data->webos_active;
		$webos = $data->webos;
		// Get Android settings
		$android_active = $data->android_active;
		$android = $data->android;
	}

// Process settings
	$bad = array(" ", "/",);
	$good = array("", "");	 
	if (isset($_POST['submit'])) {
		 // iPhone
		 if($_POST['IPHONE'] != '') {
			 $IPHONE = str_replace($bad, $good, $_POST['IPHONE']);
			 $IPHONE_ACTIVE = 'Yes';
		 } else {
			 $IPHONE = '';
			 $IPHONE_ACTIVE = 'No';
		 }
		 // webOS
		 if ($_POST['WEBOS'] != '') {
			 $WEBOS = str_replace($bad, $good, $_POST['WEBOS']);
			 $WEBOS_ACTIVE = 'Yes';
		 } else {
			 $WEBOS = '';
			 $WEBOS_ACTIVE = 'No';
		 }
		 // Android
		 if ($_POST['ANDROID'] != '') {
			 $ANDROID = str_replace($bad, $good, $_POST['ANDROID']);
			 $ANDROID_ACTIVE = 'Yes';
		 } else {
			 $ANDROID = '';
			 $ANDROID_ACTIVE = 'No';
		 }
		 // Save XML file
			$file = GSDATAOTHERPATH . 'sm_settings.xml';
			$xmls = @new SimpleXMLExtended('<item></item>');
			$note = $xmls->addChild('iphone', $IPHONE);
			$note = $xmls->addChild('iphone_active', $IPHONE_ACTIVE);
			$note = $xmls->addChild('webos', $WEBOS);
			$note = $xmls->addChild('webos_active', $WEBOS_ACTIVE);
			$note = $xmls->addChild('android', $ANDROID);
			$note = $xmls->addChild('android_active', $ANDROID_ACTIVE);
			XMLsave($xmls, $file);	
			echo '<div class="updated">Your Changes have been saved!</div>';
			header("Location: " . $_SERVER ['REQUEST_URI'] . "?saved=yes");
	 }

// Show Content
	?>

<h2>Mobile Theme Changer</h2>
This plugin automatically detects a user's browser and changes the theme if the user's browser is
		a mobile user agent. Currently supported browsers are:<br />
        <br />
-WebOS <br />
-iPhone <br/>
-Android <br />
<br />
Place the theme in the themes folder with a distinctive name.<br />
<br />
<p>If you do not currently have a mobile theme, one place to download one is within the GetSimple Support
  Forums. Here is a <a href='http://get-simple.info/forum/viewtopic.php?id=202'>link</a> to iGetSimple
  which is a well made and recomended theme that I found on the GetSimple Support forums. <br />
</p>
<h2>Mobile Theme Changer Settings</h2>
<p>Please note leaving any field blank will automatically disable that 
  feature. You may come back and fill in any fields at any time. (Case Sensative!) </p>
<form name="sm_settings" method="post" action="<?php echo $_SERVER ['REQUEST_URI']; ?>">
  <p><b>iPhone Theme Folder:</b>
    <input type="text" name="IPHONE" class="text" value="<?php if(isset($iphone)) { echo $iphone; } ?>"/>
    (Ex. "iPhone")</p>
  <p><b>webOS Theme Folder:</b>
    <input type="text" name="WEBOS" class="text" value="<?php if(isset($webos)) { echo $webos; } ?>"/>
    (Ex. "webOS")</p>
  <p><b>Android Theme Folder:</b>
    <input type="text" name="ANDROID" class="text" value="<?php if(isset($android)) { echo $android; } ?>"/>
    (Ex. "Android")</p>
  <p>
    <input type="submit" name="submit" value="Save" />
  </p>
  </form>
  <p style="float:right">Developed by: OWS_Matthew &amp; Agent L Productions</p>
  <?php
}

// Check browser, and change theme
function sm_change_theme() {
	// Get Settings
	if (file_exists(GSDATAOTHERPATH . 'sm_settings.xml')) {
			$data = getXML(GSDATAOTHERPATH . 'sm_settings.xml');
			// Get iPhone settings
			$iphone_active = $data->iphone_active;
			$iphone = $data->iphone;
			// Get webOS settings
			$webos_active = $data->webos_active;
			$webos = $data->webos;
			// Get Android settings
			$android_active = $data->android_active;
			$android = $data->android;
	}

   global $TEMPLATE;
   // Check for webOS
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'webOS') == TRUE) {
	   if ($webos_active == 'Yes') {
				$TEMPLATE = $webos;
	   }
   }
   // Check for iPhone
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') == TRUE) {
	   if($iphone_active == 'Yes') {
				$TEMPLATE = $iphone;
	   }

   }
   // Check for Android
   if (strpos($_SERVER['HTTP_USER_AGENT'], 'Android') == TRUE) {
	   if ($android_active == 'Yes') {
				$TEMPLATE = $android;
	   }
   }

}
?>
