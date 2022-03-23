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
  <link rel="stylesheet" href="../styles/paramtre.css">
  <title><?php echo $lang["parameters"] ?></title>
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
        <li class="lang"><a href="parametre.php?lang=sk">SK</a></li>
        <li class="lang"><a href="parametre.php?lang=en">EN</a></li>
      </ul>

    </nav>

  </section>
  <div class="bgr">



  </div>
  <p class="title"><?php echo $lang["new-xiaomi"] ?><span><?php echo $lang["redmi-note"] ?> <img class="cursor" src="../img/cursor.gif" alt="cursor"></span></p>
  <section class="content">
    <div class="tabulka">
      <table>
        <caption><?php echo $lang["parameters"] ?></caption>
        <tr>
          <td><?php echo $lang["os"] ?></td>
          <td>Android</td>
        </tr>
        <tr>
          <td><?php echo $lang["display-size"] ?></td>
          <td>6.3“</td>
        </tr>
        <tr>
          <td><?php echo $lang["display-res"] ?></td>
          <td>2340 x 1080px</td>
        </tr>
        <tr>
          <td><?php echo $lang["ram"] ?></td>
          <td>4096 MB</td>
        </tr>
        <tr>
          <td><?php echo $lang["mpx"] ?></td>
          <td>48 Mpix</td>
        </tr>
        <tr>
          <td><?php echo $lang["cpu"] ?></td>
          <td>2.2 GHz</td>
        </tr>
        <tr>
          <td><?php echo $lang["cores"] ?></td>
          <td>8</td>
        </tr>
        <tr>
          <td><?php echo $lang["memory"] ?></td>
          <td>64 GB</td>
        </tr>
        <tr>
          <td><?php echo $lang["connector"] ?></td>
          <td>USB-C</td>
        </tr>
        <tr>
          <td><?php echo $lang["finger"] ?></td>
          <td><?php echo $lang["yes"] ?></td>
        </tr>
      </table>
      <!-- rozmery -->
      <table>
        <caption class="rozmery"><?php echo $lang["measurement"] ?></caption>
        <tr>
          <td><?php echo $lang["height"] ?></td>
          <td>159.2 mm</td>
        </tr>
        <tr>
          <td><?php echo $lang["depth"] ?></td>
          <td>75.2 mm</td>
        </tr>
        <tr>
          <td><?php echo $lang["width"] ?></td>
          <td>8.1 mm</td>
        </tr>
      </table>

    </div>
    <img class="img" src="../img/backcase.png" alt="phone photo">

  </section>

  <footer>
    <p><img class="social" src="../img/social.gif"><?php echo $lang["footer"] ?></p>
  </footer>

</body>

</html>