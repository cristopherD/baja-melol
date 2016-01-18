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
    <html> <h4> Se devuelven los jugadores asignado al coach a la lista de disponibles de la liga a la que pertenece.</h4>
        <h4> Se eliminaran los registros de puntuación del coach.</h4>
        <h4> Eliminar las referencias al coach de las diferentes tablas.</h4>
        <h4> Se expulsara de la liga a la que esta unida.</h4>
        <h4> Si es el administrador de la liga estos privilegios pasarían al segundo con mas antigüedad.</h4>
        <h4> ? Si es el ultimo coach de una liga esta sera borrada.</h4>
        <h4> ?si el coach se da de baja no puede volver a entrar en la liga </h4>
        <p>
        <form method="get" action="??dar de baja">
         <!--   <input type="button" value="Dar De Baja"> -->
            <input type="button" onclick="alert('si continuas perderas las puntuaciones del coach')" value="Dar de Baja">                 
            </form>
            
            <script type="text/JavaScript">
 function borra_cliente(id) {
 var answer = confirm('¿Estás seguro que deseas borrar al coach?');
 if (answer) {
 // si el usuario hace click en ok,
 // se ejecutar borrar.php
 window.location = 'borra.php?id=' + id;
 }
  </script> 
 
  echo "<a href='javascript:borra_cliente(\"$id\")'> Elimina </a>";
 <?php
// incluir la conexión a la base de datos
include 'conexion.php';
// coger el parámetro que nos permitirá identificar el registro
// isset() es una función PHP usado para verificar si una variable tiene valor o no
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Registro no encontrado.');
// Consulta de borrado
$query = "DELETE FROM clientes WHERE id = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param('i', $id);
if ($stmt->execute()) {
 // después de borrar ir a index.php de nuevo e
 // informar que el archivo fue borrado
 header('Location: index.php?action=deleted');
} else {
 die('Imposible borrar el registro.');
}

 header('Location: index.php?action=deleted');
 include 'conexion.php';
 $action = isset($_GET['action']) ? $_GET['action'] : "";
 // si viene de borra.php
 if ($action == 'deleted') {
 echo "<div>El registro cliente ha sido borrado.</div>";
 }
    ?>
        
    </html>
    </body>
</html>
