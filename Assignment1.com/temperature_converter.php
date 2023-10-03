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
            
            <input type="text" name="temperature" class="form-control" placeholder="Enter The temperature ">

          </div>
     
         <select class="form-select" aria-label="Default select example" name="select">
            
                        <?php selection($input); ?>
                    </select>
                    <button type="submit" class="btn btn-dark d-flex mx-auto ">Submit</button>
 
        
          
         <?php
         if(isset($_REQUEST['temperature']) && $_REQUEST['temperature'] != "" && is_numeric($_REQUEST['temperature']))
         {
            $temperature=(filter_input(INPUT_GET, 'temperature', FILTER_SANITIZE_STRING));
            $input=$_REQUEST['select'];
            if($input=="farenheit"){
              
              $farenheit=(($temperature)*9/5)+32;
              printf(" %s °C temperature is equal to: %.2f °F",$temperature, $farenheit);
            }
            else{
              $celsius=(($temperature)-32)*5/9;
              printf(" %s °F temperature is equal to: %.2f °C",$temperature, $celsius);
            }
         }
         else{
            echo "Please Enter the temperature";
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