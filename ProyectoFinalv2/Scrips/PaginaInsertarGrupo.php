<?php


    function Aceptar()
    {
        ini_set("soap.wsdl_cache_enabled", "0");
        require_once("../nusoap/lib/nusoap.php");
        
        //direccion donde se alojan los servicios web
        $cliente = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_insertarGrupo.php?wsdl");
            
	$cadenaClave = $_REQUEST['TB_ClaveGrupo'];
        //$cadenaClaveJson = json_encode($cadenaClave);		
        $cadenaMateria = $_REQUEST['TB_MateriaGrupo'];
        //$cadenaMateriaJson = json_encode($cadenaMateria);
        $cadenaIdCarrera = (int)($_REQUEST['TB_IdCarrera']);
        //$cadenaIdCarreraJson = json_encode($cadenaIdCarrera);
        $cadenaMatriculaDocente = $_REQUEST['TB_MatriculaDocente'];
        //$cadenaMatriculaDocenteJson = json_encode($cadenaMatriculaDocente);
        $cadenaDia = (int)($_REQUEST['TB_Dia']);
        //$cadenaDiaJson = json_encode($cadenaDia);
        $cadenaHoraInicio = (int)($_REQUEST['TB_HoraInicio']);
        //$cadenaHoraInicioJson = json_encode($cadenaHoraInicio);
        $cadenaHoraFin = (int)($_REQUEST['TB_HoraFin']);
       // $cadenaHoraFinJson = json_encode($cadenaHoraFin);
        $cadenaIdSalon = (int)($_REQUEST['TB_IdSalon']);
      //  $cadenaIdSalonJson = json_encode($cadenaIdSalon);
        
        
        if($cadenaClave == "" || $cadenaMateria == "" || $cadenaMatriculaDocente == "" || $cadenaHoraInicio == $cadenaHoraFin)
        {           
         
                echo "<script>alert('Verifique los campos');</script>";
                echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarGrupos.php';</script>";         
        }
        else
        {   
            switch ($cliente->call("InsertarGrupo",  array("Clave"=>$cadenaClave, "Materia"=>$cadenaMateria, "Id_Carrera"=>$cadenaIdCarrera, 
                "Matricula_Docente"=>$cadenaMatriculaDocente, "Dia"=>$cadenaDia, "HoraInicio"=>$cadenaHoraInicio, "HoraFin"=>$cadenaHoraFin, 
                "Id_Salon"=>$cadenaIdSalon)))                   
            {
                case 1:     
                    echo "<script>alert('Se inserto un nuevo grupo.');</script>";
                    echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarGrupos.php';</script>";
                break;

                case 2:
                    echo "<script>alert('Error, el docente está ocupado a esa misma hora.');</script>";
                    echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarGrupos.php';</script>";
                break;

                case 3:
                    echo "<script>alert('Error, el salón está ocupado a esa misma hora.');</script>";
                    echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarGrupos.php';</script>";
                break;

                case 4:
                    echo "<script>alert('Error, salón y el docente está ocupado a esa misma hora.');</script>";
                    echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarGrupos.php';</script>";
                break;

                case 5:
                    echo "<script>alert('Error, no se inserto el grupo, compruebe los datos.');</script>";
                    echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarGrupos.php';</script>";
                break;
                                
            }                 
        echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarGrupos.php';</script>";
        }
       
    }
    if(isset($_REQUEST['Btn_InsertarGrupo']))
    {
        Aceptar();
    }

?>