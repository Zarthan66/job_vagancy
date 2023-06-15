<?php
session_start();

if (isset($_SESSION["user_id"])) {
  // If the user is already logged in, redirect to the home page or any other desired page
  header("Location: profile.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Connect to the database
  $servername = "localhost";
  $dbemail = "root";
  $dbpassword = "";
  $dbname = "job_vagancy";
  $conn = new mysqli($servername, $dbemail, $dbpassword, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the SQL statement to retrieve the user's data based on the provided email
  $sql = "SELECT id, email, password FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows == 1) {
    $stmt->bind_result($id, $dbEmail, $dbPassword);
    $stmt->fetch();

    // Verify the password
    if (password_verify($password, $dbPassword)) {
      // Password is correct, set the session variables
      $_SESSION["user_id"] = $id;
      $_SESSION["email"] = $dbEmail;

      // Redirect to the home page or any other desired page
      header("Location: profile.php");
      exit;
    } else {
      // Invalid password
      $error = "Invalid password";
      header("Location: login.php?error=" . urlencode($error));
      exit;
    }
  } else {
    // User not found
    $error = "Invalid email or password";
    header("Location: login.php?error=" . urlencode($error));
    exit;
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
}
?>
