
  <script>


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
    mysqli_set_charset($connect, 'UTF8');
    $Name = "";
    //Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
      if(isset($_POST["NameAdd"])) { $Name = $_POST['NameAdd']; }
      //Code xử lý, insert dữ liệu vào table
      $sql = "INSERT INTO category (Name, createDate, isActive)
      VALUES ('$Name', NOW(),1)";
      $sql1 = "SELECT * FROM `category` WHERE `category`.`Name`='$Name' AND `category`.`isActive`=1";// để so sánh xem tên danh mục tồn tại chưa
      if ( (mysqli_num_rows(mysqli_query($connect, $sql1)))==0) {
        (mysqli_query($connect, $sql));
        echo "<script>";
        echo "alert('Thêm Danh Mục Thành Công !');";  
        echo "</script>";
      } else {
        echo "<script>";
        echo "alert('Tên Danh Mục Đã Tồn Tại !');";  
        echo "</script>";
      }
    }

//Đóng database
mysqli_close($connect);
  ?>

<body style="background: #E6E6FA">
  

  <!--noi dung-->
  <div class="container">
    <div class="row">
      <div class="col-md-3 ">
        <form title="THÊM DANH MỤC" action="" method="post">
          <button type="button" class="button1 " data-toggle="modal" data-target="#exampleModalCenter">
            <font face="cursive"> ADD</font>
          </button>
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" 
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background: #E6E6FA;">
                <div class="modal-header">
                  <h5 class="modal-title" >Nhập Thông Tin Danh Mục </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--nội dung plugin-->
                  <table>
                    <tr>
                        <th>Tiêu đề:</th>
                        <td><input type="text" name="NameAdd" value=""></td>
                    </tr>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5 offset-md-4" style="padding-top: 50px;">
            <form action="" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="btnsearch" value="search" />
            </form>
        <?php
        /* Tìm kiếm
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['btnsearch'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "SELECT * FROM `category` WHERE Name LIKE '$search'";
 
                // Kết nối sql
                mysql_connect("localhost", "root", "", "qlkhoahocttnk");
 
                // Thực thi câu truy vấn
                $sqlsearch = mysqli_query($query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sqlsearch);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($kq = mysqli_fetch_assoc($sqlsearch)) {
                        echo '<tr>';
                            echo "<td>{$kq['user_id']}</td>";
                            echo "<td>{$kq['username']}</td>";
                            echo "<td>{$kq['password']}</td>";
                            echo "<td>{$kq['email']}</td>";
                            echo "<td>{$kq['address']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        */
        ?>   
      </div>
    </div>
    <br><br>
    <!---->
    <table class="table table-hover " >
      <thead style="background: #CCCC66;">
        <td hidden>ID</td>
        <td  WIDTH= "400px">Tên Danh Mục</td>
        <td WIDTH= "500px">Ngày Tạo</td>
        <td>Chức Năng</td>
      </thead>
      <?php
        // khởi tạo kết nối
        $connect = mysqli_connect('localhost', 'root', '', 'qlkhoahocttnk');
        // để hiện thị tiếng việt
        mysqli_set_charset($connect, 'UTF8');
        //Kiểm tra kết nối
        if (!$connect) {
            die('kết nối không thành công ' . mysqli_connect_error());
        }

        $sqlshow = "SELECT * FROM `category` WHERE `category`.`isActive`=1";
        //kiểm tra
        if ($result = mysqli_query($connect, $sqlshow)) {
            while ($row = mysqli_fetch_array($result)) {
      ?>
      <tbody>
        <tr>
          <td hidden>
            <?php echo $row['ID'] ?>
          </td>
          <td>
            <?php echo $row['Name'] ?>
          </td>
          <td>
            <?php echo $row['createDate'] ?>
          </td>
          <td>
            <a href="category/edit.php?ID=<?php echo $row['ID']; ?>" >
              <button type="button" title="SỬA THÔNG TIN DANH MỤC" class="buttonsmall">
              <h5>SỬA</h5>
              </button>
            </a>            
            <a href="category/delete.php?ID=<?php echo $row['ID']; ?>" class="delete">
              <button type="button" title="XÓA DANH MỤC" class="buttonsmall">
              <h5>XÓA</h5>
              </button>
            </a>
          </td>
        </tr>
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