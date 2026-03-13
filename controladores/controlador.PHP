<?php
// include_once("modelos/modelo.usuarios.php");

class ControladorUsuarios{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new ModeloUsuarios();
    }

    public function ctrListar()
    {
        $listar = $this->usuario->mdlListar();
        return $listar;
    }

    public function ctrCrear($cedula, $nombre, $apellidos, $usuario, $clave){
        $this->usuario->mdlSet("cedula",$cedula);
        $this->usuario->mdlSet("nombres",$nombre);
        $this->usuario->mdlSet("apellidos",$apellidos);
        $this->usuario->mdlSet("usuario",$usuario);
        $this->usuario->mdlSet("password",$clave);

        $resultado=$this->usuario->mdlCrear();
        return $resultado;

        
    } //fin del metodo crear

    public function ctrConsultar($id){
        $this->usuario->mdlSet("id",$id);
        return $this->usuario->mdlConsultar();
    }//fin del metodo consultar

    public function crtEliminar($id){
        $this->usuario->mdlSet("id",$id);
        $this->usuario->mdlEliminar();
    }

    public function ctrEditar($id, $cedula, $nombres, $apellido, $usuario, $clave){
        
        $this->usuario->mdlSet("id",$id);
        $this->usuario->mdlSet("nombres",$nombres);
        $this->usuario->mdlSet("cedula",$cedula);
        $this->usuario->mdlSet("apellidos",$apellido);
        $this->usuario->mdlSet("usuario",$usuario);
        $this->usuario->mdlSet("password",$clave);

        $this->usuario->mdlEditar();


    }//fin del metodo editar

}//fin de la clase ControladorUsuarios

?>