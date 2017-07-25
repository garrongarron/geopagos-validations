<?php
class UsuariosPagosController
{
	private $user;
	public function __construct($user){
		$this->user = $user;
	}
    public function create($usuarioPago){
    	$this->validation($usuarioPago);
    	return $usuarioPago->save($usuarioPago);
    }

    public function delete($usuarioPago){
    	$this->validation($usuarioPago);
    	return $usuarioPago->delete($usuarioPago);
    }
    
    public function update($usuarioPago){
    	$this->validation($usuarioPago);
    	return $usuarioPago->update($usuarioPago);
    }

    private function validation($usuarioPago){
    	$this->user->setCodigousuario($usuarioPago->getCodigousuario());
    	if(empty($this->user->select())){
    		throw new Exception('Pay User does not exist', 2007);
    	}
    }
}
