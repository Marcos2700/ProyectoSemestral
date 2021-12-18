<?php

require 'db.php';

    $nombre= $_POST['nombreAp'];
    $cedula=$_POST['cedula'];
    $genero= $_POST['genero'];
    $edad= $_POST['edad'];
    $email= $_POST['email'];
    $passwd = $_POST['passwd'];

    if($edad<0){
        echo "Valor de edad no admitido: ingrese enteros positivos";
    }
    else if($edad>110){
        echo "Valor de edad no admitido: solo se admite un rango de edad entre 1 y 110";
    }
    else if(empty($edad)){
        echo "Valor de edad no admitido: la edad es obligatoria";
     }
    else if(!is_numeric($edad)){
        echo "Valor de edad no admitido: en el campo edad no se admite texto, introduzca valores numericos";
    }
    else if(!ctype_digit($edad)){
        echo "Valor de edad no admitido: solo se adminten valores enteros";
    }
    else if(empty($passwd)){
        echo "Contraseña no admitida: la contraseña es obligatoria";
    }
    else if(strlen($passwd) < 8){
        echo "Contraseña no admitida: el minimo de caracteres es 8";
    }
    else if(empty($cedula)){
        echo "La cedula es obligatoria";
    }
    else{
        $query = "INSERT INTO users(nombre, cedula, genero, edad, email, passwd) values('$nombre','$cedula','$genero','$edad','$email', '$passwd');";
        $consulta = mysqli_query($conexion, $query);

        if($consulta){
            header("location: RegistroExitoso.php");
        }
    }
?>