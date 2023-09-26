<?php

$grades = array(85, 92, 78, 88, 95);
function sortGrades($grades){
    rsort($grades);
    print_r($grades);
}
sortGrades($grades);