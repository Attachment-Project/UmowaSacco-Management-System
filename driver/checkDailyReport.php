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

// create a SQL query to insert the data into the DailyReport table
$sql = "INSERT INTO DailyReport (DriverFirstName, DriverId, FleetNo, NoOfTrips, PassengerCount, TotalRevenue, MaintenanceCosts, FuelConsumption, Incidents,DateReported) 
        VALUES ('$driverFirstName', $driverId, $fleetNo, $noOfTrips, $passengerCount, $totalRevenue, $maintenanceCosts, $fuelConsumption, $incidents,'$DateReported')";

// execute the SQL query
if(mysqli_query($conn, $sql)){
    // display success message
    echo "<script>alert('Report submitted successfully!'); window.location = 'loggedin.php';</script>";
} else {
    // display error message
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}

// close the database connection
mysqli_close($conn);
?>
