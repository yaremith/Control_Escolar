<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloActualizarGrupos.css">
        <link rel="stylesheet" href="fonts/style.css">
        <title>Insertar Alumnos</title>
        <script type="text/javascript">
        </script>
    </head>
    
    
        
    <!-----
---------------------------------------Menú---------------------------------------------------------------------------------->

    <body>	
        <form name="FrmInsertarGrupos" method="post" action="../Scrips/PaginaInsertarGrupo.php">
             <div id="header">
		<div class="logotipo">
                    <img src="../imagenes/logo.gif" width="300px" alt="">
		</div>

                <div class="fecha">
                    <table width="100%" border="0">
			<tr>
                            <td width="60%">
                                <h1><span class="icon-graduation"></span>  Insertar Grupos  </h1>
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

<!------------------------------------------------Datos-------------------------------------------------------------------------------->
			
				
									
<!-------------------------------------------BuscarGrupo & NuevosDatos---------------------------------------------------------------->									

            <table width="100%"  border="0">
		<tr>
                    <td width="50%">
			<div class="contenedor">
                            <table width="100%" border="0">
                            <tr>
				<td>	
                                    <div class="InsertarGrupo">
                                    <h3><span class="icon-search"></span> Datos del Grupo </h3>
					<table border="0">
					<tr>
					<td width="30%">
					Clave: 
					</td>
                                        <td width="70%">
                                            <input type = "text" name = "TB_ClaveGrupo" maxlength = "10">
					</td>
					</tr>
					<tr>
					<td width="30%">
					Materia: 
					</td>
					<td width="70%">
                                            <input type = "text" name = "TB_MateriaGrupo" maxlength = "50">
					</td>
					</tr>
					<tr>
					<td width="30%">
					Id Carrera: 
					</td>
					<td width="70%">
                                            <input type = "number" name = "TB_IdCarrera">
					</td>
					</tr>
					<tr>
					<td width="30%">
                                        Matricula del Docente: 
                                        </td>
                                        <td width="70%">
                                            <input type = "text" name = "TB_MatriculaDocente" maxlength = "10">
                                        </td>
					</tr>
                                        <tr>
					<td width="30%">
					Dia: 
                                        </td>
					<td width="70%">
                                            <input type = "number" name = "TB_Dia">
					</td>
					</tr>
                                        <tr>
					<td width="30%">
					Hora de inicio: 
					</td>
					<td width="70%">
                                            <input type = "number" min="1" max="24" name = "TB_HoraInicio">
					</td>
                                        </tr>
                                        <tr>
					<td width="30%">
					Hora de fin: 
					</td>
					<td width="70%">
                                            <input type = "number" min="1" max="24" name = "TB_HoraFin">
					</td>
					</tr>
					<tr>
					<td width="30%">
					Id Salon:
					</td>
					<td width="70%">
                                            <input type = "number" name = "TB_IdSalon">
                                        </td>
					</tr>
					<tr>
					<td colspan="2" align="Center">
                                            <input type = "submit" name = "Btn_InsertarGrupo" value = "Insertar">
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