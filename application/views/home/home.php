<!-- Include Link  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<!-- Include Script  -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>

<!-- Style css  -->
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
		border: 1px solid #ced4da;border-radius: 0.25rem;
		transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
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
				<div class="form-group w3-container">
					<br><h4 class="w3-center">My Profile</h4>
				</div>
				
				<!-- Picture -->
				<p class="w3-center"><img src="https://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $this->session->s_user?>" class="w3-circle" style="height:160px;width:160px" alt="Avatar"></p><hr>
				
				<!-- Name -->
				<div style="padding: 5px;">
					<p class=" text-center"><?php echo $this->session->s_fname;?></p>
				</div>
			</div><br>
			 
			<!-- Accordion -->
			<div class="w3-white">
				<div style=" background-color:#0099cc; color:white;" >
					<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> ตารางเรียน</button>
						<div id="Demo1" class="w3-hide w3-container">
						  <p> ตารางเรียน </p>
						</div>
					<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> ตารางสอน</button>
						<div id="Demo2" class="w3-hide w3-container">
						  <p> ตารางสอน </p>
						</div>
					<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> รูปภาพของฉัน </button>
						<div id="Demo3" class="w3-hide w3-container">
							<div class="w3-row-padding"><br>
								<!-- Empty -->
							</div>
					    </div>
				</div>      
		   </div><br>
		   
		   <!-- Interest div --> 
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
		    </div><br>
		  
		  <!-- End Left Column -->
		</div>

		<!-- Middle Column -->
		<div class="w3-col m9">
			<div class="w3-row-padding">
				<div class="w3-col m12">
					<div class="w3-card w3-round w3-white">
						<div class="w3-container w3-padding" >
							<div class="form-group">
								<div style="magin-bottom: 0;">
									<button type="button" href="#myModal" style="border-radius: 8px; background-color:#0099cc; color:white;border: none;" class="w3-round w3-btn " data-toggle="modal" data-target="#myModal">
									<i class="fa fa-pencil"></i> สร้างห้องสอน</button>
								</div>  
					  
					<!-- Modal Create Room -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					
						<!-- End content -->
						<div class="modal-dialog" role="document">
							
							<!-- Modal content -->
							<div class="modal-content">
							
								<!-- Head -->
								<div class="modal-header">
									<h5 class="modal-title" id=""> สร้างห้องเรียน </h5>
									<button type="button" class="btn btn-secondary" style="background-color:#ff4d4d; color:white;border: none;" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">X</span>
									</button>
								</div>
								
								<!-- Enter form-->
								<div class="modal-body">
								
									<!-- Open form-->
									<?php echo form_open('Course/add');  ?>
										<div class="modal-body">
											
											<!-- Enter room name -->
											<div class="form-group">
											  <label  class="text-uppercase">ชื่อห้อง</label>
											  <input required name="course-name" type="text" class="form-control" placeholder="มาเรียนกับครูนวลนะ">
											</div>
											
											<!-- Enter subject -->
											<div class="form-group">
											  <label  class="text-uppercase">วิชาที่สอน</label>
											  <input required name="course-subject" type="text" class="form-control" placeholder="การโปรแกรม">
											</div>
											
											<!-- Enter place & date -->
											<div class="row form-group">
											
												<!-- Enter place -->
												<div class="col-sm-7">
												  <label  class="text-uppercase">สถานที่</label>
												  <input required name="course-place" type="text" class="form-control" placeholder="IF-5t05">
												</div> 
												
												<!-- Date selection-->
												<div class="col-sm-5">
													<label  class="text-uppercase" >วันที่</label>
													<input  class="form-control-3" name="course-date" id="datepicker2"  placeholder="วันที่เรียน">
													
													<!-- Script open date picker2-->
													<script>
													  $('#datepicker2').datepicker({
														uiLibrary: 'bootstrap4'
													  });
													</script>
												</div><br>
											  </div>
											  
											<!-- Time start-->
											<label>เวลาเริ่ม</label>
											<div class="row form-group" style="padding-left: 100px">
											
												<!-- Hours -->
												<div class="col-sm-4" >
													<label class="text-uppercase">ชั่วโมง</label>
													<input class="form-control" type="number" name="course-hours-start" min="0" max="24" placeholder="00">
												</div>

												<!-- Minutes -->
												<div class="col-sm-4">
													<label class="text-uppercase">นาที</label>
													<input class="form-control" type="number" name="course-min-start" min="0" max="59" placeholder="00">
												</div>
											</div>
											
											<!-- Time end-->
											<label>เวลาสิ้นสุด</label>
											<div class="row form-group" style="padding-left: 100px">
												
												<!-- Hours -->
												<div class="col-sm-4" >
													<label class="text-uppercase">ชั่วโมง</label>
													<input class="form-control" type="number" name="course-hours-end" min="0" max="24" placeholder="00">
												</div>
												
												<!-- Minutes -->
												<div class="col-sm-4">
													<label class="text-uppercase">นาที</label>
													<input class="form-control" type="number" name="course-min-end" min="0" max="59" placeholder="00">
												</div>
											</div> 
											
											<!-- Enter number of people -->
											<div class="form-group">
												<label class="text-uppercase">จำนวนคน</label>
												<input class="form-control" type="number" name="course-people" min="1" max="20" placeholder="etc. 1, 2 ">
											</div>
										</div> 
								</div>
							
								<!-- Confirm -->
								<div class="modal-footer">
								  <button type="submit" class="btn btn-secondary" style="background-color:#ff4d4d ; border: none" data-dismiss="modal">ปิด</button>
								  <input type="submit" name="btsave" class="btn float-right" style="background-color:#0099cc ; border: none; color:white;" value="ยืนยัน"></input>
										
										<!-- Close form-->
								  <?php echo form_close();?>
								</div>
								
								<!-- End content -->
							</div>
							
							<!-- End content -->
						</div>
						
						<!-- End Create Room -->
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
					  <!-- <th scope="col">สถานที่</th> -->
					  <th scope="col">เวลา</th>
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
						$iii = 1;
					  foreach($rs as $r)
					  {
						
						echo "<tr>";
								//echo "<td align='center'>$noe<td>";
						echo "<th scope='row'>".$iii."</th>";
						echo "<td>".$r['c_room']."</td>";
						echo "<td>".$r['c_subject']."</td>";
						//echo "<td>".$r['c_place']."</td>";
						echo "<td>".substr($r['c_time_start'],0,5)." ถึง ".substr($r['c_time_end'],0,5)."</td>";
						echo "<td>".$r['c_date']."</td>";
						echo "<td>".$r['mem_fname']."</td>";
						//echo "<td>".$r['c_mem_name']."</td>";
						echo "<td align='center'>";
						echo anchor("Course/enroll/".$r['c_id'],"Eroll")."&nbsp;";
							   // echo anchor("member/del/".$r['id'],"ลบ",array("onclick"=>"javascriptreturn confirm('คุณต้องการลบข้อมูลหรือไม่?');"));
						echo "</tr>";
						$iii++;
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