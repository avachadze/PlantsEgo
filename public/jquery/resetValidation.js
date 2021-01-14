$(document).ready(function() {

    var emailButton = $("#sendReset");
    var emailReset = $('#emailReset');
    if (emailReset.val() == "") {
        emailButton.addClass('disabled');
    } else {
        emailButton.removeClass('disabled');
    }

    emailReset.on('input', validate);

    function validate() {
        if (emailReset.val() == "") {
            emailButton.addClass('disabled');
        } else {
            emailButton.removeClass('disabled');
        }
    }
});