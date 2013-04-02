<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title><?php echo $title_for_layout; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="/css/main.css" type="text/css" />

<!-- load main css files -->
<link rel="stylesheet" href="<?php echo base_url() . CSS_MAIN;?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url() . CSS_MENU;?>" type="text/css" media="screen" />

<!-- site favicon -->
<link rel="icon" href="<?php echo base_url() . SITE_ICON;?>" type="image/ico" />
<link rel="shortcut icon" href="<?php echo base_url() . SITE_ICON;?>" type="image/x-icon" />

<!-- load required dynamic css files per page -->
<?php //echo $dynamic_css_files; ?>

<script src="<?php echo base_url(); ?>js/jquery-1.6.1.min.js"></script>

<script language="javascript">
$().ready(function(){
	
});
</script>

<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
<![endif]-->

</head>

<body>

<div id="page">
	<div id="header">
        <!--
        <a href="<?php echo base_url(); ?>">
        <img class="logo" border="0" src="<?php echo base_url(); ?>img/logo.png" />
        <img class="logo-text" border="0" src="<?php echo base_url(); ?>img/logo_text.png" />
        </a>
        Header here
        -->
        
        <div class="add-border">Logo Here</div>
        <br />

		<!-- add menu here -->
        <div>
			<?php $this->load->view('menu'); ?>
        </div>

    </div>

    <div id="main">
        <hr />
		<div style="border:1px solid blue;padding:5px;">
			LAYOUT OTHER ITO
		</div>
		
		<hr />
	
		<?php echo $content_for_layout?>
	</div>
</div>

<div id="footer">
    Footer here
</div>

</body>
</html>