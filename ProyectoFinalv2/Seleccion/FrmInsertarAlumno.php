<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/estiloMenu.css">
        <link rel="stylesheet" type="text/css" href="../css/estiloActualizarGrupos.css">
        <link rel="stylesheet" href="fonts/style.css">
        <title>Insertar Alumnos</title>
        <script type="text/javascript">
		function SoloNumeros(frmForm)
		{
			if (isNaN(frmForm.txtCarrera.value))
			{
				alert("Error:\nSólo se aceptan números");
				frmForm.txtCarrera.focus();
				frmForm.txtCarrera.value = "";
				return (false);
			}
                        else if (isNaN(frmForm.txtEdad.value))
			{
				alert("Error:\nSólo se aceptan números");
				frmForm.txtEdad.focus();
				frmForm.txtEdad.value = "";
				return (false);
			}
                }
        </script>
    </head>
    <!----------------------------------------------Menú---------------------------------------------------------------------------------->

    <body>
        <form name="frmForm"  method="post" action="../Scrips/PagInsertarAlumno.php" onkeypress = "return SoloNumeros(this)">
        <div id="header">
                <div class="logotipo">
                        <img src="../imagenes/logo.gif" width="300px" alt="">
                </div>

                <div class="fecha">
                    <table width="100%" border="0">
                        <tr>
                            <td width="60%">
                                <h1><span class="icon-graduation"></span> Insertar Alumno</h1>
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
                    <li><a href="../Scrips/PagCerrarSesion.php"><span class="icon-lock"></span> Cerrar Sesión</a>
                         
                    </li>                       
                </ul>
            </div>
            
    <!------------------------------------------------Datos-------------------------------------------------------------------------------->
            
                
       
<!-------------------------------------------InsertarAlumno---------------------------------------------------------------->    
<br>
<br>
<br>
          
                <table width="100%"  border="0">
                    <tr>
                        <td width="50%">
                            <div class="contenedor">
                                <table width="100%" border="0">
                                    <tr>
                                        <td>    
                                            <div class="InsertarAlumno">  
                                                <h3><span class="icon-user-add"></span> Insertar Alumno </h3>
                                                <table border="0">
                                                        <tr>
                                                            <td width="30%">
                                                                Matrícula:
                                                            </td>
                                                            <td width="70%">
                                                                <input name="txtMatricula" id="txtMatricula" type="text" maxlength = "10"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">
                                                                Nombre:
                                                            </td>
                                                            <td width="70%">
                                                                <input name="txtNombre" id="txtNombre" type="text" maxlength = "100"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">
                                                               Apellido Paterno:
                                                            </td>
                                                            <td width="70%">
                                                                <input name="txtApellidoPaterno" id="txtApellidoPaterno" type="text" maxlength = "50"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">
                                                               Apellido Materno:
                                                            </td>
                                                            <td width="70%">
                                                                <input name="txtApellidoMaterno" id="txtApellidoMaterno" type="text" maxlength = "50"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">
                                                               Edad:
                                                            </td>
                                                            <td width="70%">                                                                
                                                                <input type = "number" min="0" max="100" name="txtEdad">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">
                                                                Estatus:
                                                            </td>
                                                            <td width="70%">
                                                                <input type="radio" name="rbEstatus" value="activo" checked>
                                                                    Activo
                                                                <input type="radio" name="rbEstatus" value="inactivo">
                                                                    Inactivo
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="30%">
                                                                Carrera:
                                                            </td>
                                                            <td width="70%">
                                                                <input name="txtCarrera" id="txtCarrera" type="text" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        <td colspan="2" align="Center">
                                                            <input name ="btnAceptar" id="btnAceptar" type="submit" value="Inscribir"/>
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
