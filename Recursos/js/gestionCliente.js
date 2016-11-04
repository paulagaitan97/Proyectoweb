function gestionCliente(tipo) {

    var formulario = document.getElementById("formCliente");
    document.getElementById("txtType").value = tipo;

    if (tipo === "save") {
        if (document.getElementById("txtNombre").value !== "" &&
                document.getElementById("txtApellido").value !== "" &&
                document.getElementById("txtTelefono").value !== "" &&
                document.getElementById("txtDireccion").value !== "" &&
                document.getElementById("txtEmail").value !== "" &&
                document.getElementById("txtUsuario").value !== "" &&
                document.getElementById("txtPassword").value !== "" &&
                document.getElementById("selTipoPersonal").value !== "" &&
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
}


