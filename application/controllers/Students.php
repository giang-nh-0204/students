<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Summary of Students
 * @property MY_Loader $load
 */
class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'title' => 'Trang chủ',
            'css' => [
                'assets/css/students.css',
                'assets/css/common.css'
            ],
            'js' => [
                'assets/js/students.js',
                'assets/js/common.js'
            ]
        ];

        $this->load->students('students/index', $data);
    }
}
