<?php
    include "../config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="icon" type="image/png" href="../img/favicon.png">
        <link rel="stylesheet" href="../styles/normalize.css">
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/cena.css">
        <title><?php echo $lang["price"] ?></title>
    </head>
    <body>
        <section>
            <nav class="navigation">
                <a href="../index.php" class="log">
                    <img class="logo" src="../img/logo.svg" alt="mi logo">
                    </a>
                <ul>
                    <li><a href="o-znacke.php"><?php echo $lang["about-brand"] ?></a></li>
                    <li><a href="parametre.php"><?php echo $lang["parameters"] ?></a></li>
                    <li><a href="cena.php"><?php echo $lang["price"] ?></a></li>
                    <li><a href="recenzie.php"><?php echo $lang["reviews"] ?></a></li>
                    <li><a href="porovnanie.php"><?php echo $lang["comparison"] ?></a></li>
                    <li><a href="kontakt.php"><?php echo $lang["contact"] ?></a></li>
                    <li class="lang"><a href="cena.php?lang=sk">SK</a></li>
                    <li class="lang"><a href="cena.php?lang=en">EN</a></li>
                </ul>
                
            </nav>
            
        </section>
        <div class="bgr">
               
            

        </div>
        <p class="title"><?php echo $lang["new-xiaomi"]?><span><?php echo $lang["redmi-note"]?> <img class="cursor" src="../img/cursor.gif" alt="cursor"></span></p>
        <section class="content">
            
               <h1><?php echo $lang["actual-price"]?></h1>
            <table>
                <!-- nazvy  -->
                <tr>
                    <th><?php echo $lang["seller"]?></th>
                    <th><?php echo $lang["product-description"]?></th>
                    <th colspan="2"><?php echo $lang["price"]?></th>
                    
                  </tr>
                
                <!-- prvy riadok -->
                
                   <tr>
                    <td><img src="../img/datart.png" alt="datart logo"></td>
                    <td><?php echo $lang["seller1-description"]?></td>
                    <td>189,00 €</td>
                    <td><a class="btn" href="https://www.datart.sk/index.html?gclid=EAIaIQobChMIqrCX4ob47AIV2N_tCh28eAoXEAAYASAAEgLMBvD_BwE"><?php echo $lang["button"]?></a></td>
                </tr>
                <!-- druhy riadok -->
                <tr>
                    <td><img src="../img/web-mobily.png" alt="web-mobily logo"></td>
                    <td><?php echo $lang["seller2-description"]?></td>
                    <td>164,00 €</td>
                    <td><a class="btn" href="http://www.webmobily.sk/index.php?route=product/product&product_id=818"><?php echo $lang["button"]?></a></td>
                </tr>
                <!-- treti riadok -->
                <tr>
                    <td><img src="../img/dates-mobile.png" alt="dates-mobile logo"></td>
                    <td><?php echo $lang["seller3-description"]?></td>
                    <td>169,00 €</td>
                    <td><a class="btn" href="https://www.datesmobile.sk/dotykove-mobilne-telefony/xiaomi-redmi-note-7-64-gb-cerny/"><?php echo $lang["button"]?></a></td>
                </tr>
                <!-- stvrty riadok -->
                <tr>
                    <td><img src="../img/digitall.png" alt="digitall logo"></td>
                    <td><?php echo $lang["seller4-description"]?></td>
                    <td>195,00 €</td>
                    <td><a class="btn" href="https://digitall.sk/mobilne-telefony/xiaomi-redmi-note-7-4-64-gb-dual-sim-black-sk-distribucia#46173"><?php echo $lang["button"]?></a></td>
                </tr>

            </table>

        </section>
        <?php 
        include "footer.php";
        ?>
        

    </body>
</html>