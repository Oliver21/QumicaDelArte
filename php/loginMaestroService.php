<?php
	session_start();
	header('Content-type: application/json');
	$usuario = $_POST['username'];
	$pass = $_POST['userPassword'];


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
		$sql = "SELECT username, firstName, lastName, mail FROM admin WHERE username = '$usuario' AND pass = '$pass'";
		$result = $conn->query($sql);

		//echo $result->num_rows;
		if ($result->num_rows > 0)
		{

		    $row=$result->fetch_assoc();
		    $response=array('usuario' =>$row['username'],
		    				'name' =>$row['firstName'],
		     				'last' =>$row['lastName'],
		     				'email' =>$row['mail'],
		     );
		    //$_SESSION['user']=$usuario;
		    $_SESSION['user']=$response['usuario'];
		    $_SESSION['name']=$response['name'];
		    $_SESSION['last']=$response['last'];
		    $_SESSION['email']=$response['email'];
		    //echo json_encode($response);
		     echo json_encode($response);
		     //return $response;
		}
		else
		{
	    	header('HTTP/1.1 406 Incorrect User or Password');
	        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
		 $conn->close();
	} 

?>
