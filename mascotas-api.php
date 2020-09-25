<?php 

$dbhost = "localhost";
$dbname = "tienda_mascotas_bd";
$dbuser= "root";
$dbpass="";

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);


$sql="SELECT id_alimento_mascota, mascota_alimento,precio_alimento, nombre_alimento from alimento_mascota";

$q= $conexion->prepare($sql);
$q->execute();


$lista_alimento_mascota= $q->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($lista_alimento_mascota);

?>