<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$sql = "INSERT INTO students (name, email, course) 
        VALUES ('$name', '$email', '$course')";

$conn->query($sql);

header("Location: index.php");
?>