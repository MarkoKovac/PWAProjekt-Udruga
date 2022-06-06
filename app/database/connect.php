<?php 

$servername = "localhost";
$username = "root";
$password = "";
$basename = "lepasbaza";

$conn = mysqli_connect($servername, $username, $password, $basename) or
die("Greska u spajanju s bazom." . mysqli_connect_error());

?>