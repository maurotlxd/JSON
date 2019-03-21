<?php 

class Data{
	
	public function __construct(){
		
		$data = array('informacion' =>
							array(
								array("nombre" => "Mauro Enrique","apellidos" => "Canales Zapata","edad" => 22, "deportes" => array("futbol","tenis")),
								array("nombre" => "Juan","apellidos" => "Canales Zapata","edad" => 20, "deportes" => array("futbol","basquet")),
								array("nombre" => "Gris Marianela","apellidos" => "Canales Zapata","edad" => 26, "deportes" => array("futbol","basquet","Voley"))
							));

		echo json_encode($data);
	}
}
new Data;
 ?>