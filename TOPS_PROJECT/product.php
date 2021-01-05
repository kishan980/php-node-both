<?php include('headre.php');?>
<?php

session_start();

			if(isset($_POST["cart"])){
					
				 $_SESSION["price"] = $_POST['price'];
				 $_SESSION["img"] 	= $_POST['img'];
				 $_SESSION["stock"] = $_POST['stock'];

				 header("location:pro.php");
			}
?>
<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<form action="product.php" method="POST">
			<div class="container">	
				<div class="col-md-12">
					
					<div class="container service1-items col-sm-2 col-md-2 pull-left">
						<center>
							<a id="item-1" class="service1-item">
								<img src="p1072115.jpg" height="350px" width="300px" name="img"></img>
							</a>
						</center>
					</div>

				</div>
					
				<div class="col-md-7">
					<div class="product-title">Corsair GS600 600 Watt PSU</div>
					<div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price" name="price">$ 1234.00</div>
					<div class="product-stock" name="stock">In Stock</div>
					<hr>
					<div class="btn-group cart">
						<input type="submit" class="btn btn-success" value="Add to cart" name="cart">
			
					</div>
					<div class="btn-group wishlist">
						<input type="submit" class="btn btn-danger" value="remove">
						
						
					</div>
				</div>
			</div> 
			</form>
			
		</div>
		
	</div>
</div>