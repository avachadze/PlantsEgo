$(document).ready(function() {

    //adding Company
    var addC = $('#newCompany');
    var addCB = $('#newCompanyB');

    addC.on('input', validateAddition);

    if (addC.val() == '') {
        addCB.addClass('disabled');
    } else {
        addCB.removeClass('disabled');
    }

    function validateAddition() {
        if (addC.val() == '') {
            addCB.addClass('disabled');
        } else {
            addCB.removeClass('disabled');
        }
    }
});