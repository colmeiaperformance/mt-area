<?php
	
namespace MtArea\Services\Model;

use MtArea\Services\Database\Database;

abstract class Model extends Database
{
	protected $tableName;
	protected $columns = [];
	private $sql = "";
	protected $primaryKey = 'id';
	
	public function __construct()
	{
	
	}
	
	public function select($columns = '*')
	{
		$this->sql = "SELECT $columns FROM ". parent::$prefix . $this->tableName;
		
		return $this;
	}
	
	public function getAll() {
		return parent::getResults($this->sql);
	}

	public function insert($values = [])
	{
		$sql = "INSERT INTO ". parent::$prefix . $this->tableName . "VALUES (";
		
		foreach ($values as $key => $value) {
				$sql .= $value. ',';
		}
		
		$sql[strlen($sql) - 1] = ')';
		
		return parent::execSql($sql);
	}
	
	public function update()
	{
		parent::execSql('');
	}
	
	public function delete()
	{
		parent::execSql('');
	}
	
	public function leftJoin($table, $colum1, $parameter, $colum2)
	{
		$this->sql .= '';
		
		return $this;
	}
}