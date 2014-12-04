<?php
    include('../Scrips/ClaseValidacion.php');
    //require 'http://192.168.0.107:8080/WebService/functions.php';
    function Aceptar()
    {
        ini_set("soap.wsdl_cache_enabled", "0");
        require_once("../nusoap/lib/nusoap.php");                
        
        //direccion donde se alojan los servicios web
        $cliente = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_insertarAlumno.php?wsdl");
        
        $validar = new Validacion;
        
        $cadenaMatricula = $_REQUEST['txtMatricula'];
        $cadenaMatriculaJson = json_encode($cadenaMatricula);
        $cadenaNombre = $_REQUEST['txtNombre'];
        $cadenaNombreJson = json_encode($cadenaNombre);
        $cadenaApellidoPaterno = $_REQUEST['txtApellidoPaterno'];
        $cadenaApellidoPaternoJson = json_encode($cadenaApellidoPaterno);
        $cadenaApellidoMaterno = $_REQUEST['txtApellidoMaterno'];
        $cadenaApellidoMaternoJson = json_encode($cadenaApellidoMaterno);
        $cadenaEdad = (int)$_REQUEST['txtEdad'];
        $cadenaEdadJson = json_encode($cadenaEdad);
        $cadenaEstatus = $_POST['rbEstatus'];
        if($cadenaEstatus == 'activo')            
            $cadenaEstatusJon = true; //Se cambia el estatus dependiendo de como este el Id en la Base de Datos
        else
            $cadenaEstatusJon = false;
        $cadenaCarrera = (int)$_REQUEST['txtCarrera'];
        $cadenaCarreraJson = (json_encode($cadenaCarrera));
                
        
        if($validar->CadenaVacia($cadenaNombre) || $validar->CadenaVacia($cadenaMatricula) ||
           $validar->CadenaVacia($cadenaApellidoPaterno) || $validar->CadenaVacia($cadenaApellidoMaterno))
        {
            echo "<script>alert('Debe llenar todos los campos');</script>";
            echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarAlumno.php';</script>"; 
        }
        else
        {            
                   if($cliente->call("insertarAlumno", array("Matricula"=>$cadenaMatriculaJson, "Nombre"=>$cadenaNombreJson, "ApellidoPat"=>$cadenaApellidoPaternoJson,
                      "ApellidoMat"=>$cadenaApellidoMaternoJson, "Edad"=>$cadenaEdadJson, "Estatus"=>$cadenaEstatusJon, "Carrera"=>$cadenaCarreraJson)))                   
                    {
                        echo "<script>alert('El Alumno se dio de Alta correctamente');</script>"; 
                        echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarAlumno.php';</script>";                     
                    }
                    else
                    {
                        echo "<script>alert('Ocurrio un problema con la conexion o una matricula repetida y "
                             . "el Alumno no se pudo dar de Alta');</script>";
                        echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/Seleccion/FrmInsertarAlumno.php';</script>";                     
                    }
                }                        
        }
        
    


    if(isset($_REQUEST['btnAceptar']))
    {      
        Aceptar();
    }
?>