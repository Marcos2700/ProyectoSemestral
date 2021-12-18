
<main>
    <center>
    <h1>Iniciar Sesion</h1>
    <br>
    <div>
        <form action="loguear.php" method="POST">
    
            <label for="nombre">Nombre completo:  </label>
            <input type="text" id="user" name="user" placeholder="Ingrese su nombre completo">
            <br>
            <label for="cedula">Cedula:  </label>
            <input type="text" id="loginCed" name="loginCed" placeholder="Ingrese su cedula">
            <br>
            <label for="loginPass">Contraseña:  </label>
            <input type="password" id="loginPass" name="loginPass" placeholder="Ingrese su contraseña">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <a href="Registrar.php">Registrarse</a>
</center>
</main>