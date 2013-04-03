<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        //$this->load->model('Access_model', 'access');
		$this->load->library('Layout');
		
		$this->load->helper('cookie');
        
        $this->layout->setLayout('layout_admin');
	}
	
	function index()
	{
        
        $data = array();
		$data['title_for_layout'] = SITE_NAME . ' - Home';

		// this will make $data variables available to all views even with sub views - elements/partials
		$this->load->vars($data);
        
        //echo SITE_NAME . " test here echo admin dashboard controller";
        
        $this->layout->view('admin/admin_view_file');
    }
}
?>
