<style>
tbody tr:hover{
 background-color: #f0f0f5
}
.form-control-3 {
	  display: block;
	  width: 70%;
	  height: calc(2.25rem + 2px);
	  padding: 0.375rem 0.75rem;
	  font-size: 1rem;
	  line-height: 1.5;
	  color: #495057;
	  background-color: #fff;
	  background-clip: padding-box;
	  border: 1px solid #ced4da;
	  border-radius: 0.25rem;
	  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	}

</style>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row"> <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
         <div class="form-group w3-container">
           <br><h4 class="w3-center">My Profile</h4>
         </div>
         <p class="w3-center"><img src="<?php echo base_url();?>assets/img/profile/<?php echo "60160157.jpg";?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr> <!-- Avatar -->
     </div>
     <br>
     
     <!-- Accordion -->
     <div class="w3-card w3-round">
      <div class="w3-white">
        <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> ตารางเรียน</button>
        <div id="Demo1" class="w3-hide w3-container">
          <p> ตารางเรียน </p>
        </div>
        <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> ตารางสอน</button>
        <div id="Demo2" class="w3-hide w3-container">
          <p> ตารางสอน </p>
        </div>
        <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> รูปภาพของฉัน </button>
        <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
           <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
       </div>
     </div>      
   </div>
   <br>
   
   <!-- เรื่องที่น่าสนใจ --> 
   <div class="w3-card w3-round w3-white w3-hide-small">
    <div class="w3-container">
      <br><p> เรื่องที่น่าสนใจ </p>
      <p>
        <span class="w3-tag w3-small w3-theme-d5">News</span>
        <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
        <span class="w3-tag w3-small w3-theme-d3">Labels</span>
        <span class="w3-tag w3-small w3-theme-d2">Games</span>
        <span class="w3-tag w3-small w3-theme-d1">Friends</span>
        <span class="w3-tag w3-small w3-theme">Games</span>
        <span class="w3-tag w3-small w3-theme-l1">Friends</span>
        <span class="w3-tag w3-small w3-theme-l2">Food</span>
        <span class="w3-tag w3-small w3-theme-l3">Design</span>
        <span class="w3-tag w3-small w3-theme-l4">Art</span>
        <span class="w3-tag w3-small w3-theme-l5">Photos</span>
      </p>
    </div>
  </div>
  <br>
</div> <!-- End Left Column -->

<!-- Middle Column -->
<div class="w3-col m9">
  <div class="w3-row-padding">
    <div class="w3-col m12">
      <div class="w3-card w3-round w3-white">
        <div class="w3-container w3-padding" >
          <div class="form-group">
			<div style="magin-bottom: 0;">
            <button type="button" href="#myModal" style="border-radius: 8px;" class="w3-round w3-btn w3-theme" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-pencil"></i> สร้างห้องสอน</button>
            </div>  
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id=""> สร้างห้องเรียน </h5>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">


                      <?php echo form_open('Auth/register');  ?>
                      <div class="modal-body">
                        <div class="form-group">
                          <label  class="text-uppercase">ชื่อห้อง</label>
                          <input required name="course-name" type="text" class="form-control" placeholder="มาเรียนกับครูนวลนะ">
                        </div> <!-- room name -->
                        <div class="form-group">
                          <label  class="text-uppercase">วิชาที่สอน</label>
                          <input required name="course-subject" type="password" class="form-control" placeholder="การโปรแกรม">
                        </div> <!-- subject -->
						<div class="form-group">
							<label class="text-uppercase">จำนวนคน</label>
							<input class="form-control-3" type="number" name="course-people" min="1" max="20" placeholder="1, 2 etc.">
						</div> <!-- number of people -->
						<div class="form-group">
                          <label  class="text-uppercase">สถานที่</label>
                          <input required name="course-place" type="password" class="form-control" placeholder="IF-5t05">
                        </div> <!-- place -->
                     </div>
                     <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                      <input type="submit" name="btsave" class="btn btn-login float-right" value="ยืนยัน"></input>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อห้อง</th>
              <th scope="col">วิชา</th>
              <th scope="col">สถานที่</th>
              <th scope="col">เวลาเริ่ม และ เวลาสิ้นสุด</th>
              <th scope="col">วันที่</th>
              <th scope="col">ชื่อผู้สอน</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(count($rs)==0)
            {
              echo "<tr><td colspan='4' align='center'>--No data --</td></tr>";
            }else
            {
              foreach($rs as $r)
              {
                echo "<tr>";
                        //echo "<td align='center'>$noe<td>";
                echo "<th scope='row'>".$r['c_id']."</th>";
                echo "<td>".$r['c_room']."</td>";
                echo "<td>".$r['c_subject']."</td>";
                echo "<td>".$r['c_place']."</td>";
                echo "<td>".$r['c_time_start']." ถึง ".$r['c_time_end']."</td>";
                echo "<td>".$r['c_date']."</td>";
                
                //echo "<td>".$r['c_mem_name']."</td>";
                echo "<td align='center'>";
                        //echo anchor("member/edit/".$r['id'],"แกไข")."&nbsp;";
                       // echo anchor("member/del/".$r['id'],"ลบ",array("onclick"=>"javascriptreturn confirm('คุณต้องการลบข้อมูลหรือไม่?');"));
                echo "</tr>";
              }
            }
            ?>
            
          </tbody>
        </table>
      </div>
      
      
      <h4>......</h4><br>
      <hr class="w3-clear">
      <p>......</p>
      
      
      
      
      
    </div>
    
    <!-- End Middle Column -->
  </div>

  <!-- End Grid -->
</div>

<!-- End Page Container -->
</div>
<br>