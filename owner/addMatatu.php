<head>
      <link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="../css/fullstyle.css">
      </head>
      
      <!-- register Matatu-->
      <div id="id01" class="modal" style="display: block;">
  
  <form class="modal-content animate" action="sendMatatuDatabase.php" enctype="multipart/form-data" method="post" style="
  width: 400px;
">
    <div class="imgcontainer">
      <p style="font-size: 22px;">Register Matatu</p>
      <hr>
    </div>



    <div class="container">
       
            <label for="driverdetails">Matatu Details</label>
            <br> <br>
        <input type="number" placeholder="OwnerId"name="OwnerId" required>
        <input type="text" placeholder="Number Plate"name="NumPlate" required>
        <label>Route</label>
        <div style ="display: flex; flex-direction: row;">
        <input type="text" placeholder="From"name="RouteFrom" required> 
        &nbsp;
        <input type="text" placeholder="To"name="RouteTo" required>
        </div>

        <input type="text" placeholder="Driver Id" name="driverId" required>
      
      <input type="number" placeholder="Capacity" name="matatuCapacity" required>

      <div>
      	<label>Insurance</label>
      	<input class="file-upload-input" capture="camera" type="file" onchange="readURL(this)" accept="image/*" name="InsurancePic"id="Ipic" >
       </div>
        
    <button type="submit">Register</button>
    <p id = "errmsg"></p>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn"><a style="color: white" href="./loggedin.php">Cancel</a></button>
    </div>
  </form>
</div>
