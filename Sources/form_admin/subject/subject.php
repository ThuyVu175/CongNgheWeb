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
    //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      if(isset($_POST["Name"])) { $Name = $_POST['Name']; }
      if(isset($_POST["categoryID"])) { $categoryID = $_POST['categoryID']; }
      if(isset($_POST["description"])) { $description = $_POST['description']; }
      if(isset($_POST["image"])) { $image = $_POST['image']; }
      if(isset($_POST["price"])) { $price = $_POST['price']; }
      $sql = "INSERT INTO subjects (Name,categoryID,description,image,price, createDate, isActive)
      VALUES ( '$Name',$categoryID,'$description','$image','$price', NOW(),1)";
      if ( (mysqli_query($connect, $sql)) ) {
        echo "<script>";
        echo "alert('Thêm Môn Học Thành Công !');";  
        echo "</script>";
      } 
      else {      
      echo "<script>";
      echo "alert('Thêm Môn Học Thất Bại !');";  
      echo "</script>";
    } 
  }
  //Đóng database
  mysqli_close($connect);
    ?>

<body style="background: #E6E6FA">
  

  <!--noi dung-->
  <div class="container">
  <br>
    <h2><font color="green">Quản Lí Môn Học</font></h2>
    <div class="row">
      <div class="col-md-3 ">
        <form title="THÊM MÔN HỌC" action="" method="post">
          <button type="button" class="button1 " data-toggle="modal" data-target="#AddMonHoc">
            <font face="cursive"> ADD</font>
          </button>
          <!--modal-->
          <div class="modal fade" id="AddMonHoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Nhập Thông Tin Môn Học </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                      <td> Tên Môn Học</td>
                      <td>
                        <input type="text" name="Name">
                      </td>
                    </tr>
                    <tr>
                      <td> Mã Danh Mục</td>
                      <td>
                        <input type="text" name="categoryID" >
                      </td>
                    </tr>
                    <tr>
                      <td>Image ( URL) </td>
                      <td>
                        <input type="text" name="image" >
                      </td>
                    </tr>
                    <tr>
                      <td> Chi Phí Môn Học</td>
                      <td>
                        <input type="text" name="price" >
                      </td>
                    </tr>
                  </table>
                  <label for="trinhdohocvan"> Mô Tả</label>
                  <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!---->

        </form>
      </div>
      <div class="col-md-5 offset-md-4" style="padding-top: 50px;">
        <button type="submit" class="buttonsearch">
           <img src="../img/search.png" style="width: 34px;height: auto; ">
        </button>
        <input type="text" name="search" placeholder="Tìm kiếm ...">
      </div>
    </div>
    <br><br>
    <!---->
    <table class="table table-hover" >
      <thead style="background: #CCCC66;">
        <td  WIDTH= ""></td>
        <td  WIDTH= "150px">Tên Môn Học</td>
        <td  WIDTH= "50px"> Mã Danh Mục</td>
        <td  WIDTH= "400px">Mô Tả Môn Học</td>
        <td width="100px">Chi Phí(VND)</td>
        <td  WIDTH= "150px">Ngày Tạo</td>
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

$sql = "SELECT * FROM subjects";
//kiểm tra
if ($result = mysqli_query($connect, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
  ?>
      <tbody>
        <td>
            <img src="<?php echo $row['image'] ?>" class="img">
        </td>
        <td>
          <?php echo $row['Name'] ?>
        </td>
        <td>
          <?php echo $row['categoryID'] ?>
        </td>
        <td>
          <?php echo $row['description'] ?>
        </td>
        <td>
          <?php echo $row['price'] ?>
        </td>
        <td>
          <?php echo $row['createDate'] ?>
        </td>
        <td>
          <a href="subject/edit.php?ID=<?php echo $row['ID']; ?>" >
            <button type="button" title="SỬA THÔNG TIN MÔN HỌC" class="buttonsmall">
              <h5> SỬA</h5>
            </button>
          </a>
          <a href="subject/delete.php?ID=<?php echo $row['ID']; ?>">
            <button type="button" title="XÓA MÔN HỌC" class="buttonsmall" >
              <h5>XÓA</h5>
            </button>
          </a>
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
</html>