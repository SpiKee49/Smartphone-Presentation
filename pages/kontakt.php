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
        <link rel="stylesheet" href="../styles/kontakt.css">
        <title><?php echo $lang["contact"]?></title>
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
                    <li class="lang"><a href="kontakt.php?lang=sk">SK</a></li>
                    <li class="lang"><a href="kontakt.php?lang=en">EN</a></li>
                </ul>
            </nav>
        </section>
        <div class="bgr">
        </div>
        <p class="title"><?php echo $lang["new-xiaomi"]?><span><?php echo $lang["redmi-note"]?> <img class="cursor" src="../img/cursor.gif" alt="cursor"></span></p>
        <section class="content">
            
                <article class="contact">
                    <h1>
                    <?php echo $lang["contact"]?>
                    </h1>
                    <table>
                        <tr>
                            <td><?php echo $lang["name"]?></td>
                            <td>René Bukovina</td>
                        </tr>
                        <tr>
                            <td><?php echo $lang["address"]?></td>
                            <td>Nová 427/10</td>
                        </tr>
                        <tr>
                            <td><?php echo $lang["city"]?></td>
                            <td>Vikartovce</td>
                        </tr>
                        <tr>
                            <td><?php echo $lang["zip"]?></td>
                            <td>059 19</td>
                        </tr>
                        <tr>
                            <td><?php echo $lang["region"]?></td>
                            <td>Prešovský kraj</td>
                        </tr>
                        <tr>
                            <td><?php echo $lang["country"]?></td>
                            <td><?php echo $lang["slovakia"]?></td>
                        </tr>
                        <tr>
                            <td>e-mail</td>
                            <td>edp445@coldmail.com</td>
                        </tr>
                        <tr>
                            <td><?php echo $lang["phone"]?></td>
                            <td>02 je predvolba 74 844 45</td>
                        </tr>
                    </table>
                </article>
                <!-- mapa -->
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6226.21449615825!2d20.148879711733407!3d48.99534958013785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e2e8b20257cb3%3A0x61cbb82a24d6c835!2sNov%C3%A1%20427%2C%20059%2019%20Vikartovce%2C%20Slovakia!5e0!3m2!1sen!2sus!4v1604610205949!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
                <!-- formular -->
                <h1 class="center"><?php echo $lang["contact-us"]?></h1>
                <form action="../script/spracuj_kontakt.php" >
                    <label for="meno"><?php echo $lang["fname"]?></label>
                    <input type="text" id="fname">
                    <label for="priezvisko"><?php echo $lang["lastname"]?></label>
                    <input type="text" id="lname">
                    <label for="email">e-mail</label>
                    <input type="text" id="email">
                    <label for="recenzia"><?php echo $lang["question"]?></label>
                    <textarea name="recenzia" id="recenzia"></textarea><br>
                    <input class="btn" type="submit" value="<?php echo $lang["submit"];?>">

                </form>
        </section>
        <?php 
        include "footer.php";
        ?>
        

    </body>
</html>