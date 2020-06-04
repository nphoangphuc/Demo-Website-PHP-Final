<html>
	<head>
		<?php
			include 'login_success-admin.php';
			include '../show_db_mysql.php';
		?>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title> Menu </title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row col-sm-12">
				<nav class="navbar navbar-expand-lg navbar-light" >
					<a class="navbar-brand" href="index-admin.php">Trang chủ</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
				  <div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav mr-auto">
						<li><a class="navbar-brand" href="#"><img src="../images/sample.jpg" width=100 height=100></img></a></li>
						<li><a class="nav-item nav-link" href="index-admin.php">Trang chủ <span class="sr-only">(current)</span></a></li>
						<li><a class="nav-item nav-link" href="chuongtrinhkhuyenmai_db.php">Các chương trình khuyến mãi<span class="sr-only">(current)</span></a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Chọn bảng dữ liệu cần kiểm tra
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
							  <a class="dropdown-item" href="chitietdathang_db.php">Chi Tiết Đặt Hàng</a>
							  <a class="dropdown-item" href="dondathang_db.php">Đơn Đặt Hàng</a>
							  <a class="dropdown-item" href="khachhang_db.php">Khách hàng</a>
							  <a class="dropdown-item" href="loaihang_db.php">Loại hàng</a>
							  <a class="dropdown-item" href="mathang_db.php">Mặt hàng</a>
							  <a class="dropdown-item" href="nhacungcap_db.php">Nhà cung cấp</a>
							  <a class="dropdown-item" href="nhanvien_db.php">Nhân viên</a>
							  <a class="dropdown-item" href="sanpham_db.php">Sản phẩm</a>
							</div>
						</li>
						<li><a class="nav-item nav-link" href="changepass.php">Đổi mật khẩu</a></li>
						<li><a class="nav-item nav-link" href="logout-admin.php">Logout</a></li>
					</ul>
				  </div>
				</nav>
			</div>
		</div>
	</body>
</html>