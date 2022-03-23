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
        <link rel="stylesheet" href="../styles/review.css">
        <title><?php echo $lang["reviews"]?></title>
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
                    <li class="lang"><a href="recenzie.php?lang=sk">SK</a></li>
                    <li class="lang"><a href="recenzie.php?lang=en">EN</a></li>
                </ul>
                
            </nav>
            
        </section>
        <div class="bgr">
               
            

        </div>
        <p class="title"><?php echo $lang["new-xiaomi"]?><span><?php echo $lang["redmi-note"]?> <img class="cursor" src="../img/cursor.gif" alt="cursor"></span></p>
        <section class="content">
            <h1><?php echo $lang["reviews"]?></h1>

           <?php
           
           if(file_exists("../script/database.txt"))
                $content = file_get_contents('../script/database.txt', FILE_USE_INCLUDE_PATH);
                echo $content;
            ?>
           
            
            <h1 class="center"><?php echo $lang["add-review"] ?></h1>

            <form action="../script/spracuj_review.php" method="POST">
                <label for="fname"><?php echo $lang["fname"]?></label>
                <input type="text" name="fname" required>
                <label for="lname"><?php echo $lang["lastname"]?></label>
                <input type="text" name="lname" required>
                <label for="email">e-mail</label>
                <input type="email" name="email" required>
                <label class="rating" for="stars"><?php echo $lang["rating"]?></label>
                <select name="stars" id="stars">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>                               
                </select>
                <label for="recenzia"><?php echo $lang["opinion"]?></label>
                <textarea name="recenzia" id="recenzia"required></textarea><br>
                
                <input class="btn" type="submit" value="<?php echo $lang["submit"]?>">


            </form>

        </section>
        <?php 
        include "footer.php";
        ?>
        

    </body>
</html>