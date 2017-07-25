<?php
class Favoritos extends AbstractTable
{
	private $codigousuario;
	private $codigousuariofavorito;

    public function getCodigousuario(){
        return $this->codigousuario;
    }

    public function setCodigousuario($codigousuario){
        $this->codigousuario = $codigousuario;
    }

    public function getCodigousuariofavorito(){
        return $this->codigousuariofavorito;
    }

    public function setCodigousuariofavorito($codigousuariofavorito){
        $this->codigousuariofavorito = $codigousuariofavorito;
    }

}