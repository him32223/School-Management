<?php
session_start();
$servername = "localhost";
$username = "id14599019_him32223";
$password ="G)usF\DH+-a1F2D^";
$database ="id14599019_school";

//Create connection
$conn = new mysqli($servername,$username,$password,$database);

//Check connection
if($conn -> connect_error){
	die("Connection failed:".$conn ->connect_erro);
}
?>