<?php 	include '../show_db_mysql.php'; 
	
	$sql = "DELETE FROM CHITIETDATHANG WHERE SOHOADON='".$_GET["id1"]."'"."AND MAHANG='".$_GET["id2"]."'";
	echo $sql;
	$res=mysqli_query($db,$sql);
	if ($res) 
	{
		header('Location:chitietdathang_db.php');
	}
	else
	{
		echo"<br> Không thể xóa<br>";
	}
	
	/*if(isset($_POST["submit"]))
		{
			$sql_insert="INSERT INTO loaihang(MALOAIHANG,TENLOAIHANG) VALUES ('".$_POST["txtmaloaihang"]."','".$_POST["txttenloaihang"]."')";
			$res=mysqli_query($db,$sql_insert);
			if($res)
			{
				header('Location:loaihang_insert.php');
			}
			else
			{
			echo"<br> Không thể cập nhật<br>";
			}
		}*/
?>