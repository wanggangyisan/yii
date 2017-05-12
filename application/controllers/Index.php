<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/4
 * Time: 15:22
 */
class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("page");
    }
    public function info()
    {
        $this->load->model("user");
        $data['data'] = $this->user->get_login();
        $this->load->view("herder");
        $this->load->view("index");
        $this->load->view('foot');
    }
}