<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html >
    <head>
        <meta charset="UTF-8">
        <title>ByteBank</title>

    </head>

    <body>
        <div class="wrapper">
            <form name="formularioLogin" id="formLogIn" method="post"
                  action="Controlador/gestionLogin.php"
                  onsubmit="return logIn('con');">

                <div class="body"></div>
                <!--                <div class="grad"></div>-->
                <div class="head">
                    <div>Byte<span>Bank</span></div>
                </div>
                <br>


                <div class="login">
                    <input type="text" placeholder="username"  id="txtUsuario"  name="nick" required><br>
                    <input type="password" placeholder="password" id="txtPassword" name="password" required ><br>

                    <table>
                        <td>
                            <select name="tipoUser" id="selUser" required>
                                <option value="">Seleccione Usuario</option>
                                <option value="0">Cliente</option>
                                <option value="1">Empleado del Banco</option>
                            </select>
                        </td>
                    </table>
                    <input type="submit" id="btnLogin" value="Ingresar" ><br>
                    <a href="Vista/registrar.php"><button type="button" id="btnSingup">Registrar Cliente</button></a>





                </div>
                <input type="text" id="txtTypeLog" name="type" class="oculto">



            </form>
<!--            <label class="infoLogIn"><?php
                if (isset($_REQUEST['infoLogIn'])) {
                    echo $_REQUEST['infoLogIn'];
                }
                ?>            </label>-->
<!--            <label class="infoLogIn"><?php
                if (isset($_REQUEST['mensaje'])) {
                    echo $_REQUEST['mensaje'];
                }
                ?></label>-->
        </label>
        <label class="infoLogIn"><?php
            if (isset($_REQUEST['mensaje'])) {
                echo $_REQUEST['mensaje'];
            }
            ?></label>
    </div>



</body>
</html>