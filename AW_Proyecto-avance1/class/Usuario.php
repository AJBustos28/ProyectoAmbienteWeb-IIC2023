<?php
include "Conexion.php";

class Usuario
{
    // ATRIBUTOS
    protected $id;
    protected $usuario;
    protected $clave;

    public function __construct($id,$usuario,$clave)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->clave = $clave;
    }


    public static function getByUserName($user_name) 
    {
        $conexion = new Conexion();
        $conexion->conectar();

        $query = "SELECT * FROM usuario WHERE usuario = ?";

        $prepare = mysqli_prepare($conexion->link, $query);

        $prepare->bind_param("s", $user_name);
        $prepare->execute();

        $respuesta = $prepare->get_result();
        $dataArray = $respuesta->fetch_row();

        $conexion->desconectar();

        if (!empty($dataArray)) {
            return new Usuario($dataArray[0],$dataArray[1],$dataArray[2]);
        }

        return false;

    }

    

    // METODOS DE SET y GET PARA USUARIOS
    public function getId(): int
    {
        return $this->id;
    }

    public function getUsuario(): string
    {
        return $this->usuario;
    }

    public function getClave(): string
    {
        return $this->clave;
    }

}