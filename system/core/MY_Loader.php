<?php

class MY_Loader extends CI_Loader
{
    public function template($template_name, $vars = array(), $return = false)
    {
        if ($return):
            $content = $this->view('templates/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else:
            // $this->view('templates/header', $vars);
            // $this->view('templates/html', $vars);
            // $this->view('templates/footer', $vars);

            $d['view'] = $template_name;
            $d['data'] = $vars;

            $this->view('templates/header', $vars);
            $this->view('templates/html', $d);
            $this->view('templates/footer', $vars);
        endif;
    }
}
