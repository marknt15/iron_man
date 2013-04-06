<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title><?php echo $title_for_layout; ?></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <!-- load main css files -->
    <link rel="stylesheet" href="<?php echo base_url() . CSS_MAIN; ?>" type="text/css" media="screen" />
    <!--<link rel="stylesheet" href="<?php echo base_url() . CSS_ROUNDED_CORNER; ?>" type="text/css" media="screen" />-->
    
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <!-- jQuery -->
    <script src="<?php echo base_url() . JS_JQUERY_1_9_1; ?>"></script>
    
    <!-- load Cufon fonts -->
    <script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_YUI; ?>"></script>
    <script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_MUSEO500; ?>"></script>
    <!--<script type="text/JavaScript" src="<?php echo base_url() . JS_CUFON_GOTHAM500; ?>"></script>-->
    
</head>

<body>
<!--
<hr />Page rendered in {elapsed_time} seconds<hr />
-->

<div id="page">
	<div id="header">
		<?php //$this->load->view('header'); ?>
        HEADER ITO
    </div>
	
    <div id="main">
		<?php echo $content_for_layout; ?>
	</div>
	
	<div id="minheight"></div>

	<div id="footer">
        FOOTER here
	</div>
</div>


<script language="javascript">
// Cufon must always be in the bottom part of page for faster page load
$(function() {
	
	// Initialize Cufon fonts
	Cufon.replace('#remaps-login-title', { fontFamily: 'Museo 500' })('#remaps-login-title');
//	Cufon.replace('#remaps-login-title', { fontFamily: 'Gotham 500' })('#remaps-login-title');
	
	//Cufon.replace('#top_header_container a', { fontFamily: 'Gotham 700', hover:true });
	
});
</script>

<!-- for IE fast render of cufon texts -->
<script type="text/javascript">Cufon.now();</script>

</body>
</html>