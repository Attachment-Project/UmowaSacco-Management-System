
<?php

include('db.php');

//checking if email and id exists
    $email = $_POST['email'];
    $IdNo = $_POST['IdNo'];

       //to prevent from mysqli injection  
       $email = stripcslashes($email);  
       $email = mysqli_real_escape_string($conn, $email); 
       $IdNo = stripcslashes($IdNo);  
       $IdNo = mysqli_real_escape_string($conn, $IdNo);   
         
       
     
       $sql = "SELECT * FROM members WHERE Email = '$email' OR IDNo = '$IdNo'";

      

       $result = mysqli_query($conn, $sql); 
      
    

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       


       $count = mysqli_num_rows($result); 
         
       

         //if there is one common email or id
       if($count > 0){
    
            include('register.php');
            echo '<script>
    
            document.getElementById("errmsg").innerHTML = "Uname/Email Exists 2, ";
            
        </script>
        
        '; 

        
         
}  
       else{ 
        // username and email not found, so send data to db 
    //getting data from the registration form

    
    session_start();

$fname = $_POST['fname'];
$uname = $_POST['Uname'];
$dname = $_POST['Dname'];
$pname = $_POST['Pname'];
$kcse = $_POST['KCSE'];
$status = $_POST['Status'];
$high_school = $_POST['Hname'];
$cname = $_POST['Cname'];
$email = $_POST['Email'];
$pno = $_POST['pno'];
$pssw = $_POST['pssw'];
$cpssw = $_POST['cpssw'];
$gender = $_POST['gender'];

if( isset($_FILES['pic'])){
    $pic_name = $_FILES['pic']['name'];
    $temp_name = $_FILES['pic']['tmp_name'];
    
    $img_ex = pathinfo($pic_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path = 'profileImg/'.$new_img_name;
    move_uploaded_file($temp_name, $img_upload_path);
}

// Insert data into database
$sql_send = "INSERT INTO reg (fname, Uname, Dname, Pname, KCSE, Highschool, theStatus, Cname, Email, pno, pssw, cpssw, gender, pic)
        VALUES ('$fname', '$uname', '$dname', '$pname', '$kcse', '$high_school', '$status', '$cname', '$email', '$pno', '$pssw', '$cpssw', '$gender', '$new_img_name')";

if (mysqli_query($conn, $sql_send)) {
   $_SESSION["uname"] = $uname;
    header('Location: ./dashboard.php');
    //we can add a back to login instead of going direct to dashboard
} else {
    echo "<div class='form'>
    <h3>Required fields are missing.</h3><br/>
    <p class='link'>Click here to <a href='register.html'>registration</a> again.</p>
    </div>";
}

mysqli_close($conn);
        }



?>
