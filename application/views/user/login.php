<!DOCTYPE html>
<html>
<head>
	<title>Login - Hackaday</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport"
	content="width=device-width, initial-scale=0.8, maximum-scale=1.0">

	<style>
	@import
	url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css")
	;

	.body{
		background: #66b3ff;
	}
	.login-block {
		background: #DE6262; /* fallback for old browsers */
		background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
		/* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to bottom, #e6f2ff, #66b3ff);
		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		float: left;
		width: 100%;
		padding: 20px 0;
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
		box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
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
	.
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
	<section class="login-block">
		<div class="container">
			<div class="row">
				<div class="col-md-4 login-sec">
					<h2 class="text-center">LOGIN</h2>
					<?php echo form_open('Auth/login');  ?> <!-- post -->
					<div class="form-group">
						<label class="text-uppercase">รหัสผู้ใช้งาน</label>
						<input required type="text" class="form-control" name="member_user" placeholder="รหัสผู้ใช้งาน">
					</div> 
					<div class="form-group">
						<label class="text-uppercase">รหัสผ่าน</label>
						<input required type="password" class="form-control" name="member_pass" placeholder="รหัสผ่าน">
					</div> <!--  pass -->

					<div class="form-check">
						<input type="submit" name="blogin" class="btn btn-login float-right " value="เข้าสู่ระบบ">
					</div>
					<?php echo form_close();?>

					<button type="submit" href="#myModal" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">สมัครสมาชิก</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">สมัครสมาชิก</h5>
								</div>
								<?php echo form_open('Auth/register');  ?>
								<div class="modal-body">
									<div class="form-group">
										<label  class="text-uppercase">รหัสผู้ใช้งาน</label>
										<input required name="member_user" type="text" class="form-control" placeholder="กรอกรหัสผู้ใช้งาน">
									</div> <!-- username -->
									<div class="form-group">
										<label  class="text-uppercase">รหัสผ่าน</label>
										<input required name="member_pass" type="password" class="form-control" placeholder="กรอกรหัสผ่าน">
									</div> <!-- password -->
									<div class="form-group">
										<label class="text-uppercase">อีเมลล์</label>
										<input required name="member_email" type="email" class="form-control" placeholder="กรอกอีเมลล์ เช่น example@example.com">
									</div> <!-- email -->
									<div class="form-group">
										<label class="text-uppercase">อายุ</label>
										<input required name="member_email" type="" class="form-control" placeholder="">
									</div> <!-- email -->
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
									<input type="submit" name="btsave" class="btn btn-login float-right" value="ยืนยัน"></input>
								</div>
								<?php echo form_close();?>

							</div>
						</div>
					</div>  <!-- Register -->
					
					<div class="copy-text text-center">
						Created with <i class="fa fa-heart"></i>
					</div>
				</div>
				<div class="col-md-8"> 
					<div id="carouselExampleIndicators" class="carousel slide"
					data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
						<a href="https://science.missouristate.edu/assets/science/StudyGroup2.jpg">
							<img class="d-block img-fluid" src="<?php echo base_url();?>/assets/img/StudyGroup.jpg" 
							alt="https://science.missouristate.edu/assets/science/StudyGroup2.jpg" title="https://science.missouristate.edu/assets/science/StudyGroup2.jpg"> </a>
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									 <!-- text -->
								</div>
							</div>
						</div>
					</div>

				</div>
			</div> <!-- Right banner -->
		</div>

	</section>


</body>
</html>
