<?php
    include('Scrips/ClaseValidacion.php');
    
    function Aceptar()
    {
        ini_set("soap.wsdl_cache_enabled", "0");        
        require_once("nusoap/lib/nusoap.php");
        
        //direccion donde se alojan los servicios web
        $cliente = new nusoap_client("http://192.168.2.102:8080/WebService/wbs_login.php?wsdl");
                        
        $cadenaNombre = $_REQUEST['txtUsuario'];
        $cadenaNombreJson = json_encode($cadenaNombre);
        $cadenaContrasena = $_REQUEST['txtContrasena'];
        $cadenaContrasenaJson = json_encode($cadenaContrasena);

        if($cadenaNombre == "" && $cadenaContrasena == "")
        {
            echo "<script>alert('No hay un Usuario o Contraseña');</script>";
            echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/FrmLogin.php';</script>";
        }
        else
        {               
            if($cliente->call("LogIn", array("Usuario" => $cadenaNombreJson, "Password" => $cadenaContrasenaJson)))                       
            {
                session_start();
                $_SESSION['usuario'] = $cadenaNombre;
                echo "<script>alert('Bienvenido $cadenaNombre');</script>";
                //dirección de pagina principal
                echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/FrmIndex.php';</script>";
            }
            else
            {
                echo "<script>alert('Usuario o Contraseña incorrectos');</script>";
                echo "<script>window.location = 'http://localhost:8080/ProyectoFinalv2/FrmLogin.php';</script>";
            }
        }
    }

    function Cancelar()
    {
        echo "<script>window.close();</script>";
    }

    if(isset($_REQUEST['btnAceptar']))
    {
        Aceptar();
    }
    else if(isset($_REQUEST['btnCancelar']))
    {
        Cancelar();
    }
?>