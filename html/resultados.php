<html>
<link rel="stylesheet" type="text/css" href="../css/resultadosStyle.css">
<script src="../js/jquery.js" type="text/javascript"> </script>
<link href="../images/logo1.png" rel="shortcut icon">
<head>
<title>Resultados</title>
</head>
<body>
	<center>
          <br>
		<div class="titulo">Resultados</div>
		<br>
          <table id="dataTable">

          <TR>
               <th>USUARIO</th>
               <th>PREGUNTA 1</th>
               <th>PREGUNTA 2</th>
               <th>PREGUNTA 3</th>
               <th>PREGUNTA 4</th>
               <th>PREGUNTA 5</th>
               <th>PREGUNTA 6</th>
               <th>PREGUNTA 7</th>
               <th>CALIFICACION</th>

          </TR>

     </table>
	</center>
     <div class="BarraInferior">Desarrollado por: Oliver Martínez, Diego Mayorga, Hector Hernandez, Salvador García, Ricardo Alva, José Higuera</div>
   <div class="BarraSuperior"></div>
<img  id="logout" src="../images/logout2.png" onclick="logoutf()"></img>
<img  id="texto" src="../images/texto4.png" onclick="homef()"></img> <br>
<img  id="pint" src="../images/atomo.png"></img>
</body>
<script>
 $( document ).on('ready', function() {
               var table = document.getElementById("dataTable");
               for (var n=0; n<50; n++) {
               var jsonObject = {
                    "numero":n
                };
                $.ajax({
                    type: "POST",
                    url: "../php/getResultados.php",
                    dataType: "json",
                    data: jsonObject,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    success: function(jsonData) {
               if((jsonData.usuarioC)==undefined){
               }else{

               if (jsonData.pregunta1 == 1){
               var respuesta1="Correcta";
               } else {
               var respuesta1="Incorrecta";
               }

               if (jsonData.pregunta2 == 1){
               var respuesta2="Correcta";
               } else {
               var respuesta2="Incorrecta";
               }

               if (jsonData.pregunta3 == 1){
               var respuesta3="Correcta";
               } else {
               var respuesta3="Incorrecta";
               }

               if (jsonData.pregunta4 == 1){
               var respuesta4="Correcta";
               } else {
               var respuesta4="Incorrecta";
               }

               if (jsonData.pregunta5 == 1){
               var respuesta5="Correcta";
               } else {
               var respuesta5="Incorrecta";
               }

               if (jsonData.pregunta6 == 1){
               var respuesta6="Correcta";
               } else {
               var respuesta6="Incorrecta";
               }

               if (jsonData.pregunta7 == 1){
               var respuesta7="Correcta";
               } else {
               var respuesta7="Incorrecta";
               }
               var rowCount = table.rows.length;
               var row = table.insertRow(rowCount);
 
               var cell1 = row.insertCell(0);
               var element1 = document.createTextNode(jsonData.usuarioC);
               cell1.appendChild(element1);

               var cell2 = row.insertCell(1);
               var element2 = document.createTextNode(respuesta1);
               cell2.appendChild(element2);

               var cell3 = row.insertCell(2);
               var element3 = document.createTextNode(respuesta2);
               cell3.appendChild(element3);

               var cell4 = row.insertCell(3);
               var element4 = document.createTextNode(respuesta3);
               cell4.appendChild(element4);

               var cell5 = row.insertCell(4);
               var element5 = document.createTextNode(respuesta4);
               cell5.appendChild(element5);

               var cell6 = row.insertCell(5);
               var element6 = document.createTextNode(respuesta5);
               cell6.appendChild(element6);

               var cell7 = row.insertCell(6);
               var element7 = document.createTextNode(respuesta6);
               cell7.appendChild(element7);

               var cell8 = row.insertCell(7);
               var element8 = document.createTextNode(respuesta7);
               cell8.appendChild(element8);

               var cell9 = row.insertCell(8);
               var element9 = document.createTextNode(jsonData.calif);
               cell9.appendChild(element9);
          }
     }
});
     }//cierra for

          });

function logoutf(){
        window.location.replace("../php/logoutMaestroService.php");
    }

</script>
</html>