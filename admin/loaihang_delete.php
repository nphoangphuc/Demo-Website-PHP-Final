<?php 	include '../show_db_mysql.php'; 

	$sql = "DELETE FROM LOAIHANG WHERE MALOAIHANG='".$_GET["id"]."'";
	echo $sql;
	$res=mysqli_query($db,$sql);
	if ($res) 
	{
		header('Location:loaihang_db.php');
	}
	else
	{
	echo"<br> Không thể cập nhật<br>";
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