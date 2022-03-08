//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {

    //Data Table
    $('#employeedetails').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            url: base_url + "EmployeeCtrl/Employeedetails",
            type: 'GET'
        },
    });

    // $.ajax({
	
    //     type: "POST",
    //     url: base_url + "EmployeeCtrl/Employeedetails",
    //     data: {
           
    //     },
    //     success: function(data) {
    //          alert(data);
            
            
    //     }
    // });


});