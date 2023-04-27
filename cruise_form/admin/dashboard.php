<?php
// Admin dashboard
require "include_admin_session.php";
?>

<html>
<head>
    <title>Admin: Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="bg-light">

    <?php include "include_admin_header.php"; ?>

<hr>

<div class="row" style="margin-left: 20px; margin-right: 20px">
   
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin-right: 20px">
    <a href="list_entries.php">
    <div class="card-header">List Entries</div>
    <div class="card-body"> 
        <p class="card-text">    
        List the entries submitted by users.</p>    
    </div>
    </a>
    </div>

    <div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin-right: 20px">
    <a href="list_cruiselines.php">
    <div class="card-header">List Cruiselines</div>
    <div class="card-body">
        <p class="card-text">List of available cruiselines to choose from.</p>
    </div>
    </a>
    </div>

    <div class="card bg-light mb-3" style="max-width: 18rem;">
    <a href="list_destinations.php">
    <div class="card-header">List Destinations</div>
    <div class="card-body">
        <p class="card-text">List of available destinations to choose from.</p>
    </div>
    </a>
    </div>

    

</div>

</body>
</html>
