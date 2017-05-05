<?php  

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{
	public function index()
	{
		$mainModel = $this->model("Main");

		$mainCategories = $mainModel->getMainCategories();
	
		$this->view("_template/_header");
  		$this->view('home/index', [
  			"mainCategories" => $mainCategories
  		]);
		$this->view("_template/_footer");
	}

}

