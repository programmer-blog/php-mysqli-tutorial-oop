<?php 

//connect to mysql database

$host = "localhost";
$username = "root";
$password = "";
$dbanme = 'dbbookstore';

$conn = new mysqli($host, $username, $password, $dbanme);

if($conn->connect_error) {
    echo "<br />Database connection failed. ". $conn->connect_error;
} else {
    echo "Connected to database successfully.";
}

// Add an SQL query to insert a new record to the data base 

$sql = "INSERT INTO books (`title`, `description`, `author_name`, `price`, `ISBN`, `category`, 
`date_created`, `date_published`) VALUES (?, ? ,?, ?, ?, ?, ?, ?) ";

$title = 'Data Structures for beginners';
$desc = 'A book on data structures for beginners';
$author = 'author'; 
$price = '50.0';
$isbn = '123-ABZ-980'; 
$cateory = 'programming';
$created = '2022-12-18 16:56:35';
$published = '2022-12-18 00:00:00';

//Prepare SQL and create statement

$stmt = $conn->prepare($sql);

//bind the parameter value
$stmt->bind_param('sssdssss', $title, $desc, $author, $price, $isbn, $cateory, $created, $published);

// Execute the query
if($stmt->execute()) {
    echo "<br />New record inserted successfully";
} else {
    echo "<br />An error occured. Please try again";
}

