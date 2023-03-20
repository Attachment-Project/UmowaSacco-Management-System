
<head>
      <link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="../css/fullstyle.css">
      </head>
      
      <!-- daily report modal start -->
      <div id="id01" class="modal" style="display: block;">

      <button>
    <a href="./loggedin.php">back</a>
</button>
  
      <form class="modal-content animate" action="checkDailyReport.php" enctype="multipart/form-data" method="post" style="width: 400px;">
    <div class="imgcontainer">

        <p style="font-size: 22px;">Daily Schedules </p>
        <hr>
    </div>
<div class="container">

    <input type="text" placeholder="" name="fname" required>

    <input type="number" placeholder="Driver Id" name="driverId" required>

    <input type="number" placeholder="FleetNo" name="FleetNo" required>

    <input type="number" placeholder="Number of Trips" name="NoOfTrips" required>

    <input type="number" placeholder="Passenger Count" name="PassengerCount" required>

    <input type="number" placeholder="Total Revenue" name="TotalRevenue" required>

    <input type="number" placeholder="Maintenance Costs" name="MaintenanceCosts" required>

    <input type="number" placeholder="Fuel Consumption(Cost)" name="FuelConsumption" required>

    <input type="text" placeholder="Any Incidents Occurred" name="Incidents" pattern="[A-Za-z ]+" title="Please enter letters and spaces only">

    <button type="submit">Submit</button>
    <p id="errmsg" style="color: red"></p>
</div>
</form>
</div>
<!-- register modal end  -->