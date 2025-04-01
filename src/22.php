<?php
// Initialize database connection
$db = new mysqli('localhost', 'username', 'password', 'database_name');
if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

// Query the database
$result = $db->query("SELECT * FROM table_name WHERE condition");

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No rows found.";
}

// Close the database connection
$db->close();
?>
