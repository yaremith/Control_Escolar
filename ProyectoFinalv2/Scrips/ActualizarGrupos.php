<?php
    
    ini_set("soap.wsdl_cache_enabled", "0");
    require_once("../nusoap/lib/nusoap.php");

    if(isset($_REQUEST['Btn_BuscarGrupo']))
        BuscarGrupo();
    else if(isset($_REQUEST['Btn_ActualizarGrupo']))
        ActualizarGrupo();

    function BuscarGrupo()
    {
        $ClienteExistenciaGrupo = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_existenciaGrupo.php?wsdl");
        $Clave = $_REQUEST['TB_ClaveGrupoBuscar'];
        $ClaveJson = json_encode($Clave);

        if ($Clave != "")
        {
            if ($ClienteExistenciaGrupo->call("existenciaGrupo", array("Clave"=>$ClaveJson)))
            {
                echo"
                        <script>
                            alert('Correcto: Se encontro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmActualizarGrupos.php';
                        </script>
                    ";
            }
            else
            {
                echo"
                        <script>
                            alert('Error: No se encontro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmActualizarGrupos.php';
                        </script>
                    ";
            }
        }
        else
        {
            echo"
                        <script>
                            alert('Error: Clave de grupo vacia');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmActualizarGrupos.php';
                        </script>
                    ";
        }
    }

    function ActualizarGrupo()
    {

        $ClienteExistenciaGrupo = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_existenciaGrupo.php?wsdl");
        $ClienteActualizarGrupo = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_actualizarGrupo.php?wsdl");

        $Clave = $_REQUEST['TB_ClaveGrupoActualizar'];
        $ClaveJson = json_encode($Clave);
        $Materia = $_REQUEST['TB_MateriaGrupo'];
        $MateriaJson = json_encode($Materia);
        $Id_Carrera = $_REQUEST['TB_IdCarrera'];
        $Id_CarreraJson = json_encode($Id_Carrera);
        $Matricula_Docente = $_REQUEST['TB_MatriculaDocente'];
        $Matricula_DocenteJson = json_encode($Matricula_Docente);

        if ($Clave != "" && $Materia != "" && $Id_Carrera != "" && $Matricula_Docente != "")
        {
            if ($ClienteExistenciaGrupo->call("existenciaGrupo", array("Clave"=>$ClaveJson))) 
            {
                if ($ClienteActualizarGrupo->call("actualizarGrupo", array("Clave"=>$ClaveJson, "Materia"=>$MateriaJson, "Id_Carrera"=>$Id_CarreraJson, "Matricula_Docente"=>$Matricula_DocenteJson))) 
                {
                    echo"
                        <script>
                            alert('Correcto: Se actualizo el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmActualizarGrupos.php';
                        </script>
                    ";
                }
                else
                {
                    echo"
                        <script>
                            alert('Incorrecto: No se actualizo el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmActualizarGrupos.php';
                        </script>
                    ";
                }
            }
            else
            {
                echo"
                        <script>
                            alert('Error: No se encontro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmActualizarGrupos.php';
                        </script>
                    ";
            }
        }
        else
        {
            echo"
                        <script>
                            alert('Error: Datos incompletos');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmActualizarGrupos.php';
                        </script>
                    ";
        }
    }
?>