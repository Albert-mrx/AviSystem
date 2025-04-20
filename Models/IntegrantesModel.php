<?php 
class IntegrantesModel extends Query{
	private  $foto,$dni, $nombre,$apellidos,$fecha_nac,$genero,$celular,$email,$direccion,$rol,$password,$estado,$id;
	public function __construct()
	{
		parent::__construct();
	}
	/*aqui obtine el usuario para el login*/
	public function getIntegrante(string $user_name, string $password)
	{
		$sql = "SELECT * FROM tb_validacion WHERE user_name='$user_name' AND password='$password'";
		$data = $this->select($sql);
		return $data;
	}


}
?>