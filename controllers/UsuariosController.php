<?php
class UsuariosController
{
    public function create($user){
    	$this->validation($user);
    	return $user->save($user);
    }

    public function delete($user){
    	return $user->delete($user);
    }

    public function update($user){
    	$this->validation($user);
    	return $user->update($user);
    }

    private function validation($user){
    	if(empty($user->getUsuario())){
    		throw new Exception('Empty User Name', 2001);
    	}
    	if($user->getEdad() <= 18){
    		throw new Exception('Insufficient Age User', 2002);
    	}
    }
}
