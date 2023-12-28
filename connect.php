<?php
header('location:index.php?Thank you for your message');
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,'test');
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$reg =" insert into cyw(Name , Email , Message) values('$Name' , '$Email' , '$Message')";
    mysqli_query($conn, $reg);     
?>