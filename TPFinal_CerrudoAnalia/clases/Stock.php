<?php
class Stock {
	//creamos la variable de clase db
	private $db;
	
	//creamos el constructor
	public function __construct($base){
		$this->db = $base;
	}

	// public function __destruct() {
	// 	$this->db = null;
	// }

	//creamos una propiedad para insertar productos
	public function insertProducto($codigo,$nombre,$descripcion,$precio){
	//ejecutamos la función enviarQuery declarada en BasedeDatosmysqli		
		$respuesta = $this->db->enviarQuery("INSERT INTO compras values ($codigo, '$nombre', '$descripcion', $precio) ");		
		
		if (!$respuesta){
			echo $this->db->error; 
			return false;
		}
		else{
			return $respuesta;
		}
	}
	
	
	public function getProductos(){
		//echo $this->db->error; 
		$respuesta = $this->db->enviarQuery("SELECT * FROM productos");
		if (!$respuesta and $this->db->error!=''){
			echo $this->db->error; 
			return false;
		}
		else{
			if (!$respuesta){
				return false;
			}
			else {
				return $respuesta;
			}
		}
	}

	public function getProducto($codigo){
		//echo $this->db->error; 
		$respuesta = $this->db->enviarQuery("SELECT * FROM productos WHERE codigo = $codigo");
		if (!$respuesta and $this->db->error!=''){
			echo $this->db->error; 
			return false;
		}
		else{
			if (!$respuesta){
				return false;
			}
			else {
				return $respuesta;
			}
		}
	}
	
	public function updateProducto($idproducto,$nombre,$descripcion,$precio){		
		$respuesta = $this->db->enviarQuery("UPDATE productos SET producto = '$nombre',
																  descripcion = '$descripcion',
																  precio = $precio
															  WHERE codigo = $idproducto");
		
		
		if (!$respuesta and $this->db->error!=''){
			echo $this->db->error; 
			return false;
		}
		else{
			if (!$respuesta){
				return true;
			}
			else {
				return $respuesta;
			}
		}
	}
	
	public function deleteProducto($idproducto){		
		$respuesta = $this->db->enviarQuery("DELETE FROM productos WHERE codigo = $idproducto");	
		
		if (!$respuesta and $this->db->error!=''){
			echo $this->db->error; 
			return false;
		}
		else{
			return $respuesta;
		}
	}
	
}
?>