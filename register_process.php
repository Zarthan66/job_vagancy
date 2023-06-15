<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_vagancy";

// Create a new MySQLi object
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user's registration data into the database
  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";

  if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>