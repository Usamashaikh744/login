<?php
    include("connection.php");
    error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h1>Sign Up Form</h1>
    <form action="" method="POST">
    <input type="name" name="User Name"  placeholder="Your name"><br><br>
    <input type="email" name="Email" placeholder="Your email"><br><br>
    <input type="password" name="Password" placeholder="Your password"><br><br>
    <input type="password" name="Confirm Password" placeholder="confirm password"><br><br>
    <input type="submit" name="submit" value="submit"/>
    </form> 
<?php 
if($_POST['submit'])
   $us= $_POST['User_Name'];
    $em= $_POST['Email'];
    $ps= $_POST['Password'];
    $p= $_POST['Confirm_Password'];
    if($us!="" && $em!="" && $ps!="" && $p!=""){
        $query = "INSERT INTO `sign_up`(`User_Name`, `Email`, `Password`, `Confirm_Password`) VALUES ('$us','$em','$ps','$p')";
        mysqli_query($con, $query);

            echo "submited!!";

    }else{
        echo "all required !!";
    }


?>
</body>
</html>
