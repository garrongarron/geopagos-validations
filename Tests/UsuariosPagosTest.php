<?php
class UsuariosPagosTest
{
	public function __construct(){
		Printer::file(__FILE__);
	}
public function run(){
		$usuariosPagos = new UsuariosPagos();
		
		try{
			//test case empty object
			$user = new Usuarios();
			$usuarioPagosController = new UsuariosPagosController($user);
			Printer::ok($usuarioPagosController->create($usuariosPagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
		try{
			//test case pay user setted
			$user->setSelect('setted');
			$usuarioPagosController = new UsuariosPagosController($user);
			Printer::ok($usuarioPagosController->create($usuariosPagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
		try{
			//test case pay user setted
			$user->setSelect('setted');
			$usuarioPagosController = new UsuariosPagosController($user);
			Printer::ok($usuarioPagosController->delete($usuariosPagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
		try{
			//test case pay user setted
			$user->setSelect('setted');
			$usuarioPagosController = new UsuariosPagosController($user);
			Printer::ok($usuarioPagosController->update($usuariosPagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
	}
}