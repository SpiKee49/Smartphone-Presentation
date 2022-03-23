<?php 
$curPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  

if(strcmp($curPage, "index.php") !== 0){
    $link = "../img/cursor.gif";
}
else{
    $link = "img/cursor.gif";
}

?>




<p class="title"><?php echo $lang["new-xiaomi"] ?><span><?php echo $lang["redmi-note"] ?> <img class="cursor" src="<?php echo $link; ?>" alt="cursor"></span></p>