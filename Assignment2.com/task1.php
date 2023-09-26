<?php


function evenFor($start,$end,$increment){
    if($start==1){
        $start=2;
    }
    for($i=$start;$i<=$end;$i+=$increment){
      if($i%2==0){
        echo $i." ";
      }
            
        
    }
}
function evenWhile($start,$end,$increment){
  if($start==1){
      $start=2;
  }
  while($start<=$end){
      if($start%2==0){
          echo $start." ";
      }
      $start+=$increment;
  }
}
function evenDoWhile($start,$end,$increment){
  if($start==1){
      $start=2;
  }
  do{
      if($start%2==0){
          echo $start." ";
      }
      $start+=$increment;
  }while($start<=$end);
}
echo "Even numbers between 1 to 20 are using for loop : ";
evenFor(1,20,2);
echo PHP_EOL;
echo "Even numbers between 1 to 20 are using while loop : ";
evenWhile(1,20,2);
echo PHP_EOL;
echo "Even numbers between 1 to 20 are using do while loop : ";
evenDoWhile(1,20,2);



