<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/blog.css">
    <title>BLOG</title>
</head>
<body>
    <div class="header">
        <img src="../Assets/img/blogger.png" class="logo">
        <a href="../login/blog"><h2>BIENVENIDO A MI BLOG</h2></a>
        <a href="../login/cerrar" id="t">Cerrar Sesión</a>
    </div>

    <div class="inter">
        
        <?php 
            $i = 0;
            foreach ($data as $dato){
                if($i % 2 == 0){
                    echo "<div class='claro'>";
                }else{
                    echo "<div class='oscuro'>";
                }
                       
                echo "<h3>".$dato['titulo']."</h3>";
                echo "<span id='fecha'>Publicado el: ".$dato['fecha']."</span>";
                echo "<span id='categoria'>".$dato['categoria']."</span>";
                echo "<img  class='imagen' src='../imagenes_subidas/".$dato['imagen']."'  />";
                echo "<p>".$dato['texto']."<p>";
                echo "<hr>";
                echo "</div>";
                $i++;
            }
        
        ?>
    </div> 
    
</body>
</html>