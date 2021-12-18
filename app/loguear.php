<?php
require 'db.php';
session_start();

$user = $_POST['user'];
$cedula = $_POST['loginCed'];
$passwd = $_POST['loginPass'];


        $query ="SELECT COUNT(*) as contar FROM users where nombre = '$user' and cedula = '$cedula' and passwd = '$passwd';";
        $consulta = mysqli_query($conexion, $query);
        $array = mysqli_fetch_array($consulta);

        $_SESSION['username']=$user;

        if($array['contar']>0){
        header("location:home.php");
        $salida=$array['contar'];
        return salida;
        }
        else{
        echo "Datos de usuario o contraseña incorrectos";
        }
    
?>