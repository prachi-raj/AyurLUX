<?php
	require './includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ayurveda store</title>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
                <?php
			include './includes/header.php';
	        ?>
        <div class="container panel-margin">
			<div class="jumbotron text-center" style="background-image: url(picture/ayurved_banner.webp); background-size: cover">
                            <div style="color:white; position:relative; padding-top: 1%; padding-bottom:1%; margin:1% auto; background-color: rgba(0, 0, 0, 0.7)">
                            <h1>Welcome to our <b>AyurLUX!</b></h1>
                            <h3><b>Ayurvedic Home Remedies / Ayurvedic Medicines & Products Online from India</b></h3>
                            <p><i>It races with the most progressive medical sciences offering some effective ayurvedic home remedies for a variety of infirmities that are natural.</i></p>
                        </div>
                        </div>
              <div class="text-center"><h2><b>Top Categories</b></h2>-----VIEW OUR TOP CATEGORIES-----</div><br>
			<div class="row text-center">
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail">
                                            <img src="picture/medi.jpg" alt="medicine" style="width:100%">
						<div class="caption">
                                                    <a href="medicines.php"><button type="button" class="btn btn-primary"><b> Medicines </b></button></a>
                            <p>Ayurvedic medicines as remedy for COVID-19; clinical trials show groundbreaking results.</p>
	              				</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail">
                                            <img src="picture/beauty_product.jpg" alt="beauty" style="width:100%"><br>
						<div class="caption">
                                                    <a href="beauty.php"><button type="button" class="btn btn-primary"><b>Beauty Products</b></button></a>
                        <p>Choose among the best in the world.</p>
		
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="thumbnail">
                                            <img src="picture/acc.jpg" alt="accessories" style="width:100%"><br><br>
						<div class="caption">
                                                    <a href="accessories.php"><button type="button" class="btn btn-primary"><b>Accessories</b></button></a>
                                                    <p>Our good collection of healthcare products.</p>						
                                                </div>
					</div>
				</div>
                      
			</div>
        </div>
        <?php
			include './includes/footer.php';
		?>
	</body>
</html>


       