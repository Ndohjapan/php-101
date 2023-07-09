<?php 
    for($i=0; $i<5; $i++){
        echo "<br> We are at number ". $i+1 . '<br>';
    };

    $x = 1;

    while($x <= 15){
        echo "Number ". $x . "<br>";
        $x++;

    };

    $posts = ["first post", "second post", "third post"];

    foreach($posts as $index => $post){
        echo "<br> ". $post . " Number " . $index;
    };

    $posts = ["fist_name" => "first post",  "last_name" => "second post", "final_year" => "third post"];

    foreach($posts as $key => $value){
        echo "<br> ". $value . " Number " . $key;
    };

?>

