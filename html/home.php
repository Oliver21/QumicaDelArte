<?php 
session_start();
if(@!$_SESSION['user']){
	header("Location:../Html/login.php");
}
?>

<html>
<link rel="stylesheet" type="text/css" href="../css/homeStyle.css">
<script src="../js/jquery.js" type="text/javascript"> </script>
<link href="../images/logo1.png" rel="shortcut icon">
<head>
<title>Qumica del Arte</title>
</head>
<body>
	<center>
	<img  id="texto" src="../images/texto4.png" onclick="homef()"></img> <br>
		<img  id="pint" src="../images/atomo.png"></img>
	<p id="intro">Bienvenido a la "Química del Arte", en la parte inferior de esta página encontraras distintos botones que te
	permitiran acceder a una leccion sobre la química, cuestionarios y una simulacion sobre el arte y la química </p>
	<br><br>
<!-- <input type="submit" id="leccion" class="button" value="Aprende" onclick="login()"></input>
	<input type="submit" id="preguntas" class="button" value="Preguntas" onclick="login()"></input>
	<input type="submit" id="simulacion" class="button" value="Simulación" onclick="login()"></input> -->
	<img  id="aprende" src="../images/librosb.png" onclick="aprendef()"></img>
	<img  id="test" src="../images/test2b.png" onclick="testf()"></img>
	<img  id="simulacion" src="../images/laptop3b.png" onclick="simulacionf()"></img>
	<p id="aprendeT">APRENDE</p>
	<p id="testT">EXAMEN</p>
	<p id="simulacionT">SIMULACIÓN</p>
</center>
 <!--<video id="video" autoplay="autoplay" preload="auto" loop="loop">
         <source src="../images/tinta.mov"> type="video/mp4"></source>
    </video> -->
    <div class="BarraInferior">Desarrollado por: Oliver Martínez, Diego Mayorga, Hector Hernandez, Salvador García, Ricardo Alva, José Higuera</div>
<img  id="cuadro" src="../images/cuadro.png"></img>
 <div class="BarraSuperior"></div>
 <img  id="logout" src="../images/logout2.png" onclick="logoutf()"></img>


<script type="text/javascript">
	function logoutf(){
        window.location.replace("../php/logoutService.php");
    }
    function aprendef(){
        window.location.replace("../html/lecciones.php");
    }
    function testf(){
        window.location.replace("../html/preguntas.php");
    }
    function simulacionf(){
        window.location.replace("../html/logoutService.php");
    }
    function homef(){
        window.location.replace("../html/home.php");
    }
</script>



</body>

<body style="overflow-y:hidden; overflow-x:hidden"></body>
</html>