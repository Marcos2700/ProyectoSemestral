<?php
    $fecha = $_GET['fecha'];
?>

<main>
    <center>
    <h1>Confirme la cancelacion de la cita</h1>
    <label>Fecha de la cita: <?php echo $fecha?></label>
<br>
    <?php echo "<a href=cancelar.php?fecha=".$fecha.">Confirmar</a>";?>
    <a href="ListaCitas.php">Cancelar</a>
</center>
</main>