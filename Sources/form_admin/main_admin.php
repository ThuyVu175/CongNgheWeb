<div class="container-fluid" id="main">
		<div class="row">
			<?php 
			$page=isset($_GET["page"])?$_GET["page"]:"";
			if($page =='lecturer')
				include "lecturer/lecturer.php";
			if($page =='student')
				include "student/student.php";
			if($page =='category')
				include "category/category.php";
			if($page =='subject')
				include "subject/subject.php";
			if($page =='class')
				include "class/class.php";
			if($page =='sign_up')
				include "sign_up/sign_up.php";
			if($page =='NhacCu')
				include "TongQuan.php";
			
			?>
		</div>
	</div>	