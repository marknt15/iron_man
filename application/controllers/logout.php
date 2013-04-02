<?php
/**
 * @author  Mark Edward Tan
 * Logout the logged in user
 *
 */

class Logout extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model('Access_model', 'access');
	}

	function index()
	{
        $this->session->sess_destroy();
        header("Location: " . base_url());
	}

}