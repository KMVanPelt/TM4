/*php - conducts serverside validation and stores data into playersDatabase*/

/*The code checks to see if all the fields all contain values and that the values are in the correct format.  If it doesnt contain the correct 
values, it posts the corresponding error message.  If all fields contain the correct values, it posts the value to the server.*/

<?php
// define variables and set to empty values
$memberIDErr = $EventErr = $ScoreErr = "";
$memberID = $Event = $Score = "";

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

  if (empty($_POST["Event"])) {
    $EventErr = "Event is required";
  } else {
    $Event = test_input($_POST["Event"]);
	// check if Event is well-formed
    if (!preg_match("/^[a-zA-Z0-9]*$/",$Event)) {
      $EventErr = "Invalid Event format"; 
    }
  }
  
  if (empty($_POST["Score"])) {
    $ScoreErr = "Score";
  } else {
    $Score = test_input($_POST["Score is required"]);
	// check if score is well-formed
    if (!preg_match("/^[0-9]*$/",$Score)) {
    $ScoreErr = "Invalid score format"; 
  }

}
?>