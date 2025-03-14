<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "love";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "ALTER TABLE LOVESTORY CHANGE ID IDENTTY INT";
 $result =$conn->query($sql);
 if(!$result){
    die("Connection Problem");
 }
?>
