<?php

//som klasse:


class Dataframe
{   

        public $data = [];
        public $file;
        public $header;
     
        //initializes by conveerting csv to assoc
        public function __construct($fileName) 
        {   

            
            // applies str_getcsv to every single line in the file 
            $rows = array_map('str_getcsv', file($fileName));

            //pops element at index 0
            $header = array_shift($rows);

            //keep it for later LOL
            $this->header = $header;
            
            // seeing how there are just as many columns as there are
            // types of fields, you can use the array above as keys
            // for the actual row data, using array_combine

            foreach($rows as $row) {
                array_push($this->data, array_combine($header, $row));
                
            }

            //set the file for the object
            $this->file = $fileName;
            
        }

        // sjekk at carnum i owner.csv faktisk finnes i cars.csv

        public function validateKey($key, $cars, $owners){
            
            $mismatch = [];
            
            $value = $key;
            
            foreach($cars as $car){
                
                    
                if($car["carnum"] === $value){
                array_push($mismatch, $car["carnum"]);
                }
                
            }
            
            if(count($mismatch) === 0){
                echo "key does not exist";
            }
            else {
                echo "key found!";
                print_r($mismatch);
            }
            
        
        }
      
} 






// // som funksjoner:

// function dataFrame($fileName){
//     $finalArr=[];

//     $data = array_map('str_getcsv', file($fileName));
//     // shift
//     $header = array_shift($data);
    
//     // row
//     $rows = array_slice($data, 0);
    
    
//     foreach($rows as $row) {
//         array_push($finalArr, array_combine($header, $row));
//     }
    
//     return $finalArr;
    
// }

// function getMatch($crit, $file1, $file2){

//     $count = 0;

//     foreach($file1 as $owner){
//         foreach($file2 as $car){
            
            
//             if($car[$crit] === $owner[$crit]){
//                 if($owner["name"] === "jayLeno"){
                    
                    
                    
//                     if($car["brand"] === "porche"){
//                         $count +=1;
                        
                        
//                     }
                    
//                 }
                
                
              
//             }
        
//         }
//     }
//     echo $count;

// }

 ?>