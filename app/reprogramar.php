<?php

require 'db.php';
session_start();
$usuario = $_SESSION['username'];

$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$especialidad = $_POST['especialidad'];
$motivo = $_POST['motivo'];
$fechaAnt = $_POST['fechaAnt'];

$date = strtotime("$fecha");
$today= date("d-m-Y");
$todayd = strtotime("$today");
$limitDate = strtotime($today."+ 30 days");

        if($todayd > $date){
            $salida ="Fecha no admitida: la fecha indicada es una fecha pasada";
            echo $salida;
        }
        elseif($date > $limitDate){
            $salida ="Fecha no admitida: la fecha indicada esta fuera del rango, el rango es hasta un mes despues de la fecha actual";
            echo $salida;
        }
        else{
            $consulta1 = "SELECT idUser from users where nombre = '$usuario';";
            $consultar1 = mysqli_query($conexion, $consulta1);
            $idUser = mysqli_fetch_array($consultar1);
            $id = intval($idUser['idUser']);
            $consulta2 = "SELECT idCita FROM citas where userId='$id' and fecha='$fechaAnt';";
            $consultar2 = mysqli_query($conexion, $consulta2);
            $idCita = mysqli_fetch_array($consultar2);
            $idC = intval($idCita['idCita']);
            $query = "UPDATE citas SET fecha='$fecha', time='$hora' WHERE idCita = '$idC'";
            $update = mysqli_query($conexion, $query);

            if($update){
                $salida="La cita fue agendada correctamente";
                echo $salida;
            }
        }
?>