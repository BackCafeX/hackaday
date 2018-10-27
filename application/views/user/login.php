<!DOCTYPE html>
<html>
<head>
	<title>Login - Hackaday</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport"
	content="width=device-width, initial-scale=0.8, maximum-scale=1.0">
	<script src="build/SalsaCalendar.min.js"></script>
	<!-- <link rel="stylesheet" href="SalsaCalendar.min.css"> -->
	<style>
	@import
	url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css")
	;

	.body{
		background: #f5ffff;
	}
	.login-block {
		background: #DE6262; /* fallback for old browsers */
		background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
		/* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to bottom, #f5ffff, #f5ffff);
		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		float: left;
		width: 100%;
		margin-top: 30px;
		margin-left: auto;
		margin-right: auto;
	}

	.banner-sec {
		background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg)
		no-repeat left bottom;
		background-size: cover;
		min-height: 500px;
		border-radius: 0 10px 10px 0;
		padding: 0;
	}

	.container {
		background: #fff;
		border-radius: 10px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	.carousel-inner {
		border-radius: 0 10px 10px 0;
	}

	.carousel-caption { 
		text-align: left;
		left: 5%;
	}

	.login-sec {
		padding: 40px 30px;
		position: relative;
	}

	.login-sec .copy-text {
		position: absolute;
		width: 80%;
		bottom: 20px;
		font-size: 13px;
		text-align: center;
	}

	.login-sec .copy-text i {
		color: #FEB58A;
	}

	.login-sec .copy-text a {
		color: #E36262;
	}

	.login-sec h2 {
		margin-bottom: 30px;
		font-weight: 800;
		font-size: 30px;
		color: #1a1a1a;
	}

	.login-sec h2:after {
		content: " ";
		width: 100px;
		height: 5px;
		background: #808080;
		display: block;
		margin-top: 20px;
		border-radius: 3px;
		margin-left: auto;
		margin-right: auto
	}

	.btn-login {
		background: #66b3ff;
		color: #fff;
		font-weight: 600;
	}

	.banner-text {
		width: 70%;
		position: absolute;
		bottom: 40px;
		padding-left: 20px;
	}

	.banner-text h2 {
		color: #fff;
		font-weight: 600;
	}

	.banner-text h2:after {
		content: " ";
		width: 100px;
		height: 5px;
		background: #FFF;
		display: block;
		margin-top: 20px;
		border-radius: 3px;
	}

	.darkBule {
		background: #e6f2ff;
	}
	.pic {
		margin-top: 20px;
		margin-bottom: 20px;
		margin-left: 5px;
		margin-right: 5px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		border-radius: 5px;
	}
	.form-control-2 {
	  display: block;
	  width: 100%;
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
	.form-radio
	{
		 -webkit-appearance: none;
		 -moz-appearance: none;
		 appearance: none;
		 display: inline-block;
		 position: relative;
		 background-color: #f1f1f1;
		 color: #666;
		 top: 10px;
		 height: 30px;
		 width: 30px;
		 border: 0;
		 border-radius: 50px;
		 cursor: pointer;     
		 margin-right: 7px;
		 outline: none;
	}
	.form-radio:checked::before
	{
		 position: absolute;
		 font: 13px/1 'Open Sans', sans-serif;
		 left: 11px;
		 top: 7px;
		 content: '\02143';
		 transform: rotate(40deg);
	}
	.form-radio:hover
	{
		 background-color: #f7f7f7;
	}
	.form-radio:checked
	{
		 background-color: #f1f1f1;
	}
	.check
	{
		 font: 300 16px/1.7 'Open Sans', sans-serif;
		 color: #666;
		 cursor: pointer;
	}
	input[type][disabled]
	{
		background-color: #f9f9f9;
		color: #ddd;
		cursor: default;
	}
	input[type][disabled] + check
	{
		color: #999;
		cursor: default;
	}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')
	})
</script>
<body class="body">
	<section class="login-block ">
		<div class="container">
			<div class="row">
				<div class="col-md-4 login-sec">
					<h2 class="text-center">Know Late 2 Learn</h2><br>

                      <?php echo $errorlog;?>

					<?php echo form_open('Auth/login');  ?> 
					<div class="form-group">
						<label class="text-uppercase">รหัสผู้ใช้งาน</label>
						<input required type="text" class="form-control" name="member_user" placeholder="กรอกรหัสนิสิต">
					</div>  
					<!--  username	--> 
					<div class="form-group">
						<label class="text-uppercase">รหัสผ่าน</label>
						<input required type="password" class="form-control" name="member_pass" placeholder="กรอกรหัสผ่าน">
					</div> 
					<!--  password -->
					<div class="form-check">
						<input type="submit" name="blogin" class="btn btn-login float-right " value="เข้าสู่ระบบ">
					</div>
					<?php echo form_close();?> <!-- form -->

					<button type="submit" href="#myModal" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">สมัครสมาชิก</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="" >
							<div class="modal-content">
								<div class="modal-header text-center">
									<h5 class="modal-title" id="exampleModalCenterTitle">สมัครสมาชิก</h5>
								</div>
								<?php echo form_open('Auth/register');  ?>
								<div class="modal-body">
									<div class="form-group">
										<label  class="text-uppercase">รหัสผู้ใช้งาน</label>
										<input required name="member_user" type="text" class="form-control" placeholder="กรอกรหัสนิสิต">
									</div> <!-- username -->
									<div class="form-group">
										<label  class="text-uppercase">รหัสผ่าน</label>
										<input required name="member_pass" type="password" class="form-control" placeholder="กรอกรหัสผ่าน">
									</div> <!-- password -->
									<div class="form-group">
										<label class="text-uppercase">อีเมลล์</label>
										<input required name="member_email" type="email" class="form-control" placeholder="กรอกอีเมลล์ เช่น example@example.com">
									</div> <!-- email -->
									<div class="row">
										<div class="form-group col-sm-6">
											<label  class="text-uppercase">ชื่อ</label>
											<input required name="fname_user" type="text" class="form-control" placeholder="ชื่อจริง">
										</div> <!-- name -->
										<div class="form-group col-sm-6">
											<label  class="text-uppercase">นามสกุล</label>
											<input required name="lname_user" type="text" class="form-control" placeholder="นามสกุล">
										</div> <!-- lastname -->
									</div>
									<div class="form-group ">
											<label  class="text-uppercase">คณะ</label>
											<input required name="fac_user" type="text" class="form-control" placeholder="ชื่อคณะ">
									</div> <!-- faculty -->
									<div class="row">
										<div class="col-sm-8 form-group">
										<label class="text-uppercase">อายุ</label>
										  <input class="form-control-2" type="number" name="member_age" min="16" max="30" placeholder="15">
										  <!-- Age -->
										 </div>
										 <div class="col-sm-4">
										   <label class="check-box text-uppercase check"> 
											  <input type="radio" name="member_gender" for="check-one" class="form-radio" value="m" ><label for="radio-one">ชาย</label>
											</label>
											<label class="check-box text-uppercase check">
											  <input type="radio" name="member_gender" for="check-one" class="form-radio" value="f"><label for="radio-one"> หญิง</label>
											</label>
											<!-- gender -->
										 </div>
									</div> <!-- other -->
								<div class="modal-footer">
									<button type="submit" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
									<input type="submit" name="btsave" class="btn btn-login float-right" value="ยืนยัน"></input>
								</div>
								<?php echo form_close();?>
							</div>
						</div>
					</div>  <!-- Register -->
				</div>
				<div class="copy-text text-center">
						Created with <i class="fa fa-heart"></i>
					</div>
		</div>
				<div class="col-md-8 ">
					<div id="carouselExampleIndicators" class="carousel slide"
					data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0"
						class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active ">
							<img class="pic d-block img-fluid" src="<?php echo base_url();?>/assets/img/StudyGroup1.jpg" 
							alt="https://science.missouristate.edu/assets/science/StudyGroup2.jpg" title="https://science.missouristate.edu/assets/science/StudyGroup2.jpg">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									 <!-- text -->
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<img class="pic d-block img-fluid" src="<?php echo base_url();?>/assets/img/StudyGroup2.jpg" 
							 title="http://becas-mexico.mx/wp-content/uploads/2018/09/becas-mexico-2018-licenciatura-en-ciencias-de-la-educacion-distancia.jpg">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									 <!-- text -->
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<img class="pic d-block img-fluid" src="<?php echo base_url();?>/assets/img/StudyGroup3.jpg" 
							title="http://galtoninstitute.org.uk/wp-content/uploads/2015/09/09_Depositphotos_11062948_original.jpg">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									 <!-- text -->
								</div>
							</div>
						</div>
					</div>
					</div>
				</div> <!-- Right banner -->
	</section>


</body>
</html>
