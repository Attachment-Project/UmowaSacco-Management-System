<?php
// Connect to the database
$host = 'localhost'; // Host name
$user = 'root'; // Mysql username
$pass = ''; // Mysql password
$db_name = 'umowasacco'; // Database name

    $conn = mysqli_connect($host, $user, $pass, $db_name);

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        header('Location: index.html');
    }

   
?>
