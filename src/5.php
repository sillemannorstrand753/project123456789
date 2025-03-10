<?php

// Function to generate a random string of length 10
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

// Function to generate a random integer between 1 and 10
function generateRandomInteger() {
    return rand(1, 10);
}

// Function to generate a random boolean value (true or false)
function generateRandomBoolean() {
    return (bool)rand(0, 1);
}

// Function to generate a random string with a specific length
function generateRandomStringWithLength($length = 5) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

// Function to generate a random float number between 1 and 10
function generateRandomFloat() {
    return rand(1, 10) / 10;
}
