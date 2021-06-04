<?php
$server="localhost";
$username="root";
$password="";
$database="letsusers";

$conn=mysqli_connect($server, $username, $password, $database);

if(!$conn)
{
    die("error".mysqli_connect_error()); 
}
?>
<!-- $sql="INSERT INTO `users` ( `first-name`, `last-name`, `email`, `user-name`, `passworsd`, `mo-number`, `Aadhar-number`) VALUES ('$fname', '$lname', '$email', '$username', '$ps', '$mobile', '$adhar')"; -->
<!-- SELECT * FROM `users` ORDER BY `users`.`user-name`='sid123' -->

