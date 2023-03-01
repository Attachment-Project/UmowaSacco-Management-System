<?php
include("../auth_session.php");
include("../db.php");
$email = $_SESSION['email'];

$userdata_query = "SELECT FirstName, LastName, IDNo, Age, Sex, Email, PhoneNumber, psw, task, Salary, RegistrationDate,ProfilePicture FROM member WHERE Email = '$email'";
$result = mysqli_query($conn, $userdata_query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $fname = $row['FirstName'];
  $Lname = $row['LastName'];
  $PhoneNumber = $row['PhoneNumber'];
  $IDNo = $row['IDNo'];
  $task = $row['task'];
  $Age = $row['Age'];
  $picture = $row['ProfilePicture'];
}
$_SESSION['IdNo'] = $IDNo;

$matatudata_query = "SELECT FleetNo, OwnerId, NumPlate, RouteFrom, RouteTo, DriverId, MatatuCapacity, RegistrationDate FROM Matatus WHERE OwnerId = ' $IDNo'";
$matatudata_result = mysqli_query($conn, $matatudata_query);

// if($matatudata_result){
//   $row = mysqli_fetch_assoc($matatudata_result);
//   $FleetNo= $row['FleetNo'];
//   $OwnerId= $row['OwnerId'];
//   $NumPlate= $row['NumPlate'];
//   $RouteFrom= $row['RouteFrom'];
//   $RouteTo= $row['RouteTo'];
//   $DriverId= $row['DriverId'];
//   $MatatuCapacity= $row['MatatuCapacity'];
//   $RegistrationDate= $row['RegistrationDate'];
// }

?>