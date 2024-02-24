<?php
$host="localhost";
$user="root";
$pass="";
$db="studentportalproject";

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){
    echo "connection successful";
}else{
    echo "connection error: ". mysqli_error($conn);
}


?>