/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function gestionEmpleado(tipo) {

    var formulario = document.getElementById("formEmpleado");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtApellido").value !== "" &&
                document.getElementById("txtCedula").value !== "") {

            formulario.submit();
        } else {
            alert("Ingrese todos los campos");
        }
    }
    if (tipo === "search") {
        if (document.getElementById("txtCedula").value !== "") {
            formulario.submit();
        } else {
            alert("Por favor ingrese la cedula del personal a buscar");
        }
    }
    
    if (tipo === "update") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtApellido").value !== "" &&
                document.getElementById("txtCedula").value !== "" &&
                document.getElementById("dateNacimiento").value !== "" &&
                document.getElementById("dateIngreso").value !== "" &&
                document.getElementById("txtcargo").value !== "" && 
                document.getElementById("txtPassword").value !== "" ) {
            formulario.submit();
        } else {
            alert("Por favor realice una busqueda previa o ingrese todos los datos");
        }
    }
    
    if (tipo === "delete"){
         if (document.getElementById("txtCedula").value !== "") {
            formulario.submit();
        } else {
            alert ("Por favor busque el Empleado a eliminar");
        }
    }
}


