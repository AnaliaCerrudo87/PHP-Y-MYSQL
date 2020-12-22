# PHP-Y-MYSQL
Ejercicios realizados 

Los siguientes ejercicios fueron relizados durante el curso brindado por la UTN Resistencia en su cuerso Elearning, a continuación las consignas de cada unidad, se adjuntan tambien las base de datos realizadas.

Consignas

Unidad 1
•	Crear una tabla llamada "clases" con los siguientes datos:
o	id_clase INT(5) Clave primaria, autoincrementable
o	unidad VARCHAR (30)
o	fecha DATE
•	Abrir el archivo unidad1.php
•	Desarrollar 2 archivos:
o	insertar_clases.php
o	ver_clases.php
•	En el archivo insertar_clases.php
o	Recibir los datos del del formulario
o	Conectar con la base de datos e insertar los datos recibidos en la tabla "clases"
o	Redireccionar a ver_clases.php
•	En el archivo ver_clases.php
o	Mostrar el contenido de la tabla "clases"

Unidad2
•  Abrir el archivo unidad2.php 
•	Desarrollar un formulario de ingreso de datos con tres campos, día, mes y año. 
•  Crear un archivo calculo_fecha.php
•	Deberá recibir los datos del formulario y calcular cuántos días faltan para dicha fecha 
•	Mostrar el resultado en pantalla.

Unidad 3
•	Desarrollar un formulario con los siguientes campos:
o	Nombre y Apellido
o	Mail
o	Comentario
•  Desarrollar un archivo comentarios.php que reciba los datos enviados y los guarde en un archivo de texto junto con la fecha y la hora en que fueron enviados.  
•  Los datos del usuario junto con el comentario, deberán guardarse separados por una línea de puntos en un archivo de texto que deberá llamarse "comentarios.txt" y que deberá acumular los comentarios. 
•  Redireccionar al archivo unidad3.php que deberá mostrar debajo del formulario, los comentarios cargados en el archivo comentarios.txt

Unidad 4
•  Aplicar la imagen marca.png como marca de agua de una imagen a elección.
•  Crear un thumbnail de 150 x 150px de la imagen unidad4.jpg
•  Colocar ambas imágenes en el archivo unidad4.php

Unidad 5
•  Desarrollar un formulario de consulta con los siguientes datos:
•	Nombre
•	Apellido
•	Email
•	Consulta
•  El formulario debe tener un captcha.
•  Crear en nuestra base de datos, una tabla llamada "consultas" con los campos necesarios para insertar los datos del formulario. 
•  Desarrollar el archivo cargar.php: 
•	Verificar el código del Captcha. Si es correcto, cargar los datos del usuario en la tabla "consultas".

Unidad 6
•  Construir una clase usuarios.php que tenga: 
•	como propiedades: nombre, apellido y fecha_nacimiento 
•	como métodos: calcular_edad() e imprime_carcteristicas().
•  Las propiedades no pueden ser accedidas desde fuera de la clase. 
•  El método imprime_caracteristicas() deberá imprimir las características de la persona: nombre, apellido y edad, para lo cual se deberá utilizar el método calcular_edad(), que deberá ser propio de la clase no pudiendo ser accedido de forma externa.
•  Construir un script php llamado caract_usuarios.php que instancie la clase y llame al método imprime_caractersticas() para imprimir los datos.

Unidad 7
•  Crear una tabla llamada "compras" con los siguientes datos:
•	codigo:  int, clave primaria
•	producto: varchar(30)
•	descripcion: varchar(255)
•	precio: decimal (5,2)
•  Construir un carrito de compras orientado a objetos 
•  Pasos a seguir: 
•	Crear una clase producto que tenga  como propiedades o atributos los datos asociados al producto: código, producto, descripción y precio. 
•	Crear una clase carrito que tenga tres métodos asociados: introducir producto en el carrito, eliminar un producto del carrito y listar el contenido del carrito
•	El archivo unidad7.php deberá tener la lista de Productos ofrecidos con la posibilidad de poder seleccionarlos para introducirlos en el carrito.   
•	Al seleccionar un producto para introducir en el carrito deberán mostrar el contenido del carrito con la posibilidad de poder seleccionar dicho producto introducido para eliminarlo del mismo.

Unidad 8
•	Desarrollar un formulario de registro con los siguientes datos (direcciona a registrar.php):
o	Nombre
o	Apellido
o	Correo
o	Contraseña
•	Desarrollar un segundo formulario con los datos de acceso (direcciona a ingresar.php):
o	Correo
o	Contraseña
•  Crear una tabla 'usuarios_sitio' con los siguientes campos:
•	nombre VARCHAR (20)
•	apellido VARCHAR (50)
•	correo VARCHAR (100)
•	password VARCHAR (60)
•  Crear el archivo registrar.php 
•	Codificar la contraseña
•	Ingresar los datos a la tabla 'usuarios_sitio'
•	Utilizando PHPMailer enviar un mail al usuario con sus datos de acceso (usuario y password)
•  Crear el archivo ingreso.php
•	Verificar la contraseña codificada.
•	Verificar que el correo y la contraseña coincidan
•	Indicar un mensaje de éxito

