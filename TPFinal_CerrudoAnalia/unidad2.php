<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Ejercicio Unidad 2</h2>
		<h3>Calcular cuántos días faltan para la fecha ingresada </h3>

		<div>
			<form method="POST" action="calculo_fecha.php">
		 	<p>Ingrese dia</p><select name="dia">
   								<option>01</option> 
  								<option >02</option> 
   								<option >03</option>
   								<option >04</option>
  								<option >05</option> 
   								<option >06</option> 
   								<option>07</option> 
  								<option >08</option> 
   								<option >09</option>
   								<option >10</option>
  								<option >11</option> 
   								<option >12</option> 
   								<option>13</option> 
  								<option >14</option> 
   								<option >15</option>
   								<option >16</option>
  								<option >17</option> 
   								<option >18</option> 
   								<option>19</option> 
  								<option >20</option> 
   								<option >21</option>
   								<option >22</option>
  								<option >23</option> 
   								<option >24</option> 
   								<option>25</option> 
  								<option >26</option> 
   								<option >27</option>
   								<option >28</option>
  								<option >29</option> 
   								<option >30</option> 
   								<option >31</option> 
							</select>
		 	<p>Ingrese mes</p><select name="mes">
   								<option>01</option> 
  								<option >02</option> 
   								<option >03</option>
   								<option >04</option>
  								<option >05</option> 
   								<option >06</option> 
   								<option>07</option> 
  								<option >08</option> 
   								<option >09</option>
   								<option >10</option>
  								<option >11</option> 
   								<option >12</option> 
   							</select>
		 	<p>Ingrese año</p><input type="number" name="anio" min="2020" >
		 
		 	<input type="submit" value="Calcular fecha">
		</div>

		<?php if(isset($_GET['error'])) {

    echo "<h3>Error, ingresar fecha posterior a la actual</h3>";
        }

    if(isset($_GET['dias'])) {echo "<h3>Los dias restantes para llegar a la fecha ingresada son:". $_GET['dias']."</h3>";}
  

  

    ?>
	</section>

	
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>