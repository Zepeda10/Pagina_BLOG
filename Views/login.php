<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Assets/css/login.css">
</head>
<body>
    <form action="login/loguearse" method="post">
        <div class="imgcontainer">
            <img src="Assets/img/avatar.PNG" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="usuario"><b>Usuario</b></label>
            <input type="text" placeholder="Ingrese usuario" name="usuario" required>

            <label for="pass"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese contraseña" name="pass" required>

            <button type="submit">Iniciar Sesión</button>

        </div>

    </form>
    
</body>
</html>