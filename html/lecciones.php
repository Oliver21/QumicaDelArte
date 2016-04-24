<html>
<link rel="stylesheet" type="text/css" href="../css/leccionesStyle.css">
<script src="../js/jquery.js" type="text/javascript"> </script>
<link href="../images/logo1.png" rel="shortcut icon">
<head>
<title>Lecciones</title>
</head>
<body>
	<center>
	<p id="intro">En este experimento se aprenderá de forma sencilla y divertida acerca de conceptos básicos de química como polaridad, solubilidad y tensión superficial. El experimento consiste en agregar gotas de colorante de comida en un recipiente con leche, poner jabón y observar lo que ocurre. Antes hay que explicar unos cuantos conceptos.</p>
	<p>Elige un concepto en la parte inferior para ver información sobre éste</p>
	<select id="concepto" onchange="cambioSemana()" class="button">
<option selected value="0">
<option value="1">Polaridad
<option value="2">Tension Superficial
<option value="3">Moleculas Anfipáticas
</select>
	<br><br>
	<p id="descripcionConcepto"></p>
	<img  id="dibujoConcepto" src="../images/tension.png"></img> <br>
	<a href="../html/home.php"><input type="submit" id="menu" class="button" value="Menú" onclick="login()"></input></a>
</center>

<script>
function cambioSemana(){
                        if (document.getElementById("concepto").value==1){
    document.getElementById("descripcionConcepto").innerHTML = "La polaridad se refiere a la separación de cargas eléctricas en una molécula. En una molécula no polar, la distribución de cargas eléctricas es equitativa, por lo que no hay una diferencia de cargas negativas y positivas en la molécula. Algunos ejemplos de compuestos polares son los aceites y las grasas. Por otro lado, una molécula polar tiene una distribución desigual de cargas eléctricas, es decir, tiene un polo positivo y un polo negativo. Un ejemplo es el ácido clorhídrico (HCl). El cloro atrae a los electrones con más fuerza que el hidrógeno, por lo que existe un polo cargado negativamente alrededor del cloro y un polo positivo alrededor del hidrógeno. Otros ejemplos de moléculas polares son el agua, el monóxido de carbono, el amoniaco y el alcohol etílico (etanol). En general, los compuestos polares se mezclan con otros compuestos polares, mientras que los compuestos no polares se mezclan con compuestos no polares. Es por esto que el agua puede mezclarse con el alcohol etílico, pero no puede mezclarse con el aceite o con las grasas.";
    document.getElementById("dibujoConcepto").src="../images/polaridad.png";

  }  else if (document.getElementById("concepto").value==2) {
  						document.getElementById("descripcionConcepto").innerHTML = "El otro concepto importante para explicar es la tensión superficial. Esta es la resistencia de un líquido ante una fuerza externa. Es la propiedad que permite que algunos insectos puedan pararse sobre agua sin hundirse, y se debe a las fuerzas de atracción entre las moléculas de un líquido.";
  					 	document.getElementById("dibujoConcepto").src="../images/tension.png";

  } else if (document.getElementById("concepto").value==3) {
                       	document.getElementById("descripcionConcepto").innerHTML = "Las moléculas que componen al jabón tienen  una parte polar y una parte no polar. A estas moléculas que tiene carácter tanto polar como no polar se les llama anfipáticas. La leche, por su parte, se compone principalmente por agua, grasa y proteínas. Al agregar el jabón, la parte polar del jabón interactúa y se mezcla con las moléculas de agua, mientras que la parte no polar del jabón se mezcla con las moléculas de grasa. De esta forma, las moléculas de jabón se mueven por toda la leche para rodear a las moléculas de grasa, empujando a las moléculas de colorante y haciendo que estas se muevan en todas direcciones, mezclándose y formando patrones divertidos. Además, como las moléculas de grasa se encuentran rodeadas por jabón y no están juntas, la tensión superficial del líquido disminuye, permitiendo que las gotas de colorante se muevan libremente por toda la leche.";
  	 					document.getElementById("dibujoConcepto").src="../images/jabon.gif";
                } 
            }
</script>


</body>
</html>