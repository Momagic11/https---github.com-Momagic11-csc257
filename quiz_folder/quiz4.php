<?php

// Define database connection constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'csc257');

// Function to connect to database

function queryDatabase($sql) {
    // Connect to the database
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Check for errors
    if (mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_error();
        exit();
    }

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Test for errors
    if (!$result) {
        echo "Failed to retrieve courses: " . mysqli_error($conn);
        exit();
    }

    // Close the database connection
    mysqli_close($conn);

    // Return the result
    return $result;
}

// SQL Code
$sql = "SELECT * FROM course ORDER BY course_name";

// Call function
$result = queryDatabase($sql);

// Output to user
echo "<table>";
echo "<tr><th>ID</th><th>Course Name</th><th>Department</th><th>Number of Students</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row['course_id'] . "</td><td>" . $row['course_name'] . "</td><td>" . $row['department'] . "</td><td>" . $row['number_of_students'] . "</td></tr>";
}

echo "</table>";

?>