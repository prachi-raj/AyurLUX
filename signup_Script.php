<?php
    require './includes/common.php';
    $email = mysqli_real_escape_string($con, filter_input(INPUT_POST, "email"));
    $name = mysqli_real_escape_string($con,filter_input(INPUT_POST, "name"));
    $password = mysqli_real_escape_string($con,filter_input(INPUT_POST, "password"));
    $contact = mysqli_real_escape_string($con, filter_input(INPUT_POST, "contact"));
    $city = mysqli_real_escape_string($con, filter_input(INPUT_POST, "city"));
    $address = mysqli_real_escape_string($con, filter_input(INPUT_POST, "address"));
    // hash password
    $hashed_password = md5($password);
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query1 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$hashed_password', '$contact', '$city', '$address')";

    // check if already registered user
    $result = mysqli_query($con, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }else{
        // perform query operation
        $result = mysqli_query($con, $query2);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = mysqli_insert_id($con);

        // redirect to products page
        header("location: products.php");
    }
?>