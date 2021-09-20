
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="../Assets/css/sidebar.css"> 
    <link rel="stylesheet" href="../Assets/css/admin_post.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <title>Panel de control</title>
</head>
<body>


    <!-- The sidebar -->
    <div class="sidebar">
        <a href="../login/posts">Posts</a>
        <a class="active" href="../login/usuarios">Usuarios</a>
        <a href="../login/roles">Roles</a>
        <a href="../login/categorias">Categorías</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="header">
            <h2>ZONA DE ADMINISTRADOR</h2>
            <a href="../login/cerrar">Cerrar Sesión</a>
        </div>

        <div class="inter">

            <h3>Agregar Usuario</h3>

            <form action="../usuarios/add" method="POST" enctype="multipart/form-data" id="form">
                <label for="titulo">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                <label for="texto">Contraseña</label>
                <input name="pass" id="pass" type="text" placeholder="Contraseña">

                <select name="id_rol">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>

                <input type="submit" value="Agregar">
            </form>
        
        </div>



    </div>
      


</body>
</html>

<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                usuario : {
                    required: true,
                    maxlength: 50
                },
                pass : {
                    required: true,
                    maxlength: 500
                },
             
               
            
            },
            messages : {
                usuario: {
                    required: "Campo requerido",
                    maxlength: "No más de 50 caracteres"
                },
                pass: {
                    required: "Campo requerido",
                    maxlength: "No más de 500 caracteres"
                },
              
               
            }

            
        });
    });
</script>

