<?php
	
	class usuarios {

		private $nombre;
		private $apellido;
		private $fecha_nacimiento;


		function __construct($n,$a,$f){

			$this->nombre=$n;
			$this->apellido=$a;
			$this->fecha_nacimiento=$f;


		}

		public function getNombre(){

			$this->nombre;
		}

		public function getApellido(){

			$this->apellido;
		}

		public function getFecha(){

			$this->fecha_nacimiento;
		}

		

		private function calcular_edad(){

			$fecha_actual=date("Y-m-d");
			$fecha_i = date_create_from_format('Y-m-d', $this->fecha_nacimiento);

			$s = strtotime($fecha_actual)-strtotime($this->fecha_nacimiento);
			
			$d = intval($s/31536000);
           
           return $d;



		}

		public function imprime_caracteristicas(){


			echo "<p> El nombre ingresado es: ".$this->nombre;
			echo "<p> El apellido ingresado es: ".$this->apellido;
			echo "<p> La edad del usuario es : ".$this->calcular_edad(). " años";

		}
	}

?>