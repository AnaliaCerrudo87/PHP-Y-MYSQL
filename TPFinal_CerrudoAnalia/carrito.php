<?php

//require 'clases/BasedeDatosmysqli.php';
require 'clases/Stock.php';
require 'define.php';

//$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
//$producto = new Stock($base);

//$producto->insertProducto($_POST['nombre'], $_POST['descripcion'],$_POST['precio']);
class Carrito extends Stock{
	
	public $db; //= new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
    //public $producto ;//= new Producto($base);

public function __construct($base){
		$this->db = $base;
		//$this->producto = new Stock($base);
	}

	public function agregarCarrito($codigo,$nombre,$descripcion,$precio){

			
		$respuesta = $this->db->enviarQuery("INSERT INTO compras values ($codigo, '$nombre', '$descripcion', $precio)");		
		
		if (!$respuesta){
			echo $this->db->error; 
			return false;
		}
		else{
			return $respuesta;
		}
	}

	public function getCarrito(){
		//echo $this->db->error; 
		$respuesta = $this->db->enviarQuery("SELECT * FROM compras");
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

	public function deleteCarrito($idproducto){		
		$respuesta = $this->db->enviarQuery("DELETE FROM compras WHERE codigo = $idproducto");	
		
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