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

$sql = "SELECT id, title, price, author_name, category from books order by id desc limit 5";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    echo "<h2>Books Records</h2>";
    while($row = $result->fetch_assoc()) {
        echo "<br /> ID: ".$row['id']." Book Name: ".$row['title']." Author: ".$row['author_name']." Category:".$row['category'];
    }
} else {
    echo "No Record Found";
}
