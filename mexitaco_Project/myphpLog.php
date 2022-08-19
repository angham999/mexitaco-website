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

$submitLOG = $_POST['submit'];
if(isset($submitLOG)){

    $user_name = $_POST['name'];
    $pass = $_POST['pass'];

    $sql = "SELECT username, pass FROM User WHERE user_name = $user_name";

    if (!$sql){
        echo "ERROR select";
    }
    else{
        echo "Login successfully.";
    }
}
else{
	echo "ERROR LOGIN";
}


$conn->close();
?>