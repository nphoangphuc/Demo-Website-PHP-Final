<?php 	
	include '../show_db_mysql.php'; 
	$sql = "DELETE FROM CHUONGTRINHKHUYENMAI WHERE MACHUONGTRINH='".$_GET["id"]."'";
	echo $sql;
	$res=mysqli_query($db,$sql);
	if ($res) 
	{
		header('Location:chuongtrinhkhuyenmai_db.php');
	}
	else
	{
		echo"<br> Không thể xóa<br>";
	}

?>