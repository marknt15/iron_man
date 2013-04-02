<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * edited layout library by marknt15
 * to support layouts and elements similar to cakephp
 *
 * url: http://codeigniter.com/wiki/layout_library/
 */
class Layout
{
    var $obj;
    var $layout;
    
    function Layout($layout = "layout_main")
    {
		if (is_array($layout) && isset($layout['layout'])) {
			$layout = $layout['layout'];
		}
		
		$this->obj =& get_instance();
        $this->layout = $layout;
    }

    function setLayout($layout)
	{
        $this->layout = $layout;
    }
    
    function view($view, $data=null, $return=false)
    {
        $loadedData = array();
        $loadedData['content_for_layout'] = $this->obj->load->view($view, $data, true);
        
        if ($return) {    
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        } else {
            $this->obj->load->view('layouts/' . $this->layout, $loadedData, false);
        }
    }
}
?>