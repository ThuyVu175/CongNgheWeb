	
<div class="col-md-12">
	<div class="row">
		<div class="container">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../img/slideShow1.jpg" alt="Los Angeles" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Los Angeles</h3>
							<p>We had such a great time in LA!</p>
						</div>   
					</div>
					<div class="carousel-item">
						<img src="../img/slideShow2.jpg" alt="Chicago" width="1100" height="500">
						<div class="carousel-caption">
							<h3>Chicago</h3>
							<p>Thank you, Chicago!</p>
						</div>   
					</div>
					<div class="carousel-item">
						<img src="../img/slideShow5.jpg" alt="New York" width="1100" height="500">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>We love the Big Apple!</p>
						</div>   
					</div>
					<div class="carousel-item">
						<img src="../img/slideShow4.jpg" alt="New York" width="1100" height="500">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>We love the Big Apple!</p>
						</div>   
					</div>
				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>		
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div id="aboutUs" class="bg-light row">
				<div class="container ">
					<div class="row ">
						<h3 class=" text-danger text-center mt-2 col-md-12">
							Trung tâm
						</h3> 
					</div>			
					<div class="row mt-4 ">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4 text-right">
									<i class="fa fa-hand-o-right fa-3x icon text-left"></i>
								</div>
								<div class="col-md-4 text-warning text-left aboutUs">

									<p>Mục tiêu giáo dục</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="text-left col-md-6">
									<p>
										Cung cấp cho học viên kiến thức nền tảng về các môn năng khiếu. Giúp các học viên khơi nguồn đam mê Nghệ thuật cũng như phát hiện năng khiếu của mình để có thể định hướng nghề nghiệp cho tương lai của các em.
									</p>
								</div>
							</div>
						</div>										
					</div>
					<div class="row mt-4 ">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4 text-right">
									<i class="fa fa-hand-o-right fa-3x icon"></i>
								</div>
								<div class="col-md-4 text-warning text-left aboutUs">

									<p>Đội ngũ giảng viên</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="text-left col-md-6">
									<p>
										Đội ngũ giảng viên có nhiều năm kinh nghiệm. Đã từng đoạt các giải thưởng trong các lĩnh vực giảng dạy. Họ là những người giỏi về chuyên môn, giàu kinh nghiệm giảng dạy, rất tâm lý và nhiệt huyết trong việc truyền đạt cho các học viên không chỉ là kiến thức chuyên môn thuần túy mà còn là phương pháp học tập hiệu quả, tác phong làm việc nghiêm túc, đạo đức lối sống lành mạnh.
									</p>
								</div>
							</div>
						</div>										
					</div>	

					<div class="row mt-4 ">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4 text-right">
									<i class="fa fa-hand-o-right fa-3x icon"></i>
								</div>
								<div class="col-md-4 text-warning text-left aboutUs">

									<p>Cơ sở vật chất</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="text-left col-md-6">
									<p>
										Học sinh đăng kí học tại <a href="Index.php" style="text-decoration: none;"><span class="text-danger">
											Trung tâm Phát triển nghệ thuật EAM
										</span></a> sẽ được học tập trong Môi trường lành mạnh, tiện nghi, với hệ thống phòng học đúng tiêu chuẩn, chất lượng: rộng rãi, thoáng mát, số lượng học sinh giới hạn giúp giáo viên sâu sát được học sinh và học sinh có thể tiếp thu bài hiệu quả nhất.
									</p>
								</div>
							</div>
						</div>										
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!--Aoubt Us-->
	<div class="features-boxed row" id="lecturers">
		<div class="container">
			<div class="intro row">
				<br>
				<h3 class="col-md-4 offset-md-4 mt-5 text-center text-danger ">Giảng viên</h3>
			</div>
			<div class="row  justify-content-center  features">
				<div class="row item"> 
					<?php							
							//connect 
					include("Xuly/cnn.php");
							//query
					mysqli_set_charset($con, "utf8");
					$sql="SELECT * FROM lecturer WHERE isActive=1 AND ID<=6";
					$result=mysqli_query($con, $sql);
							//
					if(!$result){
						die("Không thể thực hiện câu lệnh sql:".mysqli_error($con));
						exit();
					}
					while ($row= mysqli_fetch_array($result)) {
						?>
						<div class="box col-md-4">
							<img src="<?php echo $row["image"]?>" class="lecturers" style="width: 180px;height: 200px;">
							<h3 class="name mt-2"><?php echo $row["name"]; ?></h3>
							<p class="generalDescription">
								<?php echo $row["generalDescription"]; ?>
							</p>
							<a href="detailLecturer.php?id=<?php echo $row['ID'] ?>" class="learn-more">Xem thêm</a>
						</div>	
					<?php } ?>				
				</div>
			</div>
		</div>
	</div>
		<!--GIẢNG VIÊN-->
		<div id="evaluate" class="bg-light row">
			<div class="container">
				<div class="row">
					<h3 class="text-danger text-center mt-2 col-md-12">Cảm nhận của học viên</h3>
				</div>
				<div class="row mt-4">
					<div class="col-md-6">
						<div class="row ">
							<div class="col-md-4 ">
								<img src="../img/hocvien1.jpg" class="imgEvaluate rounded-circle">
							</div>
							<div class="col-md-8">
								<h5 class="p-2">Nguyễn Trần Anh Thư</h5>
								<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-md-4 ">
								<img src="../img/hocvien2.jpg" class="imgEvaluate rounded-circle ">
							</div>
							<div class="col-md-8">
								<h5 class="p-2">Nguyễn Anh Quân</h5>
								<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
							</div>
						</div>						
					</div>

					<div class="col-md-6">
						<div class="row ">
							<div class="col-md-4 ">
								<img src="../img/hocvien3.jpg" class="imgEvaluate rounded-circle">
							</div>
							<div class="col-md-8">
								<h5 class="p-2">Trần Thị Khánh Ly</h5>
								<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-4 ">
								<img src="../img/hocvien4.jpg" class="imgEvaluate rounded-circle">
							</div>
							<div class="col-md-8">
								<h5 class="p-2">Phạm Mạnh Hiếu</h5>
								<p class="pl-2">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.Praesent aliquam in tellus eu.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!--SLIDESHOW-->

		<!--Cảm nhận-->

