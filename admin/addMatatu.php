<head>
  <link rel="stylesheet" href="../css/style.css"/>
  <link rel="stylesheet" href="../css/fullstyle.css">
</head>

<!-- register Matatu-->
<div id="id01" class="modal" style="display: block;">
  <form class="modal-content animate" action="sendMatatuDatabase.php" enctype="multipart/form-data" method="post" style="width: 400px;">
    <div class="imgcontainer">
      <p style="font-size: 22px;">Register Matatu</p>
      <hr>
    </div>

    <?php
      // Connect to your database
      include('../db.php');

      // Retrieve the list of owners from your database
      $query = "SELECT IDNo FROM member WHERE task = 'Owner'";
      $query2 = "SELECT IDNo FROM member WHERE task = 'Driver'";
      $result = mysqli_query($conn, $query);
      $result2 = mysqli_query($conn, $query2);
      $owners = mysqli_fetch_all($result, MYSQLI_ASSOC);
      $drivers = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    ?>

    <div class="container">
      <label for="driverdetails">Matatu Details</label>
      <br><br>

      <select id="OwnerId" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" name="OwnerId" required>
        <option value="">Select a Owner</option>
        <?php foreach ($owners as $owner): ?>
          <option value="<?php echo $owner['IDNo']; ?>"><?php echo $owner['IDNo']; ?></option>
        <?php endforeach; ?>
      </select>

      <input type="text" placeholder="Number Plate" name="NumPlate" required>
      <label>Route</label>
      <div style ="display: flex; flex-direction: row;">
        <input type="text" placeholder="From" name="RouteFrom" required> 
        &nbsp;
        <input type="text" placeholder="To" name="RouteTo" required>
      </div>


      <select id="driverId" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" name="driverId" required>
        <option value="">Select a Driver</option>
        <?php foreach ($drivers as $driver): ?>
          <option value="<?php echo $driver['IDNo']; ?>"><?php echo $driver['IDNo']; ?></option>
        <?php endforeach; ?>
      </select>
      
      <input type="number" placeholder="Capacity" name="matatuCapacity" required>

      <div>
        <label>Insurance</label>
        <input class="file-upload-input" capture="camera" type="file" onchange="readURL(this)" accept="image/*" name="InsurancePic" id="Ipic">
      </div>
        
      <button type="submit">Register</button>
      <p id="errmsg"></p>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn"><a style="color: white" href="./loggedin.php">Cancel</a></button>
    </div>
  </form>
</div>
