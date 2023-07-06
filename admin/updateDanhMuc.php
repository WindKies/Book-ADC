<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cập Nhật Sách Có Trong Danh Mục</title>
	<link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<body>
	<?php
		$id = $_GET["key"];
		require("connect.php");
		$sql = "select * from danhmuc where id = $id";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		if(isset($_POST["btnUpdate"]))
		{
			$link = $_POST["fileName"];
			$photo = $_POST["filePhoto"];
			$title = $_POST["txtTitle"];
			$sql_danhmuc = "update danhmuc set link_page = '$link', photo = '$photo', title = '$title'
									where id = $id";
			$result_danhmuc = mysqli_query($conn, $sql_danhmuc);


			if($result_danhmuc)
			{
				mysqli_close($conn);
				header("location: list.php");
			}
			else
				echo "Cập nhật thất bại " . mysqli_error($conn);
		}
	?>
	<form method="post">
		<table class="main" border="1">
			<tr><h1>Cập Nhật Sách Có Trong Danh Mục</h1></tr>
			<tr>
				<td><label for="link">Liên kết trang</label></td>
				<td><input type="file" name="fileName" id="link"
							value="<?php echo $row['link_page'] ; ?>">
				</td>
				<td><input type="text" name="txtShowLinkOld" id="title"
							value="<?php echo $row['link_page']; ?>" disabled>
				</td>
			</tr>

			<tr>
				<td><label for="name">Hình ảnh sách</label></td>
				<td><input type="file" name="filePhoto" id="photo"
							value="<?php echo $row['photo']; ?>">
				</td>
				<td><input type="text" name="txtShowPhotoOld" id="title"
							value="<?php echo $row['photo']; ?>" disabled>
				</td>
			</tr>

			<tr>
				<td><label for="name">Tiêu đề sách</label></td>
				<td><input type="text" name="txtTitle" id="title"
							value="<?php echo $row['title']; ?>">
				</td>
			</tr>
			
			<tr>
				<td><input type="submit" name="btnUpdate" value="Cập nhật"></td>
				<td><input type="reset" name="btnCancel" value="Hủy"></td>
			</tr>
		</table>

	</form>
</body>
</html>