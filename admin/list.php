<?php
	session_start();

	if(!isset($_SESSION["adminn"]))
	{
	    header("location: login.php"); 
	}
	echo "Hello, " .$_SESSION["adminn"];
	echo "<a href = 'logout.php'> Đăng xuất</a>" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang quản trị</title>
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>
	<?php
		//kết hợp file connect vào tại đây
		require("connect.php");
		//câu lệnh truy vấn
		$sql = "select * from sachmoi";
		//thực hiện truy vấn
		$result = mysqli_query($conn, $sql);

		$sql_page2 = "select * from sachmoi_page2";
		//thực hiện truy vấn
		$result_page2 = mysqli_query($conn, $sql_page2);

		$sql_page3 = "select * from sachmoi_page3";
		//thực hiện truy vấn
		$result_page3 = mysqli_query($conn, $sql_page3);

		$sql2 = "select * from sachcu"; 
		$result2 = mysqli_query($conn, $sql2);

		$sql3 = "select * from sachhot"; 
		$result3 = mysqli_query($conn, $sql3);

		$sql_danhmuc = "select * from danhmuc"; 
		$result_danhmuc = mysqli_query($conn, $sql_danhmuc);
	?>
	<h1 class="gradient">Chào mừng bạn đến với trang quản trị Website</h1>

	<h2>Quản lý sách mới  Trang 1</h2>
	<table class = "main" border="1" width="400px">
		<tr>
			<th>Liên kết trang</th>
			<th>Hình ảnh sách</th>
			<th>Tiêu đề sách</th>
			<th colspan="2"><a href="addSachMoi.php">Thêm</a></th>
		</tr>
<?php
		//lấy từng hàng trong CSDL
	while($row = mysqli_fetch_assoc($result))
	{
?>
		<tr>
			<td><?php echo $row["link_page"]; ?></td>
			<td><?php echo $row["photo"]; ?></td>
			<td><?php echo $row["title"]; ?></td>
			<td><a href="updateSachMoi.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
			<td>
				<a href="delete.php?key=<?php echo $row['id']; ?>" 
					onclick="return confirm('Bạn có chắc chắn xóa quyển sách <?php echo $row["title"];?> không? ')">Xóa
				</a>
			</td>
		</tr>
<?php
	}
	
?>
	</table>


	<h2>Quản lý sách mới Trang 2</h2>
	<table class = "main" border="1" width="400px">
		<tr>
			<th>Liên kết trang</th>
			<th>Hình ảnh sách</th>
			<th>Tiêu đề sách</th>
			<th colspan="2"><a href="addSachMoi-page2.php">Thêm</a></th>
		</tr>
<?php
		//lấy từng hàng trong CSDL
	while($row = mysqli_fetch_assoc($result_page2))
	{
?>
		<tr>
			<td><?php echo $row["link_page"]; ?></td>
			<td><?php echo $row["photo"]; ?></td>
			<td><?php echo $row["title"]; ?></td>
			<td><a href="updateSachMoi-page2.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
			<td>
				<a href="delete.php?key=<?php echo $row['id']; ?>" 
					onclick="return confirm('Bạn có chắc chắn xóa quyển sách <?php echo $row["title"];?> không? ')">Xóa
				</a>
			</td>
		</tr>
<?php
	}
	
?>
	</table>


	<h2>Quản lý sách mới Trang 3</h2>
	<table class = "main" border="1" width="400px">
		<tr>
			<th>Liên kết trang</th>
			<th>Hình ảnh sách</th>
			<th>Tiêu đề sách</th>
			<th colspan="2"><a href="addSachMoi-page3.php">Thêm</a></th>
		</tr>
<?php
		//lấy từng hàng trong CSDL
	while($row = mysqli_fetch_assoc($result_page3))
	{
?>
		<tr>
			<td><?php echo $row["link_page"]; ?></td>
			<td><?php echo $row["photo"]; ?></td>
			<td><?php echo $row["title"]; ?></td>
			<td><a href="updateSachMoi-page3.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
			<td>
				<a href="delete.php?key=<?php echo $row['id']; ?>" 
					onclick="return confirm('Bạn có chắc chắn xóa quyển sách <?php echo $row["title"];?> không? ')">Xóa
				</a>
			</td>
		</tr>
<?php
	}
	
?>
	</table>

<h2>Quản lý sách hot</h2>
<table class = "main" border="1" width="400px">	
		<tr>
			<th>Liên kết trang</th>
			<th>Hình ảnh sách</th>
			<th>Tiêu đề sách</th>
			<th colspan="2"><a href="addSachHot.php">Thêm</a></th>
		</tr>
<?php
		//lấy từng hàng trong CSDL
	while($row = mysqli_fetch_assoc($result3))
	{
?>
		<tr>
			<td><?php echo $row["link_page"]; ?></td>
			<td><?php echo $row["photo"]; ?></td>
			<td><?php echo $row["title"]; ?></td>
			<td><a href="updateSachHot.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
			<td>
				<a href="delete.php?key=<?php echo $row['id']; ?>" 
					onclick="return confirm('Bạn có chắc chắn xóa quyển sách <?php echo $row["title"];?> không? ')">Xóa
				</a>
			</td>
		</tr>
<?php
	}
	
?>
	</table>

	<h2>Quản lý sách cũ</h2>
	<table class = "main" border="1" width="400px">
		<tr>
			<th>Liên kết trang</th>
			<th>Hình ảnh sách</th>
			<th>Tiêu đề sách</th>
			<th colspan="2"><a href="addSachCu.php">Thêm</a></th>
		</tr>
<?php
		//lấy từng hàng trong CSDL
	while($row = mysqli_fetch_assoc($result2))
	{
?>
		<tr>
			<td><?php echo $row["link_page"]; ?></td>
			<td><?php echo $row["photo"]; ?></td>
			<td><?php echo $row["title"]; ?></td>
			<td><a href="updateSachCu.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
			<td>
				<a href="delete.php?key=<?php echo $row['id']; ?>" 
					onclick="return confirm('Bạn có chắc chắn xóa quyển sách <?php echo $row["title"];?> không? ')">Xóa
				</a>
			</td>
		</tr>
<?php
	}
	/*mysqli_close($conn);*/
?>
	</table>





	<h2>Quản lý danh mục</h2>
		<table class = "main" border="1" width="400px">
		<tr>
			<th>Liên kết trang</th>
			<th>Hình ảnh sách</th>
			<th>Tiêu đề sách</th>
			<th colspan="2"><a href="addDanhMuc.php">Thêm</a></th>
		</tr>
<?php
		//lấy từng hàng trong CSDL
	while($row = mysqli_fetch_assoc($result_danhmuc))
	{
?>
		<tr>
			<td><?php echo $row["link_page"]; ?></td>
			<td><?php echo $row["photo"]; ?></td>
			<td><?php echo $row["title"]; ?></td>
			<td><a href="updateDanhMuc.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
			<td>
				<a href="delete.php?key=<?php echo $row['id']; ?>" 
					onclick="return confirm('Bạn có chắc chắn xóa quyển sách <?php echo $row["title"];?> không? ')">Xóa
				</a>
			</td>
		</tr>
<?php
	}
	mysqli_close($conn);
?>
	</table>


</body>
</html>



