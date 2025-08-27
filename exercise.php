<?php 

// 
$developers = [
    [
        "name" => "Yasin",
        "skills" => ["PHP", "Laravel", "MySql"]
    ],
    [
        "name" => "Mohamed",
        "skills" => ["React", "Node", "MongoDB"]
    ],
    [
        "name" => "Ali",
        "skills" => ["Python", "Django", "PostgreSQL"]
    ],
    [
        "name" => "Salad",
        "skills" => ["Java", "Spring", "MySQL"]
    ]
];


foreach ($developers as $developer) {
    echo "<strong>{$developer["name"]}: </strong>";

    echo "<ul>";
    foreach ($developer["skills"] as $skill) {
        echo "<li>{$skill}</li>";
    }
    echo "</ul>";
}
