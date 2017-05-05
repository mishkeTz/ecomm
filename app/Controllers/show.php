<?php  

namespace App\Controllers;

use App\Core\Controller;

class Show extends Controller
{
	public function category($categoryId)
	{
		$manModel = $this->model("Category");

		$mainModel = $this->model("Main");
		$mainCategories = $mainModel->getMainCategories();

		$categories = $manModel->getCategories($categoryId);

		$this->view("_template/_header");

  		$this->view('category/index', [
  			"categories" => $categories, 
  			"mainCategories" => $mainCategories
  		]);

		$this->view("_template/_footer");
	}

	public function items($cateogryId)
	{
		echo "Category list items";
	}
}

