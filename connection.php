<?php 
    $host='localhost';
    $user='root';
    $pass='';
    $db='sql';
    
    $con=mysqli_connect($host,$user,$pass,$db);
    if ($con){
    echo '';
    } else{
    die("Connection failed: " . mysqli_connect_error());
}
?>