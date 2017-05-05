<?php 

namespace App\Models; 

use \PDO;

class Main
{
	protected $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function getMainCategories()
	{
		$mainCategories = $this->db->query("
			SELECT 
				main_id as mainId,
				main_category as mainCategory
			FROM main
		");

		$mainCategories = $mainCategories->fetchAll(PDO::FETCH_OBJ);

		return $mainCategories;
	}

}
