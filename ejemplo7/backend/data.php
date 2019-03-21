<?php 
class Data{
	
	public function __construct(){
		$data = [];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		if (empty($nombre) || empty($apellidos)) {
			array_push($data,array("mensaje" => "Rellene todos los campos"));
		}else{
			array_push($data,array("mensaje" => "Bienvenido " . $nombre ." ". $apellidos));
			
		}

		echo json_encode($data);
	}
}
new Data;
 ?>