<?php
    date_default_timezone_set('GMT');

    $fecha = date("Y-m-d,h:m:s");
    $fecha = str_replace(',',' ',$fecha);
?>

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
        <a class="active" href="../login/posts">Posts</a>
        <a href="../login/usuarios">Usuarios</a>
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

            <h3>Agregar Post</h3>

            <form action="../login/agregar" method="POST" enctype="multipart/form-data" id="form">
                <input type="hidden" name="fecha" id="fecha" value="<?php echo $fecha; ?>">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" placeholder="Título">
                <label for="texto">Texto</label>
                <textarea name="texto" id="texto" cols="30" rows="10" placeholder="Texto"></textarea>
                <input type="file" id="imagen" name="imagen">
                <select name="id_categoria">
                    <option value="1">Tecnología</option>
                    <option value="2">Videojuegos</option>
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
                titulo : {
                    required: true,
                    maxlength: 50
                },
                texto : {
                    required: true,
                    maxlength: 500
                },
                imagen : {
                    required: true
                },
   
               
            
            },
            messages : {
                titulo: {
                    required: "Campo requerido",
                    maxlength: "No más de 50 caracteres"
                },
                texto: {
                    required: "Campo requerido",
                    maxlength: "No más de 500 caracteres"
                },
                imagen: {
                    required: "Campo requerido",
                },
               
            }

            
        });
    });
</script>

