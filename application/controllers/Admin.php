<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $data = [];
        $this->load->admin('admin/index',$data);
    }
}
