<?php

require 'db.php';
session_start();
$usuario = $_SESSION['username'];

$fecha = $_GET['fecha'];

$consulta1 = "SELECT idUser from users where nombre = '$usuario';";
$consultar1 = mysqli_query($conexion, $consulta1);
$idUser = mysqli_fetch_array($consultar1);
$id = intval($idUser['idUser']);
$consulta2 = "SELECT idCita FROM citas where userId='$id' and fecha='$fecha';";
$consultar2 = mysqli_query($conexion, $consulta2);
$idCita = mysqli_fetch_array($consultar2);
$idC = intval($idCita['idCita']);
$query = "DELETE FROM citas WHERE idCita='$idC' and userId='$id';";
$update = mysqli_query($conexion, $query);

if($update){
    echo "La cita fue cancelada";
}