<?php
    define("DB_HOST", "us-cdbr-east-06.cleardb.net");
    define("DB_USER", "b057e6b48643b4");
    define("DB_PASS", "871c39da");
    define("DB_NAME", "heroku_78b1e4d64a45816");

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if($conn -> connect_error ){
        die("Connection failed ". $conn->connect_error);
    };

    echo "Connected";