	<?php
	session_start();
	header('Content-type: application/json');
	$numerito=$_POST['numero'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quimica";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) 
	{
	    header('HTTP/1.1 500 Bad connection to Database');
	    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	}
		else
	{	

		$sql = "SELECT * FROM examenes";    	
		    	

		$result = $conn->query($sql);
			if($result->num_rows == 0){
				echo json_encode("No hay examenes");
			} else {
				//echo json_encode("Si hay comentarios");
				for ($i=0; $i<$result->num_rows; $i++) {
				$row=$result->fetch_assoc();
		    	$response[$i]=array('usuarioC' =>$row['username'],
		    					'pregunta1'=>$row['p1'],
		    					'pregunta2'=>$row['p2'],
		    					'pregunta3'=>$row['p3'],
		    					'pregunta4'=>$row['p4'],
		    					'pregunta5'=>$row['p5'],
		    					'pregunta6'=>$row['p6'],
		    					'pregunta7'=>$row['p7'],
		    					'calif'=>$row['calificacion'],);
		    	
		    	}

		    	echo json_encode($response[$numerito]);
			}
		
	} 

?>