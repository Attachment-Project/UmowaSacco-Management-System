<head>
      <link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/fullstyle.css">
      </head>
      
      <!-- register modal start -->
      <div id="id01" class="modal" style="display: block;">
  
  <form class="modal-content animate" action="CheckRegistration.php" enctype="multipart/form-data" method="post" style="
  width: 400px;
">
    <div class="imgcontainer">
      <p style="font-size: 22px;">Register </p>
      <hr>
    </div>

    <div class="container">

      <input type="text" placeholder="First Name" name="fname" required>

      <input type="text" placeholder="Last Name" name="lname" required>

      <input type="number" placeholder="ID Number" name="IdNo" required>

      <input type="number" placeholder="Age" name="age" required>
        
      <label for="Gender">
         <input type="radio" value="Male" name="gender"> Male
        </label>
        <label for="Gender">
         <input type="radio" value="Female" name="gender"> Female
        </label>

        <input type="email" placeholder="Email" name="email" required>

        <input type="tel" placeholder="PhoneNumber" name="pnumber" required>
      

      <input type="password" placeholder="Enter Password" name="psw" required>

      <input type="text" placeholder="Role" name="task" required>


      <div>
      	<label>Profile Photo</label>
      	<input class="file-upload-input" capture="camera" type="file" onchange="readURL(this)" accept="image/*" name="profilepic"id="pic" >
       </div>
        
      <button type="submit">Register</button>
      <p id="errmsg" style="color: red"></p>
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn"><a style="color: white" href="./index.html">Cancel</a></button>
      <span class="psw">Already have an account? <a href="./login.php">Sign In</a></span>
    </div>
  </form>
</div>
<!-- register modal end  -->