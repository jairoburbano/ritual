(function($) {
    console.log('adasd');
    function validateImporters() {
        $('<div class="message"></div>').hide().appendTo('.contactForm');
        $('.contactForm').each(function() {
            $(this).validate({
                rules: {
                    name: "required",
                    companyname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required:true,
                        minlength:8
                    },
                },
                messages: {
                    name: {
                        required: "Usa solo letras"
                    },
                    companyname: {
                        required: "Usa solo letras"
                    },
                    email: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    message: {
                        required: "Ingresar un mensaje/consulta"
                    }
                },
                errorElement: 'span',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.form-importers .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.contactForm').attr('action'), $('.contactForm').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.form-importers .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.form-importers .message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                            $('.contactForm').find('.form__valid').removeClass('form__valid');
                            $('.contactForm')[0].reset();
                        } else {
                            $('.contactForm .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateContact() {
        $('<div class="message"></div>').hide().appendTo('.form-contact');
        $('.form-contact').validate({
            rules: {
                name: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                manager : "required",
                message: {
                    required:true,
                    minlength:8
                },
            },
            messages: {
                name: {
                    required: "Usa solo letras"
                },
                lastname: {
                    required: "Usa solo letras"
                },
                email: {
                    required: "Ingresa un Email válido",
                    email: "Ingresa un Email válido"
                },
                manager: {
                    required: "Ingresar un telefono valido"
                },
                message: {
                    required: "Ingresar un mensaje/consulta"
                }
            },
            errorElement: 'span',
            errorClass: 'error',
            validClass: 'form-valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('.container-contact .loading').css({opacity: 0}).animate({opacity: 1});
                $('.container-contact .send input').val('Enviando ...');
                $.post($('.form-contact').attr('action'), $('.form-contact').serialize(), function (data) {
                    var obj = $.parseJSON(data);
                    $('.container-contact .loading').fadeOut();
                    if (obj.error === '0') {
                        $('.container-contact .message').html('<p class="success-msg">Tu mensaje ha sido enviado.</p>').fadeIn().delay('3000').fadeOut();
                        $('.form-contact').find('.form-valid').removeClass('form-valid');
                        $('.form-contact')[0].reset();
                        $('.container-contact .send input').val('Enviar mensaje');
                    } else {
                        $('.container-contact .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').fadeIn().delay('5000').fadeOut();
                        $('.container-contact .send input').val('Enviar mensaje');
                    }
                });
                return false;
            }
        });
    }
    validateContact();
    validateImporters();
})(jQuery);