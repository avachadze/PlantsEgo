$(document).ready(function() {

    var register = $("#registerBtn");
    var name = $("#name");
    var email = $("#email");
    var password = $("#pass");
    var confirm = $('#password-confirm');
    if ((confirm.val() == "") | (name.val() == "") | (email.val() == "") | (password.val() == "")) {
        register.addClass('disabled');
    } else {
        register.removeClass('disabled');
    }

    name.on('input', validate);
    email.on('input', validate);
    confirm.on('input', validate);
    password.on('input', validate);

    function validate() {
        if ((confirm.val() == "") | (name.val() == "") | (email.val() == "") | (password.val() == "")) {
            register.addClass('disabled');
        } else {
            register.removeClass('disabled');
        }
    }
});