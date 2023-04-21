<?php
// Form Data

require_once "data_layer.php";

// Form data files
// Purpose is to interact with the data layer and provide data back to the form

function createDropdownFromDatabase($sql, $key, $value) {
   // Create the generic array to be returned
   $myNewArray = array();

   // Query the database and use the sql statement provided
   $results = queryDatabase($sql);
 
   // Iterate over the rows returned and add to the new array
   while ($row = $results->fetch_assoc()) {
    $myNewArray[$row[$key]] = $row[$value];
   }

   // Return the new array
   return $myNewArray;
}

/**
 * Retrieve a list of states
 *
 * @param  bool $sort  Sort the array alphabetically (default) 
 * 
 * @return array   An associative array of states
 */
function getStates($sort=true) {
  return createDropdownFromDatabase(
    "SELECT * FROM state ORDER BY state_name",
    "state_id",
    "state_name"
  );
}

/**
 * Retrieve a list of destinations
 *
 * @param  bool $sort  Sort the array alphabetically (default) 
 * 
 * @return array   An associative array of destinations
 */
function getDestinations($sort=true) {
  return createDropdownFromDatabase(
    "SELECT * FROM destination ORDER BY destination_name",
    "destination_id",
    "destination_name"
  );
}

/**
 * Retrieve a list of cruise lines
 *
 * @param  bool $sort  Sort the array alphabetically (default) 
 * 
 * @return array   An associative array of cruise lines
 */
function getCruiseLines($sort=true) {
  return createDropdownFromDatabase(
    "SELECT * FROM cruiseline ORDER BY cruiseline_name",
    "cruiseline_id",
    "cruiseline_name"
  );
}
