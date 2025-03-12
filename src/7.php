
<?php

// Define the number of digits in the random number
$numberOfDigits = 5;

// Define the minimum and maximum values for the random number
$minValue = 10000;
$maxValue = 99999;

// Generate a random number between the minimum and maximum values
$randomNumber = rand($minValue, $maxValue);

// Return the random number as a string
echo "$randomNumber";

?>