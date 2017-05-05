<?php 

namespace App\Models; 

use \PDO;

class Category
{
	protected $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function getCategories($categoryId)
	{
		$categories = $this->db->prepare("
			SELECT 
				category_id as categoryId,
				name as categoryName
			FROM category
			WHERE main_id = :categoryId
		");

		$categories->execute([
			"categoryId" => $categoryId
		]);

		$categories = $categories->fetchAll(PDO::FETCH_OBJ);

		return $categories;
	}

}
