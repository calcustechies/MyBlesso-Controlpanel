//base_url global declaration
var base_url = $('#base').val();

$(document).ready(function() {

    //Data Table
    $('#jobdetails').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            url: base_url + "JobCtrl/jobViewdetails",
            type: 'GET'
        },
			success: function(data) {
                 //console.log(data);
			}
    });



// $.ajax({
//             type: "POST",
//             url: base_url + "JobCtrl/jobViewdetails",
//             data: {
                
//             },
//             success: function(data) {
//                 //$('#add-agent').modal('hide');
//                 //console.log(data);
//                  alert(data);
//               // window.location.reload();
//             }
//         });



});