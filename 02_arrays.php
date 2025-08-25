<?php 

// variables
$color1 = "red";
$color2 = "blue";
$color3 = "green";
$color4 = "yellow";

// arrays
$colors = array("red", "blue", "green", "yellow");

// associative arrays
$yasin = array(
    "name" => "Yasin Ahmed",
    "age" => 18,
    "city" => "Mogadishu"
);

// multidimensional arrays
print_r($yasin );

echo "<br>";

// accessing array elements
echo $yasin["name"] . "<br>";

// multidimensional arrays
$students = array(
    'mohamed' => array(
        "name" => "Mohamed",
        "age" => 20,
        "city" => "Mogadishu"
    ),

    'ali' => array(
        "name" => "Ali",
        "age" => 21,
        "city" => "Hargeisa"
    ),

    'salad' => array(
        "name" => "Salad",
        "age" => 22,
        "city" => "Berbera"
    )
);

print_r($students) . "<br>";

echo "<br>";

echo $students["salad"]["city"] . "<br>";