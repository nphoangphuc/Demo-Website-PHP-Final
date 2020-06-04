<?php
	include 'menu.php';
	$id=$_GET['productid'];
	if($id==0)
	{
		unset($_SESSION['cart']);
	}
	else
	{
		unset($_SESSION['cart'][$id]);
	}	
	header('location:chitietgiohang.php');
?>