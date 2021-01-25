$(document).ready(function() {
    var submit = $("#submitContact");
    var name = $("#nameC");
    var email = $("#contactEmail");
    var msg = $("#msg");


    if ((email.val() == "") | (name.val() == "") | (msg.val() == "")) {

        submit.addClass('disabled');
    } else {
        submit.removeClass('disabled');
    }

    name.on('input', validate);
    email.on('input', validate);
    msg.on('input', validate);

    function validate() {

        if ((email.val() == "") | (name.val() == "") | (msg.val() == "")) {
            submit.addClass('disabled');
        } else {
            submit.removeClass('disabled');
        }
    }
});