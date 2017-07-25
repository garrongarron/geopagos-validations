<?php
class UsuariosTest
{
	public function __construct(){
		Printer::file(__FILE__);
	}
	public function run(){
		$user = new Usuarios();
		$usuariosController = new UsuariosController();
		try{
			//test case empty object
			Printer::ok($usuariosController->create($user), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case empty age
			$user->setUsuario('fede');
			Printer::ok($usuariosController->create($user), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case lower age
			$user->setEdad(17);
			Printer::ok($usuariosController->create($user), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}

		try{
			//test case pass validations create method
			$user->setEdad(19);
			Printer::ok($usuariosController->create($user), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case pass validations delete method
			Printer::ok($usuariosController->delete($user), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case pass validations update method
			Printer::ok($usuariosController->update($user), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
	}
}