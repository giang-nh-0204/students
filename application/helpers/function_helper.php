<?php

defined('BASEPATH') or exit('No direct script access allowed');
if (!function_exists('__()')) {
    function __($file,$tring)
    {
        $ci = &get_instance();
        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'english';
        $ci->lang->load($file, $lang);
        return $ci->lang->line($tring) ? $ci->lang->line($tring) : $tring;
    }
}
if(!function_exists('getcss'))
{
    function getcss($css = false)
    {
        if($css)
        {
            foreach($css as $c)
            {
                ?>
                <link href="<?php echo base_url(); ?><?php echo $c;?>" rel="stylesheet">
                <?php
            }
        }
    }
}
if(!function_exists('getjs'))
{
    function getjs($js = false)
    {
        if($js)
        {
            foreach($js as $c)
            {
                ?>
                <script src="<?php echo base_url(); ?><?php echo $c;?>"></script>
                <?php
            }
        }
    }
}