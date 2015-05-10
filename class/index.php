<?php
require("lesson.php");
require("teacher.php");
$db = new mysqli("localhost", "Patryk", "123", "tebedu");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$lekcja = new Lesson($db);
var_dump($lekcja->getall());

$nauczyciel = new Teacher($db);
$nauczyciel->add("jan","sobieski");
?>