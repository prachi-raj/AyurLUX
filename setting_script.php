<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email"])){
		header("location: index.php");
    }else{
        // get user details
        $user_id = $_SESSION["id"];
        $email = $_SESSION["email"];

        // get the newly typed password
        $new_password = md5(mysqli_real_escape_string($con, filter_input(INPUT_POST, "new_password")));
        $retype_pass = md5(mysqli_real_escape_string($con, filter_input(INPUT_POST, "retype_new_pass")));

        // check if the typed new passwords match
        if($new_password != $retype_pass){
            echo "The passwords do not match. Try again.";
        }else{
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND id = '$user_id'";

            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            header("location: settings.php");
        }
    }
?>