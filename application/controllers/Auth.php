<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    }

    public function index()
    {
        $this->load->view('user/login');            
    }

    public function login()
    {
         
        if($post = $this->input->post()){
            extract($post);
            $sql = "select * from member where mem_user = '$member_user' and mem_pass = '$member_pass'";
            $ret = $this->db->query($sql);
            if($ret->num_rows()){
                $data_ret = $ret->result();
                $this->session->set_userdata('s_id',$data_ret[0]->s_id);
                $this->session->set_userdata('s_name',$data_ret[0]->s_name);
                redirect('Home');
            }else{
                $data['message'] = "Wrong username or password";
                $this->load->view('user/login');
            }
        }
        
        //$username = $this->input->post('member_user');
        //$password = $this->input->post('member_pass');
        
        
    }

public function register()
{
 if($this->input->post("btsave")!=null)
 {
  $ara=array(
   "mem_user"=>$this->input->post("member_user"),
   "mem_pass"=>$this->input->post("member_pass"),
   "mem_email"=>$this->input->post("member_email"),
   "mem_age"=>$this->input->post("member_age"),
   "mem_gender"=>$this->input->post("member_gender")
);
  $this->db->insert("member",$ara);


  ?>
  <script>alert('successfully registered ');</script>
  <?php
  redirect("Auth","refresh");
}else{
  ?>
  <script>alert('error while registering you...');</script>
  <?php
}
}
public function logout(){
    $this->session->sess_destroy();
    redirect("Auth","refresh");
}
}
