<?php
$conn = new mysqli("localhost","root",'','test');

$stat = $conn->prepare("UPDATE yabets SET id=1 where name = 'Naol'");
// $stat->bind_param("sss",$name,$sex,$phone);
$name = "Naol";
$sex = "M";
$phone = "0912997390";

$stat->execute();
$stat->close();
$conn->close();