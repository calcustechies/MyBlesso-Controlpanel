//base_url global declaration
var base_url = $('#base').val();


$(document).ready(function () {

    
    // });
    //Data Table
    $('#viewcategory').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            url: base_url + "CategoryCtrl/viewcategory",
            type: 'GET'
        },
    });


});


function show_freeze_details(e)
{
    var c=e.substring(7);
   //alert(c);
    
		var Freeze = $('#Freeze_'+c).val();

	
	
		$('input[id=freezevalue]').val(Freeze);
        $('input[id=categoryID]').val(c);
        
       
		if (Freeze == 0)
		{
		   $('#f_msg').text('Sure want to Freeze?');
		   

	   } else 
	   {
		   $('#f_msg').text('Sure want to Unfreeze?');
		   
	   }
	   $("#myfreeze").modal("show");
}


//FREEZE DATAS
function freeze_details()
{
 
        fzValue = $('#freezevalue').val();
		categoryID = $('#categoryID').val();

		// alert(categoryID);
		// alert(test_id_freeze);
	
		$.ajax({
	
			type: "POST",
			url: base_url + "CategoryCtrl/freeze_details",
			data: {
				fzValue: fzValue,
				categoryID: categoryID
			},
			success: function(data) {
                 //alert(data);
                
				window.location.reload();
			}
		});
 
}