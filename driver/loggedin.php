
<?php
require_once('../userData/members.php');
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



<!-- Display the profile fields in HTML -->
<div class="drawer">
  <h2>Profile</h2>
  <img style=" border-radius: 50%; border: blue 2px solid;" height="250px" width="250px" src="../images/profileImg/<?php echo $picture; ?>" alt="Profile Picture">
  <p><b> Name:</b> <?php echo $fname; ?></p>
  <p><b>Last Name:</b> <?php echo $Lname; ?></p>
  <p> <b>Phone Number:</b> <?php echo $PhoneNumber; ?></p>
  <p><b>Email:</b> <?php echo $email; ?></p>
  <p><b>ID Number:</b> <?php echo $IDNo; ?></p>
  <p><b>Age:</b> <?php echo $Age; ?></p>
 
</div>




<script>
function toggleDrawer() {
  var drawer = document.querySelector(".drawer");
  drawer.classList.toggle("visible");
}
</script>

<style>

h1, h2 {
      color: Blue;
    }
.drawer>p{
    color: blue;
}
    .drawer {
      position: fixed;
      align-items: center;
      
      padding: 20px;
      top: 0;
      text-align: center;
      right: 0;
      width: 20%;
      place-items: center;
      height: auto;
      background-color: white;
      display: none;
      z-index: 1000;
      overflow-y: auto;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .drawer.visible {
      display: block;
    }

    .drawer-content {
      position: relative;
      margin: 50px auto;
      max-width: 600px;
      align-items: center;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .drawer-close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 1.5em;
      color: #fff;
      cursor: pointer;
    }
</style>



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
                <li><a href="#services">Services</a></li>
                <li><a href="#" onclick="toggleDrawer()"><img style=" border-radius: 50%; border: blue 2px solid;" height="50px" width="50px" src="../images/profileImg/<?php echo $picture; ?>" alt="Profile Picture"></a></li>
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
              <img src="../images/logo.png">
              <font>Daily Report</font>
              <p>Daily Report (Fare Collection, performance, daily operations and maintenance)</p>
              <!--btn--------->
              <a href="./dailyReport.php">Add Now!</a>
          </div>
          <!--box-2-------->
          <div class="box">
              <img src="../images/logo.png">
              <font>Schedules</font>
              <p>Lorem ipsum dolor sit amet.</p>
              <!--btn--------->
              <a href="./schedules.php">View Schedules!</a>
          </div>
         
          
       
          
      </div>
     

    </section>
    
    <style>
        .footer>a>img{
border-radius: 50;
height: 40px;
width: 50px;

        }
    </style>
    
    <!--footer------------->
    <footer class="footer">
        <br>
        <a target="_blank" href="https://wa.me/254743411856"><img style ="height: 50px;
            width: 50px;" src="../images/whatsapp.png"></a>&nbsp;
        <a target="_blank" href="https://www.facebook.com/emmanuel.mutua.9889"><img src="../images/fb.png"></a>&nbsp;
        <a target="_blank" href="https://twitter.com/EMM_Techprenuer"><img src="../images/twitter.png"></a>&nbsp;
        <a target="_blank" href="tel:254743411856"><img src="../images/callled.png"></a>&nbsp;
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
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/641d346f4247f20fefe7aff0/1gs919lmg';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
