<?php
session_start();
?>

<!doctype html>
<html lang="sv">
    <head>
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/shoppingCart.css" media="screen">
        <meta charset="utf-8" name="viewport" content="width:device-width, initial-scale=1.0"/>
        <title>Forged Fashion</title>
    </head>

    <body>
        <wrapper id="wrapper">
            <div id="header">
            </div>

            <header id="headerText">
                <a href="index.php"><img src="images/Projektlogo.png"></img></a>
                <form id="cartForm" action="kassa.php" method="post">
                    <input id="cartButton" type="submit" value="Kundvagn"/>
                </form>
            </header>

            <nav id="navigation">
             <ul id="menu-list">
                <li><a href="nyheter.php" class="mainNav">Nyheter</a></li>
                <li><a href="dam.php" class="mainNav">Dam</a></li>
                <li><a href="herr.php" class="mainNav">Herr</a></li>
                <li><a href="rea.php" class="mainNav">REA</a></li>
            </ul>
            </nav>

            <main id="content" >

                <form action="resettingCart.php" method="post">
                    <input id="resetCartButton" type="submit" value="Rensa kundvagn"/>
                </form>

                <p id="cartText">Din shoppingbag</p>



                <ul id="shoppingCart">

                     <?php
                     if (isset($_SESSION['cart'])) {
                        $shop = $_SESSION['cart'];

                     foreach($_SESSION['cart'] as $shop) { ?>
                         <li id="products">
<!--                             --><?php //print_r($shop); ?>
<!--                             --><?php //echo($shop)?>
                             <?php print_r($shop);?>
                        </li>
                    <?php

                    }
                     ?>
                </ul>
            <?php } ?>
                <form action="betalsida.php" method="post">
                    <input id="submitButton" type="submit" value="Gå vidare till kassan"/>
                </form>
                <br>
            </main>

            <div id="footer">
                <ul id="info-list">
                    <li><a href="info.php" class="footerNav">Om Företaget</a></li>
                    <li><a href="kontakt.php" class="footerNav">Kontakt</a></li>
                    <li><a href="hittaButik.php" class="footerNav">Hitta Butik</a></li>
                </ul>
            </div>
        </wrapper>
    </body>
</html>