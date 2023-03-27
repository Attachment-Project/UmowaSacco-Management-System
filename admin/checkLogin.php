<?php
// check user login
include('../db.php');


$username = $_POST['Uname'];
$password = $_POST['psw'];

//to prevent from mysqli injection  
$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($conn, $username);  
$password = mysqli_real_escape_string($conn, $password);  

$sql = "select * from admin where Username = '$username' and Password = '$password'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if ($count == 1) {

    echo "<script>alert('Login Success'); window.location.href='./loggedin.php';</script>";
        
} else {
    include('./index.php');
    echo '<script>
    document.getElementById("errmsg").innerHTML = "Incorrect Uname or password"; 
</script>

'; 
}
?>

