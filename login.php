<?php
$email = $_POST['email'];
$password = $_POST['password'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ecs417";
// Creates connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare a SQL statement to query for the user with the provided email and password
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// check if any rows were returned
if ($result->num_rows == 1) {
    // valid credentials - redirect the user to the Blog page
    header("Location: Blog.html");
    exit();
} else {
    // invalid credentials - display an error message
    echo "Invalid email or password";
}

// close the database connection
$stmt->close();
$conn->close();
