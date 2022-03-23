
<?php
    include "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
<?php

$name = $_POST["fname"];
$lname = $_POST["lname"];
$rating = $_POST["stars"];
$review = $_POST["recenzia"];
$mail = $_POST["email"];
 

if(file_exists("database.txt")){
  $data= '<div class="review">'."<h2>".$name." ".$lname."</h2>"."<h5>".$mail."</h5>"."<p>Rating ".$rating."/5</p>"."<h4>Review</h4>"."<p>".$review."</p>"."</div>"."\n";
  $fp = fopen('database.txt', 'a');
    fwrite($fp, $data);
    
    fclose($fp);    
  
  
}
?>
   <section>
        <h1><?php echo $lang["thanks"]; ?></h1>
        <p><?php echo $lang["thanks-text"]; ?></p>
        <a href="../pages/recenzie.php"><?php echo $lang["go-back"];?></a>
    </section>  
</body>
</html>