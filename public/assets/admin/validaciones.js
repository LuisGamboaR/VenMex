/**************************************\
*             VALIDACIONES             *
/**************************************/
/*    ESTILOS & VALIDACIONES EXTRAS   */
/**************************************/


$.validator.setDefaults({

    highlight: function (element) {
        $(element)
            .closest(".form-control")
            .addClass('is-invalid')
    },
    unhighlight: function (element) {
        $(element)
            .closest(".form-control")
            .removeClass('is-invalid')
            .addClass('is-valid');
    }
});

jQuery.validator.addMethod("notNumber", function (value, element, param) {
    var reg = /[0-9]/;
    if (reg.test(value)) {
        return false;
    } else {
        return true;
    }
}, "Los números no son permitidos");


jQuery.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-z-ñ ]+$/i.test(value);
}, "Solo son permitidos las letras y los espacios");



$("#formulario_registro_clientes").validate({

    rules: {
        nombre: {
            required: true,
            notNumber: true,
            lettersonly: true,
            minlength: 3
        },
        apellido: {
            required: true,
            notNumber: true,
            lettersonly: true,
            minlength: 3
        },
        cedula: {
            required: true,
           number: true,
            minlength: 7
        },
        direccion: {
            required: true,
            alphanumeric: true,
            minlength: 1
        },
        telefono: {
            required: true,
            number: true,
            minlength: 11
        },
    },

    messages: {

        nombre: {
            required: 'Por favor ingresa el nombre del cliente',
            minlength: 'Por favor ingresa mas de 3 caracteres',
            lettersonly: 'Solo se permiten letras'
        },
        apellido: {
            required: 'Por favor ingresa el apellido del cliente',
            minlength: 'Por favor ingresa mas de 3 caracteres',
            lettersonly: 'Solo se permiten letras'
        },
        cedula: {
            required: 'Por favor ingresa la cedula del cliente',
            minlength: 'Por favor ingresa al menos 7 digitos',
           number: 'Solo se permiten números'
        },
        direccion: {
            required: 'Por favor ingresa la dirección del cliente',
            minlength: 'Por favor ingresa al menos 1 caracter'
        },
        telefono: {
            required: 'Por favor ingresa el numero de teléfono',
            minlength: 'Por favor ingresa un numero de teléfono valido (11 digitos)',
            number: 'Solo se permiten números'
        },
    }


});


$("#formulario_registro_comidas").validate({

    rules: {
        nombre: {
            required: true,
            notNumber: true,
            lettersonly: true,
            minlength: 3
        },
        medida: {
            required: true,
        },
        stock_actual: {
            required: true,
           number: true,
            minlength: 1
        },
        precio: {
            required: true,
           number: true,
            minlength: 1
        },
    },

    messages: {

        nombre: {
            required: 'Por favor ingresa el nombre del alimento',
            minlength: 'Por favor ingresa mas de 3 caracteres',
            lettersonly: 'Solo se permiten letras'
        },
        medida: {
            required: 'Por favor ingresa el nombre del alimento',
        },

        precio: {
            required: 'Por favor ingresa el precio del alimento',
            minlength: 'Por favor ingresa al menos 1 digito',
           number: 'Solo se permiten números'
        },
        stock_actual: {
            required: 'Por favor ingresa la cantidad de stock actual',
            minlength: 'Por favor ingresa al menos 1 digito',
           number: 'Solo se permiten números'
        },

    }


});



$("#formulario_registro_usuarios").validate({

    rules: {


        email: {},
        name: {
            required: true,
            minlength: 3,
        },

        lastname: {
            required: true,
            minlength: 3,
        },
        identification: {
            required: true,
            number: true,
            minlength: 7
        },
        password: {
            required: true,
            minlength: 5,

        },
        password_confirmation: {
            required: true,
            minlength: 5,

        },
    },

    messages: {

        email: {
            required: 'Por favor ingresa un correo',
            email: 'Por favor ingresa un correo valido'
        },
        name: {
            required: 'Por favor ingresa un nombre',
            minlength: 'Por favor ingresa al menos 3 caracteres',
        },

        identification: {
            required: 'Por favor ingresa una cedula',
            minlength: 'Por favor ingresa una cedula valida de al menos 7 digitos',
            number: 'Solo se permiten numeros'

        },

        password: {
            required: 'Por favor ingresa un contraseña',
            minlength: 'Por favor ingresa una contraseña de 5 caracteres o superior'

        },
        password_confirmation: {
            required: 'Por favor confirma la contraseña',
            minlength: 'Por favor ingresa una contraseña de 5 caracteres o superior'

        },
        lastname: {
            required: 'Por favor ingresa un apellido',
            minlength: 'Por favor ingresa al menos 3 caracteres',
        },
    },

});


$("#formulario_registro_personal").validate({

    rules: {
        nombre: {
            required: true,
            notNumber: true,
            lettersonly: true,
            minlength: 3
        },
        apellido: {
            required: true,
            notNumber: true,
            lettersonly: true,
            minlength: 3
        },
        cedula: {
            required: true,
           number: true,
            minlength: 7
        },
        direccion: {
            required: true,
            alphanumeric: true,
            minlength: 1
        },
        telefono: {
            required: true,
            number: true,
            minlength: 11
        },
        cargo: {
          required: true,
      },
    },

    messages: {

        nombre: {
            required: 'Por favor ingresa el nombre del trabajador',
            minlength: 'Por favor ingresa mas de 3 caracteres',
            lettersonly: 'Solo se permiten letras'
        },
        apellido: {
            required: 'Por favor ingresa el apellido del trabajador',
            minlength: 'Por favor ingresa mas de 3 caracteres',
            lettersonly: 'Solo se permiten letras'
        },
        cedula: {
            required: 'Por favor ingresa la cedula del trabajador',
            minlength: 'Por favor ingresa al menos 7 digitos',
           number: 'Solo se permiten números'
        },
        direccion: {
            required: 'Por favor ingresa la dirección del trabajador',
            minlength: 'Por favor ingresa al menos 1 caracter'
        },
        telefono: {
            required: 'Por favor ingresa el numero de teléfono',
            minlength: 'Por favor ingresa un numero de teléfono valido (11 digitos)',
            number: 'Solo se permiten números'
        },
        cargo: {
          required: 'Por favor selecciona un cargo',
      },
    }


});



$("#formulario_registro_proveedores").validate({

  rules: {
      nombre: {
          required: true,
          notNumber: true,
          lettersonly: true,
          minlength: 3
      },
      rif: {
          required: true,
          minlength: 8
      },
      direccion: {
          required: true,
          alphanumeric: true,
          minlength: 1
      },
      telefono: {
          required: true,
          number: true,
          minlength: 11
      },
      correo: {
        required: true,
        email: true,
        minlength: 1
    },
  },

  messages: {

      nombre: {
          required: 'Por favor ingresa el nombre del cliente',
          minlength: 'Por favor ingresa mas de 3 caracteres',
          lettersonly: 'Solo se permiten letras'
      },
      rif: {
          required: 'Por favor ingresa el rif del proveedor',
          minlength: 'Por favor ingresa al menos 8 caracteres',
      },
      direccion: {
          required: 'Por favor ingresa la dirección del proveedor',
          minlength: 'Por favor ingresa al menos 1 caracter'
      },
      telefono: {
          required: 'Por favor ingresa el numero de teléfono',
          minlength: 'Por favor ingresa un numero de teléfono valido (11 digitos)',
          number: 'Solo se permiten números'
      },
      correo: {
        required: 'Por favor ingresa el numero de teléfono',
        minlength: 'Por favor ingresa un correo valido',
        email: 'Por favor ingresa un correo valido'
    },
  }


});



$("#formulario_registro_utilerias").validate({

  rules: {
      nombre: {
          required: true,
          notNumber: true,
          lettersonly: true,
          minlength: 3
      },
      medida: {
          required: true,
      },
      descripcion: {
          required: true,
          alphanumeric: true,
          minlength: 1
      },
      precio_unitario: {
          required: true,
         number: true,
          minlength: 1
      },
      stock_actual: {
        required: true,
       number: true,
        minlength: 1
    },
  },

  messages: {

      nombre: {
          required: 'Por favor ingresa el nombre del articulo',
          minlength: 'Por favor ingresa mas de 3 caracteres',
          lettersonly: 'Solo se permiten letras'
      },
      medida: {
          required: 'Por favor ingresa el rif del proveedor',
      },
      descripcion: {
          required: 'Por favor ingresa una descripción para el articulo',
          minlength: 'Por favor ingresa al menos 1 caracter'
      },
      precio_unitario: {
          required: 'Por favor ingresa el precio unitario o por metro del articulo',
          minlength: 'Por favor ingresa al menos 1 digito',
          numberic: 'Solo se permiten números'
      },
      stock_actual: {
        required: 'Por favor ingresa el stock actual',
        minlength: 'Por favor ingresa al menos 1 digito',
       number: 'Solo se aceptan números'
    },
  }


});


