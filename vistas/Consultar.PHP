<?php
    $controlador = new ControladorUsuarios();

    if (isset($_GET["id"]))
        $registro=$controlador->ctrConsultar($_GET["id"])
        
?>

<h1>MODULO CONSULTAR</h1>

<p>ID       : <?php echo $registro["idUsuario"]; ?></p>
<p>Cedula   : <?php echo $registro["cedula"]; ?></p>
<p>Nombre   : <?php echo $registro["nombres"]; ?></p>
<p>Apellido : <?php echo $registro["apellidos"]; ?></p>
<p>Usuario  : <?php echo $registro["usuario"]; ?></p>
<p>Password : <?php echo $registro["password"]; ?></p>