<head>
      <link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="../css/fullstyle.css">
      </head>
      
      <!-- login modal start -->
      <div id="id01" class="modal" style="display: block;">
  
  <form class="modal-content animate" action="CheckLogin.php" method="post" style="
  width: 400px;
">
    <div class="imgcontainer">
      <p style="font-size: 22px;">Admin Login </p>
      <hr>
    </div>

    <div class="container">

      <input type="text" placeholder="Username" name="Uname" required>

      <input type="password" placeholder="Enter Password" name="psw" required>
    
      <button type="submit">Login</button>


    <p id = "errmsg" style = "color: red"></p>
    
    </div>
  </form>
</div>
<!-- login modal end  -->