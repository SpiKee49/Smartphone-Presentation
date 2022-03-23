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
        <link rel="stylesheet" href="../styles/o-znacke.css">
        <title><?php echo $lang["about-brand"]?></title>
    </head>
    <body>
        <section>
            <nav class="navigation">
                <a href="../index.php" class="log">
                    <img class="logo" src="../img/logo.svg" alt="mi logo">
                    </a>
                <ul>
                    <li><a href="o-znacke.php"><?php echo $lang["about-brand"]?></a></li>
                    <li><a href="parametre.php"><?php echo $lang["parameters"]?></a></li>
                    <li><a href="cena.php"><?php echo $lang["price"]?></a></li>
                    <li><a href="recenzie.php"><?php echo $lang["reviews"]?></a></li>
                    <li><a href="porovnanie.php"><?php echo $lang["comparison"]?></a></li>
                    <li><a href="kontakt.php"><?php echo $lang["contact"]?></a></li>
                    <li class="lang"><a href="o-znacke.php?lang=sk">SK</a></li>
                    <li class="lang"><a href="o-znacke.php?lang=en">EN</a></li>
                </ul>
                
            </nav>
        </section>
        <div class="bgr">
               
            

        </div>
        <p class="title"><?php echo $lang["new-xiaomi"]?><span><?php echo $lang["redmi-note"]?> <img class="cursor" src="../img/cursor.gif" alt="cursor"></span></p>
        <section class="content">
            
                <article>
                    <h1><?php echo $lang["about-brand"]?></h1>
                    <p>
                    <?php echo $lang["brand-desc"]?>
                    </p>
                </article>
                <img class="img" src="../img/factory.jpg" alt="factory image">
        </section>
        <?php 
        include "footer.php";
        ?>
        

    </body>
</html>