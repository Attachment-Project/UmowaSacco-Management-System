
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
    
            document.getElementById("errmsg").innerHTML = "IdNo or Email exists";
            
        </script>
        
        '; 

        
         
}  
       else{ 
        // id and email not found, so send data to db 
    //getting data from the registration form

    
    session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$IdNo = $_POST['IdNo'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phonenumber = $_POST['pnumber'];
$psw = $_POST['psw'];
$task = $_POST['task'];

if($task == "Driver"){
    $salary = 30000;
}elseif($task == "Owner"){
    $salary = 80000;
}else{
    $salary = 0; 
}


$Date = new DateTime();
$regDate = $Date->format('Y-m-d');





if( isset($_FILES['profilepic'])){
    $pic_name = $_FILES['profilepic']['name'];
    $temp_name = $_FILES['profilepic']['tmp_name'];
    
    $img_ex = pathinfo($pic_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path = 'profileImg/'.$new_img_name;
    move_uploaded_file($temp_name, $img_upload_path);
}

// Insert data into database
$sql_send = "INSERT INTO members (FirstName, LastName, IDNo, Age, Sex, Email, PhoneNumber, psw, task, Salary, RegistrationDate, ProfilePicture)
        VALUES ('$fname', '$lname', '$IdNo', '$age', '$gender', '$email', '$phonenumber', '$psw', '$task', '$salary', '$regDate','$new_img_name')";

include('db.php');
if (mysqli_query($conn, $sql_send)) {
   $_SESSION["fname"] = $fname;
    header('Location: ./dashboard.php');
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
