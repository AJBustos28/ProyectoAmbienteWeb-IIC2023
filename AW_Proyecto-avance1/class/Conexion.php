<?php

class Conexion{
    
    public $link;

    public function conectar() {
        $this->link=mysqli_connect("localhost","root","ClienteServidor","pasteleria");
    }

    public function desconectar() {
        $this->link->close();
    }
}