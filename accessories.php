<?php
	require './includes/common.php';
?>
<html>
    <head>
        <title>Accessories</title>
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
			<div class="jumbotron text-centre" style="background-image: url(picture/acc_banner.jpg); background-size: cover">
                            <div style="color:white; position:relative; padding-top: 1%; padding-bottom:1%; margin:1% auto; background-color: rgba(0, 0, 0, 0.7)">
                                <h2><b>Accessories</b></h2>
				<i>AyurLUX have allowed consumers of ayurvedic products to purchase goods at inexpensive prices.</i>
                            </div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc1.jpg" alt="camera">
						<div class="caption">
							<h3>Saykhus energy massage pen </h3>
							<p>Price:Rs 360.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(25)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=25" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc2.jpg" alt="camera">
						<div class="caption">
							<h3>Kobo AC-102 Hard Spike Massage Ball</h3>
							<p>Price:Rs 409.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(26)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=26" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc3.jpg" alt="camera">
						<div class="caption">
							<h3>Neem wood Dual Tooth Comb</h3>
							<p>Price:Rs 500.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(27)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=27" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc4.jpg" alt="camera">
						<div class="caption">
							<h3>Sterile Acupuncture Needles</h3>
							<p>Price:Rs 800.00</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(28)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=28" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc5.jpg" alt="shirt">
						<div class="caption">
							<h3>INSTADEALS bells massager</h3>
							<p>Price:Rs 800</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(29)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=29" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc6.jpg" alt="shirt">
						<div class="caption">
							<h3>acupressure back massager  </h3>
							<p>Price:Rs 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(30)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=30" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc7.jpg" alt="shirt">
						<div class="caption">
							<h3>Acupressure Health Care System Moxa Rolls</h3>
							<p>Price:Rs 500</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(31)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=31" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc12.jpg" alt="shirt">
						<div class="caption">
							<h3>Wooden Handmade Handheld Foot Roller Acupressure</h3>
							<p>Price:Rs 300</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(32)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=32" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc9.jpg" alt="watch">
						<div class="caption">
							<h3>Ayurvedic Neemwood comb</h3>
							<p>Price:Rs 500</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(33)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=33" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc10.jpg" alt="watch">
						<div class="caption">
							<h3>Hiya Acupressure Wooden Karela Ball</h3>
							<p>Price:Rs 300</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(34)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=34" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc11.jpg" alt="watch">
						<div class="caption">
							<h3>paduka Acupressure Massager</h3>
							<p>Price:Rs 800</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(35)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=35" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="picture/acc8.jpg" alt="watch">
						<div class="caption">
							<h3>AHCS Power Magnet Pyramidal Set </h3>
							<p>Price:Rs 500</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(36)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=36" name="add" value="add" class"btn btn-primary">Add to cart</a>
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