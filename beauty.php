<?php
	require './includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>beauty product</title>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      
		<?php
			require './includes/header.php';
                        require './includes/check-if-added.php';
		?>
          <div class="container panel-margin">
			<div class="jumbotron text-center " style="background-image: url(picture/beauty_banner.png); background-size: cover">
                            <div style="color:white; position:relative; padding-top: 1%; padding-bottom:1%; margin:1% auto; background-color: rgba(0, 0, 0, 0.7)">    
                            <h2><b>Beauty Product</b></h2>
                                <i>Invoke your Inner Beauty with The ageless Approach of Ayurveda</i>
                                </div>
                            </div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/beauty1.webp" alt="beauty">
						<div class="caption">
                                                    <h3>Ayurvedic Vitamin C Skin Care Serum</h3>
							<p>Price:Rs 570.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(13)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=13" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/beauty2.webp" alt="camera">
						<div class="caption">
							<h3>Vedix - Customized Ayurvedic Skin Care</h3>
							<p>Price:Rs 219.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(14)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=14" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/beauty3.webp" alt="camera">
						<div class="caption">
							<h3>Mantra Herbal Aloe, Avocado</h3>
							<p>Price:Rs 340.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(15)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=15" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/beauty4.webp" alt="camera">
						<div class="caption">
							<h3>Kumkumadi Night Cream</h3>
							<p>Price:Rs 343.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(16)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=16" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/hair1.webp" alt="shirt">
						<div class="caption">
							<h3>Kerala Ayurveda Kesini </h3>
							<p>Price:Rs 242</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(17)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=17" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/hair2.webp" alt="shirt">
						<div class="caption">
							<h3>Upakarma Hair onion shampoo </h3>
							<p>Price:Rs 143</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(18)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=18" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
                                            <img src="picture/hair3.webp" alt="shirt"><br>
						<div class="caption">
                                                    <h3>mother sparsh ayurvedic hair oil</h3>
							<p>Price:Rs 181</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(19)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=19" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/hair4.webp" alt="shirt">
						<div class="caption">
							<h3>Wow hair oil, shampoo&conditioner</h3>
							<p>Price:Rs 300</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(20)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=20" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/b1.webp" alt="watch">
						<div class="caption">
							<h3>biotique bio coconut cream</h3>
							<p>Price:Rs 100</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(21)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=21" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/b2.jpg" alt="watch">
						<div class="caption">
							<h3>soultree ayurvedic lipstick</h3>
							<p>Price:Rs 1500</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(22)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=22" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/b3.webp" alt="watch" class="img-responsive">
						<div class="caption">
							<h3>Indo Challenge Kumkumadi Oil </h3>
							<p>Price:Rs 500</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(23)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=23" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/b4.webp" alt="watch">
						<div class="caption">
							<h3>At home facial kit box</h3>
							<p>Price:Rs 180</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(24)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=24" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
          </div>
           <?php
			require './includes/footer.php';
		?>  
    </body>
</html>
