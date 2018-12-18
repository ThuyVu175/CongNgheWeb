<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TRUNG TÂM NĂNG KHIẾU ABC</title>
	<link rel="stylesheet" type="text/css" href="css-js/User.css">
	<link rel="stylesheet" type="text/css" href="../package/bootstrap-4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../package/FontAwesome.4.7.0/Content/Content/font-awesome.css">
	<script type="text/javascript" src="../package/jQuery.3.3.1/Content/Scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../package/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/popper.min.js"></script>

	<script type="text/javascript " src="../package/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="css-js/Script.js"></script>
</head>

<body>
	<div id="header" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-3 " >
					<img src="../img/logobale.png" id="logo" >
				</div>
				<div class="col-md-9">
					<div class="row mt-2">
						<h2 class="">TRUNG TÂM PHÁT TRIỂN NGHỆ THUẬT EAM</h2>
					</div>
					<div class="row mt-2">
						<div class="col-md-5 offset-md-7">
							<ul class="pt-1">
								<li><a href="#"><i class="fa fa-bell"></i></a></li>
								<li><a href="User.html"><i class="fa fa-user"></i>
								Tên người dùng</a></li>
								<li><button class="btn btn-danger">
									Đăng xuất
								</button></li>
							</ul>
						</div>						
					</div>					
				</div>				
			</div>
		</div>
	</div>
	<!--HEADER-->	

	<nav class="navbar navbar-expand-lg sticky-top" id="menu">
		<div class="container">
			<a class="navbar-brand" href="#header"><i class="fa fa-lg fa-home" id="home"></i></a>
			<button class="navbar-toggler navbar-toggler-right btn " type="button" data-toggle="collapse" data-target="#navb">
				<span id="btnMenu">Menu</span>
			</button>			
			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Giới thiệu</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#aboutUs">Trung tâm</a>
							<a class="dropdown-item" href="#lecturers">Giảng viên</a>
							<a class="dropdown-item" href="#evaluate">Cảm nhận</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" >Mỹ thuật</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Nhảy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Múa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Hát</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Võ thuật</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
				</form>
			</div>
		</div>
	</nav>						 
	<!--MENU-->
	<div class="container-fluid" id="main">
		<div id="yourClass" class="row">
			<div class="container">
				<div class="row">
					<h3>KHÓA HỌC CỦA BẠN</h3>
				</div>
				<div class="row ">
					<div class="col-md-3">
						<img src="../img/logo.jpg" id="imgClass" class="img-thumbnail">
					</div>
					<div class="col-md-4 rounded">
						<div class="row">
							<h4>Tên khóa học: </h4>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label>
									Thời gian:
								</label>
							</div>
							<div class="col-md-8">
								1/1/2018 - 2/2/2018
							</div>

						</div>
						<div class="row">
							<div class="col-md-4">
								<label>
									Giáo viên:
								</label>
							</div>
							<div class="col-md-8">
								Nguyễn Thị Lan Anh
							</div>

						</div>
						<div class="row">
							<div class="col-md-4">
								<label>
									Số học viên:
								</label>
							</div>
							<div class="col-md-8">
								10
							</div>

						</div>
					</div>
				</div>
			</div> 		
		</div>
		<hr>
		<div class="otherClass row">
			<div class="container">
				<div class="row">
					<h3>KHÓA HỌC KHÁC</h3>
				</div>
				<div class="row">
					<figure class="figure col-md-4 ">					
						<img src="../img/logo.jpg" class="figure-img img-fluid rounded mx-auto d-block" id="otherClassImg" >				  
					  <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
					</figure>
					<figure class="figure col-md-4">
					  <img src="../img/logo.jpg" class="figure-img img-fluid rounded mx-auto d-block" id="otherClassImg" >
					  <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
					</figure>
					<figure class="figure col-md-4">
					  <img src="../img/logo.jpg" class="figure-img img-fluid rounded mx-auto d-block" id="otherClassImg" >
					  <figcaption class="figure-caption text-center">A caption for the above image.</figcaption>
					</figure>
				</div>
				
			</div>
		</div>
	</div>
	</div>
	
	<!--MAIN-->
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 footer-navigation">
					<h3><a href="#">Trung tâm phát triển nghệ thuật EAM</a></h3>
					<p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
					<p class="company-name">Trung tâm EAM © 2018 </p>
				</div>
			<div class="col-sm-6 col-md-4 footer-contacts">
				<div class="">
					<i class="fa fa-map-marker footer-contacts-icon "></i>
						<p><span class="">175 Tây Sơn</span> Đống Đa, Hà Nội</p>
				</div>
				<div>
					<i class="fa fa-phone footer-contacts-icon "></i>
					<p class="footer-center-info email text-left"> 0965520566</p>
				</div>
				<div>
					<i class="fa fa-envelope footer-contacts-icon"></i>	                    
					<p> <a href="#" target="_blank">ngantt62@wru.vn</a></p>
				</div>
			</div>

			<div class="col-md-4 footer-about">
				<h4>Đơn vị liên kết</h4>				
				<div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
			</div>
		</div>
		</div>
	</div>   
	<!--FOOTER -->
</body>
</html>