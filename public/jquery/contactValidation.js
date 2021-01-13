$(document).ready(function() {
    var submit = $("#submitContact");
    var name = $("#nameC");
    var email = $("#emailC");
    var msg = $("#msg");

    if ((name.val() == "") | (email.val() == "") | (msg.val() == "")) {

        submit.addClass('disabled');
    } else {
        submit.removeClass('disabled');
    }

    name.on('input', validate);
    email.on('input', validate);
    msg.on('input', validate);

    function validate() {

        if ((name.val() == "") | (email.val() == "") | (msg.val() == "")) {
            submit.addClass('disabled');
        } else {
            submit.removeClass('disabled');
        }
    }
});