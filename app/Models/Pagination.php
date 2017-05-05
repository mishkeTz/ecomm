<?php  

namespace App\Models; 

use \PDO;

class Pagination
{
	protected $db;

	public $pageRows = 5;

	public $rowsNum;
	public $pageNum;
	public $lastPage;

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function getNumRows($categoryId, $pageNum)
	{
		$rows = $this->db->prepare("
			SELECT count(vehicle_id) as rowsNum
			FROM vehicle
			WHERE category_id = :categoryId
		");

		$rows->execute([
			"categoryId" => $categoryId
		]);

		$rows = $rows->fetch(PDO::FETCH_OBJ);
		
		$this->rowsNum = $rows->rowsNum;
		$this->pageNum = $pageNum;

		$this->checkPag();
	}

	protected function checkPag() 
	{
		$this->lastPage = ceil($rowsNum/$pageRows);

		if ($this->lastPage < 1) {
			$this->lastPage = 1;
		}

		if ($this->pageNum < 1) {
			$this->pageNum = 1;
		} else if ($this->pageNum > $this->lastPage) {
			$this->pageNum = $this->lastPage;
		}

		$limit = 'LIMIT ' . ($this->pageNum - 1) * $this->pageRows . ', ' . $this->pageRows;
	}
}
