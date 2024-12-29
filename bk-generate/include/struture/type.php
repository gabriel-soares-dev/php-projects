<?php
//structure for generate database
$tables = array();

//Show tables all of Database insert
$query = mysqli_query($con, 'SHOW TABLES');
while($row = mysqli_fetch_row($query)){
     $tables[] = $row[0];
}

//create variable result 
$result = "";
//iteraring and getting table's 
foreach($tables as $table){
$query = mysqli_query($con, 'SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($query);
//Concat structure and add command SQL case exist table on database
$result .= 'DROP TABLE IF EXISTS '.$table.';';
$row2 = mysqli_fetch_row(mysqli_query($con, 'SHOW CREATE TABLE '.$table));
$result .= "\n\n".$row2[1].";\n\n";


//Final result structure send add to file
for ($i = 0; $i < $num_fields; $i++) {
while($row = mysqli_fetch_row($query)){
   $result .= 'INSERT INTO '.$table.' VALUES(';
    for($j=0; $j<$num_fields; $j++){
       $row[$j] = addslashes($row[$j]);
       $row[$j] = str_replace("\n","\\n",$row[$j]);
       if(isset($row[$j])){
       $result .= '"'.$row[$j].'"' ; 
    }else{ 
      $result .= '""';
    }
    if($j<($num_fields-1)){ 
      $result .= ',';
    }
    }
    $result .= ");\n";
}
}
$result .="\n\n";
}

