<?php
include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <title><?php echo $lang["main-page"] ?></title>
</head>

<body>

    <section>
        <nav class="navigation">
            <a href="index.php" class="log">
                <img class="logo" src="img/logo.svg" alt="mi logo">
            </a>
            <ul>
                <li><a href="pages/o-znacke.php"><?php echo $lang["about-brand"] ?></a></li>
                <li><a href="pages/parametre.php"><?php echo $lang["parameters"] ?></a></li>
                <li><a href="pages/cena.php"><?php echo $lang["price"] ?></a></li>
                <li><a href="pages/recenzie.php"><?php echo $lang["reviews"] ?></a></li>
                <li><a href="pages/porovnanie.php"><?php echo $lang["comparison"] ?></a></li>
                <li><a href="pages/kontakt.php"><?php echo $lang["contact"] ?></a></li>
                <li class="lang"><a href="index.php?lang=sk">SK</a></li>
                <li class="lang"><a href="index.php?lang=en">EN</a></li>
            </ul>

        </nav>

    </section>
    <div class="bgr">
    </div>
    <?php
    include "pages/header.php";
    ?>

    <!--  <p class="title"><?php echo $lang["new-xiaomi"] ?><span><?php echo $lang["redmi-note"] ?> <img class="cursor" src="img/cursor.gif" alt="cursor"></span></p> -->
    <section class="content">
        <!-- uvod -->
        <article class="article">
            <h1><?php echo $lang["redmi-note"] ?></h1>
            <p><?php echo $lang["article"] ?></p>

        </article>
        <img style="margin-top: 20px;" src="img/firstpic.jpg" alt="fotka mobilu">
        <img class="thumbnail" src="img/jackpanoramic.png" alt="makro mobilu">
        <img style="margin-top: 20px; margin-left: 20px;" src="img/backcaseflat.png" alt="fotka mobilu zo zadu">

        <!-- UI -->
        <article>
            <h1 style="text-align: center; margin-top: 100px;"><?php echo $lang["ui-showcase"] ?></h1>

            <!-- gallery -->
            <?php
            for ($i = 1; $i <= 3; $i++) {
                echo '<img class="video"' . ' src="img/ui' . $i . '.jpg" ' . 'alt="ui1">';
            }
            ?>


            <video class="video" controls src="video/ui.mp4"></video>


        </article>

        <div>
            <h1 class="center"><?php echo $lang["durability"] ?></h1>
            <video class="dur" controls src="video/test.mp4"></video>
        </div>

        <!-- zvonenie -->
        <div>
            <h1 class="center"><?php echo $lang["ringtones"] ?></h1>
            <table class="tones">
                <tr>
                    <td>Mi-Remix</td>
                    <td><audio controls src="sounds/mi-remix.mp3"></audio></td>
                </tr>
                <tr>
                    <td>Mi-Jazz</td>
                    <td><audio controls src="sounds/mi-jazz.mp3"></audio></td>
                </tr>
                <tr>
                    <td>Mi-Electronic</td>
                    <td><audio controls src="sounds/mi-electro.mp3"></audio></td>
                </tr>

            </table>
        </div>
        <!-- prislusenstvo  -->
        <div class="center">
            <h1 class="center"><?php echo $lang["packaging"] ?></h1>
            <img src="img/prislusenstvo.jpg" alt="accesories photo">
        </div>

    </section>

    <?php
    include "pages/footer.php"
    ?>
</body>

</html>