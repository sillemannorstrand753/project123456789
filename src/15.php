<?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    shuffle($numbers);
    $number_1 = $numbers[0];
    $number_2 = $numbers[1];
    $number_3 = $numbers[2];
    echo "The numbers are: " . $number_1 . ", " . $number_2 . ", " . $number_3;
?>