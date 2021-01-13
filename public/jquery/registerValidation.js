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

    name.keyup(validate);
    email.keyup(validate);
    confirm.keyup(validate);
    password.keyup(validate);

    function validate() {
        if ((confirm.val() == "") | (name.val() == "") | (email.val() == "") | (password.val() == "")) {
            register.addClass('disabled');
        } else {
            register.removeClass('disabled');
        }
    }
});