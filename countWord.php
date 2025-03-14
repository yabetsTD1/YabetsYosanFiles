<?php
$content =file_get_contents("data.txt");
echo str_word_count($content);
copy("data.txt","dest.txt");