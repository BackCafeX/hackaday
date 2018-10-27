<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('user/login');
    }

    public function add()
    {
        if ($this->input->post("btsave") != null) {
            $ara = array(
                "c_room" => $this->input->post("course-name"),
                "c_subject" => $this->input->post("course-subject"),
                "c_amount" => $this->input->post("course-people"),
                "c_place" => $this->input->post("course-place")

            );
            $this->db->insert("course", $ara);

            ?>
<script>alert('successfully');</script>
<?php
            redirect("Home", "refresh");
        } else {
            ?>
<script>alert('error while registering you...');</script>
<?php
        }
    }
}
