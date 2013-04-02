<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>ADMIN LAYOUT - <?php echo $title_for_layout; ?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!-- load main css files -->
<link rel="stylesheet" href="<?php echo base_url() . CSS_MAIN; ?>" type="text/css" media="screen" />

</head>

<body>
ADMIN LAYOUT HERE!
<hr />

<div id="page">

    <div id="top_header" style="background:white;">
        <div style="width:950px;margin:0 auto;">
            HEADER here
        </div>
    </div>


    <div id="top_body">
        <div id="page" style="width:950px;margin:0 auto;">

            <div id="main">
                <?php echo $content_for_layout?>
            </div>
        </div>
    </div>


    <div id="footer">
        <div id="footer-body">
            <?php //$this->load->view('footer'); ?>
            FOOTER HERE
        </div>
    </div>

</div>

</body>
</html>