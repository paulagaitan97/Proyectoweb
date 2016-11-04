<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="Recursos/css/style_1.css" rel="stylesheet" type="text/css"/>
        <script src="Recursos/js/gestionLogIn.js" type="text/javascript"></script>
        
        <title>Banco</title>
    </head>

    <body>
        <?php
        session_start();

        if (isset($_REQUEST['infoLogIn'])) {
            echo $_REQUEST['infoLogIn'];
        }

        if (isset($_SESSION['nombre'])) {
            echo 'Bienvenido/a ' . $_SESSION['nombre'] . " " . $_SESSION['apellido'];
        }

        if (isset($_SESSION['nombre'])) {

            if (isset($_SESSION['cargo'])) {

                if ($_SESSION['cargo'] == "administrador") {
                   
                    include 'Vista/Admin/masterPage.php';
                } else if ($_SESSION['cargo'] == "asesor") {
                     
                    include 'Vista/Asesor/masterPage.php';
                } else if ($_SESSION['cargo'] == "gerente") {
                    include 'Vista/Gerente/masterPage.php';
                    
                }else if ($_SESSION ['cargo'] =="cajero"){
                    
                    include 'Vista/Cajero/masterPage.php';
                }
                
            } else {
                include 'Vista/Cliente/masterPage.php';
//                
            }
        } else {
            
            include 'Vista/login.php';
        }
        ?>
    </body>
</html>

