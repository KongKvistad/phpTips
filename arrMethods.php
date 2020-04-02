<?php
// $cars = [
//          ["carnum", "brand", "model"],
//          ["1","toyota","hiace"],
//          ["12","ford","jayLeno"]
//         ];

// $owners = [
//            ["name", "carnum"],
//            ["eirik", "1"]
//           ];





include_once("./dataframe.php");



$owners = dataFrame("./owner.csv");
$cars = dataFrame("./cars.csv");


$result = getMatch("carnum", $owners, $cars);





//$final = array_combine($header, $row);


// foreach($cars as $car){
//     foreach($owners as $owner)
//     {

//     }
// }


//print_r($rows);




?>