<?php
	require './includes/common.php';
	
	// destroy the session if present
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>setting</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
		<?php
			require './includes/header.php';
		?>
        <div class="container panel-margin">
            <div class="alert alert-success">
                You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
            </div>
        </div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>