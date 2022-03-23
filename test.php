<?php 
     
$currpage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    
    
if(empty($_GET['lang'])){
    $_GET['lang']='en';
    if($_GET['lang'] == 'en'){
        echo '<li class="current"><a href="'.$currpage.'?lang=en'.'">en</a></li>
        '.'<li><a href="'.$currpage.'?lang=sk'.'">sk</a></li>';
        }
        else{
            echo '<li class="current"><a href="'.$currpage.'?lang=en'.'">en</a></li>
        '.'<li><a href="'.$currpage.'?lang=sk'.'">sk</a></li>';
            }
}
else{
    if($_GET['lang'] == 'en'){
        echo '<li class="current"><a href="'.$currpage.'?lang=en'.'">en</a></li>
        '.'<li><a href="'.$currpage.'?lang=sk'.'">sk</a></li>';
    }
    else{
        echo '<li class="current"><a href="'.$currpage.'?lang=en'.'">en</a></li>
        '.'<li><a href="'.$currpage.'?lang=sk'.'">sk</a></li>';
        }
}
?>