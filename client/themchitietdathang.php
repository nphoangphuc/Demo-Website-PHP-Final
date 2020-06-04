<?php
	
	$str=0;
	foreach($_SESSION['cart'] as $key=>$value)
	{
		$item[]="'".$key."'";
	}
	$str= implode(",",$item);
	$sql="Select * from MATHANG where MAHANG in ($str)";
	$query=mysqli_query($db,$sql);
	$total="0";
	$mucgiamgia="0";
	while($row=mysqli_fetch_array($query))
		{
			$sql_insert="INSERT INTO chitietdathang(SOHOADON,MAHANG,GIABAN,SOLUONG,MUCGIAMGIA) VALUES ('".$x."','".$row['MAHANG']."','".$row['GIAHANG']."','".$_SESSION['cart'][$row['MAHANG']]."','".$mucgiamgia."')";
			echo $sql_insert;
			$res=mysqli_query($db,$sql_insert);
			if($res)
			{
				unset($_SESSION['cart']);
				echo "<script language='javascript' type='text/javascript'>location.href='dondathang_db.php'</script>";
			}
			else
			{
			echo $sql_insert;
			echo"<br> Không thể cập nhật<br>";
			}
		}
?>
