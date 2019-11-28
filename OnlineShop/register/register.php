<!DOCTYPE html>
<html lang="en">
<head>
<title>สารปรับปรุงดินขี้แดดนาเกลือ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/../css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.7.0/../css/all.css"
	integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
	crossorigin="anonymous">

<link href="https://fonts.googleapis.com/../css?family=Rubik:400,700"
	rel="stylesheet">

<link
	href="https://fonts.googleapis.com/../css?family=Kanit&display=swap"
	rel="stylesheet">
<link rel="stylesheet" href="../fonts/icomoon/style.css">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/magnific-popup.css">
<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">


<link rel="stylesheet" href="../css/aos.css">

<link rel="stylesheet" href="../css/style.css">

<style>
@import
	url('https://fonts.googleapis.com/css?family=Kanit&display=swap&subset=thai')
	;

body, div {
	font-family: 'Kanit', sans-serif;
}
</style>
</head>
<body>
	<script>

function fncSubmit(){
		if(document.form1.txtPassword.value != document.form1.txtConPassword.value)
			{			
			alert('รหัสพาสเวิร์ดไม่ตรงกัน');		
			document.form1.txtConPassword.focus();     		
			return false;
			
			}
}
</script>

	<div class="site-wrap">

		<!-- หัวเว็บ -->
		<div class="site-navbar bg-white py-2">
			<div class="container">
				<div class="d-flex align-items-center justify-content-between">
					<div>
						<div>
							<a href="index.php" class="navbar-brand;" style='font-size: 24px'>สารปรับปรุงดินขี้แดดนาเกลือ</a>
						</div>
					</div>
					<div class="main-nav d-none d-lg-block">
						<nav class="site-navigation text-right text-md-center"
							role="navigation">
							<ul class="site-menu js-clone-nav d-none d-lg-block">
								<li><a href="index.php" style='font-size: 18px'>หน้าหลัก</a></li>


								<li><a href="product.php" style='font-size: 18px'>สินค้า</a></li>
								<li><a href="contact.php" style='font-size: 18px'>ติดต่อ</a></li>
							</ul>
						</nav>
					</div>
					<div class="icons">
						<a href="cart.html" class="icons-btn d-inline-block bag"> <span
							class="icon-shopping-bag"></span> <!-- จำนวนตามตระกร้าสินค้า -->
							<span class="number">2</span>
						</a>
					</div>

				</div>
			</div>
		</div>

		<br> <br> <br>

		<div class="bg-light py-3" style='font-size: 12px'>
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-0">
						<a href="index.php">หน้าหลัก</a> <span class="mx-2 mb-0">/</span>
						<strong class="text-black">สมัครสมาชิก</strong>
					</div>
				</div>
			</div>
		</div>


		<!-- ส่วนกลาง -->
		<div class="site-section">
			<div class="container">
				<div class="container">
					<form name="form1" method="post" action="save_register.php"
						OnSubmit="return fncSubmit();">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<h2 align="center">สมัครสมาชิก</h2>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group has-danger">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="text" name="txtUsername" class="form-control"
											id="txtUsername" placeholder="รหัสสมาชิก" required autofocus>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="password" name="txtPassword" class="form-control"
											id="txtPassword" placeholder="รหัสผ่าน" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="password" name="txtConPassword"
											class="form-control" id="txtConPassword"
											placeholder="ยืนยันรหัสผ่าน" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="text" name="txtName" class="form-control"
											id="txtName" placeholder="ชื่อ" required>&nbsp <input
											type="text" name="txtSurname" class="form-control"
											id="txtSurname" placeholder="นามสกุล" required>
									</div>
								</div>
							</div>
						</div>

						<!-- ที่อยู่ -->
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<h4>ที่อยู่</h4>
										<hr>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="text" name="txtHouseNo" class="form-control"
											id="txtHouseNo" placeholder="บ้านเลขที่" required>&nbsp <input
											type="text" name="txtStreet" class="form-control"
											id="txtStreet" placeholder="ถนน" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="text" name="txtZone1" class="form-control"
											id="txtZone1" placeholder="แขวง/ตำบล" required>&nbsp <input
											type="text" name="txtZone2" class="form-control"
											id="txtZone2" placeholder="เขต/อำเภอ" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group has-danger">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="text" name="txtProvince" class="form-control"
											id="txtProvince" placeholder="จังหวัด" required>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-2">
								<div class="form-group has-danger">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="text" name="txtZIP" class="form-control"
											id="txtZIP" placeholder="รหัสไปรษณีย์" required>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group has-danger">
									<div class="input-group mb-2 mr-sm-2 mb-sm-0">
										<input type="text" name="txtTelephone" class="form-control"
											id="txtTelephone" pattern="[0-9]{10}" placeholder="เบอร์โทร"
											required>
									</div>
								</div>
							</div>
						</div>







						<div align="center">
							<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/aos.js"></script>

	<script src="../js/main.js"></script>

</body>
</html>