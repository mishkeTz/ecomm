<?php  

namespace App\Controllers;

class Contact extends Controller
{
	public function index()
	{
		$contact = $this->model("Contactus");

		$this->view("contact/index", ["contactEmail" => $contact->email]);
	}
}


