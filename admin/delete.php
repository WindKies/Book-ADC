<?php
	$id = $_GET["key"];
	require("connect.php");

	$sql = "delete from sachmoi where id = $id";
	$result = mysqli_query($conn, $sql);

	$sql_page2 = "delete from sachmoi_page2 where id = $id";
	$result_page2 = mysqli_query($conn, $sql_page2);

	$sql_page3 = "delete from sachmoi_page3 where id = $id";
	$result_page3 = mysqli_query($conn, $sql_page3);



	$sql2 = "delete from sachcu where id = $id";
	$result2 = mysqli_query($conn, $sql2);

	$sql3 = "delete from sachhot where id = $id";
	$result3 = mysqli_query($conn, $sql3);

	$sql_danhmuc = "delete from danhmuc where id = $id";
	$result_danhmuc = mysqli_query($conn, $sql_danhmuc);
	

	if($result)
	{
		mysqli_close($conn);
		header("location: list.php");
	}
	else
		echo "Xóa dữ liệu thất bại " . mysqli_error($conn);

	if($result_page2)
	{
		mysqli_close($conn);
		header("location: list.php");
	}
	else
		echo "Xóa dữ liệu thất bại " . mysqli_error($conn);

	if($result_page3)
	{
		mysqli_close($conn);
		header("location: list.php");
	}
	else
		echo "Xóa dữ liệu thất bại " . mysqli_error($conn);




	if($result2)
	{
		mysqli_close($conn);
		header("location: list.php");
	}
	else
		echo "Xóa dữ liệu thất bại " . mysqli_error($conn);


	if($result3)
	{
		mysqli_close($conn);
		header("location: list.php");
	}
	else
		echo "Xóa dữ liệu thất bại " . mysqli_error($conn);


	if($result_danhmuc)
	{
		mysqli_close($conn);
		header("location: list.php");
	}
	else
		echo "Xóa dữ liệu thất bại " . mysqli_error($conn);
?>