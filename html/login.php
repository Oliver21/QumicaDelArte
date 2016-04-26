<?php 
session_start();
if(@$_SESSION['user']){
    header("Location:../Html/home.php");
}
?>

<html>
<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
<script src="../js/jquery.js" type="text/javascript"> </script>
<link href="../images/logo1.png" rel="shortcut icon">
<head>
<title>Qumica del Arte</title>
</head>
<body>
<center>
<div class="titulo">Química del Arte</div>
<mensaje>Aprende mientras te diviertes</mensaje>
<br><br><br><br>

<input type="text" placeholder="Usuario" name="usuario1" style="background:transparent; width:250px; height:40px; font-size:18px;" id="usuario"></input>
<br><br><br>
<input type="password" placeholder="Contraseña" name="password" style="background:transparent; width:250px; height:40px; font-size:18px;" id="pass"></input>
<br><br><br>
<input type="submit" id="login" class="button" value="login" onclick="login()"></input>
<br><br>

<!--<a href="forgot.html">Forgot password?</a>-->
<!--<form action= "register.html" method="POST"> 
<input type ="submit" class="button2" value="Register"></input> 
</form> -->
<img  id="cuadro" src="../images/cuadro.png"></img>
</center>

<script type="text/javascript">
				function login(){
                var jsonObject = {
                    "username" : $("#usuario").val(),
                    "userPassword" : $("#pass").val()
                };

                $.ajax({
                    type: "POST",
                    url: "../php/loginService.php",
                    dataType: "json",
                    data: jsonObject,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    success: function(jsonData) {
                        alert("Bienvenido " + jsonData.name + " "+ jsonData.last + ", esperamos disfrutes la página.");
                            window.location.replace("../Html/home.php");

                       
                    },
                    error: function(errorMsg){
                        alert(errorMsg.statusText);
                    }
                });
            }

            
      /*      $("#registerButton").on("click",function(){
                window.location.replace("PHP%20Service/registration.html");
            }); */




    </script>

<img  id="estudiante" src="../images/estudiante.png"></img>
<img  id="candado" src="../images/candado.png"></img>
</body>
<body style="overflow-y:hidden; overflow-x:hidden">
</html>