<?php

// This file contains functions/methods that are shared across the application

/**
 * Generate HTML for dropdowns based on associative array
 *
 * @param  array  $dataArray             The associative array which contains id/name values
 * @param  bool   $addDefaultSelection   If true, add the default option at the top (default)
 * @param  string $customSelectMessage   If provided, a custom message will be used in place of the default
 * @param  string $selectedId            Optional ID to select from the list
 * 
 * @return string HTML representing options
 */
function generateHTMLDropDownList($dataArray, $addDefaultSelection=true, $customSelectMessage="", $selectedId="") {

    // If the array is empty, do not process
    if (empty($dataArray)) return;

    // Placeholder for html fragments
    $html = "";
    $selectMessage = "";

    // Create a default select message
    $defaultSelectMessage = "Please choose...";

    // Accodomate custom message
    if (empty($customSelectMessage)) {
        $selectMessage = $defaultSelectMessage;
    } else {
        $selectMessage = $customSelectMessage;
    }
    // $selectMessage = empty($customSelectMessage) ? $defaultSelectMessage : $customSelectMessage;

    // Check for default message flag
    if ($addDefaultSelection) {
        $html .= "<option value=\"\">$selectMessage</option>";
    }

    // Iterate over the array and generate option tag
    foreach($dataArray as $id => $name) {
        // $selectedAttribute = ""; // Selected HTML attribute string
        // if ($id === $selectedId) {
        //     $selectedAttribute = "selected";
        // }

        $selectedAttribute = $id == $selectedId ? "selected" : "";
        $html .= "<option value='$id' $selectedAttribute>$name</option>";
    }

    // Return the list of option tags
    return $html;
}

/**
 * Dropdown factory
 *
 * @param  array  $dataArray             The associative array which contains id/name values
 * @param  bool   $addDefaultSelection   If true, add the default option at the top (default)
 * @param  string $customSelectMessage   If provided, a custom message will be used in place of the default
 * @param  string $class                 The CSS class name to apply to the dropdown
 * @param  string $id                    The id of the select element
 * @param  string $name                  The name of the select element
 * @param  bool   $isRequired            Does this element participate in client-side validation? (default: false)
 * @param  string $selectedId            Optional ID to select from the list
 * 
 * @return string HTML representing dropdown/select tag
 */
 function buildDropDown($dataArray, $addDefaultSelection=true, $customSelectMessage="", $class, $id, $name="", $isRequired=false, $selectedId="") {

    // Placeholder for html tag
    $html = "";

    // If name is empty, set name to the same value as the $id parameter
    $useNameOrID = empty($name) ? $id : $name;

    // Handle required parameter
    $requiredParameter = $isRequired ? "required" : "";

    // <select class="custom-select d-block w-100" id="preferredDestination" name="preferredDestination" required>
    $html = "<select class=\"$class\" id=\"$id\" name=\"$useNameOrID\" $requiredParameter>";

    // Set the options
    $options = generateHTMLDropDownList($dataArray, $addDefaultSelection, $customSelectMessage, $selectedId);
    
    // Add the options to the html var
    $html .= $options;
 
    // close tag
    $html .= "</select>";

    // Return the select tag
    return $html;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ***********************

// Debugging:
/*
$destinationArray = array(
    "Bermuda" => "Bermuda",
    "Bahamas" => "Bahamas",
    "Hawaii" => "Hawaii",
    "Aruba" => "Aruba",
    "Cozumel" => "Cozumel"
  );
asort($destinationArray);
$params = array(
    "id" => "preferredDestination",
    "class" => "custom-select d-block w-100",
    "dataArray" => $destinationArray,
    "addDefaultSelection" => true,
    "customSelectMessage" => "Please select...",
    "isRequired" => true
);
// echo buildDropDown($destinationArray, true, "", "custom-select d-block w-100", "preferredDestination", "", false);
echo buildDropDown($params);
*/
