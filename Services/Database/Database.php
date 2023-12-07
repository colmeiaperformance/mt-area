<?php
	
namespace MtArea\Services\Database;

class Database
{
	protected static $prefix = 'mt_';
	
	public function __construct()
	{
		// Create tables
		
		// Movements Table
		self::createTable('movements', "
			id int(11) NOT NULL AUTO_INCREMENT,
	    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	    valor double NOT NULL,
	    operacao enum('+', '-') NOT NULL,
	    tipo enum('C', 'D', 'P') NOT NULL COMMENT 'C - Crédito, D - Débito, P - Pix',
	    tipo_compra varchar(100) NOT NULL,
	    ini varchar(50) NOT NULL,
	    nome varchar(100) NOT NULL,
	    de_onde_e varchar(100) NOT NULL,
	    PRIMARY KEY (id)");
		
		// password_resets Table
		self::createTable('password_resets', "
			id int(11) NOT NULL AUTO_INCREMENT,
	    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	    PRIMARY KEY (id)");
		
		// shopping_cart Table
		self::createTable('shopping_cart', "
			id int(11) NOT NULL AUTO_INCREMENT,
			created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	    user_id int(11) NOT NULL,
	    post_id int(11) NOT NULL,
	    PRIMARY KEY (id),
	    KEY `fk_shopping_cart_user` (`user_id`),
	    KEY `fk_shopping_cart_post` (`post_id`),
      CONSTRAINT `fk_shopping_cart_user` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON UPDATE CASCADE ON DELETE RESTRICT,
      CONSTRAINT `fk_shopping_cart_post` FOREIGN KEY (`post_id`) REFERENCES `wp_posts` (`ID`) ON UPDATE CASCADE ON DELETE RESTRICT");
	}
	
	static function close()
	{
		// Delete tables
		
		// Movements Table
		self::dropTable('movements');
		self::dropTable('password_resets');
		self::dropTable('shopping_cart');
	}
	
	static function createTable($name, $sqlColuns)
	{
		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		
		$table_name = self::$prefix  . $name;
		
		$sql = "CREATE TABLE $table_name (
	    $sqlColuns
		) $charset_collate;";
		
		self::execSql($sql);
	}
	
	static function dropTable($name)
	{
		$table_name = self::$prefix . $name;
		$sql = "DROP TABLE $table_name;";
		self::execSql($sql);
	}
	
	static function execSql($sql)
	{
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
	
	static function getResults($sql)
	{
		global $wpdb;
		$result = $wpdb->get_results($sql);
		
		return $result;
	}
}