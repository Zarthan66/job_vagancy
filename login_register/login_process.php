<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'job_vacancy';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check for connection errors
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the submitted username and password
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database for the user with the given username and password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if a matching user is found
    if (mysqli_num_rows($result) == 1) {
        // Successful login
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        // Invalid login
        echo "Invalid username or password.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
