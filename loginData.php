<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "elite_epicure";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into a table named "login_table"
$tableName = "login_table";


$sql = "INSERT INTO $tableName (Username, Password) 
        VALUES (?, ?, ?, ?)";

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $_POST['username'], $_POST['password']);

if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>

