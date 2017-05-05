<?php  

namespace App\Core;

use \PDO;
use \App\Config\Database;

class Controller extends Database
{
	public function __construct() {}

	protected function model($model)
	{
		require_once '../app/models/' . $model . '.php';

		$model = "\\App\\Models\\" . $model;
		
		return new $model(parent::getDB());
	}

	protected function view($view, array $data = [], $title = 'Home')
	{
		#require_once '../app/views/_template/_header.php';
		require_once '../app/views/' . $view . '.php';
		#require_once '../app/views/_template/_footer.php';
	}
}


