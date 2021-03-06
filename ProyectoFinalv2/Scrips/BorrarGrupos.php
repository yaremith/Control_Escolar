<?php
    
    ini_set("soap.wsdl_cache_enabled", "0");
    require_once("../nusoap/lib/nusoap.php");

    if(isset($_REQUEST['Btn_BuscarGrupo']))
        BuscarGrupo();
    else if(isset($_REQUEST['Btn_BorrarGrupo']))
        BorrarGrupo();

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
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmBorrarGrupos.php';
                        </script>
                    ";
            }
            else
            {
                echo"
                        <script>
                            alert('Error: No se encontro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmBorrarGrupos.php';
                        </script>
                    ";
            }
        }
        else
        {
            echo"
                        <script>
                            alert('Error: Clave de grupo vacia');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmBorrarGrupos.php';
                        </script>
                    ";
        }
    }

    function BorrarGrupo()
    {
        $ClienteExistenciaGrupo = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_existenciaGrupo.php?wsdl");
        $ClienteBorrarGrupo = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_borrarGrupo.php?wsdl");

        $Clave = $_REQUEST['TB_ClaveGrupo'];
        $ClaveJson = json_encode($Clave);

        if ($Clave != "")
        {
            if ($ClienteExistenciaGrupo->call("existenciaGrupo", array("Clave"=>$ClaveJson))) 
            {
                if ($ClienteBorrarGrupo->call("borrarGrupo", array("Clave"=>    $ClaveJson))) 
                {
                    echo"
                        <script>
                            alert('Correcto: Se borro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmBorrarGrupos.php';
                        </script>
                    ";
                }
                else
                {
                    echo"
                        <script>
                            alert('Incorrecto: No se borro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmBorrarGrupos.php';
                        </script>
                    ";
                }
            }
            else
            {
                echo"
                        <script>
                            alert('Error: No se encontro el grupo');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmBorrarGrupos.php';
                        </script>
                    ";
            }
        }
        else
        {
            echo"
                        <script>
                            alert('Error: Clave de grupo vacia');
                            window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmBorrarGrupos.php';
                        </script>
                    ";
        }
    }
?>