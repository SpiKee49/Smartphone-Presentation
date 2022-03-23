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
    <link rel="stylesheet" href="../styles/porovnanie.css">
    <title><?php echo $lang["comparison"] ?></title>
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
                <li class="lang"><a href="porovnanie.php?lang=sk">SK</a></li>
                <li class="lang"><a href="porovnanie.php?lang=en">EN</a></li>
            </ul>

        </nav>

    </section>
    <div class="bgr">



    </div>
    <?php 
        include "header.php";
        ?> 
    
    <section class="content">
        <h1><?php echo $lang["comparison"] ?></h1>
        <table>
            <!-- <caption>Porovnanie</caption> -->
            <tr>
                <th></th>
                <th>Xiaomi Redmi Note 7</th>
                <th>iPhone XR 64GB</th>
                <th>Samsung Galaxy S10</th>
            </tr>
            <tr>
                <td><?php echo $lang["price"] ?></td>
                <td>169,00€</td>
                <td>520,80€</td>
                <td>480,48 €</td>
            </tr>
            <tr>
                <td><?php echo $lang["os"] ?></td>
                <td>Android</td>
                <td>iOS</td>
                <td>Android</td>
            </tr>
            <tr>
                <td><?php echo $lang["display-size"] ?></td>
                <td>6.3“</td>
                <td>6.1“</td>
                <td>6.1“</td>
            </tr>
            <tr>
                <td><?php echo $lang["display-res"] ?></td>
                <td>2340 x 1080px</td>
                <td>1 792 x 828px</td>
                <td>3040 x 1440px</td>
            </tr>
            <tr>
                <td><?php echo $lang["ram"] ?></td>
                <td>4096 MB</td>
                <td>3072 MB</td>
                <td>8192 MB</td>
            </tr>
            <tr>
                <td><?php echo $lang["mpx"] ?></td>
                <td>48 Mpix</td>
                <td>12 Mpix</td>
                <td>16 Mpix</td>
            </tr>
            <tr>
                <td><?php echo $lang["cpu"] ?></td>
                <td>2.2 GHz</td>
                <td>2.49 GHz</td>
                <td>2.73 GHz</td>
            </tr>
            <tr>
                <td><?php echo $lang["cores"] ?></td>
                <td>8</td>
                <td>6</td>
                <td>8</td>
            </tr>
            <tr>
                <td><?php echo $lang["memory"] ?></td>
                <td>64 GB</td>
                <td>64 GB</td>
                <td>128 GB</td>
            </tr>
            <tr>
                <td><?php echo $lang["connector"] ?></td>
                <td>USB-C</td>
                <td>Lightning</td>
                <td>USB-C</td>
            </tr>
            <tr>
                <td><?php echo $lang["finger"] ?></td>
                <td><?php echo $lang["yes"] ?></td>
                <td><?php echo $lang["yes"] ?></td>
                <td><?php echo $lang["yes"] ?></td>
            </tr>
            <tr>
                <td><?php echo $lang["height"] ?></td>
                <td>159.2 mm</td>
                <td>150.9 mm</td>
                <td>149.9 mm</td>
            </tr>
            <tr>
                <td><?php echo $lang["depth"] ?></td>
                <td>75.2 mm</td>
                <td>75.7 mm</td>
                <td>70.4 mm</td>
            </tr>
            <tr>
                <td><?php echo $lang["width"] ?></td>
                <td>8.1 mm</td>
                <td>8.3 mm</td>
                <td>7.8 mm</td>
            </tr>
        </table>
    </section>
    <?php 
        include "footer.php";
    ?>

</body>

</html>