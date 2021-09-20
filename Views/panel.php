
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

        <a href="../login/add"><button class="boton">Agregar</button></a>

        <div class="inter">
            <table id="customers">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Fecha</th>
                        <th>Texto</th>
                        <th>Imagen</th>
                        <th>Id Categoria</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data as $dato){
                        echo "<tr>";
                        echo "<td>".$dato['id']."</td>";
                        echo "<td>".$dato['titulo']."</td>";
                        echo "<td>".$dato['fecha']."</td>";
                        echo "<td>".$dato['texto']."</td>";
                        echo "<td><img width='100px' src='../imagenes_subidas/".$dato['imagen']."'  /></td>";
                        echo "<td>".$dato['id_categoria']."</td>";
                        echo "<td><a href='../login/editar/".$dato['id']."'>Editar</a></td>";
                        echo "<td><a href='../login/eliminar/".$dato['id']."'>Eliminar</a></td>";
                      
                        echo "</tr>";
                    }

                ?>


                </tbody>
            </table>
            
        
        </div>



    </div>
      


</body>
</html>

