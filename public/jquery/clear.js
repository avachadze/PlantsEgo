$(document).ready(function() {

    var registerClear = $("#clearRegister");
    var name = $("#name");
    var email = $("#emailC");
    var password = $("#pass");
    var confirm = $('#password-confirm');

    registerClear.click(emptyRegisterFields);

    function emptyRegisterFields() {
        console.log("noo");
        name.val("");
        email.val("");
        password.val("");
        confirm.val("");
    }
});