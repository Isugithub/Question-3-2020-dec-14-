<?php
$name = $_FILES['f']['name'];//In the php you should use html's name in this case input file name is f
$size = $_FILES['f']['size'];//we can get the file size in bye
$type = $_FILES['f']['type'];
//we can get the file type of uploaded file
//If we want to get the file content,your file type should be a text type and it should be in your folder
$con = file_get_contents($name);
echo 'Name: '.$name.'<br>';
echo 'Size: '.$size.'<br>';
echo 'Type: '.$type.'<br>';
echo 'Content: '.$con.'<br>';
?>