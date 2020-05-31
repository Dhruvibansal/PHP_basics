<?php
	
	//DATABASE INFO :
	$servername = "localhost";
	$username ="root";
	$password = "";
	$dbname = "form";

	//create and check DB connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		
		die("connection failed :" . $conn->connect_error);

	}

	//create variables 
	$title = $_POST["title"];
	$genre = $_POST["genre"];
	$rating= $_POST["rating"];

	//create SQL string

	$sql = "INSERT INTO movie (title, genre, rating) VALUES ('$title','$genre','$rating')";

	//send query, and check to see there are no errors 

	if ($conn->query($sql) == TRUE) {

		echo "New record created successfully ";
	}
	else{
		
		"Error :".$sql . "<br>". $conn->error;

	}

//close db conection
	$conn->close();

?>