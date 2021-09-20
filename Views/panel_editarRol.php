
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="../../Assets/css/sidebar.css"> 
    <link rel="stylesheet" href="../../Assets/css/admin_post.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <title>Panel de control</title>
</head>
<body>


    <!-- The sidebar -->
    <div class="sidebar">
        <a href="../../login/posts">Posts</a>
        <a href="../../login/usuarios">Usuarios</a>
        <a class="active" href="../../login/roles">Roles</a>
        <a href="../../login/categorias">Categorías</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="header">
            <h2>ZONA DE ADMINISTRADOR</h2>
            <a href="../../login/cerrar">Cerrar Sesión</a>
        </div>

        <div class="inter">

            <h3>Agregar Rol</h3>

            <form action="../../login/updateRol" method="POST" enctype="multipart/form-data" id="form">
                <input type="hidden" name="id" id="id"  value="<?php echo $data['id']; ?>">
                <label for="titulo">Rol</label>
                <input type="text" name="rol" id="rol" placeholder="Rol" value="<?php echo $data['rol']; ?>">
              
                <input type="submit" value="Aceptar">
            </form>
        
        </div>



    </div>
      


</body>
</html>

<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                rol : {
                    required: true,
                    maxlength: 50
                },
           
            },
            messages : {
                rol: {
                    required: "Campo requerido",
                    maxlength: "No más de 50 caracteres"
                },
               
            }

            
        });
    });
</script>

