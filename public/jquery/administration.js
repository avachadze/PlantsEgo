$(function() {



    var userB = $('#users');
    userB.css('color', 'dodgerblue');
    userB.addClass("selectedContent");
    var companyB = $('#companies');

    companyB.on('click', showCompanies);
    userB.on('click', showUsers);


    function showCompanies() {

        userB.css('color', 'black');
        userB.removeClass("selectedContent");
        companyB.css('color', 'dodgerblue');
        companyB.addClass("selectedContent");

        $('#userAdministration').hide(300);
        $('#hide').hide(300);
        $('#companyAdministration').show(300);
    }

    function showUsers() {

        userB.css('color', 'dodgerblue');
        userB.addClass("selectedContent");
        companyB.css('color', 'black');
        companyB.removeClass("selectedContent");

        $('#userAdministration').show(300);
        $('#edit').hide(300);
        $('#companyAdministration').hide(300);
    }



});