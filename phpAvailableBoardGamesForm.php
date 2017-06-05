/*php - conducts serverside validation and stores data into playersDatabase*/

/*The code checks to see if all the fields all contain values and that the values are in the correct format.  If it doesnt contain the correct 
values, it posts the corresponding error message.  If all fields contain the correct values, it posts the value to the server.*/

<?php
// define variables and set to empty values
$memberIDErr = $boardgameErr = $notesErr = "";
$memberID = $boardgame = $notes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["memberID"])) {
    $memberIDErr = "MemberID is required";
  } else {
    $memberID = test_input($_POST["memberID"]);
	// check if memberID is well-formed
    if (!preg_match("/^[a-zA-Z0-9]*$/",$memberID)) {
      $memberIDErr = "Invalid memberID format"; 
    }
  }

  if (empty($_POST["boardgame"])) {
    $boardgameErr = "boardgame is required";
  } else {
    $boardgame = test_input($_POST["boardgame"]);
	// check if boardgame is well-formed
    if (!preg_match("/^[a-zA-Z0-9]*$/",$boardgame)) {
      $boardgameErr = "Invalid boardgame format"; 
    }
  }
  
  if (empty($_POST["notes"])) {
    $notesErr = "notes";
  } else {
    $notes = test_input($_POST["Notes are required"]);
	// check if notes is well-formed
    if (!preg_match("/^[a-zA-Z0-9]*$/",$notes)) {
    $notesErr = "Invalid notes format"; 
  }

}
?>