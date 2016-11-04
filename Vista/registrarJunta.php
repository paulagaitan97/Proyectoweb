<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link href="../Recursos/css/cssJunta.css" rel="stylesheet" type="text/css"/>
        <!--<link href="../Recursos/css/cssRegistrar.css" rel="stylesheet" type="text/css"/>-->
        <link href="../Recursos/css/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../Recursos/js/gestionJunta.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>


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
                <form name="formJunta" method="post" id="formCliente"
                      action="../Controlador/gestionJuntaDirectiva.php">

                    <table class="tablaReg">
                        <tr>
                            <td>
                                <label class="label">Nombre</label>
                            </td>
                            <td>
                                <input type="text" id="txtNombre" class="txt" name="nombre" required
                                       placeholder="Ingrese Nombre" value="<?php
                                       isset($_REQUEST['nombre']) ? print $_REQUEST['nombre'] : print "";
                                       ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="label">Apellido</label>
                            </td>
                            <td>
                                <input type="text" id="txtApellido" class="txt" name="apellido" required
                                       placeholder="Ingrese Apellido" value="<?php
                                       isset($_REQUEST['apellido']) ? print $_REQUEST['apellido'] : print "";
                                       ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="label">Cedula</label>
                            </td>
                            <td>
                                <input type="text" id="txtCedula" class="txt"  name="cedula" required
                                       placeholder="Ingrese Cedula" value="<?php
                                       isset($_REQUEST['cedula']) ? print $_REQUEST['cedula'] : print "";
                                       ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label class="label">Fecha de nacimiento</label>
                            </td>
                            <td>
                                <input type="date" id="dateNacimiento" class="txt"  name="fNacimiento" required
                                       value="<?php
                                       isset($_REQUEST['fNacimiento']) ? print $_REQUEST['fNacimiento'] : print "";
                                       ?>">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label class="label">Departamento de Nacimiento</label>
                            </td>
                            <td>
                                <input type="text" id="txtDepartamento" class="txt" name="dNacimiento" required
                                       placeholder="Ingrese departamento de Nacimiento" value="<?php
                                       isset($_REQUEST['dNacimiento']) ? print $_REQUEST['dNacimiento'] : print "";
                                       ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label class="label">Ciudad de Nacimiento</label>
                            </td>
                            <td>
                                <input type="text" id="txtCiudad" class="txt" name="cNacimiento" required
                                       placeholder="Ingrese Ciudad de Nacimiento" value="<?php
                                       isset($_REQUEST['cNacimiento']) ? print $_REQUEST['cNacimiento'] : print "";
                                       ?>">
                            </td>
                        </tr>
     
                         <tr>
                            <td>
                                <label class="label">Porcentaje Acciones</label>
                            </td>
                            <td>
                                <input type="text" id="txtPorcentaje" class="txt" name="acciones" required
                                       placeholder="Ingrese su porcentaje de acciones" value="<?php
                                       isset($_REQUEST['acciones']) ? print $_REQUEST['acciones'] : print "";
                                       ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btnRegistrar"
                                        id="btnRegistrarCli" onclick="gestionJunta('save')">Registrar</button>
                                <input type="hidden" id="txtType" name="txtType" placeholder=""/>
                            </td>
                        </tr>
                        
                        
                        <tr>
                                <td>
                                    <button type="submit" class="btnBuscar"
                                            id="btnRegistrarCli" onclick="gestionJunta('search')">Buscar</button>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btnModificar"
                                            id="btnRegistrarCli" onclick="gestionJunta('update')" >Modificar</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <button type="submit" class="btnEliminar"
                                            id="btnRegistrarCli" onclick="gestionJunta('delete')" >Eliminar</button>
                                </td>
                </tr>

                        <tr>
                            <td>
                                <?php
                                if (isset($_REQUEST['mensaje'])) {
                                    echo $_REQUEST['mensaje'];
                                }
                                ?>
                            </td>
                        </tr>
                    </table>    

                </form>

            </article>
        </section>
    </div>
</body>
</html>
