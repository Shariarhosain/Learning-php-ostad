<?php

//make a function of checkbox if it is checked then other one disable
function selection($inputiteam){
  foreach($inputiteam as $iteam){
    printf('<option value="%s">%s</option>\n',strtolower($iteam),ucfirst($iteam));
  }
}

function avagraAndgrade($grade1,$grade2,$grade3){
 if(isset($_REQUEST['grade1']) && isset($_REQUEST['grade2']) && isset($_REQUEST['grade3'])){
   $grade1=$_REQUEST['grade1'];
   $grade2=$_REQUEST['grade2'];
   $grade3=$_REQUEST['grade3'];
   $total=$grade1+$grade2+$grade3;
   $avagra=$total/3;
   if($avagra>=80){
    $grade="A";
   }elseif($avagra>=70){
     $grade="B";
   }elseif($avagra>=60){
     $grade="C";
   }elseif($avagra>=50){
     $grade="D";
   }elseif($avagra>=40){
     $grade="E";
   }else{
     $grade="F";
   }
  printf("Your total marks is %s and your avagra is %.2f and grade is %s ",$total,$avagra,$grade);

 }
}

function oddEven($number){
  if(isset($_REQUEST['number'])){
    $number=$_REQUEST['number'];
    if($number%2==0){
      printf("%s is even number",$number);
    }else{
      printf("%s is odd number",$number);
    }
  }
}

function compaierNumber($number1,$number2){
  if(isset($_REQUEST['number1']) && isset($_REQUEST['number2'])){
    $number1=$_REQUEST['number1'];
    $number2=$_REQUEST['number2'];
  $result= ($number1>$number2) ? "{$number1} is biggest number" : "{$number2} is biggest number";
  printf("%s",$result);
  }
}

function calculator($number1,$number2,$calculate){
  if(isset($_REQUEST['number1']) && isset($_REQUEST['number2']) && $_REQUEST['number1'] != "" && $_REQUEST['number2'] != "" && is_numeric($_REQUEST['number1']) && is_numeric($_REQUEST['number2']))
         {
            $number1=$_REQUEST['number1'];
            $number2=$_REQUEST['number2'];
            $calculate=$_REQUEST['select1'];
            if($calculate=="add"){
              
              $add=($number1)+($number2);
              printf(" %s + %s = %.2f",$number1,$number2, $add);
            }
            elseif($calculate=="sub"){
              $sub=($number1)-($number2);
              printf(" %s - %s = %.2f",$number1,$number2, $sub);
            }
            elseif($calculate=="mul"){
              $mul=($number1)*($number2);
              printf(" %s * %s = %.2f",$number1,$number2, $mul);
            }
            else{
              if($number2==0){
                echo "can not divide by zero";
              }
              else{
                $div=($number1)/($number2);
                printf(" %s / %s = %.2f",$number1,$number2, $div);
              }
            }

         }
}



