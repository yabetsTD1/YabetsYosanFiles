<?php
$file = fopen("data.txt",'r');

for($i = 0; $i < 10&&!feof($file);$i++){
    echo fgetc($file);
}
fclose($file);
