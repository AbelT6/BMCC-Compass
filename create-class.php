<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$className = $_POST['className'];
$classSection = $_POST['classSection'];
$classDescription = $_POST['classDescription'];

// Generate a unique token for the class
$classToken = uniqid();

// Prepare and execute the SQL statement to insert the class into the database
$sql = "INSERT INTO classes (name, section, description, token) VALUES ('$className', '$classSection', '$classDescription', '$classToken')";

if ($conn->query($sql) === TRUE) {
  // Class created successfully
  $response = array(
    'status' => 'success',
    'message' => 'Class created successfully',
    'token' => $classToken
  );
} else {
  // Error creating class
  $response = array(
    'status' => 'error',
    'message' => 'Error creating class: ' . $conn->error
  );
}

// Close the database connection
$conn->close();

// Send the JSON response back to the frontend
header('Content-Type: application/json');
echo json_encode($response);
?> 