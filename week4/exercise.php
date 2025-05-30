<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();

for ($i = 0; $i < count($users); $i++) {
    echo $users[$i]['id'] . "<br>";
    echo $users[$i]['name'] . "<br>";
    echo $users[$i]['username'] . "<br>";
    echo "<a href='mailto:" . $users[$i]['email'] . "'>" . $users[$i]['email'] . "</a><br>";

   
    $address = $users[$i]['address'];

    echo $address['street'] . ", " . $address['suite'] . "<br>";
    echo $address['city'] . ", " . $address['zipcode'] . "<br><br>";
}




?>
