<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function view($view, $vars = array(), $return = FALSE)
	{
        $CI =& get_instance();

        try {
            $output = $CI->twig->render($view, $vars);
        } catch (Exception $e) {
            show_error(htmlspecialchars_decode($e->message()), 500, 'Twig Exception');
        }

        if ($return === TRUE)
        {
            return $output;
        }
        
		return $CI->output->append_output($output);
	}

}
