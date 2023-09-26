<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="display-4 text-center">Personal Information</h1>

        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <?php
              
                $name = "Md.Shariar Hosain Sanny";
                $age = 23; 
                $country = "Bangladesh";
                $introduction = "I am Md.Shariar Hosain Sanny. I am a simple , creative, enthusiastic and fun-loving person. I always like to create something on my own which is helpful for others.";

               
                echo "<h2 class='card-title'>$name</h2>";
                echo "<p class='card-text'>Age: $age</p>";
                echo "<p class='card-text'>Country: $country</p>";
                echo "<p class='card-text'>$introduction</p>";
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
