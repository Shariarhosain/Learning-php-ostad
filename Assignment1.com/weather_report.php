<?php
include "function.php";
$input = ['farenheit', 'celsius'];
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">

    <div class="row">

      <div class="col-4 mx-auto padd">

        <form method="GET" action="" class="fom">
          <div class="mb-3">
            
            <input type="text" name="temperature" class="form-control" placeholder="Enter The temperature in °C ">

          </div>
     
        
                    <button type="submit" class="btn btn-dark d-flex mx-auto ">Submit</button>
 
        
          
         <?php
          if(isset($_REQUEST['temperature']) && $_REQUEST['temperature'] != "" && is_numeric($_REQUEST['temperature'])){
            $temp=intval(filter_input(INPUT_GET, 'temperature', FILTER_SANITIZE_STRING));
            if($temp>=40 && $temp<=50){
              echo "It is too hot";
            }
            elseif($temp>=35 && $temp<40){
              echo "The weather is little hot";
            }
            elseif($temp>=20 && $temp<35){
              echo "The weather is warm";
            }
            elseif($temp>=10 && $temp<20){
              echo "The weather is cold";
            }
            elseif($temp>=0 && $temp<10){
              echo "It is freezing";
            }
            else{
              echo "Enter the temperature in °C";
            }
          
            
          }
         
         
         ?>
        </form>
        </div>

      </div>

    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>