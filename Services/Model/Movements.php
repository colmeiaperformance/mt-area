<?php
	
namespace MtArea\Services\Model;

require_once("Model.php");

class Movements extends Model
{
	protected $tableName = 'movements';
	protected $columns = ['id', 'created_at', 'user_id', 'post_id'];
	
	public function __construct()
	{
	
	}
	
	public function all()
	{
		return parent::select()->getAll();
	}
	
	public function getTotal()
	{
		$total = 0;
		
		$results = $this->all();
		
		foreach ($results as $result) {
			$total += $result->operacao === '+' ? $result->valor : 0;
		}
		
		return $total;
	}
}