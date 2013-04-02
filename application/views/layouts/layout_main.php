<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title><?php echo $title_for_layout; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!-- load main css files -->
<link rel="stylesheet" href="<?php echo base_url() . CSS_MAIN; ?>" type="text/css" media="screen" />
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


<!-- for auto refresh - TESTING only 
<meta http-equiv="refresh" content="3" />
-->
</head>

<body>
<!--
<hr />Page rendered in {elapsed_time} seconds<hr />
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
	
    <div id="main">
		<?php echo $content_for_layout; ?>
	</div>
	
	<div id="minheight"></div>

	<div id="footer">
		<div id="footer-body">
			<?php $this->load->view('footer'); ?>
		</div>
	</div>
</div>

</body>
</html>