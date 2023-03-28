<?php
// include the database connection file
include 'db.php';

// check if the schedule ID is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // delete the record from the database
    $query = "DELETE FROM schedule_nai_wote WHERE schedule_id = $id";
    mysqli_query($conn, $query);
    
    // redirect back to the schedule list page
    echo "<script>alert('Record deleted successfully.'); window.location = 'viewSchedule_Nai_Wote.php';</script>";
    exit();
}
