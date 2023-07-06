<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
	rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/sigup.css">
</head>
<body>
<?php
 	$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname = "dbsach_final";
	$conn = mysqli_connect($servername,$username,$password,$dbname); if(!$conn)
	{ 
		die('Kết nối thất bại:'.mysqli_connect_error()); 
	}
	// Thêm dữ liệu
	$id=0;
	$Hovaten = "";
	$Ngaysinh = "";
	$Quequan = "";
	$Tendangnhap = "";
	$Matkhau = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(isset($_POST["id"])) 
			{ 
				$id = $_POST['id']; 
			}
		if(isset($_POST["Hovaten"])) 
			{ $Hovaten = $_POST['Hovaten']; }
		if(isset($_POST["Ngaysinh"])) 
			{ $Ngaysinh = $_POST['Ngaysinh']; }
		if(isset($_POST["Quequan"])) 
			{ $Quequan = $_POST['Quequan']; }
		if(isset($_POST["Tendangnhap"])) 
			{ $Tendangnhap = $_POST['Tendangnhap']; }
		if(isset($_POST["Matkhau"])) 
			{ $Matkhau = $_POST['Matkhau']; }

		$sql = "insert into nguoidung(ID, Hovaten, Ngaysinh, Quequan, Tendangnhap, Matkhau) values('$id', '$Hovaten', '$Ngaysinh', '$Quequan', '$Tendangnhap', '$Matkhau')";
		if(mysqli_query($conn, $sql))
		{ 
			echo "Đăng ký thành công, mời bạn nhấn Login bên dưới, để đăng nhập"; 
		}
		Else
		{ 
			echo "Không thể thêm dữ liệu vào bảng user: ". mysqli_error($conn); 
		} 
	}
	mysqli_close($conn); 
?>
<div class="container">
		<div class="head">
			<ul class="logo">
				<a href="http://localhost/CNW/RVbook/" id="goc_sach">
					<span id="char1">Góc</span>
					<span id="char2">Sách.VN</span>
				</a>
			</ul>
		</div>


		<div class="than">	
			<div class="notify">
			  Mời bạn đăng ký tài khoản !
			</div>
	<form action="" method="post">
		<table>
			<tr>
				<th style="color:#fff"; colspan="2">ID:</th>
				<td><input type = "text" name="id" value=""></td>
			</tr>
			<tr>
				<th style="color:#fff"; colspan="2">Họ và tên:</th>
				<td><input type = "text" name="Hovaten" value="" required ></td>
			</tr>

			<tr>
				<th style="color:#fff"; colspan="2">Ngày sinh</th>
				<td><input type="date" name="Ngaysinh" value=""></td>
			</tr>

			<tr>
				<th style="color:#fff"; colspan="2">Quê quán:</th>
				<td><input type="text" name="Quequan" value=""></td>
			</tr>

			<tr>
				<th style="color:#fff"; colspan="2">Tên đăng nhập:</th>
				<td><input type="text" name="Tendangnhap" value="" required ></td>
			</tr>

			<tr>
				<th style="color:#fff"; colspan="2">Mật khẩu:</th>
				<td><input type="text" name="Matkhau" value="" required ></td>
			</tr>
		</table>

		<button type="submit">Sigup</button>
		<div class="mune_left">
	 	  	<ul>
            <button><a href="loginUser.php">Login</a></button>
            </ul>
        </div>		
	</form>

		


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