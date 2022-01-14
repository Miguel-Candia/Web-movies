
// validate
$(function () {
    $('#formulario').validate({
        rules:{
            usuario: {
                required: true,
                validarUsuario: true
            },
            contraseña: {
                required: true,
                validarContraseña: true
            },
            confContraseña: {
                required: true,
                validarConfContraseña: true
            },
            nombre: {
                required: true,
                validarNombres: true
            },
            apellido: {
                required: true,
                validarApellidos: true
            }


        },
        messages:{
            usuario: {
              required: 'Ingrese correo de usuario',
              validarUsuario: "Ingrese un correo de usuario valido"
            },
            
            contraseña: {
               required: 'Ingrese contraseña',
               validarContraseña: "Debe ingresar una contraseña entre 8 y 16 caracteres"
            },
            confContraseña: {
                required: 'Ingrese contraseña',
                validarConfContraseña: "Debe ingresa la misma contraseña"
             },
            nombre: {
                required: 'Ingrese nombre',
                validarNombres: 'Ingrese nombre válido'

             },
             apellido: {
                required: 'Ingrese apellido',
                validarApellidos: 'Ingrese apellido válido'

             }
        },
        errorElement: 'span',
    });
}); 