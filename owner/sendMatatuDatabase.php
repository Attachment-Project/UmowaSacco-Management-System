
<?php

include('../db.php');

//checking if matatu exists
    $NumPlate = $_POST['NumPlate'];

       //to prevent from mysqli injection  
       $NumPlate = stripcslashes($NumPlate);  
       $NumPlate = mysqli_real_escape_string($conn, $NumPlate);   
         
       
     
       $sql = "SELECT * FROM Matatus WHERE NumPlate = '$NumPlate'";

      

       $result = mysqli_query($conn, $sql); 
      
    

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       


       $count = mysqli_num_rows($result); 
         
       

         //if there is one common email or id
       if($count > 0){
    
            include('./addMatatu.php');
            echo '<script>
    
            document.getElementById("errmsg").innerHTML = "Matatus exists";
            
        </script>
        
        '; 

        
         
}  
       else{ 
       //no matatu found

    
    session_start();

$OwnerId = $_POST['OwnerId'];
$NumPlate = $_POST['NumPlate'];
$RouteFrom = $_POST['RouteFrom'];
$RouteTo = $_POST['RouteTo'];
$DriverId = $_POST['driverId'];
$MatatuCapacity = $_POST['matatuCapacity'];


$Date = new DateTime();
$regDate = $Date->format('Y-m-d');





if( isset($_FILES['InsurancePic'])){
    $pic_name = $_FILES['InsurancePic']['name'];
    $temp_name = $_FILES['InsurancePic']['tmp_name'];
    
    $img_ex = pathinfo($pic_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path = 'InsurancePic/'.$new_img_name;
    move_uploaded_file($temp_name, $img_upload_path);
}

// Insert data into database
$sql_send = "INSERT INTO Matatus (OwnerId, NumPlate, RouteFrom, RouteTo, DriverId, MatatuCapacity, RegistrationDate, InsurancePicture)
        VALUES ('$OwnerId', '$NumPlate', '$RouteFrom', '$RouteTo', '$DriverId', '$MatatuCapacity','$regDate','$new_img_name')";

include('../db.php');
if (mysqli_query($conn, $sql_send)) {
   $_SESSION["OwnerId"] = $OwnerId;

 header('Location: ./loggedin.php');

echo '
<script>
    alert("Matatu Registration Successful");
</script>
';  
    //we can add a back to login instead of going direct to dashboard
} else {
    echo "<div class='form'>
    <h3>Required fields are missing.</h3><br/>
    <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
    </div>";
}

mysqli_close($conn);
        }



?>
