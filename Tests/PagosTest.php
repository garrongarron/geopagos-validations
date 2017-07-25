<?php
class PagosTest
{
	public function __construct(){
		Printer::file(__FILE__);
	}
	public function run(){
		$pagos = new Pagos();
		$pagosController = new PagosController();
		try{
			//test case empty object
			Printer::ok($pagosController->create($pagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		try{
			//test case no date setted
			$pagos->setImporte(1);
			Printer::ok($pagosController->create($pagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
		try{
			//test case date Before today
			$pagos->setImporte(1);
			$pagos->setFecha(0);
			Printer::ok($pagosController->create($pagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
		try{
			//test case date after today
			$pagos->setImporte(1);
			$pagos->setFecha(3);
			Printer::ok($pagosController->create($pagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
		try{
			//test case date after today
			$pagos->setImporte(1);
			$pagos->setFecha(3);
			Printer::ok($pagosController->delete($pagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
		
		try{
			//test case date after today
			$pagos->setImporte(1);
			$pagos->setFecha(3);
			Printer::ok($pagosController->update($pagos), __LINE__);
		} catch (Exception $e) {
			Printer::err($e, __LINE__);
		}
	}
}