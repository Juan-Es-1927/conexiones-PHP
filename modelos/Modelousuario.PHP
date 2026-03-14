<?php
include_once("conection.php");

class ModeloUsuarios{
    /* atributos */
    private $id;
    private $nombres;
    private $apellidos;
    private $cedula;
    private $usuario;
    private $password;

    private $con;

    /* metodos */
    public function __construct(){
        $this->con = new Conexion();
    } // Fin del constructor

    public function mdlListar(){
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function mdlSet($atributo, $valor){
        $this->$atributo=$valor;
    }

    public function mdlCrear(){
        $sql2="SELECT * FROM usuarios WHERE cedula='$this->cedula'";
        echo $sql2;
        $resultado=$this->con->consultaRetorno($sql2);
        $filas=mysqli_num_rows($resultado);
        if ($filas==0){
            $sql="INSERT INTO usuarios (cedula, nombres, apellidos, usuario, password) VALUES ('$this->cedula', '$this->nombres', '$this->apellidos', '$this->usuario', '$this->password')";
            // echo $sql;
            $this->con->consultaSimple($sql);
            return true;
        }else{
            return false;
        }

    }//fin del metodo crear


    public function mdlConsultar(){
        $sql="SELECT * FROM usuarios WHERE idUsuario = '$this->id'";
        $resultado=$this->con->consultaRetorno($sql);
        $registro=mysqli_fetch_assoc($resultado);

        // $this->id=$registro["idUsuario"];
        // $this->nombres=$registro["nombres"];
        // $this->apellidos=$registro["apellidos"];
        // $this->usuario=$registro["usuario"];
        // $this->password=$registro["password"];
        // $this->cedula=$registro["cedula"];

        return $registro;       

    }

    public function mdlEliminar(){
        $sql ="DELETE FROM usuarios WHERE idUsuario=$this->id";
        $this->con->consultaSimple($sql);
    }

    public function mdlEditar(){
        $sql="UPDATE usuarios SET   nombres='$this->nombres', 
                                    apellidos='$this->apellidos', 
                                    usuario='$this->usuario', 
                                    password='$this->password'  
                WHERE idUsuario='$this->id'";
        echo $sql;
        // exit;

        $this->con->consultaSimple($sql);

    }


}// Fin de la clase usuarios

// $miUsuario = new Usuarios();
// $miUsuario->listar();
?>