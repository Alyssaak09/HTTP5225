<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SQL & MYSQL</title>
    <style>
        .Color{
            width: 100%;
            height: 50px;

        }
    </style>
</head>
<body>
    <?php 
      $connect = mysqli_connect('localhost', 'root', 'root', 'colors');

      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }

      $query = 'SELECT * FROM colors';
      $colors = mysqli_query($connect, $query);

      foreach ($colors as $color){
        echo  '<div class="Color" style="background: ' . $color["Hex"] . ';">' . $color["Name"] . '</div>';

      }

    
    ?>

   

</body>
</html>