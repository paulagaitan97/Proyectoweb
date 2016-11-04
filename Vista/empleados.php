<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Recursos/css/cssEmpleados.css" rel="stylesheet" type="text/css"/>
        <link href="../Recursos/css/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../Recursos/js/gestionEmpleado.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
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
                </ul>
            </nav>
        </div>



        <div class="registroCentrar">
            <section>
                <article>
                    <form name="formEmpleado" method="post" id="formEmpleado"
                          action="../Controlador/gestionEmpleado.php">

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
                                    <label class="label">Fecha de Ingreso</label>
                                </td>
                                <td>
                                    <input type="date" id="dateNacimiento" class="txt"  name="fechaingreso" required
                                           value="<?php
                                           isset($_REQUEST['fechaingreso']) ? print $_REQUEST['fechaingreso'] : print "";
                                           ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="label">Fecha de Nacimiento</label>
                                </td>
                                <td>
                                    <input type="date" id="dateIngreso" class="txt"  name="fechanacimiento" required
                                           value="<?php
                                           isset($_REQUEST['fechanacimiento']) ? print $_REQUEST['fechanacimiento'] : print "";
                                           ?>">
                                </td>
                            </tr>

                       
<!--                        <td>
                            <select name="cargo" id="selUser" required value="<?php
                                           isset($_REQUEST['cargo']) ? print $_REQUEST['cargo'] : print "";
                                           ?>">
                                <option value="">Seleccione Cargo</option>
                                <option value="0">gerente</option>
                                <option value="1">Empleado del Banco</option>
                            </select>
                        </td>-->
                    
                            <tr>
                                <td>
                                    <label class="label">Cargo</label>
                                </td><!--
-->                                <td>
                                    <input type="text" id="txtcargo" class="txt" name="cargo" required
                                           placeholder="Ingrese Cargo" value="<?php
                                           isset($_REQUEST['cargo']) ? print $_REQUEST['cargo'] : print "";
                                           ?>">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label class="label">Password</label>
                                </td>
                                <td>
                                    <input type="password" id="txtPassword" class="txt" name="password" required
                                           placeholder="Ingrese Password" value="<?php
                                           isset($_REQUEST['password']) ? print $_REQUEST['password'] : print "";
                                           ?>">
                                </td>
                            </tr>
            <!--                <tr>
                                <td>
                                    <label class="label">Confirme Password</label>
                                </td>
                                <td>
                                    <input type="password" id="txtConfirmPassword" class="txt" name="confirmPassword" required
                                           placeholder="Confirme Password" value="<?php
                            isset($_REQUEST['confirmPassword']) ? print $_REQUEST['confirmPassword'] : print "";
                            ?>">
                                </td>
                            </tr>-->

                            <tr>
                                <td>
                                    <button type="submit" class="btnRegistrar"
                                            id="btnRegistrarEmp" onclick="gestionEmpleado('save')">Registrar</button>
                                    <input type="hidden" id="txtType" name="txtType" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btnBuscar"
                                            id="btnRegistrarEmp" onclick="gestionEmpleado('search')">Buscar</button>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btnModificar"
                                            id="btnRegistrarEmp" onclick="gestionEmpleado('update')" >Modificar</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <button type="submit" class="btnEliminar"
                                            id="btnRegistrarEmp" onclick="gestionEmpleado('delete')" >Eliminar</button>
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
