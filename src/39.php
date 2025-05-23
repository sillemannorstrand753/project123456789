<?php
$student = "your_student_name";
$password = "your_student_password";

// Example: Encrypting student name
$encryptedName = password_encrypt($student);

// Example: Decrypting student name
$studentName = decrypt(password_decrypt($encryptedName, $password));

echo $studentName;
?>
