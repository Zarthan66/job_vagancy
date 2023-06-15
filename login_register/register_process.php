<?php
  session_start();
  // Establish a database connection (assuming default XAMPP configuration)
  $conn = mysqli_connect('localhost', 'root', '', 'job_vacancy');

  // Check for connection errors
  if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
  }

  // Sanitize the submitted username and password
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Hash the password (for better security, consider using a stronger hashing algorithm)
  $hashedPassword = md5($password);

  // Insert the new user into the database
  $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // Successful registration
    $_SESSION['username'] = $username;
    header('Location: index.php');
  } else {
    // Registration failed
    echo "Registration failed.";
  }

  // Close the database connection
  mysqli_close($conn);
?>
