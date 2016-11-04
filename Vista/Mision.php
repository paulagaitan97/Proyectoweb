<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="../Recursos/js/gestionCliente.js" type="text/javascript"></script>
        <link href="../Recursos/css/cssRegistrar.css" rel="stylesheet" type="text/css"/>
        <link href="../Recursos/css/css/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <!--<div class="login">-->
        <header>
   <!--             <img class="logo">-->
            <div class="header">

            </div>
        </header>


        <div class="body"></div>
        <br>
        <br>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav class="linkEffects linkHoverEffect_12">
                <ul>
                    <li><a href='../index.php' class="scroll"><span>INICIO</span></a></li> 
                    <li><a href="#about" class="scroll"><span>VISION</span></a></li> 
                    <li><a href="#services" class="scroll"><span>MISION</span></a></li> 
                    <li><a href="#products" class="scroll"><span>PRODUCTOS</span></a></li> 
                    <li><a href="#contact" class="scroll"><span>SUCURSALES</span></a></li> 
                </ul>
            </nav>
        </div>



        <div class="registroCentrar">
            <section>
                <article>
                    <form name="formCliente" method="post" id="formCliente"
                          action="../Controlador/gestionCliente.php">

                        <table class="tablaReg">
                            
                            <tr>
                                <td>
                                    <div>
                                    <?php
                                    echo 'Bienvenido/a ' . $_SESSION['nombre'] . " " . $_SESSION['apellido'];
                                    ?>
                                    </div>
                                </td>
                                
                            </tr>

                          
                        </table>    

                    </form>

                </article>
            </section>
        </div>
    </body>


</html>