<!DOCTYPE html>
<html>
	<head>
		<title>Generador Algoritmos</title>
		<link href = "style.css" rel = "stylesheet"/>
		<script src = "script.js"></script>
		<link rel="shortcut icon" href="icon/robot.ico"/>
	</head>
	<body>
		<header id = "cabecera">
		<img id = "logo" src="http://www.usil.edu.pe/sites/default/files/logo-usil_0_0.png"/>
		<div id = "titulo">
			Generador de Algoritmos
		</div>
		</header>
		<div class="clear"></div>
		<section id = "body">
		<form action = "procesar_parametros.php" method = "get">
			<div id = "parametros">
				<div class = "linea" id = "izquierda1">
						<label for="lenguaje">Lenguaje: </label>
						<select name="lenguaje">
							<option value="0"></option>
							<option value="1">Python</option>
							<option value="2">Java</option>
							<option value="3">Javascript</option>
							<option value="4">C#</option>
						</select>
				</div>
				
				<div class = "linea" id = "derecha1">
						<label for="algoritmo">Algoritmo: </label>
						<select name="algoritmo">
							<option value="0"></option>
							<option value="1">Hola Mundo</option>
							<option value="2">Fibonacci</option>
							<option value="3">Verificar Primo</option>
							<option value="4">Tabla de Multiplicar</option>
						</select>
				</div>
			</div>
			<div class="clear"></div>
			
			<div class="linea">
					<label for="mensaje">Código: </label>
					<textarea cols = "200" rows="5000" name="mensaje" id="mensaje"></textarea>
			</div>
			
			<div class="linea" id = "submit" onclick="clickFunction();">
					<input type="submit" value="Procesar">
			</div>
			<div id = "tup" onclick="upFunction();">
				<a href="#"><img class = "timg" src="images/tup.jpg" height=35 width=38/></a>
			</div>
			<div id = "tdown" onclick="downFunction();">
				<a href="#"><img class = "timg" src="images/tdown.jpg" height=35 width=38/></a>
			</div>
		</form>
		</section>
	</body>
</html>