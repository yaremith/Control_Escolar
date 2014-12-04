<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/estilosLogin.css">
		<link rel="stylesheet" href="fonts/style.css">

	</head>
	
	<body>							
		<div class="contenedor">
			<div class="login">
				<h2><span class="icon-cog"></span> Iniciar </h2>
                                <form name="frmUno" method="post" action="PagLogin.php">

					<label id="lblUsuario">Usuario</label>
					<input name="txtUsuario" type="text"/>
					<label id="lblUsuario">Password</label>
					<input name="txtContrasena" type="password"/>
					<input value="Aceptar" name="btnAceptar" id="btnAceptar" type="submit"/>
					<input value="Cancelar" name="btnCancelar" id="btnCancelar" type="submit"/>
				</form>
			</div>
		</div>
	</body>
</html>
    