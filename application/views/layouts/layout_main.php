<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title><?php echo $title_for_layout; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!-- load main css files -->
<link rel="stylesheet" href="<?php echo base_url() . CSS_MAIN; ?>" type="text/css" media="screen" />

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
		<div id="footer-body">
			<?php //$this->load->view('footer'); ?>
            FOOTER here
		</div>
	</div>
</div>

</body>
</html>