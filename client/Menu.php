<html>
		<?php
			include '../show_db_mysql.php';
			session_start();
		?>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<title> Website </title>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li><a class="navbar-brand" href="index.php"><img src="../images/sample.jpg" width=100 height=100></img></a></li>
		  <li class="nav-item active">
			<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="about.php">About us</a>
		  </li>
		  <li class="nav-item">
		   <a class="nav-link" href="sanpham.php">Sản phẩm</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="chitietgiohang.php">Xem giỏ hàng</a>
		  </li>
		  <?php
		  if(isset($_SESSION["name"]) && $_SESSION["name"] == true)	  
		  {
		  include'login_success.php';
		  echo'<li class="nav-item">
			<a class="nav-link" href="logout.php">Logout</a>
		  </li>';
		  }
		  else
		{
		  echo'<li class="nav-item">
			<a class="nav-link" href="login.php">Login</a>
		  </li>';
		  }
		  ?>
		</ul>
		<form class="form-inline my-2 my-lg-0" action="sanpham.php" method="Get">
		  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="txtsearch"	>
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	  </div>
	</nav>
	</body>
</html>