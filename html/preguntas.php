<html>
<link rel="stylesheet" type="text/css" href="../css/preguntasStyle.css">
<script src="../js/jquery.js" type="text/javascript"> </script>
<link href="../images/logo1.png" rel="shortcut icon">
<head>
<title>Preguntas</title>
</head>
<body>
<center>
<img  id="titulo" src="../images/test.gif"></img>
<br>

<ul id="preguntas">
<li>¿Cuál es la molécula polar?</li>
<select id="pregunta1">
 <option value="0">Lactosa
  <option value="1">Colorantes
  <option value="0">Jabón
  <option value="0">Ninguno de los anteriores
  <option value="0">Todos los anterirores
</select>
  <br><br>

<li>¿Cuál es la molécula no polar?</li>
<select id="pregunta2">
 <option value="1">Lactosa
  <option value="0">Colorantes
  <option value="0">Jabón
  <option value="0">Ninguno de los anteriores
  <option value="0">Todos los anterirores
</select>
 <br><br>

<li>¿Cuál es la molécula anfótera?</li>
<select id="pregunta3">
 <option value="0">Lactosa
  <option value="0">Colorantes
  <option value="1">Jabón
  <option value="0">Ninguno de los anteriores
  <option value="0">Todos los anterirores
</select>
 <br><br>

<li>Una molécula polar se disolverá en una sustancia polar</li>
<select id="pregunta4">
 <option value="1">Verdadero
  <option value="0">Falso
</select>
 <br><br>

<li>Una molécula no polar se disolverá en una sustancia no polar</li>
<select id="pregunta5">
 <option value="1">Verdadero
  <option value="0">Falso
</select>
 <br><br>

<li>Suponiendo que primero usamos leche entera y después usamos leche baja en grasa ¿Qué 
diferencias esperarías en el movimiento de los colores?</li>
<select id="pregunta6">
 <option value="0">1-Ningun cambio
  <option value="0">2-Al haber menos grasas el movimiento se asimilara más al agua
  <option value="0">3-Al haber menos grasas el colorante será más lento
  <option value="0">3-Al haber menos grasas el colorante será más rápido
  <option value="1">2 y 4
  <option value="0">1 y 3
  <option value="0">Ninguna de las anteriores
  <option value="0">Todas las anteriores
</select>
 <br><br>

<li>Suponiendo que primero usamos leche light y después usamos leche entera en grasa
	¿Qué diferencias esperarías en el movimiento de los colores?</li>
<select id="pregunta7">
 <option value="0">1-Ningun cambio
  <option value="0">2-Al haber más grasas el movimiento se asimilara más al agua
  <option value="0">3-Al haber más grasas el colorante será más lento
  <option value="1">3-Al haber más grasas el colorante será más rápido
  <option value="0">2 y 4
  <option value="0">1 y 3
  <option value="0">Ninguna de las anteriores
  <option value="0">Todas las anteriores
</select>
</ul>

<input type="submit" id="menu" class="button" value="Responder	" onclick="enviar()"></input>
<p id="respuesta">	</p>
</center>

<script>
function enviar(){
var p1=parseInt(document.getElementById("pregunta1").value);
var p2=parseInt(document.getElementById("pregunta2").value);
var p3=parseInt(document.getElementById("pregunta3").value);
var p4=parseInt(document.getElementById("pregunta4").value);
var p5=parseInt(document.getElementById("pregunta5").value);
var p6=parseInt(document.getElementById("pregunta6").value);
var p7=parseInt(document.getElementById("pregunta7").value);
document.getElementById("respuesta").innerHTML=((((p1+p2+p3+p4+p5+p6+p7)/7)*100).toFixed(1)+"%");
}

</script>

</body>
</html>