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
    
 //Delete record using mysqli object oriented way  prepared statemtements

 $id = 21;
 $sql = "DELETE FROM books where id = ?";

 $statement = $conn->prepare($sql);
 $statement->bind_param('i', $id);
 
 if($statement->execute()) {
     echo "<br />Record delete successfully.";
 } else {
     echo "<br/>Error in record deletion. Please try again";
 }
  