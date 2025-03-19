<?php

// Function to generate a random string of characters
function getRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Function to generate a random number between two values
function getRandomNumber($min, $max) {
    return rand($min, $max);
}

// Function to generate a random boolean value
function getRandomBoolean() {
    return (bool)rand(0, 1);
}

// Function to generate a random date between two dates
function getRandomDate($startDate, $endDate) {
    $randomTimestamp = rand(strtotime($startDate), strtotime($endDate));
    return date('Y-m-d', $randomTimestamp);
}

// Function to generate a random time between two times
function getRandomTime($startTime, $endTime) {
    $randomHours = rand(strtotime($startTime), strtotime($endTime));
    return date('H:i:s', $randomHours);
}

// Function to generate a random datetime between two datetimes
function getRandomDatetime($startDatetime, $endDatetime) {
    $randomTimestamp = rand(strtotime($startDatetime), strtotime($endDatetime));
    return date('Y-m-d H:i:s', $randomTimestamp);
}

// Function to generate a random color
function getRandomColor() {
    $colors = array('#FF9E01', '#F7DC6F', '#FE2E2F', '#058DC7', '#50BVC6', '#ED840C');
    return $colors[array_rand($colors)];
}

// Function to generate a random word from an array of words
function getRandomWord($words) {
    return $words[array_rand($words)];
}

?>