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
	}
	
	function index()
	{
        //$this->load->vars($data);
        
        echo SITE_NAME . " test here echo CLIENT's dashboard controller";

        $this->layout->view('admin/admin_view_file');
    }
}
?>
