<?php

require 'db.php';
session_start();
$usuario = $_SESSION['username'];

$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$especialidad = $_POST['especialidad'];
$motivo = $_POST['motivo'];

$date = strtotime("$fecha");
$today= date("d-m-Y");
$todayd = strtotime("$today");
$limitDate = strtotime($today."+ 30 days");

if($todayd > $date){
    echo "Fecha no admitida: la fecha indicada es una fecha pasada";
}
elseif($date > $limitDate){
    echo "Fecha no admitida: la fecha indicada esta fuera del rango, el rango es hasta un mes despues de la fecha actual";
}
else{
    $consulta = "SELECT idUser from users where nombre = '$usuario';";
    $consultar = mysqli_query($conexion, $consulta);
    $idUser = mysqli_fetch_array($consultar);
    $id = intval($idUser['idUser']);
    $query = "INSERT into citas(userId, fecha, time, especialidad, motivo) VALUES('$id', '$fecha', '$hora', '$especialidad', '$motivo');";
    $insert = mysqli_query($conexion, $query);

    if($insert){
        echo "La cita fue agendada correctamente";
    }
}

?>