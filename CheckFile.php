<?php
include 'upload.php';
if (isset($_FILES["fileToUpload"])) {
    echo "File Name: " . $_FILES["fileToUpload"]["name"] . "<br>";
    echo "File Type: " . $_FILES["fileToUpload"]["type"] . "<br>";
    echo "Temp Location: " . $_FILES["fileToUpload"]["tmp_name"] . "<br>";
    echo "Error Code: " . $_FILES["fileToUpload"]["error"] . "<br>";
    echo "File Size: " . $_FILES["fileToUpload"]["size"] . " bytes<br>";
}
