<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php

    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 4;  
    $width = 2;    
    $area = calculateArea($length, $width);

    echo "The area of a rectangle with length $length and width $width is: $area";
    ?>
</body>
</html>
