<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * created a custom session class for logging in and out
 *
 */
class Login_Session
{
    var $obj;
    var $layout;
    
    function Login_Session($layout = "layout_main")
    {
        $this->obj =& get_instance();
        $this->layout = $layout;
    }

    /**
     * checks if current user is logged in
     */
    function is_logged_in()
    {
//        echo "gumana login session";
//        echo '<pre>',print_r($this->obj->session),'</pre>';
    }

    function login()
    {
        $this->obj->session->set_userdata('is_logged_in', TRUE);
        $newdata = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
        );

        $this->obj->session->set_userdata($newdata);
    }

    function logout()
    {
        $this->session->sess_destroy();
    }
    
}
?>