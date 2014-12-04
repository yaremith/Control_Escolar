<!doctype html>
<html lang = "es">
	<head>
		<meta charset = "utf-8"/>
		<link rel="stylesheet" type="text/css" href="../css/estiloMenu.css">
		<link rel="stylesheet" type="text/css" href="../css/estiloActualizarGrupos.css">
		<link rel="stylesheet" href="fonts/style.css">
		<script type="text/javascript">

		function SoloNumeros()
		{
			if ((event.keyCode < 48) || (event.keyCode > 57))
			{
				event.returnValue = false;	
				alert ("Error: Sólo números");
			} 
		}
		</script>
	</head>

<!----------------------------------------------Menú---------------------------------------------------------------------------------->

	<body>
		<form name = "Form_ActGrupos" method = "post" action = "../Scrips/ActualizarGrupos.php">
			
			<div id="header">
				<div class="logotipo">
						<img src="../imagenes/logo.gif" width="300px" alt="">
				</div>

				<div class="fecha">
					<table width="100%" border="0">
						<tr>
							<td width="60%">
								<h1><span class="icon-graduation"></span>  Actualizar Grupos </h1>
							</td>
							<td>
								<font size="1">
									<script languaje="JavaScript"> 
										var mydate=new Date() 
										var year=mydate.getYear() 
										if (year < 1000) 
												year+=1900 
										var day=mydate.getDay() 
										var month=mydate.getMonth() 
										var daym=mydate.getDate() 
										if (daym<10) 
												daym="0"+daym 
										var dayarray=new Array("Domingo,","Lunes,","Martes,","Miércoles,","Jueves,","Viernes,","Sábado,")
										var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
										document.write("<font color=#8B4513 face='Verdana' style='font-size:11pt'  font-weight: 'bold'>"+dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year+"</font>") 
									</script>
								</font>
							</td>
										
						</tr>
					</table>
				</div>

				
				<!--<center> <h1> Inicio </h1> </center>-->
				<ul class="nav">
					<li><a href="../FrmIndex.php"><span class="icon-house"></span> Inicio</a></li>
					<li><a href=""><span class="icon-users"></span> Grupo</a>
						<ul>
							<li><a href="FrmInsertarGrupos.php">Alta</a></li>
							<li><a href="FrmBorrarGrupos.php">Baja</a></li>
							<li><a href="FrmActualizarGrupos.php">Actualizar</a></li>
						</ul>
					</li>
					<li><a href=""><span class="icon-user"></span> Alumno</a>
                            <ul>
                                <li><a href="FrmInsertarAlumno.php">Alta</a></li>
                                <li><a href="FrmActualizarEstatusAlumno.php">Baja</a></li>
                                <li><a href="FrmActualizarAlumno.php">Actualizar</a></li>
                            </ul>
			</li>
			<li><a href=""><span class="icon-pencil"></span> Inscripción</a>
                            <ul>
                                <li><a href="FrmInscripciones.php">Inscribir</a></li>
                            </ul>	
			</li>	
                        <li><a href="../Scrips/PagCerrarSesion.php"><span class=" icon-lock"></span> Cerrar Sesión</a> 
                        </li>					
				</ul>
			</div>
								
		
<!-------------------------------------------BuscarGrupo & NuevosDatos---------------------------------------------------------------->	

		<table width="100%"  border="0">
						
			<tr>
				<td width="50%">
					<div class="contenedor">
						<table width="100%" border="0">
							<tr>
								<td>
									<div class="BuscarGrupo">
										<h3><span class="icon-search"></span> Buscar Grupo </h3>
										<table border="0">
											<tr>
												<td width="20%">
													Clave del Grupo:
												</td>
												<td width="70%">
													<input type = "text" name = "TB_ClaveGrupoBuscar" maxlength = "10">
												</td>

												<td>
													<input type = "submit" name = "Btn_BuscarGrupo" value = "Buscar">
												</td>
											</tr>

										<!--
											<tr>
												<td colspan="3">
													<textarea name = "TB_Resultado" cols = "190px" rows = "3" disabled="true" style="width:100%; height:130px"> </textarea>
													<br></br>
												</td>
											</tr>
										-->
										</table>
									</div>
								</td>
							</tr>			
							
						</table>
					</div>
				</td>
				
				<td width="50%">
					<div class="contenedor">
						<table width="100%" heigh="500" border="0">
							<tr>
								<td>
									<div class="NuevosDatos">
									<h3><span class=" icon-plus2"></span> Nuevos Datos </h3>
									<table width="1000" heigh="500" border="0">
										<tr>
											<td width="30%">
												Clave:
											</td>
											<td width="70%">
												<input type = "text" name = "TB_ClaveGrupoActualizar" maxlength = "10" width="50%">
											</td>
										</tr>
										<tr>
											<td width="30%">
												Materia:
											</td>
											<td width="70%">
												<input type = "text" name = "TB_MateriaGrupo" maxlength = "50"  width="50%">
											</td>
										</tr>
										<tr>
											<td width="30%">
												Id Carrera:
											</td>
											<td width="70%">
												<input type = "text" name = "TB_IdCarrera"  width="50%" onkeypress = "SoloNumeros()">
											</td>
										</tr>
										<tr>
											<td width="30%">
												Matricula del Docente:
											</td>
											<td width="70%">
												 <input type = "text" name = "TB_MatriculaDocente" maxlength = "10"  width="50%">
											</td>
										</tr>
										<tr>
											<td colspan="2" align="Center">
												<input type = "submit" name = "Btn_ActualizarGrupo" value = "Actualizar">
											</td>
										</tr>
									</table>

									</div>
								</td>
								
							</tr>
						</table>
	
					</div>
				</td>
			</tr>
		</table>
	</form>

	<footer>
		<p><span class="icon-cog"></span> Gestión de proyectos 2014 <span class="icon-cog"></span></p>
	</footer>

	</body>
</html>