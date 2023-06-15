<?php
// Set the search parameters
$keywords = isset($_GET['keywords']) ? $_GET['keywords'] : '';
$location = isset($_GET['location']) ? $_GET['location'] : '';

// Set the API endpoint URL
$endpoint = 'https://api.dataatwork.org/v1/jobs';

// Build the query string
$query = http_build_query([
    'title' => $keywords,
    'location' => $location,
]);

// Set the request URL
$requestUrl = $endpoint . '?' . $query;

// Send the GET request to the API
$response = file_get_contents($requestUrl);

// Handle the response
if ($response === false) {
    echo 'Failed to retrieve job data.';
} else {
    $jobs = json_decode($response, true);
    if (is_array($jobs) && count($jobs) > 0) {
        foreach ($jobs as $job) {
            // Output job details
            echo '<h3>' . $job['title'] . '</h3>';
            echo '<p>' . $job['normalized_job_title'] . '</p>';
            echo '<p>' . $job['parent_uuid'] . '</p>';
            echo '<hr>';
        }
    } else {
        echo 'No jobs found.';
    }
}
?>
