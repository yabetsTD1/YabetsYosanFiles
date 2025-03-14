<?php
$dir = "uploads/";
$file = $dir . basename($_FILES["File"]['name']);
$uol = 1;
$ftype = strtolower(pathinfo($file,PATHINFO_EXTENSION));
//file exist
if(file_exists($file)){
    echo "The file existed";
    $uol = 0;
}
//
$filetype = array("pig","png","jpg","pdf");
if(!in_array($ftype,$filetype)){
  echo "File is not allowed";
  $uol = 0;
}
if($uol == 1){
   if(move_uploaded_file($_FILES['File']["tmp_name"],$file)){
    echo basename($_FILES['file']['name']) . "Are sored";
   }
}