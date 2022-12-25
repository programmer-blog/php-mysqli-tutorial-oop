<?php 

//connect to mysql database

$host = "localhost";
$username = "root";
$password = "";
$dbanme = 'dbbookstore';

$conn = new mysqli($host, $username, $password, $dbanme);

if($conn->connect_error) {
    echo "Database connection failed. ". $conn->connect_error;
} else {
    echo "Connected to database successfully.";
}
    
$sql =  "UPDATE `books` SET `title`= ?,`price`=? WHERE id = ?";

$title = 'Intorduction to Data Structures and Algorithms';
$price = 45.99;
$id = 21;

$stmt = $conn->prepare($sql);
$stmt->bind_param('sdi', $title, $price, $id);

//Execute the query
if($stmt->execute()) {
    echo "<br />The books data is updated successfully.";
} else {
    echo "An error occured. Please try again.";
}

