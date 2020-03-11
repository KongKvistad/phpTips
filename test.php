<?php

//enkelt lese fra csv fil

$file_handle = fopen('./data/test.csv', 'r');


while(!feof($file_handle))
{
 print_r(fgetcsv($file_handle));
}
fclose($file_handle);


//convertere til assoc array og stappe alt i et "parent-array"

$parentArr = [];
// applies str_getcsv to every single line in the file 
$rows = array_map('str_getcsv', file('./data/test.csv'));

//pops element at index 0
$header = array_shift($rows);

foreach($rows as $row) {
    array_push($parentArr, array_combine($header, $row));
}

foreach($parentArr as $key => $value){
    print_r($value["navn"]);
    echo "<br>";
}


?>


