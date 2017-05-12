<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 11:42
 */
class Page extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function header()
    {
        $this->load->view('header');
    }
    function footer()
    {
        $this->load->view('footer');
    }
}