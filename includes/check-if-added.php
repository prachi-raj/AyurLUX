
<?php
    function check_if_added_to_cart($item_id){
        // check if a given ite with item_id is added to cart
        include 'common.php';
        $user_id = $_SESSION["id"];
        $query = "SELECT * FROM users_products WHERE item_id = '$item_id' AND user_id = '$user_id' AND status = 'Added to cart'";
        $query_result = mysqli_query($con , $query);
        if(mysqli_num_rows($query_result) >= 1){
            return 1;
        }else{
            return 0;
        }
    }
?>
