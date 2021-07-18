<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ayurveda Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
		<?php
			require './includes/header.php';
		?>
		<div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <h1>AYURVEDA The Science of Life</h1>
                    <p>Ayurvedic Pure 100% Organic Herbs and Products</p>
                    <a href="products.php">
                        <button class="btn btn-danger btn-lg active">Shop Now </button>
                    </a>
                </div>
            </div>
        </div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>