<?php 
    $t = date("H");
    $posts = [];

    if(!empty($posts)){
        echo $posts[0];
    }else{
        echo "No Posts";
    };

    $favcol = "yellow";

    switch($favcol){
        case "red":
            echo "Your favorite color is red";
            break;
        case "blue":
            echo "Your favorite color is blue";
            break;
        case "brown":
            echo "Your favorite color is brown";
            break;
        default:
            echo "I don't know this color";
            break;
    };
?>