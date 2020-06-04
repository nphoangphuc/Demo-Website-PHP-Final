<html lang="en"	>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<title> Website Bán Hàng </title>
		<script>
		$(document).ready(function(){	
				$(".form-item").submit(function(e){
					var form_data = $(this).serialize();
					var button_content = $(this).find('button[type=submit]');
					button_content.html('Adding...'); //Loading button text 

					$.ajax({ //make ajax request to cart_process.php
						url: "cart_process.php",
						type: "POST",
						dataType:"json", //expect json value from server
						data: form_data
					}).done(function(data){ //on Ajax success
						$("#cart-info").html(data.items); //total items in cart-info element
						button_content.html('Add to Cart'); //reset button text to original text
						alert("Item added to Cart!"); //alert user
						if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
							$(".cart-box").trigger( "click" ); //trigger click to update the cart box.
						}
					})
					e.preventDefault();
				});

			//Show Items in Cart
			$( ".cart-box").click(function(e) { //when user clicks on cart box
				e.preventDefault(); 
				$(".shopping-cart-box").fadeIn(); //display cart box
				$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
				$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
			});
			
			//Close Cart
			$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
				e.preventDefault(); 
				$(".shopping-cart-box").fadeOut(); //close cart-box
			});
			
			//Remove items from cart
			$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
				e.preventDefault(); 
				var pcode = $(this).attr("data-code"); //get product code
				$(this).parent().fadeOut(); //remove item element from box
				$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
					$("#cart-info").html(data.items); //update Item count in cart-info
					$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
				});
			});

		});
		</script>
	</head>
	<body>
		<div class="container-fluid">	
			<div class="row">
				<div class="col-sm-12 m-1 divhead">
					<?php
					include 'Menu.php';
					?>
				</div>
			</div>
			<div class="row divbody" style="width:100%" >
				
					<div class="col-2">
						<?php
							$select=mysqli_query($db,"SELECT * from loaihang");
							while($row=mysqli_fetch_array($select))
							{
								echo "<tr>";
									echo "<td><a href='./sanpham.php?id=".$row['MALOAIHANG']."'>".$row['TENLOAIHANG']."</a></td></br>";
								echo "</tr>";
							}
						?>
					</div>
					<div class="col-10">
						<?php
							if(isset($_GET['txtsearch']))
							{
								$SQL="SELECT * from mathang where TENHANG like '%".$_GET["txtsearch"]."%'";
								
							}				
							else if(isset($_GET['id']))
							{
								$SQL="SELECT * from mathang where MALOAIHANG ='".$_GET["id"]."'";
								
							}
							else
							{
								$SQL="SELECT * from mathang order by TENHANG asc" ;
							}
							$result=mysqli_query($db,$SQL);
							$count=$result->num_rows;
							if($count==0)
							{
								echo 'Không có sản phẩm';
							}
							else
							{
								while($row=$result->fetch_assoc())
								{?>
									<div style="width:200px; height:200px; float:left; margin:4px; padding: 4px; border:1px solid #CCCCCC;">
										<table class="center">
											<tr>
												<td>
													<a href="loaihang-mathang.php?id=<?php echo $row['MAHANG'];?>"><?php echo $row['TENHANG']; ?><br/><br/></a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="<?php echo "loaihang-mathang.php?id=".$row['MAHANG']; ?>">
													<img width="100" height="100" src="<?php echo $row['HINH']; ?>" />
												</td>
											</tr>
											<tr>
												<td>
													Số lượng hàng còn: <?php echo $row['SOLUONG']; ?><br/>
												</td>
											</tr>
											<tr>
												<td>
													<a href="giohang.php?id=<?php echo $row['MAHANG']; ?>"> Chọn mua</a>
												</td>
											</tr>
										</table>
									</div>
								<?php
								}
							}
						?>
					</div>
				</div>
			<div class="row">
				<div class="col-sm-12 m-1 divfooter">
					<?php
					include 'footer.php';
					?>
				</div>
			</div>	
		</div>	
	</body>
</html>