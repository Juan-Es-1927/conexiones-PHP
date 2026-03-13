<?php
    $controlador=new ControladorUsuarios();
    if (isset($_GET["id"])){
        $registro=$controlador->ctrConsultar($_GET["id"]);
        // var_dump($registro);
    }

    if (isset($_POST["modificar"])){
        $controlador->ctrEditar($_POST['id'], $_POST['cedula'],$_POST['nombres'],$_POST['apellidos'],$_POST['usuario'],$_POST['password']);
        header('Location:index.php');
    }

?>

<h1>MODULO EDITAR</h1>


<form action="" method="post">
    <!-- <input type="text" value="German"> -->
    <input type="hidden" name="id" value="<?php echo $registro['idUsuario'];?>" readonly><br><br> 
    <input type="text" name="cedula" value="<?php echo $registro['cedula'];?>" readonly><br><br>
    <input type="text" name="nombres" value="<?php echo $registro['nombres'];?>" ><br><br>
    <input type="text" name="apellidos" value="<?php echo $registro['apellidos'];?>" ><br><br>
    <input type="text" name="usuario" value="<?php echo $registro['usuario'];?>" ><br><br>
    <input type="text" name="password" value="<?php echo $registro['password'];?>" ><br><br>

    <input type="submit"  name="modificar" value="Modificar">




</form>