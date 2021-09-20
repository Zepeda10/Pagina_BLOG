
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="../Assets/css/sidebar.css"> 
    <link rel="stylesheet" href="../Assets/css/admin_usuarios.css"> 
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

        <a href="../usuarios/agregar"><button class="boton">Agregar</button></a>

        <div class="inter">
            <table id="customers">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data as $dato){
                        echo "<tr>";
                        echo "<td>".$dato['id']."</td>";
                        echo "<td>".$dato['usuario']."</td>";
                        echo "<td>".$dato['pass']."</td>";
                        echo "<td>".$dato['rol']."</td>";
                        echo "<td><a href='../usuarios/editar/".$dato['id']."'>Editar</a></td>";
                        echo "<td><a href='../usuarios/eliminar/".$dato['id']."'>Eliminar</a></td>";
                      
                        echo "</tr>";
                    }

                ?>


                </tbody>
            </table>
            
        
        </div>



    </div>
      


</body>
</html>

