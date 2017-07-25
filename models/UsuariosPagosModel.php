<?php
class UsuariosPagos extends AbstractTable
{
	private $codigopago;
	private $codigousuario;

    public function getCodigopago(){
        return $this->codigopago;
    }

    public function setCodigopago($codigopago){
        $this->codigopago = $codigopago;
    }

    public function getCodigousuario(){
        return $this->codigousuario;
    }

    public function setCodigousuario($codigousuario){
        $this->codigousuario = $codigousuario;
    }

}