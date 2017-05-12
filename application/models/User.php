<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/4
 * Time: 17:02
 */
class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_login()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

}