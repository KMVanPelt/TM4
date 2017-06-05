/*php - conducts serverside validation and stores data into playersDatabase*/

/*The code checks to see if all the fields all contain values and that the values are in the correct format.  If it doesnt contain the correct 
values, it posts the corresponding error message.  If all fields contain the correct values, it posts the value to the server.*/

<?php
// define variables and set to empty values
$DateErr = $EventErr = $VenueNameErr = $VenueAddressErr = $TimeErr = $ContactNameErr = $ContactNumberErr = "";
$Date = $Event = $Notes = $VenueName = $VenueAddress = $Time = $ContactName = $ContactNumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Date"])) {
    $DateErr = "Date is required";
  } else {
    $Date = test_input($_POST["Date"]);
	// check if date is well-formed
    if (!preg_match("/^[Date]*$/",$Date)) {
      $DateErr = "Invalid Date format"; 
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
  
  if (empty($_POST["VenueName"])) {
    $VenueNameErr = "Venue Name is required";
  } else {
    $VenueName = test_input($_POST["VenueName"]);
	// check if Venue name is well-formed
    if (!preg_match("/^[a-zA-Z0-9]*$/",$VenueName)) {
    $VenueNameErr = "Invalid Venue name format"; 
  }
  }

  if (empty($_POST["VenueAddress"])) {
    $VenueAddressErr = "Address is required";
  } else {
    $VenueAddress = test_input($_POST["VenueAddress"]);
	// check if venue address is well-formed
    if (!preg_match("/^[Date]*$/",$VenueAddress)) {
      $VenueAddressErr = "Invalid venue address format"; 
    }
  }

  if (empty($_POST["Time"])) {
    $TimeErr = "Time is required";
  } else {
    $Time = test_input($_POST["Time"]);
	// check if Time is well-formed
    if (!preg_match("/^[Time]*$/",$Time)) {
      $TimeErr = "Invalid Time format"; 
    }
  }
  
  if (empty($_POST["ContactName"])) {
    $ContactNameErr = "Contact name is required";
  } else {
    $ContactName = test_input($_POST["ContactName"]);
	// check if contact name is well-formed
    if (!preg_match("/^[a-zA-Z0-9]*$/",$ContactName)) {
    $ContactNameErr = "Invalid contact name format"; 
	}
  }	
	
	if (empty($_POST["ContactNumber"])) {
    $ContactNumberErr = "Contact Number is required";
  } else {
    $ContactNumber = test_input($_POST["ContactNumber"]);
	// check if contact number is well formed
    if (!preg_match("/^[0-9]*$/",$ContactNumber)) {
      $ContactNumberErr = "Invalid contact phone number format"
  }
}
?>