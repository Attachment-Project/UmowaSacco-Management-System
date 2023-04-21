
<?php
// include the database connection file
include 'db.php';

require_once('../userData/members.php');

$matatudata_query = "SELECT NumPlate FROM Matatus WHERE DriverId = $_SESSION[IdNo]";
$matatudata_result = mysqli_query($conn, $matatudata_query);

 if($matatudata_result){
  $row = mysqli_fetch_assoc($matatudata_result);
  $NumPlate= $row['NumPlate'];
}


// select all the records from the database table
$query = "SELECT * FROM schedule_nai_macha where matatu_numplate = '$NumPlate'";
$result = mysqli_query($conn, $query);

// check if there are any records in the database
if (mysqli_num_rows($result) > 0) {
    // create a table to display the data
    echo "<table class='schedule-table'>";
    echo "<tr><th>Matatu Number Plate</th><th>Date</th><th>Departure 1 Time 1</th><th>Arrival 1 Time 1</th><th>Departure 2 Time 1</th><th>Arrival 2 Time 1</th><th>Departure 1 Time 2</th><th>Arrival 1 Time 2</th><th>Departure 2 Time 2</th><th>Arrival 2 Time 2</th></tr>";

    // loop through each record and display it in the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href = './loggedin.php'>back</a>" ;
        echo "<tr>";
        echo "<td>" . $row['matatu_numplate'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['dep1_t1'] . "</td>";
        echo "<td>" . $row['arrival1_t1'] . "</td>";
        echo "<td>" . $row['dep2_t1'] . "</td>";
        echo "<td>" . $row['arrival2_t1'] . "</td>";
        echo "<td>" . $row['dep1_t2'] . "</td>";
        echo "<td>" . $row['arrival1_t2'] . "</td>";
        echo "<td>" . $row['dep2_t2'] . "</td>";
        echo "<td>" . $row['arrival2_t2'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {

    $query = "SELECT * FROM schedule_nai_wote where matatu_numplate = '$NumPlate'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // create a table to display the data
        echo "<table class='schedule-table'>";
        echo "<tr><th>Matatu Number Plate</th><th>Date</th><th>Departure 1 Time 1</th><th>Arrival 1 Time 1</th><th>Departure 2 Time 1</th><th>Arrival 2 Time 1</th><th>Departure 1 Time 2</th><th>Arrival 1 Time 2</th><th>Departure 2 Time 2</th><th>Arrival 2 Time 2</th></tr>";
    
        // loop through each record and display it in the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href = './loggedin.php'>back</a>" ;
            echo "<tr>";
            echo "<td>" . $row['matatu_numplate'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['dep1_t1'] . "</td>";
            echo "<td>" . $row['arrival1_t1'] . "</td>";
            echo "<td>" . $row['dep2_t1'] . "</td>";
            echo "<td>" . $row['arrival2_t1'] . "</td>";
            echo "<td>" . $row['dep1_t2'] . "</td>";
            echo "<td>" . $row['arrival1_t2'] . "</td>";
            echo "<td>" . $row['dep2_t2'] . "</td>";
            echo "<td>" . $row['arrival2_t2'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No Schedules";
    }
}

// close the database connection
mysqli_close($conn);
?>

<!-- add styling for the table -->
<style>
.schedule-table {
    border-collapse: collapse;
    margin: 0 auto;
    font-family: Arial, sans-serif;
    font-size: 14px;
    width: 90%;
    max-width: 1200px;
}

.schedule-table th {
    background-color: blue;
    color: white;
    font-weight: bold;
    padding: 10px;
    text-align: center;
    vertical-align: middle;
}

.schedule-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
    vertical-align: middle;
}
</style>
