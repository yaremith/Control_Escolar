<?php
	
	ini_set("soap.wsdl_cache_enabled", "0");
    require_once("../nusoap/lib/nusoap.php");
       

    if(isset($_REQUEST['Btn_BuscarAlumno']))
        BuscarAlumno();
    else if(isset($_REQUEST['Btn_BuscarGrupo']))
        BuscarGrupo();
    else if(isset($_REQUEST['Btn_Inscribir']))
        InscribirAlumno();

	function BuscarAlumno()
    {   
    	$ClienteBuscarAlumno = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_buscarAlumno.php?wsdl");

        $MatriculaAlumno = $_REQUEST['TB_MatriculaAlumno'];        
        $MatriculaJson = json_encode($Matricula);
        $RespuestaDeBuscarAlumno;

        if ($MatriculaAlumno != "")
        {
            if (($ClienteBuscarAlumno->call("buscarAlumno", array("Matricula_Alumno"=>$MatriculaJson))))
            {
                echo"
                        <script>
                            alert('Correcto: Se encontro el alumno');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                        </script>
                    ";
            }
            else
            {
                echo"
                            <script>
                                alert('Inorrecto: No se encontro el alumno');
                                window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                            </script>
                        ";
            }
        }
        else
        {
            echo"
                        <script>
                            alert('Error: Matricula del alumno vacia');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                        </script>
                    ";
        }
    }

	function BuscarGrupo()
    {
        $ClienteExistenciaGrupo = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_existenciaGrupo.php?wsdl");
        $Clave = $_REQUEST['TB_ClaveGrupo'];
        $ClaveJson = json_encode($Clave);

        if ($Clave != "")
        {
            if ($ClienteExistenciaGrupo->call("existenciaGrupo", array("Clave"=>$ClaveJson)))
            {
                echo"
                        <script>
                            alert('Correcto: Se encontro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                        </script>
                    ";
            }
            else
            {
                echo"
                        <script>
                            alert('Error: No se encontro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                        </script>
                    ";
            }
        }
        else
        {
            echo"
                        <script>
                            alert('Error: Clave de grupo vacia');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                        </script>
                    ";
        }
    }

    function InscribirAlumno()
    {
    	$ClienteBuscarAlumno = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_buscarAlumno.php?wsdl_cache_enabled");
	    $ClienteObtenerEstatusAlumno = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_obtenerStatusAlumno.php?wsdl");
	    $ClienteInscribirAlumno = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_inscribirAlumno.php?wsdl");

        $Matricula = $_REQUEST['TB_MatriculaAlumno'];
        $Clave = $_REQUEST['TB_ClaveGrupo'];
        $Fecha = date("d/m/y");
        $MatriculaJson = json_encode($Matricula);
        $ClaveJson = json_encode($Clave);
        $FechaJson = json_encode($Fecha);

        if ($Matricula != "" && $Clave != "")
        {
            if (($ClienteBuscarAlumno->call("buscarAlumno", array("Matricula_Alumno"=>$MatriculaJson))))
            {
                if (($ClienteObtenerEstatusAlumno->call("obtenerStatusAlumno", array("Matricula_Alumno"=>$MatriculaJson))))
                {
                    if (($ClienteInscribirAlumno->call("inscribirAlumno", array("Matricula_Alumno"=>$MatriculaJson, "Clave"=>$ClaveJson, "Fecha"=>$FechaJson))))
                    {
                        echo"
                            <script>
                                alert('Correcto: El alumno se inscribio satisfactoriamente');
                                window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                            </script>
                        ";
                    }
                    else
                    {
                        echo"
                            <script>
                                alert('Incorrecto: El alumno no se inscribio');
                                window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                            </script>
                        ";
                    }
                }
                else
                {
                    echo"
                            <script>
                                alert('Error: El alumno ya esta inscrito en el sistema');
                                window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                            </script>
                        ";
                }
            }
            else
            {
            	echo"
                            <script>
                                alert('Error: El alumno ya esta inscrito en el sistema');
                                window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                            </script>
                        ";
            }
        }
        else
        {
            echo"
                    <script>
                        alert('Error: Error: Matricula del alumno o Clave del grupo vacias');
                        window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInscripciones.php';
                    </script>
                ";
        }    
    }
?>