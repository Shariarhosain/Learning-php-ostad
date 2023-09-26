<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);
function removeEven($numbers){
    foreach($numbers as $value){
        if($value % 2 == 0){
            unset($numbers[$value]);
        }
    }
    return $numbers;
}
print_r(removeEven($numbers));
