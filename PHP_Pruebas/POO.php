<?php

class Persona{
    private $dni;
    private $nombre;
    private $apellido;

    public function __construct( $dni, $nombre, $apellido) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function getDni() {
        return $this->dni;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    // Métodos de escritura
    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getFullName() {
        return "Persona: " . $this->nombre . " " . $this->apellido."<br>";
    }
}
class Cliente extends Persona{
    private $saldo;
    public function __construct( $dni, $nombre, $apellido,$saldo) {
        parent::__construct($dni, $nombre, $apellido)
        $this->saldo = $saldo;
    }
}

$p= new Persona ("72544443M","Leire","Garmendia");
echo $p->getFullName();
echo $p->getLastName();
?>