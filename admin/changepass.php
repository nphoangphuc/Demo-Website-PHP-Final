<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<title> Quản lý Website </title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 m-1 divhead">
				<?php
				include 'Menu-admin.php';
				?>
			</div>
		</div>
		<div class="row m-1" >
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 divbody">
				<form action="#" method="post" class="form">
					<table class="center">
						<tr>
							<th colspan="2">Đổi mật khẩu</th>
						</tr>
						<tr>
							<td>Mật khẩu cũ: </td>
							<td><input type="password" name="txtoldpass" placeholder="Nhập Mật Khẩu Cũ" required="required" ></td>
						</tr>
						<tr>
							<td>Mật khẩu mới: </td>
							<td><input type="password" name="txtnewpass" placeholder="Nhập Mật Khẩu Mới" ></td>
						</tr>
						<tr>
							<td>Nhập lại mật khẩu mới:</td>
							<td><input type="password" name="txtnewpass1" placeholder="Nhập Lại Mật Khẩu Mới" ></td>
						<tr>
							<td><input type="submit" name="submit" value="Đổi mật khẩu và đăng nhập lại"></td>
						</tr>
					</table>
				</form>
				<?php 
					$name=$_SESSION['name'];
					$SQL1="SELECT * from ADMIN where USERNAME='".$name."'";
					$result1=mysqli_query($db,$SQL1);
					$n=mysqli_fetch_assoc($result1);
					$oldpass=$n['PASSWORD'];
					if(isset($_POST["submit"]))
					{
						if($oldpass==md5($_POST['txtoldpass']))
						{
							if($_POST['txtnewpass']==$_POST['txtnewpass1'])
							{
								$p=md5($_POST['txtnewpass']);
								$sql_change="UPDATE admin SET PASSWORD='".$p."' where USERNAME='".$name."'";
								echo $sql_change;
								$query=mysqli_query($db,$sql_change);
								if(mysqli_affected_rows($db)==0)
								{
									echo 'Lỗi đổi mật khẩu';
								}
								else
								{
									header('Location:logout-admin.php');
								}
							}
							else
							{
								echo 'Mật khẩu mới không trùng nhau';	
							}
						}
						else
						{
							echo 'Sai mật khẩu cũ';
						}
					}
				?>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 m-1 sticky-bottom divfooter">
				<?php
				include 'footer-admin.php';
				?>
			<div>
		</div>	
	</div>
</body>