<?php
session_start();
$usuario=$_SESSION['username'];

echo "<h1>Bienvenido $usuario</h1>";
echo "<br><a href=ListaCitas.php>Listar Citas</a>";
echo "<br><a href=ProgCitas.php>Agendar Cita</a>";

?>