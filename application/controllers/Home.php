<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sql = "select * from course order by c_id asc";
        $rs = $this->db->query($sql);
        $data['rs'] = $rs->result_array();
        $data['main_content'] = "home/home";
        $this->load->view('includes/templete', $data);
    }
    
    public function course()
    {
        
        return  $this->db->query($sql);
    }

}