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
        $username = $this->input->post('member_user');
        $password = $this->input->post('member_pass');
        redirect('Home');
        
    }

public function register()
{
 if($this->input->post("btsave")!=null)
 {
  $ara=array(
   "member_user"=>$this->input->post("member_user"),
   "member_pass"=>$this->input->post("member_pass"),
   "member_email"=>$this->input->post("member_email")
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
    $this->session_destroy();
    redirect("Auth","refresh");
}
}
