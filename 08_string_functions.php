<?php

    $string = "Hello world";

    echo strlen($string);

    echo strpos($string, "o");

    echo strrpos($string, "o");

    echo strrev($string);

    echo strtolower($string);

    echo strtoupper($string);

    echo ucwords($string);

    $string2 = "<script>alert(1)</script>";

    echo htmlspecialchars($string2);

    printf("%s likes to %s", "Brad", "code");