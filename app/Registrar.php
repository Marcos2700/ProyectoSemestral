<main>
<h1>Registrar Usuario</h1>
<center>
<br><h2>Ingrese los siguientes datos</h2>
<div>
    <form action="registro.php" method="POST">
        <div>
            <label for="nombre">Nombre completo:  </label>
            <input type="text" id="nombreAp" name="nombreAp" placeholder="Ingrese nombre y apellido">
        </div>
        <div>
            <label for="cedula">Numero de cedula</label>
            <input type="text" id="cedula" name="cedula" placeholder="Ingrese su cedula">
        </div>
        <div>
            <label for="genero">Genero y edad </label>
            <select name="genero">
                <option default>Elija</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            <input type="text" id="edad" name="edad" placeholder="ingrese su edad">
        </div>
        <div>
            <label for="email">Correo electronico</label>
            <input type="text" id="email" name="email" placeholder="Ingrese su correo electronico">
        </div>
        <div>
            <label for="contrasena">Contraseña</label>
            <input type="password" id="passwd" name="passwd" placeholder="Contraseña">
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>
</center>

</main>