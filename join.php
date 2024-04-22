<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data
$name = "John Doe";
$email = "john@example.com";
$password = "password";

// Prepare SQL statement
$sql = "INSERT INTO Users (Name, Email, Password) VALUES
('John Doe', 'john@example.com', 'password123'),
('Alice Smith', 'alice@example.com', 'securepassword'),
('Bob Johnson', 'bob@example.com', 'bobspassword')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $password);

// Execute the statement
if ($stmt->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
