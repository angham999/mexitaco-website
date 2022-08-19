<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "MexiTaco_Register";

// Create connection
$conn= new mysqli($servername,$username,$password,$dbname);

// Check connection

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
// Create database
$sql="CREATE DATABASE MexiTaco_Register";
if($conn->query($sql) === TRUE){
	echo "Database created successfully";
}
else {
	echo "Error creating database: ".$conn->error;
}

// sql to create table
$sql = "CREATE TABLE User (
    user_name VARCHAR(30) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL,
	notif VARCHAR(30) NOT NULL,
	rem VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
/*
$submit = $_POST['submit'];

if(isset($submit)){
    $user_name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['E-mail'];
	$notif = $_POST['notify'];
	$rem = $_POST['remember'];

	$result = mysqli_query($conn,"INSERT INTO User VALUES('$user_name','$pass','$email','$notif','$rem')");

    if(!$result){
        echo "Error in insert";
    }
    else {
        echo "Records added successfully.";
    }
}
else{
	echo "ERROR REGISTER";
}
*/
$conn->close();
?>
