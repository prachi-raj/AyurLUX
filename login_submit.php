<?php
    require "./includes/common.php";
    $email = mysqli_real_escape_string($con, filter_input(INPUT_POST, "email"));
    $password = mysqli_real_escape_string($con, filter_input(INPUT_POST, "password"));
    $hashed_password = md5($password);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query_result = mysqli_query($con, $query);

    if(mysqli_num_rows($query_result) == 0){
        echo "<h2>User account does not exists.</h2>";
    }
    else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $row["id"];
        header("location: products.php");
    }
?>