<?php

$servername="localhost";
$username="root";
$psswd="";
$database="eaur";
$conn= new mysqli($servername,$username,$psswd,$database); 


if($conn->connect_error){
    die("connection fail: ".$conn->connect_error);
}
?>