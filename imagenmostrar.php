<?php
# Recibe el id de la imagen a mostrar
 
# Conectamos con MySQL
$link=mysqli_connect("localhost","root","root","BDImagenes");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
 
# Buscamos la imagen a mostrar
$result=mysqli_query($link,"SELECT * FROM `imagephp` WHERE id=".$_GET["id"]);
$row=mysqli_fetch_array($result);
 
# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
?>
