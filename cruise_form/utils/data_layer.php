<?php

// Application-wide data layer

function queryDatabase($sql) {
    // Define the initial options for connecting to MySQL
    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $port = "3306";
    $db = "csc257";

    // Create a connection
    $conn = new mysqli($serverName, $userName, $password, $db, $port);
    
    // Add error handling for connection
    if ($conn->connect_errno) {
        echo "Fail to connect to MySQL: " . $conn->connect_error;
        exit();
    }

    // Get results
    $results = $conn->query($sql);

    if (!$results) {
        echo "Error description" . $conn->error;
        exit();
    }

    // Close the connection
    $conn->close();

    // Return the results
    return $results;
}

/*
$myresults = queryDatabase("SELECT * FROM state ORDER BY state_name");
// var_dump($myresults);
while ($row = $myresults->fetch_assoc()) {
    echo $row['state_id'] . " " . $row['state_name'] . " " . $row['state_abbreviation'] . "<br>";
}
*/