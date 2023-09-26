<?php
function  continueState($start,$end){
    for($i=$start;$i<=$end;$i++){
        if($i==5){
            continue;
        }
        echo $i." ";
    }
}
continueState(1,50);