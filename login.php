      <head>
      <link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/fullstyle.css">
      </head>
      
      <!-- login modal start -->
      <div id="id01" class="modal" style="display: block;">
  
  <form class="modal-content animate" action="CheckLogin.php" method="post" style="
  width: 400px;
">
    <div class="imgcontainer">
      <p style="font-size: 22px;">Login </p>
      <hr>
    </div>

    <div class="container">

      <input type="email" placeholder="Email" name="Email" required>

      <input type="password" placeholder="Enter Password" name="psw" required>
    
      <button type="submit">Login</button>


    <p id = "errmsg" style = "color: red"></p>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn"><a style="color: white" href="./index.html">Cancel</a></button>
      <span class="psw"><a href="./register.php">Register Here</a></span>
    </div>
  </form>
</div>
<!-- login modal end  -->