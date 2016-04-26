<?php 
session_start();
if(@!$_SESSION['user']){
  header("Location:../Html/login.php");
}
?>

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
	<p id="ins">Elige un concepto en la parte inferior para ver información sobre éste</p>
	<select id="concepto" onchange="leccion()" class="button">
<option selected value="0">
<option value="1">Polaridad
<option value="2">Tension Superficial
<option value="3">Moleculas Anfipáticas
</select>
	<br><br>
	<prueba id="prueba">
	<p id="descripcionConcepto"></p>
	<img  id="dibujoConcepto"></img> <br></br>
	</prueba>
</center>

<script>
function leccion(){
                        if (document.getElementById("concepto").value==1){
    document.getElementById("descripcionConcepto").innerHTML = "La polaridad se refiere a la separación de cargas eléctricas en una molécula. En una molécula no polar, la distribución de cargas eléctricas es equitativa, por lo que no hay una diferencia de cargas negativas y positivas en la molécula. Algunos ejemplos de compuestos polares son los aceites y las grasas. Por otro lado, una molécula polar tiene una distribución desigual de cargas eléctricas, es decir, tiene un polo positivo y un polo negativo. Un ejemplo es el ácido clorhídrico (HCl). El cloro atrae a los electrones con más fuerza que el hidrógeno, por lo que existe un polo cargado negativamente alrededor del cloro y un polo positivo alrededor del hidrógeno. Otros ejemplos de moléculas polares son el agua, el monóxido de carbono, el amoniaco y el alcohol etílico (etanol). En general, los compuestos polares se mezclan con otros compuestos polares, mientras que los compuestos no polares se mezclan con compuestos no polares. Es por esto que el agua puede mezclarse con el alcohol etílico, pero no puede mezclarse con el aceite o con las grasas.";
    document.getElementById("dibujoConcepto").src="../images/polaridad.png";

  }  else if (document.getElementById("concepto").value==2) {
  						document.getElementById("descripcionConcepto").innerHTML = "El otro concepto importante para explicar es la tensión superficial. Esta es la resistencia de un líquido ante una fuerza externa. Es la propiedad que permite que algunos insectos puedan pararse sobre agua sin hundirse, y se debe a las fuerzas de atracción entre las moléculas de un líquido.";
  					 	document.getElementById("dibujoConcepto").src="../images/tension.png";

  } else if (document.getElementById("concepto").value==3) {
                       	document.getElementById("descripcionConcepto").innerHTML = "Las moléculas que componen al jabón tienen  una parte polar y una parte no polar. A estas moléculas que tiene carácter tanto polar como no polar se les llama anfipáticas. La leche, por su parte, se compone principalmente por agua, grasa y proteínas. Al agregar el jabón, la parte polar del jabón interactúa y se mezcla con las moléculas de agua, mientras que la parte no polar del jabón se mezcla con las moléculas de grasa. De esta forma, las moléculas de jabón se mueven por toda la leche para rodear a las moléculas de grasa, empujando a las moléculas de colorante y haciendo que estas se muevan en todas direcciones, mezclándose y formando patrones divertidos. Además, como las moléculas de grasa se encuentran rodeadas por jabón y no están juntas, la tensión superficial del líquido disminuye, permitiendo que las gotas de colorante se muevan libremente por toda la leche.";
  	 					document.getElementById("dibujoConcepto").src="../images/jabon2.png";
                } 
            }

function logoutf(){
        window.location.replace("../php/logoutService.php");
    }

function homef(){
        window.location.replace("../html/home.php");
    }
</script>

</body>

<div class="BarraInferior">Desarrollado por: Oliver Martínez, Diego Mayorga, Hector Hernandez, Salvador García, Ricardo Alva, José Higuera</div>
   <div class="BarraSuperior"></div>
<img  id="logout" src="../images/logout2.png" onclick="logoutf()"></img>
<img  id="texto" src="../images/texto4.png" onclick="homef()"></img> <br>
<img  id="pint" src="../images/atomo.png"></img>
<br>
<br>
<iframe width="420" height="315" 
src="https://r2---sn-5axnug5-hute.googlevideo.com/videoplayback?requiressl=yes&id=8b8b6ca75297b6f4&itag=59&source=webdrive&app=explorer&ip=131.178.201.56&ipbits=8&expire=1461699957&sparams=requiressl,id,itag,source,ip,ipbits,expire&signature=871A19E05570B6F3823CD269058A0636C7982E80.714E09843F5C2C6D1B23961F66940F3CC72E4E6F&key=ck2&mm=31&mn=sn-5axnug5-hute&ms=au&mt=1461685448&mv=m&pl=17&cpn=HYx6sPrTK8VT76NN&c=WEB&cver=1.20160425" frameborder="0" allowfullscreen></iframe>
<iframe width="420" height="315" 
src="https://r3---sn-5axnug5-hute.googlevideo.com/videoplayback?requiressl=yes&id=798851ab1d9d2ed7&itag=59&source=webdrive&app=explorer&ip=131.178.201.56&ipbits=8&expire=1461700150&sparams=requiressl,id,itag,source,ip,ipbits,expire&signature=34BA2B29C8FFF6C9F9271D70ABF57F7664846E17.BA53303E884E2A21C5958AC596E0980C4FB0888&key=ck2&mm=31&mn=sn-5axnug5-hute&ms=au&mt=1461685672&mv=m&pl=17&cpn=ALC3Nu7h9QBFM8XF&c=WEB&cver=1.20160425" frameborder="0" allowfullscreen></iframe>
<iframe width="420" height="315" 
src="https://r3---sn-5axnug5-hute.googlevideo.com/videoplayback?requiressl=yes&id=6c4fae71496db648&itag=59&source=webdrive&app=explorer&ip=131.178.201.56&ipbits=8&expire=1461700218&sparams=requiressl,id,itag,source,ip,ipbits,expire&signature=647DEC496709108642CF655CAFFE2A7124237624.39DC31B363314309D3C4DA4F0456AAC07AB29B62&key=ck2&mm=31&mn=sn-5axnug5-hute&ms=au&mt=1461685672&mv=m&pl=17&cpn=Lg2VN83kW0F32W44&c=WEB&cver=1.20160425" frameborder="0" allowfullscreen></iframe>
<br><br><br>
</html>