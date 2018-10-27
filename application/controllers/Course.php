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
            $t_start = $this->input->post("course-hours-start") . ":" . $this->input->post("course-min-start");
            $t_end = $this->input->post("course-hours-end") . ":" . $this->input->post("course-min-end");
            $ara = array(
                "c_room" => $this->input->post("course-name"),
                "c_subject" => $this->input->post("course-subject"),
                "c_amount" => $this->input->post("course-people"),
                "c_place" => $this->input->post("course-place"),
                "c_date" => $this->input->post("course-date"),
                "c_time_start" => $t_start,
                "c_time_end" => $t_end,
                "c_status" => '1',
                "c_mem_user" => $this->session->s_user
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

    public function enroll($room)
    {
        $check = 1;
        $this->db->select('*');
        $this->db->from('mycourse');
        $this->db->where('my_mem_user', $this->session->s_user);
        $query = $this->db->get();
        foreach ($query->result() as $value) {
            //echo $value->my_c_id. " = " . $room;
            if($value->my_c_id == $room){
                $check = 0;
            }
        }

        if ($check >= 1) {
            $ara = array(
                "my_mem_user" => $this->session->s_user,
                "my_c_id" => $room,
                "my_isTutor" => "0",
                "my_isPresent" => "0"
            );

            $this->db->insert("mycourse", $ara);

            ?>
<script>alert('Enroll successfully');</script>
<?php
            //redirect("Home", "refresh");
        } else {

            ?>
<script>alert('Enroll Error');</script>
<?php
            //redirect("Home", "refresh");
        }
    }
}//class

