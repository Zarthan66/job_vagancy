<?php
// Database connection parameters
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "job_vagancy"; // Replace with your database name

// Create a connection to the database
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve job listings from the database
$query = "SELECT job_image, job_title, company_name, location, LEFT(job_description, 100) AS truncated_description FROM job_lists";
$result = mysqli_query($connection, $query);

// Check if there are any job listings
if (mysqli_num_rows($result) > 0) {
    $jobsNum = 0;
    $jobsMax = 50;
    // Loop through the result and generate job cards
    while ($row = mysqli_fetch_assoc($result)) {
        $jobsNum = $jobsNum + 1;
        if($jobsNum > $jobsMax)
            return 0;
        $jobImage = $row['job_image'];
        $jobTitle = $row['job_title'];
        $companyName = $row['company_name'];
        $location = $row['location'];
        $description = $row['truncated_description'] . "..."; // Truncate description and add ellipsis

        // Generate job card HTML
        echo '
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="images\img-1.png" class="card-img-top" alt="Job Logo">
                    <div class="card-body">
                        <h5 class="card-title">'.$jobTitle.'</h5>
                        <p class="card-text">'.$description.'</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Company: '.$companyName.'</li>
                        <li class="list-group-item"> City: '.$location.'</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-danger">Apply</a>
                    </div>
                </div>
            </div>
        ';
    }
} else {
    // No job listings found
    echo '<p>No job listings available.</p>';
}

// Close the database connection
mysqli_close($connection);
