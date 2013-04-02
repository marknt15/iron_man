<?php
/**
 * Default Login Page of REMAPS
 * 
 */

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        //$this->load->model('Access_model', 'access');
		$this->load->library('Layout');
		
		$this->load->helper('cookie');
	}
	
	function index()
	{
        
        $data = array();
		$data['title_for_layout'] = SITE_NAME . '- Login';

		// this will make $data variables available to all views even with sub views - elements/partials
		$this->load->vars($data);
        
        echo SITE_NAME . " test here echo login controller";

        //$this->layout->view('home/login');

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
    
    /*
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
    */


}