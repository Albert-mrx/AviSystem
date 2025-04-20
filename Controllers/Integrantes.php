<?php


class Integrantes extends Controller
{

	public function __construct()
	{
		
		parent::__construct();
	}
	public function index()
	{
		if (empty($_SESSION["activo"])) {
			header("location: " . base_url);
		}
		$this->views->getView($this,"index");
	}
	/**aqui valida el usuario */
	public function validar()
	{
		if (empty($_POST['usuario']) || empty($_POST['password'])) {
			$msg = "Los campos no pueden estar Vacios";
		} else {
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$hash = hash("SHA256", $password);
			$data = $this->model->getIntegrante($usuario, $hash);
			if ($data) {
				$_SESSION['user'] = $data['id_user'];
				$_SESSION['name'] = $data['user_name'];
				$_SESSION['activo'] = true;
				$msg = "ok";
			} else {
				$msg = "El Usuario y la Contraseña no Coinciden";
			}
		}
		echo json_encode($msg, JSON_UNESCAPED_UNICODE);
		die();
	}
	public function salir()
	{
		session_destroy();
		header("location: " . base_url);
	}
}


?>