
<html>
	<head>	
		<meta charset="UTF-8">		
		<title>Control alumnado</title>
		<link rel="stylesheet" type="text/css" href="css/estiloActualizarGrupos.css">
		<link rel="stylesheet" type="text/css" href="css/estiloMenu.css">		
		<link rel="stylesheet" href="fonts/style.css">


		<body>
        <form name="Form_Inicio">
                
                
            <div id="header">
                <div class="logotipo">
                        <img src="imagenes/logo.gif" width="300px" alt="">
                </div>

                <div class="fecha">
                    <table width="100%" border="0">
                        <tr>
                            <td width="55%">
                                <h1><span class="icon-graduation"></span> Inicio </h1>
                            </td>
                            <td  class="date" width="45%" align="right">
                                <font size="1">
                                    <script language="JavaScript"> 
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
                    <li><a href="FrmIndex.php"><span class="icon-house"></span> Inicio</a></li>
                    <li><a href=""><span class="icon-users"></span> Grupo</a>
                        <ul>
                            <li><a href="Seleccion/FrmInsertarGrupos.php">Alta</a></li>
                            <li><a href="Seleccion/FrmBorrarGrupos.php">Baja</a></li>
                            <li><a href="Seleccion/FrmActualizarGrupos.php">Actualizar</a></li>
                        </ul>
                    </li>
                    <li><a href=""><span class="icon-user"></span> Alumno</a>
                        <ul>
                            <li><a href="Seleccion/FrmInsertarAlumno.php">Alta</a></li>
                            <li><a href="Seleccion/FrmActualizarEstatusAlumno.php">Baja</a></li>
                            <li><a href="Seleccion/FrmActualizarAlumno.php">Actualizar</a></li>
                        </ul>
                    </li>
                    <li><a href=""><span class="icon-pencil"></span> Inscripción</a>
                        <ul>
                            <li><a href="Seleccion/FrmInscripciones.php">Inscribir</a></li>
                        </ul>   
                    </li>  
                    <li><a href="Scrips/PagCerrarSesion.php"><span class="icon-lock"></span> Cerrar Sesión</a>
                         
                    </li>                       
                </ul>
            </div>
           
            <div class="fondo">
                <table width="100%"  height="320px" border="0">
            	<tr>
                    <td width="100%">                        
                    </td>
                </tr>
                </table>
            </div>
            <br>								
        </form>				
	</body>				
	<footer>
            <p><span class="icon-cog"></span> Gestión de proyectos 2014 <span class="icon-cog"></span></p>
	</footer>			
	</head>	
</html>

