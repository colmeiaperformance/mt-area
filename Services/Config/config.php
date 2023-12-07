<?php

use MtArea\Services\Database\Database;
require_once (get_template_directory() . '/Services/Database/Database.php');

function initial()
{
	$db = new Database();
}
add_action('after_switch_theme', 'initial');

function close()
{
	Database::close();
}
add_action('switch_theme', 'close');