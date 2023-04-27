<?php
require "include_admin_session.php";
require_once "../utils/data_layer.php";

$currentPage = "list_cruise_lines";

$sql = "SELECT 
c.cruiseline_id, c.cruiseline_name, c.cruiseline_abbreviation
FROM cruiseline c";

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
            <th scope="col">Cruiseline Name</th>
            <th scope="col">Cruiseline Abbreviation</th>           
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $results->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope=\"row\">" . $row['cruiseline_id'] . "</th>";
                echo "<td>" . $row['cruiseline_name'] . "</td>";       
                echo "<td>" . $row['cruiseline_abbreviation'] . "</td>";     
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>


</body>
</html>


