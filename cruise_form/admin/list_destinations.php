<?php
require "include_admin_session.php";
require_once "../utils/data_layer.php";

$currentPage = "list_destinations";

$sql = "SELECT 
d.destination_id, d.destination_name, d.destination_abbreviation
FROM destination d";

$results = queryDatabase($sql);
?>
<html>
<head>
    <title>Admin: List cruiselines</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="bg-light">

    <?php include "include_admin_header.php"; ?>

    <table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">id#</th>
            <th scope="col">Destination Name</th>
            <th scope="col">Destination Abbreviation</th>           
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $results->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope=\"row\">" . $row['destination_id'] . "</th>";
                echo "<td>" . $row['destination_name'] . "</td>";       
                echo "<td>" . $row['destination_abbreviation'] . "</td>";     
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>

</body>
</html>