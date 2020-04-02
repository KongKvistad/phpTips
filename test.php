<!-- STRATEGI FOR OPPGAVEN:

1: modeller "databasen" din. den skal være normalisert. tenk konseptuell modellering slik man lærte i database-faget;

2: lær å lese / skrive til csv. se snippets under / google "working with csv in php" eller lignende.

3: du bør ha en klasse eller i det minste en funksjon som konverterer csv-data til en nested array i PHP.
da er det lettere å jobbe med.

 -->

<?php

//enkelt lese fra csv fil

// $file_handle = fopen('./data/test.csv', 'r');


// while(!feof($file_handle))
// {
//  print_r(fgetcsv($file_handle));
// }
// fclose($file_handle);


//convertere til assoc array og stappe alt i et "parent-array"

// $parentArr = [];
// // applies str_getcsv to every single line in the file 
// $rows = array_map('str_getcsv', file('./cars.csv'));

// //pops element at index 0
// $header = array_shift($rows);

// foreach($rows as $row) {
//     array_push($parentArr, array_combine($header, $row));
// }

// foreach($parentArr as $key => $value){
//     print_r($value);
//     echo "<br>";
// }




?>


