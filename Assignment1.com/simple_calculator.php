<?php
include "function.php";
$calculate = ['add', 'sub', 'mul', 'div'];
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
            
            <input type="text" name="number1" class="form-control" placeholder="Enter The first  number ">

          </div>
          <div class="mb-3">
            
            <input type="text" name="number2" class="form-control" placeholder="Enter The  Second number ">

          </div>
     
         <select class="form-select" aria-label="Default select example" name="select1">
            
                        <?php selection($calculate); ?>
                    </select>
                    <button type="submit" class="btn btn-dark d-flex mx-auto ">Submit</button>
 
        
          
         <?php
         calculator((float)filter_input(INPUT_GET, 'number1', FILTER_SANITIZE_STRING),(float)filter_input(INPUT_GET, 'number2', FILTER_SANITIZE_STRING),(string)filter_input(INPUT_GET, 'select1', FILTER_SANITIZE_STRING));
         
         
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