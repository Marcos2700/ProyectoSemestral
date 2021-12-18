<?php
    $motivo = $_GET['motivo'];
    $fechaAnt = $_GET['fecha'];
?>
<main>
<h1>Programar Cita</h1>
<center>
<br><h2>Ingrese los siguientes datos</h2>
<div>
    <form action="reprogramar.php" method="POST">   
        <fieldset> 
        <div>
            <label for="fecha">Fecha:  </label>
            <input type="text" id="fecha" name="fecha" placeholder="DD-MM-AAAA">
        </div>
        <div>
            <label for="fecha">Fecha Anterior:  </label>
            <input type="text" value="<?php echo $fechaAnt?>" id="fechaAnt" name="fechaAnt" placeholder="DD-MM-AAAA">
        </div>
        <br>
        <div>
            <label for="hora">Hora</label>
            <select name="hora">
                <option default>Elija</option>
                <option value="8:00:00">8:00 am</option>
                <option value="10:00:00">10:00 am</option>
                <option value="12:00:00">12:00 md</option>
                <option value="14:00:00">2:00 pm</option>
                <option value="16:00:00">4:00 pm</option>
        </select>
        </div>
        <br>
        <div>
            <label for="motivo">Motivo de la cita</label>
            <input type="text" value="<?php echo $motivo ?>" id="motivo" name="motivo" placeholder="Indique el motivo">
        </div>
        <br>
        <button type="submit" >Enviar</button>
    </fieldset>
    </form>
</div>
</center>
</main>