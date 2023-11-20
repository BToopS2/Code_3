<?php

$Email= $_POST['Email'];
$Prix = $_POST['Prix'];
$Location=$_POST['Location'];

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'traveldata');

// Check if the database connection was successful
if ($conn->connect_error) {
    echo 'Database connection failed: ' . $conn->connect_error;
    die();
}

// Prepare the SQL statement
$stmt = $conn->prepare('INSERT INTO ticker (Email, Prix,Location) VALUES (?,  ?, ?)');

// Bind the parameters to the SQL statement
$stmt->bind_param('sss', $Email,$Prix,$Location);

// Execute the SQL statement
$execval = $stmt->execute();

// Check if the SQL statement was successful
if ($execval) {
    echo 'New course added successfully!';
} else {
    echo 'Error adding new course: ' . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();

// // Go back to the courses page
// header('location:dashboard.php')
?>

