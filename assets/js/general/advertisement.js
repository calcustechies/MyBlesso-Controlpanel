//base_url global declaration
var base_url = $('#base').val();


$(document).ready(function () {

    
    // });
    //Data Table
    $('#viewadvertisement').DataTable({
        stateSave: true,
        fixedHeader: true,
        destroy: true,
        "ajax": {
            url: base_url + "AdvertisementCtrl/viewadvertisement",
            type: 'GET'
        },
    });


});

function show_freeze_details(e)
{
    var c=e.substring(7);
    //alert(c);
    
		var adFreeze = $('#adFreeze_'+c).val();

	
	
		$('input[id=freezevalue]').val(adFreeze);
        $('input[id=advertiseID]').val(c);
        
       
		if (adFreeze == 0)
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
		advertisementId = $('#advertiseID').val();

		// alert(f_number);
		// alert(test_id_freeze);
	
		$.ajax({
	
			type: "POST",
			url: base_url + "AdvertisementCtrl/freeze_test_details",
			data: {
				fzValue: fzValue,
				advertisementId: advertisementId
			},
			success: function(data) {
                // alert(data);
                
				window.location.reload();
			}
		});
 
}

//SHOW DELETE MODAL
function show_delete_details(e)
        {
            var c=e.substring(7);

	    //alert(c);
	
		//$('input[id=freezevalue]').val(adFreeze);
         $('input[id=advertiseID]').val(c);
        
         $("#delete").modal("show"); 
        }



        
//DELETE DATAS
function deleteDetails()
{
 
      
    advertiseID = $('#advertiseID').val();

	
		$.ajax({
	
			type: "POST",
			url: base_url + "AdvertisementCtrl/deleteDetails",
			data: {
				advertisementId: advertiseID
			},
			success: function(data) {
                 //alert(data);
                
				window.location.reload();
			}
		});
 
}