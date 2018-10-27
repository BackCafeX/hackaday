<style>
    tbody tr:hover{
         background-color: #f0f0f5
    }
    
</style>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
             <div class="form-group">
                 <br>
         <h4 class="w3-center">My Profile</h4>
         </div>
         <p class="w3-center"><img src="<?php echo base_url();?>assets/img/profile/<?php echo "60160157.jpg";?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> ตารางเรียน</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> ตารางสอน</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
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
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
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
      
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
                <div class="form-group">
                  <button type="button" href="#myModal" class="w3-button w3-theme" data-toggle="modal" data-target="#myModal">
                      <i class="fa fa-pencil"></i> สร้างห้องสอน</button>
                        
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <div class="form-group">
          
      
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อห้อง</th>
                    <th>วิชา</th>
                    <th>สถานที่</th>
                    <th>เวลาเริ่ม และ เวลาสิ้นสุด</th>
                    <th>วันที่</th>
                    <th>ชื่อผู้สอน</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(count($rs)==0)
            {
                echo "<tr><td colspan='4' align='center'>--No data --</td></tr>";
            }else
            {
                $noe=1;
                foreach($rs as $r)
                {
                    echo "<tr>";
                   // echo "<td align='center'>$noe<td>";
                    echo "<tr>";
                    echo "<td>".$r['c_id']."</td>";
                    echo "<td>".$r['c_room']."</td>";
                    echo "<td>".$r['c_subject']."</td>";
                    echo "<td>".$r['c_place']."</td>";
                    echo "<td>".$r['c_time_start']." ถึง ".$r['c_time_end']."</td>";
                    echo "<td>".$r['c_date']."</td>";
                    echo "<td align='center'>";
                    //echo anchor("member/edit/".$r['id'],"แกไข")."&nbsp;";
                   // echo anchor("member/del/".$r['id'],"ลบ",array("onclick"=>"javascriptreturn confirm('คุณต้องการลบข้อมูลหรือไม่?');"));
                    $noe++;
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