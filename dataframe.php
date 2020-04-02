<?php
function dataFrame($fileName){
    $finalArr=[];

    $data = array_map('str_getcsv', file($fileName));
    // shift
    $header = array_shift($data);
    
    // row
    $rows = array_slice($data, 0);
    
    
    foreach($rows as $row) {
        array_push($finalArr, array_combine($header, $row));
    }
    
    return $finalArr;
    
}

function getMatch($crit, $file1, $file2){

    $count = 0;

    foreach($file1 as $owner){
        foreach($file2 as $car){
            
            
            if($car[$crit] === $owner[$crit]){
                if($owner["name"] === "jayLeno"){
                    
                    
                    
                    if($car["brand"] === "porche"){
                        $count +=1;
                        
                        
                    }
                    
                }
                
                
              
            }
        
        }
    }
    echo $count;

}


?>