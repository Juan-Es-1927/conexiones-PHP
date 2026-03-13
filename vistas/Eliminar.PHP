<?php
    $controlador = new ControladorUsuarios();

    if (isset($_GET["id"])){
        $registro=$controlador->ctrConsultar($_GET["id"]);
    }
    if (isset($_POST["eliminar"])){
        $controlador->ctrEliminar($_GET["id"]);
        header('Location:index.php');
    }
        
?>

<form action="" method="post">
    <table border=1>
        <thead>
            <th>Id</th>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Acción</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $registro['idUsuario']?></td>
                <td><?php echo $registro['cedula']?></td>
                <td><?php echo $registro['nombres']?></td>
                <td><?php echo $registro['apellidos']?></td>
                <td><?php echo $registro['usuario']?></td>
                <td><?php echo $registro['password']?></td>
                <td>
                    <input type="submit" name="eliminar" value="Eliminar">
                </td>
            </tr>
        </tbody>
    </table>
</form>