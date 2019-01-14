<?php

class MY_Loader extends CI_Loader
{
    public function template($template_name, $vars = array(), $return = false)
    {

        $d['view'] = $template_name;
        $d['data'] = $vars;
        $this->view('templates/html', $d);
    }
}
