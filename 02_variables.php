<?php
$name = "Joel";
$age = 10;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo $name ?>
        <?php 
            echo $name . "is ". $age . ' old';

            echo "${name} is ${age} old"

        ?>
    </h1>
</body>

</html>