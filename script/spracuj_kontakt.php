<?php
    include "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang["contact-title"]; ?></title>
</head>
<body>
<style>
        body{
            background-color: #003AAB;
            color: white;
            font-family:Arial, Helvetica, sans-serif;
        }
        section{
            width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        h1{
            font-size: 60px;
            font-weight: bold;

        }
        a{
            color: white;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <section>
        <h1><?php echo $lang["sorry"]; ?></h1>
        <p><?php echo $lang["sorry-text"]; ?></p>
        <a href="../pages/kontakt.php"><?php echo $lang["go-back"];?></a>
    </section>  
</body>
</html>