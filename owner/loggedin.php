
<?php
require_once('../userData/members.php');
//include('fetchMatatu.php');
?>

<!-- welcome to umowa sacco -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Umowa Sacco</title>
<link rel="stylesheet" href="../CSS/style.css"/>
<link rel="stylesheet" href="CSS/fullstyle.css">
<!--fav-icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../CSS/loading.css">

</head>
<div id="loading-page">
    <div class="loading-icon">
      <i class="fa fa-spinner fa-spin"></i>
    </div>
  </div>
  <script>
    setTimeout(function(){
      document.getElementById("loading-page").style.display = "none";
    }, 1000); // 1 seconds
  </script>
<body id="main-body">
    
    <section class="main" style="background-image: url(../images/hero-bg.png);">
        
        <nav>
            <a href="#" class="Logo">
                <img src="../images/LOGO.png" width="80px" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a href="./fetchMatatu.php">Services</a></li>
                <li><a href="./addMatatu.php">Add Matatu</a></li>
                <li><a href="./fetchMatatu.php">Your Matatus</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="../index.html" class="active">Log Out</a></li>
            </ul>
        </nav>


        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
                <h1 style="color: white; letter-spacing: 3px;">Hi, <?php echo $fname ?></h1>
                <p style="color: white;">Your ultimate partner for safe and convenient travel. Discover our exceptional 
                services and let's take you on a journey that exceeds your expectations</p>
            <!--login-btn-->
            <!-- <a href="#" class="main-login" style="border-radius: 10px;">BECOME A MEMBER</a> -->
            </div>
            <!--img-->
            <div class="home-img" style="width: 500px;">
                <img src="../images/van.png" width="500px" style="text-shadow: 20px 22px;"/>
                <marquee width="100%" direction="right" onmouseover="this.stop();"
                onmouseout="this.start();">
                    <a href="#" style="color: white;">Travel Safely</a>
                    </marquee>
              
            </div>
            
        </div>
        
        <!--arrow-->
        <div class="arrow"></div>
        <span class="scroll">Scroll</span>
    </section>
    
    <!--services----------------------->
    <section class="services" id="services"  id="services-heading">
        <!--heading----------->
        <div class="services-heading">
            <h2>OUR SERVICES</h2>

       
        </div>
        <!--box-container----------------->


        <div class="box-container" id="box-container">
          <!--box-1-------->
          <div class="box">
              <img src="../images/loan.jpg">
              <font>Loan Application</font>
              <p>We give our members loans according to their savings</p>
              <!--btn--------->
              <a href="">Apply Now!</a>
          </div>
          <!--box-2-------->
          <div class="box">
              <img src="../images/savings.png">
              <font>Savings</font>
              <p>We allow members to save money with interest of 5% P.M</p>
              <!--btn--------->
              <a href="">Save Now!</a>
          </div>
         
          
       
          
      </div>
     

    </section>
    
    <!--footer------------->
    <footer>
        <p>Copyright (C) - 2023 | Developed By <a href="">Umowa Sacco</a> </p>
    </footer>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
</body>

</html>

