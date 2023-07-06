<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm Sách Mới</title>
	<link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<body>
	<?php
		require("connect.php");
		if(isset($_POST["btnAdd"]))
		{
			$link = $_POST["fileName"];
			$photo = $_POST["filePhoto"];
			$title = $_POST["txtTitle"];
			$sql_page2 = "insert into sachmoi_page2(link_page, photo, title) 
					values('$link', '$photo', '$title')";
			$result_page2 = mysqli_query($conn, $sql_page2);



			if($result_page2)
			{
				mysqli_close($conn);
				header("location: list.php");
			}
			else
				echo "Thêm dữ liệu thất lại " . mysqli_error($conn);

			
		}
	?>
	<form method="post">
		<table class="main">
			<tr><h1>Thêm Sách Mới</h1></tr>
			<tr>
				<td><label for="link">Liên kết trang</label></td>
				<td><input type="file" name="fileName" id="link"></td>
			</tr>
			<tr>
				<td><label for="photo">Hình ảnh sách</label></td>
				<td><input type="file" name="filePhoto" id="photo"></td>
			</tr>
			<tr>
				<td><label for="title">Tiêu đề sách</label></td>
				<td><input type="text" name="txtTitle" id="title"></td>
			</tr>

			<tr>
				<td><input type="submit" name="btnAdd" value="Thêm"></td>
				<td><input type="reset" name="btnCancel" value="Hủy"></td>
			</tr>
		</table>
	</form>
</body>
</html>