<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<body>
	<?php
		$id = $_GET["key"];
		require("connect.php");
		$sql3 = "select * from sachhot where id = $id";
		$result3 = mysqli_query($conn, $sql3);
		$row3 = mysqli_fetch_assoc($result3);
		
		if(isset($_POST["btnUpdate"]))
		{
			$link = $_POST["fileName"];
			$photo = $_POST["filePhoto"];
			$title = $_POST["txtTitle"];
			$sql3 = "update sachhot set link_page = '$link', photo = '$photo', title = '$title'
									where id = $id";
			$result3 = mysqli_query($conn, $sql3);


			if($result3)
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
			<tr><h1>Cập Nhật Sách Hot</h1></tr>
			<tr>
				<td><label for="link">Liên kết trang</label></td>
				<td><input type="file" name="fileName" id="link"
							value="<?php echo $row3['link_page'] ; ?>">
				</td>
				<td><input type="text" name="txtShowLinkOld" id="title"
							value="<?php echo $row3['link_page']; ?>" disabled>
				</td>
			</tr>

			<tr>
				<td><label for="name">Hình ảnh sách</label></td>
				<td><input type="file" name="filePhoto" id="photo"
							value="<?php echo $row3['photo']; ?>">
				</td>
				<td><input type="text" name="txtShowPhotoOld" id="title"
							value="<?php echo $row3['photo']; ?>" disabled>
				</td>
			</tr>

			<tr>
				<td><label for="name">Tiêu đề sách</label></td>
				<td><input type="text" name="txtTitle" id="title"
							value="<?php echo $row3['title']; ?>">
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