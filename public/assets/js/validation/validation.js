!function (document, window, $) {
    "use strict";
    $('#form1').validate({
        rules: {
            username: {
                minlength: 3,
                maxlength: 20,
                required: true
            },
            email: {
                email: true,
                required: true
            },
            password: {
                minlength: 5,
                required: true
            },
            password_confirm: {
                minlength: 5,
                equalTo: "#password",
                required: true
            },
            payment: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error')
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        }
    });
}(document, window, jQuery);
