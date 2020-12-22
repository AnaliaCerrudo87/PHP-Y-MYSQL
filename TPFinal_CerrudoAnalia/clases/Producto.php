<?php

	class Producto {

		public $nombre;
		public $codigo;
		public $descripcion;
		public $precio;

		function __construct($c,$n,$d,$p){
			$this->codigo=$c;
			$this->nombre=$n;
			$this->descrpcion=$d;
			$this->precio=$p;

	}
}
?>