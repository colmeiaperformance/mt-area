<?php
	
namespace MtArea\Services\Model;

require_once("Model.php");

class ShoppingCart extends Model
{
	protected $tableName = 'shopping_cart';
	protected $columns = ['id', 'created_at', 'valor', 'operação', 'tipo', 'tipo_compra', 'ini', 'nome', 'de_onde_e'];
	
	public function __construct()
	{
	
	}
	
	public function all()
	{
		return parent::select()->getAll();
	}
	
	public function add($values)
	{
		return parent::insert($values);
	}
	
	public function remove()
	{
	
	}
}