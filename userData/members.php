<?php
include("../auth_session.php");
include("../db.php");
$email = $_SESSION['email'];

$userdata_query = "SELECT FirstName, LastName, IDNo, Age, Sex, Email, PhoneNumber, psw, task, Salary, RegistrationDate,ProfilePicture FROM members WHERE Email = '$email'";
$result = mysqli_query($conn, $userdata_query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $fname = $row['FirstName'];
  $Lname = $row['LastName'];
  $IDNo = $row['IDNo'];
  $task = $row['task'];
  $Age = $row['Age'];
  $picture = $row['ProfilePicture'];
}
?>