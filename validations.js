
function validarUsuario(value){
    //formato para Usuarios y correo
    const pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    return pattern.test(value)
}
// valida que las contraseñas sean iguales
function validarConfContraseña(value){
    let contraseña = $('#contraseña').val();
    let confContraseña = $("#confContraseña").val();
    if (contraseña === confContraseña){
    return value;
    }
}
// valida contraseña
function validarContraseña(value){
    const pattern = /^(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,16}$/gm;

    return pattern.test(value);
}
// valida nombres
function validarNombres(value){
    const pattern = /^([a-zA-ZùÙüÜäàáëèéïìíöòóüùúÄÀÁËÈÉÏÌÍÖÒÓÜÚñÑ\s]{2,50})$/
    return pattern.test(value);
}
//valida apellidos
function validarApellidos(value){
    const pattern = /^([a-zA-ZùÙüÜäàáëèéïìíöòóüùúÄÀÁËÈÉÏÌÍÖÒÓÜÚñÑ\s]{2,75})$/
    return pattern.test(value);
}

$.validator.addMethod(
    "validarApellidos",
    function (value, element, arg){
        return this.optional(element) || validarApellidos(value);
    },
    "Debe ingresar un apellido válido"
)

$.validator.addMethod(
    "validarNombres",
    function (value, element, arg){
        return this.optional(element) || validarNombres(value);
    },
    "Debe ingresar un nombre válido"
)


$.validator.addMethod(
    "validarUsuario",
    function (value, element, arg){
        return this.optional(element) || validarUsuario(value);
    },
    "Debe ingresar un usuario válido"
)

$.validator.addMethod(
    "validarConfContraseña",
    function (value, element, arg){
        return this.optional(element) || validarConfContraseña(value);
    },
    "Debe ingresar la misma contraseña"
)

$.validator.addMethod(
    "validarContraseña",
    function (value, element, arg){
        return this.optional(element) || validarContraseña(value);
    },
    "Debe ingresar una contraseña entre 8 y 16 caracteres"
)