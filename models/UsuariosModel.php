<?php
class Usuarios extends AbstractTable
{
	private $codigousuario;
	private $usuario;
	private $clave;
	private $edad;

    public function getCodigousuario(){
        return $this->codigousuario;
    }

    public function setCodigousuario($codigousuario){
        $this->codigousuario = $codigousuario;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getClave(){
        return $this->clave;
    }

    public function setClave($clave){
        $this->clave = $clave;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

}
