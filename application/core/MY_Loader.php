<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader
{

    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if ($return) :
            $content  = $this->view('templates/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else :
            $this->view('templates/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        endif;
    }


    public function teachers($template_name, $vars = array(), $return = FALSE)
    {
        if ($return) :
            $content  = $this->view('templates/teachers/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/teachers/footer', $vars, $return);

            return $content;
        else :
            $this->view('templates/teachers/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/teachers/footer', $vars);
        endif;
    }

    public function admin($template_name, $vars = array(), $return = FALSE)
    {

        if ($return) :
            $content  = $this->view('templates/admin/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/admin/footer', $vars, $return);

            return $content;
        else :
            $this->view('templates/admin/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/admin/footer', $vars);
        endif;
    }

    public function students($template_name, $vars = array(), $return = FALSE)
    {


        if ($return) :
            $content  = $this->view('templates/students/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/students/footer', $vars, $return);
            return $content;
        else :

            $this->view('templates/students/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/students/footer', $vars);
        endif;
    }
}
