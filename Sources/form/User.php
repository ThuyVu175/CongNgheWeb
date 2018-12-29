

<?php 

include('Xuly/cnn.php');
$sql="SELECT * FROM subjects WHERE isActive=1 AND ID<3";
$result=mysqli_query($con, $sql);
$sql1="SELECT * FROM subjects WHERE isActive=1 AND ID<10 AND ID>7";
$result1=mysqli_query($con, $sql1);
$sql2="SELECT * FROM subjects WHERE isActive=1 AND ID<7 AND ID>4";
$result2=mysqli_query($con, $sql2);
?>
<div class="col-md-12" >
	<div class="row" style="padding: 50px;">

		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h3>KHÓA HỌC CỦA BẠN</h3>
				</div>
				<div class="col-md-2">
					<button class="btn btn-warning" onclick="profile()">Thông tin cá nhân</button>
				</div>

			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					<img src="../img/logo.jpg" id="imgClass" class="img-thumbnail" style="width: 200px;height: 150px;">
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

	<hr><hr>

	<div class="row" style="padding: 50px;">
		<div class="container">
			<div class="otherClass row">
				<div class="container">
					<div class="row">
						<h3>KHÓA HỌC KHÁC</h3>
					</div>
					<div class="row mt-4">
						<?php while ($row= mysqli_fetch_array($result)) {?>
							<figure class="figure col-md-4 ">
								<a href="Index.php?page=MyThuat">
									<img src="<?php echo $row["image"]?>" class="figure-img img-fluid rounded mx-auto d-block" id="otherClassImg"  style="width:200px;height: 150px;">	
								</a>					

								<figcaption class="figure-caption text-center"><?php echo $row["Name"] ?></figcaption>
							</figure>
						<?php } ?>
						<?php while ($row= mysqli_fetch_array($result1)) {?>
							<figure class="figure col-md-4 ">	
								<a href="Index.php?page=NhacCu">				
									<img src="<?php echo $row["image"]?>" class="figure-img img-fluid rounded mx-auto d-block" id="otherClassImg"  style="width:200px;height: 150px;">			
								</a>	  
								<figcaption class="figure-caption text-center"><?php echo $row["Name"] ?></figcaption>
							</figure>
						<?php } ?>
						<?php while ($row= mysqli_fetch_array($result2)) {?>
							<figure class="figure col-md-4 ">
								<a href="Index.php?page=Mua">					
									<img src="<?php echo $row["image"]?>" class="figure-img img-fluid rounded mx-auto d-block" id="otherClassImg"  style="width:200px;height: 150px;">
								</a>				  
								<figcaption class="figure-caption text-center"><?php echo $row["Name"] ?></figcaption>
							</figure>
						<?php } ?>
					</div>

				</div>
			</div>	
		</div>
		
	</div>
</div>

<!--MAIN-->

