<?php
    session_start();     //seasion start ito yung mga ibang pages or nag lilipat like katulad ng link
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ITshop.css">
    <title>Product Added</title>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="mt-5">
        <h3 class="h3 d-inline mt-5"> <i class="fa-solid fa-store"></i> Learn IT Easy Online Shop</h3>
            <div class="d-inline float-right ">
                <a href="cart.php" class="btn btn-primary btn-sm mt-1">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart <span class="badge badge-light"><?php echo isset($_SESSION['cartItems'])? count($_SESSION['cartItems']): '0' ?></span>
                    <span class="sr-only">unread messages</span>
                </a>
            </div>
        </div>
        <hr>
        <h5>Product Successfully Added to the Cart, what do you want do next?</h5>
        <div class="my-3">
            <a href="cart.php" class="btn btn-dark">
                <i class="fa-solid fa-cart-shopping"></i>
                View Cart
            </a>
            <a href="index.php" class="btn btn-danger">
                <i class="fa-solid fa-bag-shopping"></i>
                Continue Shopping
            </a>
        </div>    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>