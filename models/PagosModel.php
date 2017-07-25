<?php
class Pagos extends AbstractTable
{
	private $codigopago;
	private $importe;
	private $fecha;

    public function getCodigopago(){
        return $this->codigopago;
    }

    public function setCodigopago($codigopago){
        $this->codigopago = $codigopago;
    }

    public function getImporte(){
        return $this->importe;
    }

    public function setImporte($importe){
        $this->importe = $importe;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

}