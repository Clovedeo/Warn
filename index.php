<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://kit.fontawesome.com/d1deff2e55.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="login/img/favicon.png">
</head>
<body>

	<form class="login_formulario" action="validar.php" method="post">
		<h1>Login</h1>
		<div class="contenedor">

			<div class="input-contenedor">
				<i class="fas fa-user icon"></i>
				<input type="text" name="usuario" placeholder="Usuario">
			</div>

			<div class="input-contenedor">
				<i class="fas fa-key icon"></i>
				<input type="password" name="contra" placeholder="Contraseña">
			</div>

			<input type="submit" value="Ingresar" class="button">

		</div>
	</form>

</body>
</html>