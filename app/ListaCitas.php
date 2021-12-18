<?php
require 'db.php';
session_start();
$usuario = $_SESSION['username'];
?>
<html>
<h1>Lista de Citas</h1>
<center>
<table>
    <tr><th colspan="4"><h1>Citas pendientes</h1></th></tr>
    <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Especialidad</th>
        <th>Opciones</th>
    </tr>
    <?php
    $consulta = "SELECT idUser from users where nombre = '$usuario';";
    $consultar = mysqli_query($conexion, $consulta);
    $idUser = mysqli_fetch_array($consultar);
    $id = intval($idUser['idUser']);

    $query = "SELECT * FROM citas where userId = '$id';";
    $elements = mysqli_query($conexion, $query);

    while($show =mysqli_fetch_array($elements)){
    ?>
        <tr>
            <td><?php echo $show['fecha'];?></td>
            <td><?php echo $show['time'];?></td>
            <td><?php echo $show['especialidad'];?></td>
            <td><?php echo "<a href=ReprogramarCita.php?fecha=".$show['fecha']."&motivo=".$show['motivo'].">Reprogramar</a><br>
            <a href='CancelarCita.php?fecha=".$show['fecha']."&'>Cancelar</a>";?></td>
        </tr>
    <?php
    }
    ?>
</table>
</center>


</html>