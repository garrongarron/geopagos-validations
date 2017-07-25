<?php
class Printer
{
	static private $msgCollector = [];
	static function ok($msg, $__LINE__ ){
		array_push(self::$msgCollector, "Line: ". $__LINE__. ' - '.$msg."</b>");
	}
	static function err($e, $__LINE__ ){
		array_push(self::$msgCollector,
		"Line: ". $__LINE__. ' - Error '. $e->getCode().': <b>'.  $e->getMessage()."</b>");
	}
	static public function show(){
		foreach (self::$msgCollector as $v)
			echo $v.'<br>';
	}
	static public function file($file){
		array_push(self::$msgCollector,"File: <b>$file</b>");
	}
}