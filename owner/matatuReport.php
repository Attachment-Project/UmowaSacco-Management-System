
<button>
    <a href="./loggedin.php">back</a>
</button>


<style>
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.report {
    width: 350px;
    padding: 20px;
    margin: 20px;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
}
</style>
<?php
// include the database connection
include "../db.php";
        include('../userData/members.php');

        $IDNo = $_SESSION['IdNo'];

// select all the daily reports from the database
$sql = "SELECT * FROM DailyReport";
$result = mysqli_query($conn, $sql);

// check if any reports were found
if (mysqli_num_rows($result) > 0) {
    // loop through the reports and display them in divs
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='report'>";
        echo "<p>Driver's First Name: " . $row["DriverFirstName"] . "</p>";
        echo "<p>Driver ID: " . $row["DriverId"] . "</p>";
        echo "<p>Fleet Number: " . $row["FleetNo"] . "</p>";
        echo "<p>Number of Trips: " . $row["NoOfTrips"] . "</p>";
        echo "<p>Passenger Count: " . $row["PassengerCount"] . "</p>";
        echo "<p>Total Revenue: " . $row["TotalRevenue"] . "</p>";
        echo "<p>Maintenance Costs: " . $row["MaintenanceCosts"] . "</p>";
        echo "<p>Fuel Consumption (Cost): " . $row["FuelConsumption"] . "</p>";
        echo "<p>Any Incidents: " . $row["Incidents"] . "</p>";
        echo "<p><b>Date Reported:  </b>" . $row["DateReported"] ."</p>";
        echo "</div>";
    }
} else {
    // no reports were found
    echo "No reports found.";
}

// close the database connection
mysqli_close($conn);
?>
