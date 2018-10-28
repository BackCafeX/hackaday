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

	// Functions add
    public function add()
    {
        if ($this->input->post("btsave") != null) {
            $t_start = $this->input->post("course-hours-start") . ":" . $this->input->post("course-min-start");
            $t_end = $this->input->post("course-hours-end") . ":" . $this->input->post("course-min-end");
            $ara = array(
                "c_room" => $this->input->post("course-name"),
                "c_subject" => $this->input->post("course-subject"),
                "c_place" => $this->input->post("course-place"),
                "c_date" => $this->input->post("course-date"),
                "c_time_start" => $t_start,
                "c_time_end" => $t_end,
                "c_status" => '1',
                "c_mem_user" => $this->session->s_user
            );
            $this->db->insert("course", $ara);
            
            $this->db->select('*');
            $this->db->from('course');
            
            $ary = $this->db->get();
            $arylength = $ary->num_rows();
            
            $ara2 = array(
                "my_mem_user" => $this->session->s_user,
                "my_isTutor" => '1',
                "my_c_id" => $arylength  
            );
            
            $this->db->insert("mycourse", $ara2);

?>
		<script>alert('สร้างห้องสำเร็จ');</script>
<?php
        redirect("Home", "refresh");
        } else {
?>
		<script>alert('สร้างห้องไม่สำเร็จ');</script>
<?php
        }
    }

	// Function Enroll
    public function enroll($room)
    {
        $check = 1;
        $this->db->select('*');
        $this->db->from('mycourse');
        $this->db->where('my_mem_user', $this->session->s_user);
        $query = $this->db->get();
        foreach ($query->result() as $value) {
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
		<script>alert('เข้าร่วมห้องสำเร็จ');</script>
<?php
            redirect("Home", "refresh");
        } else {

            ?>
		<script>alert('มีรายการนี้อยู่แล้ว');</script>
<?php
            redirect("Home", "refresh");
        }
    }
	
	// Function update_status
    function update_status($room)
	{
		$check = 0;
		$this->db->select('*');
        $this->db->from('course');
		$this->db->join('mycourse', 'course.c_id = mycourse.my_c_id');
		
		$this->db->where('course.c_mem_user', $this->session->s_user);
		$this->db->where('mycourse.my_mem_user', $this->session->s_user);
		$this->db->where('mycourse.my_isTutor', '1');
        $query = $this->db->get();
        
		foreach ($query->result() as $value) {
            if($value->my_c_id == $room){
                $check = 1;
            }
        }

        if ($check == 1) {
			$this->update_status2($room);

            ?>
		<script>alert('สำเร็จ');</script>
<?php
			redirect("Home", "refresh");
        } else {

?>
		<script>alert('ไม่สำเร็จ');</script>
<?php
            redirect("Home", "refresh");
        }
		 
	}
	
	// Function update_status2 
	function update_status2($room){
			$title = 0;
			$data = array(
               'c_status' => $title
            );

			$this->db->where('c_id', $room);
			$this->db->update('course', $data); 
	}
}//class