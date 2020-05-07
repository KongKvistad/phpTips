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



$cars = new DataFrame("./cars.csv");

$owners = new DataFrame("./owner.csv");

$ownerData = $owners->data;
$carData = $cars->data;


$cars->validateKey("28", $carData, $ownerData);







//print_r($rows);




?>