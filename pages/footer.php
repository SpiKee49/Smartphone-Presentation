<?php 
$curPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  

if(strcmp($curPage, "index.php") !== 0){
    $link = "../img/social.gif";
}
else{
    $link = "img/social.gif";
}

?>


<footer>
   <p><img class="social" src="<?php echo $link; ?>"><?php echo $lang["footer"] ?></p>
        
</footer>