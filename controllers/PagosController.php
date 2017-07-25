<?php

class PagosController
{

    public function create($pago){
    	$this->validation($pago);
    	return $pago->save($pago);
    }

    public function delete($pago){
    	return $pago->delete($pago);
    }
    
    public function update($pago){
    	$this->validation($pago);
    	return $pago->update($pago);
    }

    private function validation($pago){
    	if($pago->getImporte() > 0) {
    	} else {
    		throw new Exception('Amount is not bigger than zero', 2005);
    	}

    	if($pago->getFecha() < '1') {
    		throw new Exception('Date have to be in the future', 2006);
    	}
    }
}
