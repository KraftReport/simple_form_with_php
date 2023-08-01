<?php 

$con = new mysqli('localhost','root','','simpleform');

if(!$con){
    die(mysqli_error($con));
} 

?>