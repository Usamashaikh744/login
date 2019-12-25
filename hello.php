<?php
include("connection.php");
$query = "INSERT INTO SIGN_UP VALUES ('usaid','usaid98@gmail.com','12345','12345')";
mysqli_query($con, $query);
?>