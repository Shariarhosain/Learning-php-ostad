<?php

$studentGrades = [
    ['math'=>90, 'English'=>90,'Science'=> 70],
    ['math'=>80, 'English'=>60,'Science'=> 90],
    ['math'=>70, 'English'=>80,'Science'=> 90]

];
function calculateAverage($studentGrades){
    foreach($studentGrades as $key => $value){
         
        $avg= array_sum($value)/count($value);
     printf("The average grade for student %d is %.2f \n",$key+1,$avg);

    }

}

calculateAverage($studentGrades);
