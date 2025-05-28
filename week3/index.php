<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    
<?php
date_default_timezone_get();

$time = rand(1,23);
$breakfast = "Breakfast";
$lunch = "Lunch";
$dinner = "Dinner";


if ($time > 5 && $time < 9){
    echo $breakfast;
}
elseif($time > 12 && $time < 14){
    echo $lunch;
}
elseif($time > 19 && $time < 21){
    echo $dinner;
}
else{
 echo "No feed";
}

echo "<br><br><br>";

$number = rand(1,1000);

if ($number % 3 == 0){
    echo "fizz";
}
elseif($number % 5 == 0){
    echo "buzz";
}
elseif($number % 3 == 0 && $number % 5 == 0){
    echo "fizzbuz";
}
else{
    echo $number;
}


?>

</body>
</html>