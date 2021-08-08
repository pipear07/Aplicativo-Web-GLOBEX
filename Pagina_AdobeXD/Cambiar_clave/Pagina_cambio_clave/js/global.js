(function ($) {
    'use strict';

    /*[ Wizard Config ]
        ===========================================================*/
    
    try {
        var $validator = $("#js-wizard-form").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 3
                },
                password: {
                    required: true,
                    minlength: 8
                },
                re_password: {
                    required: true,
                    minlength: 8,
                    equalTo: '#password'
                }
            },
            messages: {
                username: {
                    required: "Digite un usuario"
                },
    
                email: {
                    required: "Digite su correo",
    
                },
                password: {
                    required: "Digite nueva clave",
                    minlength: "La contraseña debe tener minimo 12 caracteres, 2 caracteres especiales, mayusculas, minusculas y numeros"
                },
                re_password: {
                    required: "Por favor confirme su nueva clave",
                    minlength: "La contraseña debe tener minimo 12 caracteres, 2 caracteres especiales, mayusculas, minusculas y numeros",
                    equalTo: "La claves no son iguales"
                }
            }
        });
    
        $("#js-wizard-form").bootstrapWizard({
            'tabClass': 'nav nav-pills',
            'nextSelector': '.btn--next',
            'onNext': function(tab, navigation, index) {
                var $valid = $("#js-wizard-form").valid();
                if(!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            },
            'onTabClick': function (tab, navigation, index) {
                var $valid = $("#js-wizard-form").valid();
                if(!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            }
    
        });
    
    }
    catch (e) {
        console.log(e)
    }

})(jQuery);