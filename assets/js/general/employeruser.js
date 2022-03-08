//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {

    // //Data Table
    $('#employerdetails').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            url: base_url + "EmployerCtrl/Employerdetails",
            type: 'GET'
        },
    });



});