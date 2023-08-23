<?php

class Conexion{
    
    public $link;

    public function conectar() {
        $this->link=mysqli_connect("localhost","root","","pasteleria");
    }

    public function desconectar() {
        $this->link->close();
    }
}