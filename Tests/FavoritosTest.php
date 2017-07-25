<?php
class FavoritosTest
{
	public function __construct(){
		Printer::file(__FILE__);
	}
	public function run(){
		$favorito = new Favoritos();
		$user = new Usuarios();
		try{
			//test case empty object
			$user->setSelect(['','']);
			$favoritosController = new FavoritosController($user);
			Printer::ok($favoritosController->create($favorito), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case Owner Setted Favorite empty
			$user->setSelect(['Owner exists','']);
			$favoritosController = new FavoritosController($user);
			Printer::ok($favoritosController->create($favorito), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case Owner Empty Favorite Setted
			$user->setSelect(['','Favorite exists']);
			$favoritosController = new FavoritosController($user);
			Printer::ok($favoritosController->create($favorito), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case Owner Full
			$user->setSelect(['Owner exists','Favorite exists']);
			$favoritosController = new FavoritosController($user);
			Printer::ok($favoritosController->create($favorito), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case Owner Full
			$user->setSelect(['Owner exists','Favorite exists']);
			$favoritosController = new FavoritosController($user);
			Printer::ok($favoritosController->delete($favorito), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case Owner Full
			$user->setSelect(['Owner exists','Favorite exists']);
			$favoritosController = new FavoritosController($user);
			Printer::ok($favoritosController->update($favorito), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
	}
}