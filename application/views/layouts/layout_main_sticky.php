<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>STICKY FOOTER TEST - <?php echo $title_for_layout; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!-- load main css files -->
<!--<link rel="stylesheet" href="<?php //echo base_url() . CSS_MAIN; ?>" type="text/css" media="screen" />-->
<link rel="stylesheet" href="<?php echo base_url() . 'css/main_sticky_footer.css'; ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url() . CSS_MENU; ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url() . CSS_ROUNDED_CORNER; ?>" type="text/css" media="screen" />

<!-- site favicon -->
<link rel="icon" href="<?php echo base_url() . SITE_ICON; ?>" type="image/ico" />
<link rel="shortcut icon" href="<?php echo base_url() . SITE_ICON; ?>" type="image/x-icon" />

<!-- jQuery nivo slider, for home only -->
<link rel="stylesheet" href="<?php echo base_url() . CSS_NIVO_DEFAULT_THEME; ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url() . CSS_NIVO; ?>" type="text/css" media="screen" />

<!-- jQuery UI, for contact only - make this dynamic -->
<link rel="stylesheet" href="<?php echo base_url() . CSS_JQUERY_UI_ALL; ?>" type="text/css" media="screen" />
<!--
<link rel="stylesheet" href="../../themes/cupertino/jquery.ui.all.css">
-->

<!-- load required dynamic css files per page -->
<?php //echo $dynamic_css_files; ?>

<!-- jQuery -->
<script src="<?php echo base_url() . JS_JQUERY_1_4_2; ?>"></script>

<!-- jQuery Nivo Slider -->
<script src="<?php echo base_url() . JS_NIVO; ?>"></script>

<!-- jQuery Curvy Corners - for rounded Divs -->
<script type="text/JavaScript" src="<?php echo base_url() . JS_CURVY; ?>"></script>


<!-- jQuery UI - set this to be included dynamically when needed only -->
<script type="text/JavaScript" src="<?php echo base_url() . JS_JQUERY_UI_CORE; ?>"></script>
<script type="text/JavaScript" src="<?php echo base_url() . JS_JQUERY_UI_WIDGET; ?>"></script>
<script type="text/JavaScript" src="<?php echo base_url() . JS_JQUERY_UI_BUTTON; ?>"></script>
<script type="text/JavaScript" src="<?php echo base_url() . JS_JQUERY_UI_DATEPICKER; ?>"></script>


<!-- load Cufon fonts -->
<script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_YUI; ?>"></script>
<script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_MUSEO300; ?>"></script>
<script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_MUSEO500; ?>"></script>
<script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_GOTHAM500; ?>"></script>
<script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_GOTHAM700; ?>"></script>


<!-- Fix for the Cufon misalignment in IE 8 browser -->
<!--[if IE 8]>
<style type="text/css">
#navMenu li a {
	margin-top:0 !important;	
}
</style>
<![endif]-->

<!-- for auto refresh - TESTING only 
<meta http-equiv="refresh" content="3" />
-->
</head>

<body>
<!--
<hr />Page rendered in {elapsed_time} seconds<hr />

<div style="border:1px solid red;">
	Put Links here like SIGN UP, LOGIN, SEARCH TEXTBOX
</div>
-->




<div id="page">

	<div id="header">
		<?php $this->load->view('header'); ?>
    </div>
	
	
	<div id="top_menu" style="">
		<div style="width:950px;margin:0 auto;">
			<?php $this->load->view('menu'); ?>
		</div>
	</div>
	


	<!--
    <div id="main">
		<?php //echo $content_for_layout?>
	</div>
	-->

	<div id="main">
		<?php echo $content_for_layout; ?>
		<!--
		test here content <br />
		test here content <br />
		test here content <br />
		test here content <br />
		-->
	</div>

	<div id="minheight"></div>

	<div id="footer">
		<div id="footer-body">
			<?php $this->load->view('footer'); ?>
		</div>
	</div>

	
	<!-- Do not do sticky footer -->
	<!--
	<div id="footer">
		<div id="footer-body">
			<?php //$this->load->view('footer'); ?>
		</div>
	</div>
	-->
</div>




<?php
$menu_array = array('home', 'packages', 'payment', 'terms', 'contact');
$menu_final = '';
foreach ($menu_array as $jquery_id) {
	if ($this->uri->segment(1) != $jquery_id) {
		$menu_final .= '#menu_' . $jquery_id . ', ';
	}
}
$menu_final = substr($menu_final, 0, -2);
?>

<script language="javascript">
// Cufon must always be in the bottom part of page for faster page load
$(function() {
	$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
		slices:20,
		animSpeed:500, //Slide transition speed
		pauseTime:6000,
		directionNav:false,
		directionNavHide:true,
		pauseOnHover:true,
		captionOpacity:1.0
	});
	
	// Initialize Cufon fonts
	//Cufon.replace('<?php echo $menu_final; ?>', { fontFamily: 'Museo 500', fontSize: '14px', hover: true, lineheight: '1.2' });
	Cufon.replace('<?php echo $menu_final; ?>', { fontFamily: 'Museo 500', fontSize: '14px', hover: true });
	Cufon.replace('.rounded-header', { fontFamily: 'Museo 500' })('#footer-about h1, #footer-nav h1, #copyright span');
	Cufon.replace('.ul-header-int, .ul-header-loc', { fontFamily: 'Museo 500', hover:true });
	//Cufon.replace('#top_header_container a', { fontFamily: 'Gotham 700', hover:true });
	
});
</script>

<!-- for IE fast render of cufon texts -->
<script type="text/javascript">Cufon.now();</script>
</body>
</html>