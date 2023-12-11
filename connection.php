<?php
$server = "localhost";
$username="root";
$password="";
$dbname="supp";
$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    echo("connection terminated");
}

?>