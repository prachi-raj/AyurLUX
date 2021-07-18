<?php
    require './includes/common.php';
    // get the item_id and add to cart
    $item_id = filter_input(INPUT_GET, "id");
    $user_id = $_SESSION["id"];
    $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

    $query_result = mysqli_query($con, $query);

    header("location: products.php");
?>