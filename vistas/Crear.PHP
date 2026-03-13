<h1>Agregar un nuevo Usuario</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="post" class="mt-4">
                <div class="mb-3">
                    <label for="cedula" class="form-label">Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" required>
                </div>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" name="enviarRegistro" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>
<?php
    $controlador=new ControladorUsuarios();
    if (isset($_POST["enviarRegistro"])){
        // metodo para crear el usuario
        $resultado=$controlador->ctrCrear($_POST["cedula"],$_POST["nombres"],$_POST["apellidos"],$_POST["usuario"],$_POST["password"]);
        if ($resultado) {
            echo "Registro agregado satisfactoriamente";
        }else{
            echo "Esta cédula ya esta registrada";
        }

    }



?>