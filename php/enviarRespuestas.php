<?php 
header('Content-type: application/json');
	$userName = $_POST['username'];
	$preg1 = $_POST['pr1'];
	$preg2 = $_POST['pr2'];
	$preg3 = $_POST['pr3'];
	$preg4 = $_POST['pr4'];
	$preg5 = $_POST['pr5'];
	$preg6 = $_POST['pr6'];
	$preg7 = $_POST['pr7'];
	$califi = $_POST['calif'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quimica";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
	    header('HTTP/1.1 500 Bad connection to Database');
	    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	}
	else
	{	
		$sql = "INSERT INTO examenes (username, p1, p2, p3, p4, p5, p6, p7, calificacion) VALUES ('$userName', '$preg1', '$preg2', '$preg3', '$preg4', '$preg5', '$preg6', '$preg7', '$califi')";
	    	if (mysqli_query($conn, $sql)) 
	    	{	
			    echo json_encode("Enviado");
			} 
			else 
			{
				header('HTTP/1.1 500 Bad connection, something went wrong while saving your data, please try again later');
			    echo "Error: " . $sql . "\n" . mysqli_error($conn);
			}
			 $conn->close();
	}
	?>
