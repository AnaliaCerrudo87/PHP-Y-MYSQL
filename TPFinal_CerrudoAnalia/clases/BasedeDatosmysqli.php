<?php
class BasedeDatosmysqli{
	//creo las variables de clase
	private $conexion;
	public $error;
	
	//creo el constructor que recibe los 4 parámetros para la conexion
	public function __construct($servidor,$usuario,$password,$base){
		if (!$this->_connect($servidor,$usuario,$password,$base)){
			$this->error = $this->conexion->connect_error;
		}
		//$this->setNames();
	}
	
	// uso un descructor para cerrar la conexión
	public function __destruct(){
		$this->conexion->close();
	}
	
	// creo la propiedad conect
	private function _connect($servidor,$usuario,$password,$base){
		$this->conexion = new mysqli($servidor,$usuario,$password,$base);
		if (!$this->conexion->connect_errno){
			$this->error = $this->conexion->connect_error;
			return false;
		}
		
	}

	// private function setNames(){
	// 	$this->conexion->query('SET NAMES utf8');		
	// }

	// creamos las funciones para el QUERY
	
	public function enviarQuery($query){
		// usamos la funcion substr para obtener la instruccion de SQL. (palabra, inicio, cantidad). Las 4 instrucciones de MYSQL tienen 6 letras
		$tipo = strtoupper(substr($query,0,6));
		
		//usamos un switch para determinar que instruccion usar
		switch ($tipo){
			case 'SELECT':
				$resultado = $this->conexion->query($query);
				if (!$resultado){
					$this->error = $this->conexion->error;
					return false;
				}
				else{
					// if ($this->conexion->affected_rows == 0){
					// 	return false;
					// }
					// else{
						while ($fila = $resultado->fetch_assoc()){
							$array_resultado[] = $fila;
						}
						return $array_resultado;
					//}
				}
				break;
			case 'INSERT':
				$resultado = $this->conexion->query($query);
				if (!$resultado){
					$this->error = $this->conexion->error;
					return false;
				}
				else{
					//La función mysqli_insert_id() devuelve el ID generado por una query (normalmente INSERT) en una tabla con una columna que tenga el atributo AUTO_INCREMENT.
					return $this->conexion->insert_id;
				}
				break;
			case 'UPDATE':			
			case 'DELETE':
				$resultado = $this->conexion->query($query);
				if (!$resultado){
					$this->error = $this->conexion->error;
					return false;
				}
				else{
					//Obtiene el número de filas afectadas en la última operación MySQL
					return $this->conexion->affected_rows;
				}		
				break;
			default:
				$this->error = "Tipo de consulta no permitida";
		}
	}
	
}
?>