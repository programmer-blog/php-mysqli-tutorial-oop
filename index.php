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
    
//Insert into books table using mysqli's query method

$sql = "INSERT INTO books (`title`, `description`, `author_name`, `price`, `ISBN`, `category`, 
`date_created`, `date_published`) 

VALUES ('Data Structures for beginners', 'A book on data structures for beginners', 'author', '50', 
'123-ABZ-980', 'programming', '2022-12-18 16:56:35', '2022-12-18 00:00:00') ";

if($conn->query($sql)) {
    echo "<br /> New Record Created successfully";
} else {
    echo "Error in creating new record. ".$conn->error;
}