<?php
$con = mysqli_connect("localhost","user","password","teste");

include 'struture/type.php';

//Create Folder
$folder = '..\backup\Database\ronaldo/';
//Case has not paste existing
if (!is_dir($folder))
mkdir($folder, 0777, true); //Create paste all
chmod($folder, 0777);//Create type Permisson paste all

$date = date('m-d-Y'); //date now
$filename = $folder."db_backup_".$date; //Concat paste, file and date now.

$handle = fopen($filename.'.sql','w+');//Open file 
fwrite($handle,$result); //write result final structure of one database 
fclose($handle);//Close file
?>
