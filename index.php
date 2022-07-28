<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/PetFood.php";
require_once __DIR__ . "/PetToy.php";
require_once __DIR__ . "/PetGadget.php";
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/RegisteredUser.php";
require_once __DIR__ . "/StandardUser.php";
require_once __DIR__ . "/CreditCard.php";

// PRODUCTS
$crocchette = new PetFood('Friskies', 2);
$osso = new petToy('Osso di gomma', 5);
$cuccia = new PetGadget('Cuccia', 5);

// USER
$marco = new RegisteredUser('Marco', 2);
$luca = new StandardUser('Luca', 2);

// CREDIT CARDS
$postepay = new CreditCard(100);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        
        <!-- PRODUCTS -->
        <div class="products">
            <div class="col">

                <!-- PRODUCT IMG -->
                <div class="p-img">
                    <img src="img/8fda869f1675612731599e30f906.jpeg" alt="crocchette">
                </div>
                <div class="card">

                    <!-- INFO -->
                    <div class="info">
                        <?php echo $crocchette->productName ?>
                        <span class="price"><?php echo $crocchette->price ?>€</span>
                    </div>
                    
                    <div class="type"><?php echo $crocchette->tag ?></div>
                </div>
            </div>

            <div class="col">
                <div class="p-img">
                    <img src="https://shop.giardineria.com/wp-content/uploads/2017/12/img_0329797.jpg" alt="osso di gomma">
                </div>
                <div class="card">
                    <div class="info">
                        <?php echo $osso->productName ?>
                        <span class="price"><?php echo $osso->price ?>€</span>
                    </div>
                    <div class="type"><?php echo $osso->tag ?></div>
                </div>
            </div>

            <div class="col">
                <div class="p-img">
                    <img src="https://m.media-amazon.com/images/I/516yS38i9eL._SL500_.jpg" alt="cuccia">
                </div>
                <div class="card">
                <div class="info">
                        <?php echo $cuccia->productName ?>
                        <span class="price"><?php echo $cuccia->price ?>€</span>
                    </div>
                    <div class="type"><?php echo $cuccia->tag ?></div>
                </div>
            </div>
        </div>
        <!-- USER DETAIL -->
        <div class="user">
            <!-- USER BALANCE -->
           <div class="balance">
            Saldo: <?php echo $marco->balance ?>€
           </div>
           <!-- CC BALANCE -->
           <div class="balance">
            Saldo cc: <?php echo $postepay->balance ?>€
           </div>
           <!-- ITEMS TO BUY -->
            <div class="item-tobuy">
                <?php echo $marco->name ?> vuole comprare
                <?php 
                    $marco->getItem($osso); 
                    echo $crocchette->productName;
                ?>
            </div>
            <!-- RESULT -->
            <div class="result">
                Esito: <?php echo $marco->pay($postepay->balance) ?>
            </div>
        </div>
    </div>
    
</body>
</html>