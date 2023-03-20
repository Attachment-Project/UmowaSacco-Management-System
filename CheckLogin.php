<?php
// check user login
include('db.php');

 session_start();

$email = $_POST['Email'];
$password = $_POST['psw'];

//to prevent from mysqli injection  
$email = stripcslashes($email);  
$password = stripcslashes($password);  
$email = mysqli_real_escape_string($conn, $email);  
$password = mysqli_real_escape_string($conn, $password);  

$sql = "select * from member where Email = '$email' and psw = '$password'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if ($count == 1) {
    // Set the session variable
    $_SESSION["email"] = $email;
   require('./userData/members.php');

    if($task == "Driver"){
        echo '
        <script>
        setTimeout(function () {
            alert("Login Successful");
          }, 1000);
        </script>
        ';
        header('Location:./driver/loggedin.php');
       }elseif($task == "Owner"){
        header('Location:./owner/loggedin.php');
       }else{
        header('Location:./index.html');
       }
} else {
    include('./login.php');
    echo '<script>
    document.getElementById("errmsg").innerHTML = "Incorrect email or password"; 
</script>

'; 
}
?>

