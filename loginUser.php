<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
  rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/loginUser.css">
  
</head>
<body>
  <?php
    if(isset($_POST["btnLogin"]))
      {
    $uus= $_POST['Tendangnhap'];
    $ps= $_POST['Matkhau'];
     $conn = mysqli_connect("localhost","root","","sach");
     $sql= "select * from nguoidung where Tendangnhap ='$uus' and Matkhau ='$ps'";
    //truy vấn
    $retval=mysqli_query($conn, $sql);
      if (mysqli_num_rows($retval) > 0) {
        $_SESSION["user"] = "";
         header("Location:  home.php");
        /* echo "<h1>OK</h1>";*/
      }else{
        echo "<h1>Đăng nhập thất bại!</h1>";
      }
     }
  ?>
  <div class="container">
    <div class="head">
      <ul class="logo">
        <a href="http://localhost:8080/BB" id="goc_sach"> 
          <span id="char1">Góc</span>
          <span id="char2">Sách.VN</span>
        </a>
      </ul>
    </div>


    <div class="than">  
      <div class="notify">
        Nhập tên tài khoản và mật khẩu của bạn dưới đây.
      </div>

      <form  method="POST" role="form">
        <table>
          <tr>
            <!-- <th colspan="2">
              <label for="user"><h2></h2></label>              
            </th> -->
          </tr>
          <tr>
            <!-- <td>Tên đăng nhập</td> -->
            <td><input type="text" name="Tendangnhap" placeholder="Tên đăng nhập" id="user"></td>
          </tr>
          <tr>
            <!-- <td>Mật khẩu</td> -->
            <td><input type="password" name="Matkhau" placeholder="Mật khẩu" required id="pass"></td>
            <td id="eye">
              <span class="material-icons-outlined" onclick="change(this)">
                visibility
              </span>
            </td>           
          </tr>
          <tr>
            <th colspan="2">
              <input type="submit" name="btnLogin" value="Đăng nhập">
            </th>
          </tr>
        </table>      
      </form>
    </div>
     <div class="notify">
           <span>
             Bạn không có tài khoản?
          
            <li><a href="sigup.php"><span id=""> Đăng ký ở đây.</span></a></li>
           </span>
           
      </div>

    <script type="text/javascript">
    function change(e)
    {
      var pass = document.getElementById('pass');
      if(pass.type == "text")
      {
        pass.type = "password";
        e.innerHTML = "visibility";

      }
      else
      {
        pass.type = "text";
        e.innerHTML = "visibility_off";
      }
    }
    </script>

    <div class="clear"></div>
      <div class="footer">
            <div class="bot1">
                <h3>Nhập email để nhận thông tin</h3>
                <td>
                <input type="text" name="txtFullName" placeholder="Email..."" id="ten" required>
                </td>       
            </div>
            <div class="clear"></div>
            <div class="bot_left">
                <h2>Góc Sách</h2>
                <span>“Đơn giản” là một khái niệm mạnh mẽ đã được áp dụng trong các ngành khác nhau và mang lại thành công qua các năm. Những mẫu template HTML đẹp được thiết kế dựa theo ý tưởng này, với xu hướng nghiêng về sự tối giản và tinh tế đang làm mưa làm gió trong năm 2020.
                Nếu bạn chuẩn bị bắt tay vào một dự án trang web mới, thì bài viết này tập hợp danh sách 20 mẫu HTML đẹp, đơn giản tốt nhất, chúng đều miễn phí để tải về.</span>
            </div>
            <div class="bot_right">
                <ul Dịch vụ >
                  <li>Điều khoản sử dụng</li>
                  <li>Chính sách bảo mật</li>
                  <li>Giới thiệu</li>
                </ul>
                <ul>
                    <li>Đăng nhập</li>
                    <li>Chi tiết tài khoản</li>
                    <li>Lịch sử</li>
                </ul>
                <span> Liên hệ : 0123456789</span>
            </div>
        </div> 
  </div>
</body>
</html>