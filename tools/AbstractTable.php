<?php
abstract class AbstractTable
{
	private $select = false;
	private $select_n = 0;
	public function save($obj){
		return get_class($obj).'::'. __FUNCTION__ .'()';
	}
	public function delete($obj){
		return get_class($obj).'::'. __FUNCTION__ .'()';
	}
	public function update($obj){
		return get_class($obj).'::'. __FUNCTION__ .'()';
	}
	public function select(){
		if(is_array($this->select) && count($this->select)>0){
			return $this->select[$this->select_n++];
		}
		return $this->select;
	}
	public function setSelect($select){
		$this->select_n = 0;
		$this->select = $select;
	}
}
