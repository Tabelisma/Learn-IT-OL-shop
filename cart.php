<?php
    session_start();
    $arrProducts = [
        [
            'name' => "Adidas Super Star",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore voluptate ea consequatur! Doloribus maiores, fugit, laborum unde magnam necessitatibus a minima animi",
            'price' => "5000",
            'photo1' => "Adidas1.png",
            'photo2' => "Adidas2.jpeg",
        ],
        [
            'name' => "Air Force 1",
            'description' => "Dolore temporibus deleniti ipsam nostrum enim dolorem accusantium commodi ullam consequuntur iure. Nesciunt esse ad inventore eos earum rerum assumenda et beatae animi, temporibus itaque repudiandae voluptas eum corrupti aut atque facere",
            'price' => "5500",
            'photo1' => "AirF1.png",
            'photo2' => "AirF2.png",
        ],
        [
            'name' => "Airmax",
            'description' => "Maiores consequatur aliquid at, iste labore delectus alias ipsa. Alias, sed veritatis fuga asperiores quasi, ipsum corrupti dolores quis animi inventore tenetur illum! Animi veniam rerum et quisquam vero aliquam, sapiente repudiandae fugiat cumque! Ducimus",
            'price' => "4000",
            'photo1' => "Airmax1.jpg",
            'photo2' => "Airmax1(2).jpg",
        ],
        [
            'name' => "Converse All-Star",
            'description' => "Neque. Maiores odio soluta perspiciatis aut unde eligendi dolor illum eveniet. Alias, sed veritatis fuga asperiores quasi, ipsum corrupti dolores quis animi inventore tenetur illum! Animi veniam rerum et quisquam vero aliquam, sapiente repudiandae fugiat cumque! Ducimus",
            'price' => "4800",
            'photo1' => "Converse1.png",
            'photo2' => "Converse2.png",
        ],
        [
            'name' => "Jordan 1",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "5500",
            'photo1' => "Jordan1.png",
            'photo2' => "Jordan1(2).png",
        ],
        [
            'name' => "Lebron 19",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "6999",
            'photo1' => "Lebron19.png",
            'photo2' => "Lebron19(2).png",
        ],
        [
            'name' => "Vanz Checkered",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "3999",
            'photo1' => "Vanz1.png",
            'photo2' => "Vanz2.png",
        ],
        [
            'name' => "Word Balanced",
            'description' => "Sequi blanditiis reprehenderit repudiandae vel explicabo voluptas voluptatibus veritatis? Corrupti saepe rem autem omnis labore nobis nam sunt quos asperiores neque reprehenderit accusantium",
            'price' => "4999",
            'photo1' => "WordB1.png",
            'photo2' => "WordB2.png",
        ],

    ];
    $amount = 0;
    $itemQTYCount = 0;
    $itemID = 0;
    $itemSize = "";
    $itemQty = 0;
    $itemTotal = 0;

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

    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 ">
            <h3 class="h3 d-inline mt-5">Learn IT Easy Online Shop</h3>
            <div class="d-inline float-right ">
            <a href="cart.php" name="btnCart" class="btn btn-primary btn-sm mt-1">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart <span class="badge badge-light"><?php echo isset($_SESSION['cartItems'])? count($_SESSION['cartItems']): '0' ?></span>
                <span class="sr-only">Unread messages</span>
            </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <?php if (count($_SESSION['cartItems']) > 0): ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Product</th>
                                    <th scope="col" class="text-center">Size</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['cartItems'] as $key => $value){
                                        $itemID = $_SESSION['cartItems'][$key]['id'];
                                        $itemSize =  $_SESSION['cartItems'][$key]['size'];
                                        $itemQty = $_SESSION['cartItems'][$key]['qty'];
                                        $itemTotal = $arrProducts[$itemID]['price'] * $itemQty;
                                        $itemQTYCount += $itemQty;

                                        echo '
                                        <tr>
                                            <td><img style="width: 2em" src="./img/' . $arrProducts[$itemID]['photo1'] . '"/></td>
                                            <td>' . $arrProducts[$itemID]['name'] . '</td>
                                            <td class="text-center">' . $itemSize . '</td>
                                            <td class="text-center"><input class="text-center" name="numQTY' . $key . '" class="form-control text-center" type="number" min="1" max="100" value="'.  $itemQty . ' "></td>
                                            <td class="text-center">₱ ' . $arrProducts[$itemID]['price'] . ' </td>
                                            <td class="text-center">₱ ' . $itemTotal .'</td>
                                            <td class="text-center"><a class="btn btn-sm btn-danger" href="remove-confirm.php?cartID=' . $key . '&qty=' . $itemQty .'"><i class="fa fa-trash"></i> </a> </td>
                                        </tr>
                                        ';
                                        $amount += $itemTotal;
                                    }
                                ?>
                        
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center"><strong>Total</strong></td>
                                    <td class="text-center"><?php echo $itemQTYCount;?></td>
                                    <td class="text-center">----</td>
                                    <td class="text-center"><strong>₱ <?php echo $amount;?></strong></td>
                                    <td class="text-center">----</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Footer button -->
                <div class="col mb-2">
                    <div class="row">
                        <form class="form-inline w-100" method="post">
                            <div class="col-sm-12  col-md-4">
                                <a href="index.php" class="btn btn-block btn-danger">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    Continue Shopping
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <button name="btnUpdate" href="cart.php" name ="clickUpdate" class="btn btn-block btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>                          
                                    Update Cart
                                </button>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="clear.php" href="clear.php" class="btn btn-lg btn-block btn-info">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    Checkout
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            <?php else: ?> 
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Product</th>
                            <th scope="col" class="text-center">Size</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th scope="col" class="text-right">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cart is Empty</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-sm-12  col-md-4">
                    <a href="index.php" class="btn btn-block btn-danger">
                        <i class="fa-solid fa-bag-shopping"></i>
                        Continue Shopping
                    </a>
                </div>


            <?php endif; ?>  
        </div>
    </div>
                                
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>
</html>