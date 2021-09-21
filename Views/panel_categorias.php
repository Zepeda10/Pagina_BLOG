
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
        <a  href="../login/posts">Posts</a>
        <a href="../login/usuarios">Usuarios</a>
        <a  href="../login/roles">Roles</a>
        <a class="active" href="../login/categorias">Categorías</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="header">
            <h2>ZONA DE ADMINISTRADOR</h2>
            <a href="../login/cerrar">Cerrar Sesión</a>
        </div>

        <a href="../login/agregarCategoria"><button class="boton">Agregar</button></a>

        <div class="inter">
            <table id="customers">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoría</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data as $dato){
                        echo "<tr>";
                        echo "<td>".$dato['id']."</td>";
                        echo "<td>".$dato['categoria']."</td>";
                       
                        echo "<td style='text-align:center;'><a href='../login/editarCategoria/".$dato['id']."'><img src='../Assets/img/editar.png' style='width: 25px;'></a></td>";
                        echo "<td style='text-align:center;'><a href='../login/eliminarCategoria/".$dato['id']."'><img src='../Assets/img/borrar.png' style='width: 25px;'></a></td>";
                      
                        echo "</tr>";
                    }

                ?>


                </tbody>
            </table>
            
        
        </div>



    </div>
      


</body>
</html>

