<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head> 
    <style 
    #paginacion {
  border: 1px solid #CCC;
  background-color: #E0E0E0;
  padding: .5em;
}
 
.derecha   { float: right; }
.izquierda { float: left;  }
    <body>
        <?php
        // put your code here
        ?>
    <html> <h3> Se devuelven los jugadores asignado al coach a la lista de disponibles de la liga a la que pertenece.</h3>
        <h3> Se eliminaran los registros de puntuación del coach.</h3>
        <h3> Eliminar las referencias al coach de las diferentes tablas.</h3>
        <h3> Se expulsara de la liga a la que esta unida.</h3>
        <h3> Si es el administrador de la liga estos privilegios pasarían al segundo con mas antigüedad.</h3>
        <h3> ? Si es el ultimo coach de una liga esta sera borrada.</h3>
        <h3> ?si el coach se da de baja no puede volver a entrar en la liga </h3>
        <form method="get" action="??dar de baja">
         <!--   <input type="button" value="Dar De Baja"> -->
            <input type="button" onclick="alert('si continuas perderas las puntuaciones del coach')" value="Dar de Baja">                 
            </form>
            
            <div id='ventana-flotante'>
   <a class='cerrar' href='javascript:void(0);' onclick='document.getElementById(&apos;ventana-flotante&apos;).className = &apos;oculto&apos;'>x</a>
   <div id='contenedor'>
       <div class='contenido'>
Aquí va el mensaje. de lo que sucedera si eliminamos un usuario.
       </div>
   </div>
</div>

<style>
#ventana-flotante {
width: 360px;  /* Ancho de la ventana */
height: 90px;  /* Alto de la ventana */
background: #ceffad;  /* Color de fondo */
position: fixed;
top: 200px;
left: 50%;
margin-left: -180px;
border: 1px solid #adffad;  /* Borde de la ventana */
box-shadow: 0 5px 25px rgba(0,0,0,.1);  /* Sombra */
z-index:999;
}
#ventana-flotante #contenedor {
padding: 25px 10px 10px 10px;
}
#ventana-flotante .cerrar {
float: right;
border-bottom: 1px solid #bbb;
border-left: 1px solid #bbb;
color: #999;
background: white;
line-height: 17px;
text-decoration: none;
padding: 0px 14px;
font-family: Arial;
border-radius: 0 0 0 5px;
box-shadow: -1px 1px white;
font-size: 18px;
-webkit-transition: .3s;
-moz-transition: .3s;
-o-transition: .3s;
-ms-transition: .3s;
}
#ventana-flotante .cerrar:hover {
background: #ff6868;
color: white;
text-decoration: none;
text-shadow: -1px -1px red;
border-bottom: 1px solid red;
border-left: 1px solid red;
}
#ventana-flotante #contenedor .contenido {
padding: 15px;
box-shadow: inset 1px 1px white;
background: #deffc4;  /* Fondo del mensaje */
border: 1px solid #9eff9e;  /* Borde del mensaje */
font-size: 20px;  /* Tamaño del texto del mensaje */
color:#555;  /* Color del texto del mensaje */
text-shadow: 1px 1px white;
margin: 0 auto;
border-radius: 4px;
}
.oculto {-webkit-transition:1s;-moz-transition:1s;-o-transition:1s;-ms-transition:1s;opacity:0;-ms-opacity:0;-moz-opacity:0;visibility:hidden;}
</style>
    </html>
    </body>
</html>
