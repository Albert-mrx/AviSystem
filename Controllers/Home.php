<?php
class Home extends Controller
{
	public function __construct()
	{
		
		if (!empty($_SESSION["activo"])) {
			header("location: ".base_url. "Dashboard");
		}
		parent::__construct();
		
	}

	public function index()
	{
		$this->views->getView($this, "index");
	}
	
}