<?php
/**
 * Default Login Home Page of REMAPS
 * @since March 14, 2013
 */

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        //$this->load->model('Access_model', 'access');
		$this->load->library('Layout');
		
		$this->load->helper('cookie');
	}
	
	function index()
	{
        
        // check if the user is currently logged in
//        $this->login_session->is_logged_in();
		
		/*
		$config_name = $this->config->item('maintenance');
		//pr($config_name);
		
		
		// Site Maintenance
		$is_maintenance = '1';
		$test = '';

		if (isset($_GET['maintenance']) && $_GET['maintenance'] == '0') {
			$is_maintenance = '0';
		}
		//echo $is_maintenance;
		//die("<hr />dead 222");
		
		$base_url = base_url();
		
		if ($is_maintenance == '0') {
			//$base_url = str_replace('http://', '.', base_url());
			
		
			//$this->input->cookie('some_data', TRUE);
			$cookie = array(
				'name'   => 'cookie_maintenance',
				'value'  => 'MyCookieValue',
				//'expire' => '7,200', // 2 hours
				//'expire' => '15', // 15 seconds
				'expire' => '3600', // 1 hour
				//'domain' => '.some-domain.com',
				//'domain' => $base_url,
				'domain' => '',
				'path'   => '/',
				//'prefix' => 'myprefix_',
				'secure' => TRUE
			);
			
			//echo pr($cookie);
			
			$this->input->set_cookie($cookie);
			$test = 'MyCookieValue';
			
			//echo pr($_COOKIE);
			//echo $this->input->cookie('cookie_maintenance');
			//die("<hr />died here loob");
		}
		
		if (!$this->input->cookie('cookie_maintenance') || $test == 'MyCookieValue') {
		//if ($_COOKIE['cookie_maintenance'] == 'MyCookieValue') {
			
			if ($test != 'MyCookieValue') {
				//delete_cookie("cookie_maintenance");
				delete_cookie('cookie_maintenance', $base_url, '/');
				echo
				'
					<div style="margin:0 auto !important;width:700px;">
						<br /><br /><br /><br /><br /><br />
						<img src="img/maintenance/t2g_logo.jpg" />
						
						
					</div>
					<br />
					<div style="margin:0 auto !important;width:800px;">
						<img src="img/maintenance/t2g_maintenance.jpg" />
					</div>
				';
				
				die("");
			} else {
				// redirect
				redirect('', 'refresh');
			}
		}
		*/
		
        
        
        $data = array();
		$data['title_for_layout'] = SITE_NAME . '- Home';

		// this will make $data variables available to all views even with sub views - elements/partials
		$this->load->vars($data);
        
        echo "test here echo";

        $this->layout->view('home/login');

        /*
        if ($this->access->is_logged_in() == TRUE) {
//            $this->test();
            $this->logged_in_func();
        } else {
        	//$this->layout->setLayout('layout_main_sticky');
            $this->layout->view('home/index');
        }
        */
        
		
	}
    
    
    /**
     * The user is now logged in
     */
	function test()
	{
        if ($this->access->is_logged_in() != TRUE) {
            header("Location: " . base_url() . "home/index");
        }

		$data = array();

        // logged in user thumbnail picture
//        $thumb_url = base_url() . 'img/users/'. $this->session->userdata['picture'];

        // add validation here later to check if there's a picture of the current
        // logged user else use a default thumbnail
//        $thumb = getimagesize($thumb_url);
//        $user_thumb = '<img src="' . $thumb_url . '" '. imageResize($thumb[0], $thumb[1], 50) .' />';

        $fullname = $this->session->userdata['first_name'] . ' ' . $this->session->userdata['last_name'];

        // get unrated persons from the logged in users department
//        $person_info = $this->closeness->get_users_departments();

        $data['title_for_layout'] = SITE_NAME . ' - Start Test';
//		$data['user_thumb'] = $user_thumb;
		$data['fullname'] = $fullname;
//		$data['person_info'] = $person_info;
//		$data['department_name'] = $person_info['department_name'];

		// this will make $data variables available to all views even with sub views - elements/partials
		$this->load->vars($data);

        $this->layout->view('home/test');
	}


}