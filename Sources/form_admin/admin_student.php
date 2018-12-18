<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUẢN LÍ HỌC VIÊN</title>
  <link rel="stylesheet" type="text/css" href="css-formadmin.css">
  <link rel="stylesheet" type="text/css" href="../package/bootstrap-4.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../package/FontAwesome.4.7.0/Content/Content/font-awesome.css">
  <script type="text/javascript" src="../package/jQuery.3.3.1/Content/Scripts/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../package/bootstrap-4.1.3/site/docs/4.1/assets/js/vendor/popper.min.js"></script>

  <script type="text/javascript " src="../package/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Script.js"></script>

  <script>
    function xoahv() {
      alert('Học viên đã được xóa!');
    }
  </script>
  <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "qlkhoahocttnk";
  $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
  //Kiểm tra kết nối
  if (!$connect) {
      die('kết nối không thành công ' . mysqli_connect_error());
  }
  ?>
 
</head>

<body style="background: #E6E6FA">
  <div style="background:	#F5DEB3;">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img src="../img/logobale.png" style="width: 150px;height: auto;">
        </div>
        <div class="col-md-8" style="margin-top: 50px;">
          <h1 style="text-shadow: 2px 2px 8px #FF0000;color: black;font-family: cursive;padding-left: 200px;">EAM</h1>
          <font face="family">
            <h2 class="h2"> TRUNG TÂM PHÁT TRIỂN NGHỆ THUẬT EAM</h2>
          </font>
        </div>
        <div class="col-md-2 ">

          <div style="padding-top: 150px;margin-right: -130px;">

            <nav style="">
              <a href="#">
                <font color="black"> Thông Báo |</font>
              </a>
              <a href="#">
                <font color="black">Admin |</font>
              </a>
              <a href="#">
                <font color="black">Đăng Xuất</font>
              </a>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--menu-->
  <nav class="navbar navbar-expand-md navbar-dark sticky-top" id="menu">
    <a class="navbar-brand" href="#">
      <img src="../img/home.jpg" style="width: 40px; ">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="#qlgiangvien">
            <font face="Verdana" size="3" color="white"> QUẢN LÍ GIẢNG VIÊN </font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#qlhocvien">
            <font face="Verdana" size="3" color="white">QUẢN LÍ HỌC VIÊN</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#qlkhoahoc">
            <font face="Verdana" size="3" color="white">QUẢN LÍ KHÓA HỌC</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#qldanhmuc">
            <font face="Verdana" size="3" color="white">QUẢN LÍ DANH MỤC</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tongquan">
            <font face="Verdana" size="3" color="white">QUẢN LÍ ĐĂNG KÍ</font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tongquan">
            <font face="Verdana" size="3" color="white">TỔNG QUAN</font>
          </a>
        </li>
      </ul>
    </div>
    <input type="text" name="search" placeholder="Tìm kiếm ...">
    <button type="submit">
      <img src="../img/search.png" style="width: 34px;height: auto; ">
    </button>
  </nav>

  <!--noi dung-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 offset-md-2">
        <form title="THÊM GIẢNG VIÊN">
          <button type="button" class="button1 " data-toggle="modal" data-target="#exampleModalCenter">
            <font face="cursive"> ADD</font>
          </button>
          <!--modal-->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Học Viên </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td>Tên Học Viên</td>
                      <td>
                        <input type="text" name="Name.." id="ten_hv">
                      </td>
                    </tr>

                    <tr>
                      <td>Tuổi</td>
                      <td>
                        <input type="text" name="Age.." id="tuoi_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Số Điện Thoại</td>
                      <td>
                        <input type="text" name="PhoneNumber.." id="sodienthoai_hv">
                      </td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>
                        <input type="text" name="Email.." id="email_hv">
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!---->

        </form>
      </div>
    </div>
    <br><br>
    <!---->
    <table class="table table-hover">
       <thead>
       <td>STT</td>
       <td>Tên Học Viên</td>
       <td>Tuổi</td>
       <td>Số Điện Thoại</td>
       <td>Email</td>
       <td>Chức Năng</td>
       </thead>
       <tbody>
       <?php
 // khởi tạo kết nối
$connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
// để hiện thị tiếng việt
mysqli_set_charset($connect, 'UTF8');
//Kiểm tra kết nối
if (!$connect) {
    die('kết nối không thành công ' . mysqli_connect_error());
}

$sql = "SELECT * FROM student";
//kiểm tra
if ($result = mysqli_query($connect, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
  ?>
    <tbody>
       <td><?php echo $row['ID'] ?></td>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['age'] ?></td>
       <td><?php echo $row['phoneNumber'] ?></td>
       <td><?php echo $row['email'] ?></td>
       <td>
       <button type="button" title="SỬA THÔNG TIN HỌC VIÊN" class="buttonsmall" data-toggle="modal" data-target="#exampleModalCenter1">
          <h5> SỬA</h5>
        </button>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông  Tin Học Viên </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--nội dung plugin-->
                <table>
                  <tr>
                    <td>Nhập tên Học Viên</td>
                    <td>
                      <input type="text" name="Name.." id="ten_gv">
                    </td>
                  </tr>
              
                  <tr>
                    <td>Nhập tuổi</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập số điện thoại</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                  <tr>
                    <td>Nhập email</td>
                    <td>
                      <input type="text" name="Date.." id="namsinh_gv">
                    </td>
                  </tr>
                </table>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" title="XÓA HỌC VIÊN" class="buttonsmall" onclick="xoahv();">
          <h5>XÓA</h5>
        </button>
       </td>
       </tbody>
 <?php
    }
} else
    //Hiện thông báo khi không thành công
    echo 'Không thành công. Lỗi' . mysqli_error($connect);
//ngắt kết nối
mysqli_close($connect);
 ?>
       </tbody>
    </table>
  </div>
</body>
<footer>
  <br><br><br>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 footer-navigation">
          <h3><a href="#">Trung tâm phát triển nghệ thuật EAM</a></h3>
          <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong>
              · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
          <p class="company-name">Trung tâm EAM © 2018 </p>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts">
          <div>
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

        <div class="col-md-3 footer-about">
          <h4>Đơn vị liên kết</h4>
          <p> </p>
          <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a
              href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
        </div>
      </div>
    </div>
  </div>

</footer>

</html>