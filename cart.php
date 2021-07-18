<?php
    require './includes/common.php';
    // check if logged in
    if(!isset($_SESSION["email"])){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>cart</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            require './includes/header.php';

            // get the products purchased by the user
            $user_id = $_SESSION["id"];
            $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_products up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                $total = 0;
        ?>
        <div class="container panel-margin">
            <table class="table table-hover">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php $total += $row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
                    <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
        </div>
        <?php
            }
            require './includes/footer.php';
        ?>
    </body>
</html>