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
        /*
        
        ///////////////////////////////////////////////////
        $id = $this->session->s_id;
        SELECT member.mem_user,mycourse.my_mem_user FROM `member`
        INNER JOIN mycourse ON $id = mycourse.my_mem_user 
        WHERE mycourse.my_isTutor = 0 อันนี้เป็นตารางสรับผู้เรียน
        */
        /*
        $sql = "select * from course order by c_id asc";
        $rs = $this->db->query($sql);*/
        //$data['rs'] = $rs->result_array();
        // $data['rs_tu'] = $this->tb_tutor();
        // $data['rs_st'] = $this->tb_student();
        $this->db->select('*');
        $this->db->from('course');
        $this->db->join('member', 'course.c_mem_user = member.mem_user');
        $this->db->where('course.c_status', '1'); 
        $query = $this->db->get();
        $data['rs'] = $query->result_array();
        
        $data['tb_tutor'] = $this->tb_tutor();
        $data['tb_list'] = $this->tb_list();
        $data['main_content'] = "home/home";
        $this->load->view('includes/templete', $data);
        /*
         $sql = "SELECT course.c_mem_user,member.mem_user 
        FROM `course` 
        INNER JOIN member ON course.c_mem_user = member.mem_user";
        $rs = $this->db->query($sql);
        $data['rs'] = $rs->result_array();
        $data['main_content'] = "home/home";
        $this->load->view('includes/templete', $data);
			รายชื้อผู้สอน
        */
    }
    
    public function course()
    {
        return  $this->db->query($sql);
    }
    
    public function tb_tutor()
	{
        $this->db->select('*');
        $this->db->from('mycourse');
        $this->db->join('course', 'mycourse.my_c_id = course.c_id');
        $this->db->where('mycourse.my_isTutor','1');
        $this->db->where('course.c_status', '1'); 
        $this->db->where('mycourse.my_mem_user',$this->session->s_user);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function tb_list()
	{
        $this->db->select('*');
        $this->db->from('mycourse');
        $this->db->join('course', 'mycourse.my_c_id = course.c_id');
        $this->db->where('mycourse.my_isTutor','0');
        $this->db->where('course.c_status','1');
        $this->db->where('mycourse.my_mem_user',$this->session->s_user);
        $query = $this->db->get();
        return $query->result_array();
    }

}