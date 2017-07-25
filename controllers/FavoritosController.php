<?php
class FavoritosController 
{
	private $user;
	public function __construct($user){
		$this->user = $user;
	}
    public function create($favorito){
    	$this->validation($favorito);
    	return $favorito->save($favorito);
    }

    public function delete($favorito){
    	$this->validation($favorito);
    	return $favorito->delete($favorito);
    }
    
    public function update($favorito){
    	$this->validation($favorito);
    	return $favorito->update($favorito);
    }

    private function validation($favorito){
    	$this->user->setCodigousuario($favorito->getCodigousuario());
    	if(empty($this->user->select())){
    		throw new Exception('Owner User does not exist', 2003);
    	}

    	$this->user->setCodigousuario($favorito->getCodigousuariofavorito());
    	if(empty($this->user->select())){
    		throw new Exception('Favorite User does not exist', 2004);
    	}
    }
}