<?php
/**
 * Custom helper for development purposes only
 *
 * @author  Mark Edward Tan
 */

/**
 * Either echo or print_r an array or object with specified color
 */
function eko($txt = '', $will_die = '1', $color = 'black') {
	echo '<font color="' . $color . '">';
	if (is_object($txt) || is_array($txt)) {
		echo '<pre>',print_r($txt),'</pre>';
	} else {
		echo $txt . '<br />';
	}
	echo '</font>';

	if ($will_die == '1') {
		die('<hr />died here');
	}
}

/*
|---------------------------------------------------------------
| CUSTOM FUNCTIONS FOR DEBUGGING PURPOSES - marknt15
|---------------------------------------------------------------
*/
function pr($str, $color='black') {
	if (is_array($str) || is_object($str)) {
		echo '<pre>',print_r($str),'</pre>';
	} else {
		echo '<font style="font-size:12px;font-family:verdana;color:' . $color . ';">' . $str . '</font><br />';
	}

    die('<hr />died here pr()');
}


/**
 * Detect User's Operating System
 * correct alignment for Windows FF5 and IE8
 * padding:12px 63px 0 63px !important;
 * 
 *
 * correct alignment for Mac OSX FF5 and Safari
 * padding:12px 50px 0 50px !important;
 */ 
function getUserOS() {
	$OSList = array(
		'Windows 3.11' => 'Win16',
		'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)',
		'Windows 98' => '(Windows 98)|(Win98)',
		'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
		'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
		'Windows Server 2003' => '(Windows NT 5.2)',
		'Windows Vista' => '(Windows NT 6.0)',
		'Windows 7' => '(Windows NT 7.0)',
		'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
		'Windows ME' => 'Windows ME',
		'Open BSD' => 'OpenBSD',
		'Sun OS' => 'SunOS',
		'Linux' => '(Linux)|(X11)',
		'Mac OS' => '(Mac_PowerPC)|(Macintosh)',
		'QNX' => 'QNX',
		'BeOS' => 'BeOS',
		'OS/2' => 'OS/2',
		'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
	);

	// Loop through the array of user agents and matching operating systems
	foreach ($OSList as $CurrOS => $value_os) {

		$regex = "/" . $value_os . "/i";		
		$source = $_SERVER['HTTP_USER_AGENT'];
		//$source = 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; en-us) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.11';
		
		if (preg_match($regex, $source)) {
			//echo "<font color='green'>A match was found. OS = MAC ---> $value_os</font><br />";
			break;
		}
	}
	return $CurrOS;
}

//simple image resizing 
function imageResize($width, $height, $target) {
	//takes the larger size of the width and height and applies the   
	//formula accordingly...this is so this script will work   
	//dynamically with any size image 

	if ($width > $height) { 
		$percentage = ($target / $width);
	} else { 
		$percentage = ($target / $height);
	} 

	//gets the new value and applies the percentage, then rounds the value 
	$width = round($width * $percentage); 
	$height = round($height * $percentage); 

	//returns the new sizes in html image tag format... 
	return 'width="'.$width.'" height="'.$height.'"';
} 

function scaleWidthHeight($img_url, $scalePixel) {
	list($width, $height, $type, $attr) = getimagesize($img_url);	
	return imageResize($width, $height, $scalePixel);
}

?>