<?php

function getUserDetails($username) {
    // Database connection parameters
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $database = "job_vagancy";

    // Create a connection to the database
    $connection = mysqli_connect($host, $dbUsername, $dbPassword, $database);

    // Check if the connection was successful
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the query to retrieve user details
    $query = "SELECT address, experience FROM user_details WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the row containing the user details
        $row = mysqli_fetch_assoc($result);

        // Get the address and experience from the database
        $address = $row['address'];
        $experience = $row['experience'];

        // Close the database connection
        mysqli_close($connection);

        // Return the user details as an array
        return [
            'address' => $address,
            'experience' => $experience
        ];
    } else {
        // Close the database connection
        mysqli_close($connection);

        // Return null if the query failed
        return null;
    }
}

?>
