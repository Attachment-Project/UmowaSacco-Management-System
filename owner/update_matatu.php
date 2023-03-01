<?php
include("../db.php");

if(isset($_POST['submit'])) {
    $FleetNo = $_GET['id'];
    $RouteFrom = $_POST['RouteFrom'];
    $RouteTo = $_POST['RouteTo'];
    $DriverId = $_POST['DriverId'];
    
    $sql = "UPDATE Matatus SET RouteFrom='$RouteFrom', RouteTo='$RouteTo', DriverId='$DriverId' WHERE FleetNo='$FleetNo'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Matatu updated successfully'); window.location.href='./fetchMatatu.php';</script>";
    } else {
        echo "Error updating matatu: " . $conn->$error;
    }
    
    $conn->close();
} else {
    $FleetNo = $_GET['id'];
    $sql = "SELECT * FROM Matatus WHERE FleetNo='$FleetNo'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<form method="POST" action="update_matatu.php?id=<?php echo $FleetNo; ?>">
    <input type="hidden" name="FleetNo" value="<?php echo $FleetNo; ?>">
    <input type="text" name="RouteFrom" placeholder="Route From" value="<?php echo $row['RouteFrom']; ?>"><br>
    <input type="text" name="RouteTo" placeholder="Route To" value="<?php echo $row['RouteTo']; ?>"><br>
    <input type="text" name="DriverId" placeholder="Driver ID" value="<?php echo $row['DriverId']; ?>"><br>
    <button type="submit" name="submit">Update Matatu</button>
</form>

<?php
    }
?>
