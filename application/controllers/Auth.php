<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['errorlog'] = "";
        $this->load->view('user/login', $data);
    }

    public function login()
    {
        if ($post = $this->input->post()) {
            extract($post);
            $sql = "select * from member where mem_user = '$member_user' and mem_pass = '$member_pass'";
            $ret = $this->db->query($sql);
            if ($ret->num_rows()) {
                $data_ret = $ret->result();
                $this->session->set_userdata('s_id', $data_ret[0]->id);
                $this->session->set_userdata('s_user', $data_ret[0]->mem_user);
                $this->session->set_userdata('s_fname', $data_ret[0]->mem_fname);
                redirect('Home');
            } else {
                $data['errorlog'] = "<div class='alert alert-danger' role='alert'>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</div>";
                $this->load->view('user/login', $data);
            }
        }

        // $username = $this->input->post('member_user');
        // $password = $this->input->post('member_pass');
    }

    public function register()
    {
        if ($this->input->post("btsave") != null) {
            $ara = array(
                "mem_user" => $this->input->post("member_user"),
                "mem_pass" => $this->input->post("member_pass"),
                "mem_email" => $this->input->post("member_email"),
                "mem_age" => $this->input->post("member_age"),
                "mem_gender" => $this->input->post("member_gender"),
                "mem_fname" => $this->input->post("fname_user"),
                "mem_lname" => $this->input->post("lname_user"),
                "mem_faculty" => $this->input->post("fac_user")
            );
            $this->db->insert("member", $ara);
?>
<script>alert('successfully registered ');</script>
<?php
            redirect("Auth", "refresh");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("Auth", "refresh");
    }
}