<?php
// connect to the database
 include("db.php");
// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // get form data
    $matatu_numplate = $_POST['matatu_numplate'];
    $date = $_POST['date'];
    $dep1_t1 = $_POST['dep1_t1'];
    $arrival1_t1 = $_POST['arrival1_t1'];
    $dep2_t1 = $_POST['dep2_t1'];
    $arrival2_t1 = $_POST['arrival2_t1'];
    $dep1_t2 = $_POST['dep1_t2'];
    $arrival1_t2 = $_POST['arrival1_t2'];
    $dep2_t2 = $_POST['dep2_t2'];
    $arrival2_t2 = $_POST['arrival2_t2'];

  

    // check if the record already exists
    $query = "SELECT * FROM schedule_nai_wote WHERE matatu_numplate='$matatu_numplate' AND date='$date'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // update the existing record
        $query = "UPDATE schedule_nai_macha SET dep1_t1='$dep1_t1', arrival1_t1='$arrival1_t1', dep2_t1='$dep2_t1', arrival2_t1='$arrival2_t1', dep1_t2='$dep1_t2', arrival1_t2='$arrival1_t2', dep2_t2='$dep2_t2', arrival2_t2='$arrival2_t2' WHERE matatu_numplate='$matatu_numplate' AND date='$date'";
        mysqli_query($conn, $query);
        echo "Record updated successfully.";
    } else {
        // insert a new record
        $query = "INSERT INTO schedule_nai_wote (matatu_numplate, date, dep1_t1, arrival1_t1, dep2_t1, arrival2_t1, dep1_t2, arrival1_t2, dep2_t2, arrival2_t2) VALUES ('$matatu_numplate', '$date', '$dep1_t1', '$arrival1_t1', '$dep2_t1', '$arrival2_t1', '$dep1_t2', '$arrival1_t2', '$dep2_t2', '$arrival2_t2')";
        mysqli_query($conn, $query);
        echo "Record inserted successfully.";
    }

    // close the database connection
    mysqli_close($conn);
}
?>
