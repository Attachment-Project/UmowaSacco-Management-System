<?php
// include the database connection file
include "../db.php";

// get the form input values
$driverFirstName = $_POST["fname"];
$driverId = $_POST["driverId"];
$fleetNo = $_POST["FleetNo"];
$noOfTrips = $_POST["NoOfTrips"];
$passengerCount = $_POST["PassengerCount"];
$totalRevenue = $_POST["TotalRevenue"];
$maintenanceCosts = $_POST["MaintenanceCosts"];
$fuelConsumption = $_POST["FuelConsumption"];
$incidents = $_POST["Incidents"];


$Date = new DateTime();
$DateReported = $Date->format('Y-m-d');

// prepare a SQL query to insert the data into the DailyReport table
$stmt = $conn->prepare("INSERT INTO DailyReport (DriverFirstName, DriverId, FleetNo, NoOfTrips, PassengerCount, TotalRevenue, MaintenanceCosts, FuelConsumption, Incidents, DateReported) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// bind the form input values to the prepared statement
$stmt->bind_param("ssiiiiiiis", $driverFirstName, $driverId, $fleetNo, $noOfTrips, $passengerCount, $totalRevenue, $maintenanceCosts, $fuelConsumption, trim($incidents), $DateReported);

// execute the prepared statement
if($stmt->execute()) {
    // display success message
    echo "<script>alert('Report submitted successfully!'); window.location = 'loggedin.php';</script>";
} else {
    // display error message
    echo "<p>Error: " . $conn-> $error . "</p>";
}

// close the prepared statement and database connection
$stmt->close();
$conn->close();


?>