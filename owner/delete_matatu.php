<?php
include("../db.php");

if(isset($_GET['id'])) {
    $FleetNo = $_GET['id'];
    $sql = "DELETE FROM Matatus WHERE FleetNo = '$FleetNo'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Matatu deleted successfully'); window.location.href='./fetchMatatu.php';</script>";
    } else {
        echo "Error deleting matatu: " . $conn->$error;
    }
    
    $conn->close();
} else {
    echo "No matatu ID specified";
}
?>