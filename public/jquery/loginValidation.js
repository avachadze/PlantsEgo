$(document).ready(function() {

    var login = $("#sendLogin");
    var email = $('#email');
    var password = $('#password');
    if ((email.val() == "") | (password.val() == "")) {
        login.addClass('disabled');
    } else {
        login.removeClass('disabled');
    }

    email.keyup(validate);
    password.keyup(validate);

    function validate() {
        if ((email.val() == "") | (password.val() == "")) {
            login.addClass('disabled');
        } else {
            login.removeClass('disabled');
        }
    }
});