<?php
    $controlador = new ControladorUsuarios();
    $resultado = $controlador->ctrListar();
?>

<table border="1">
    <thead>
        <tr>
            <th>idUsuario</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>cedula</th>
            <th>usuario</th>
            <th>password</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($fila = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>".$fila["idusuario"]."</td>";
                echo "<td>".$fila["nombres"]."</td>";
                echo "<td>".$fila["apellidos"]."</td>";
                echo "<td>".$fila["cedula"]."</td>";
                echo "<td>".$fila["usuario"]."</td>";
                echo "<td>".$fila["password"]."</td>";
                echo "<td>
                <a href='?cargar=consultar&id=".$fila["idusuario"]."'>Consultar</a>
                <a href='?cargar=editar&id=".$fila["idusuario"]."'>Editar</a>
                <a href='?cargar=eliminar&id=".$fila["idusuario"]."'>Eliminar</a>";

                echo "</tr>";
            }
        ?>
 



</tbody>