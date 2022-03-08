//base_url global declaration
var base_url = $('#base').val();
var userID = $('#postID').val();

$(document).ready(function() {

    $.ajax({
 
	type: 'POST',
	url: base_url + "EmployerCtrl/viewOneUser",
	data: {
		userID : userID,
	},
	success: function (data) {

  
        
        result = JSON.parse(data);
		
		
	    userFirstName = result.UsersDetails[0]['userFirstName'];
	    
		userLastName = result.UsersDetails[0]['userLastName'];
	   	userDOB = result.UsersDetails[0]['userDOB'];
		userContactNumber = result.UsersDetails[0]['userContactNumber'];
		userEmail = result.UsersDetails[0]['userEmail'];
		userAddress  = result.UsersDetails[0]['userAddress'];
		userQualification = result.UsersDetails[0]['userQualification'];
		userQualification = ((userQualification == 0)? '' : userQualification);
		userDesignitation = result.UsersDetails[0]['userDesignitation'];
		userExp = result.UsersDetails[0]['userExp'];
		userSkills = result.UsersDetails[0]['userSkills'];
		userState  = result.UsersDetails[0]['userState'];
		userDistrict = result.UsersDetails[0]['userDistrict'];
		userDescription  = result.UsersDetails[0]['userDescription'];
		userpin = result.UsersDetails[0]['userpin'];
		StateName  = result.UsersDetails[0]['StateName'];
		DistrictName  = result.UsersDetails[0]['DistrictName'];
		userJoinedDateTime  = result.UsersDetails[0]['userJoinedDateTime'];
		img1 =  result.UsersDetails[0]['userImg'];
	 

		url = base_url + '/assets/images/brand/' + img1;
		
		
		
		$('#firstName').val(userFirstName);
		$('#lastName').val(userLastName);
		$('#dob').val(userDOB);
	    $('#email').val(userEmail);		
		$('#contact').val(userContactNumber);	
		$('#qualification').val(userQualification);
		$('#designation').val(userDesignitation);	
		$('#experience').val(userExp);	
		$('#skills').val(userSkills);	
		$('#userDes').val(userDescription);	
		$('#address').val(userAddress);	
		$('#state').val(userState);	
		$('#district').val(userDistrict);	
		$('#country').val();	
		$('#pincode').val(userpin);
		
		$('#date').val(postedon);
		$('#view').html('<a href="'+ userdata +'"><i class="fa fa-fw fa-eye field-icon fa-lg"></i></a>');
		if(img != null)
		{
		 $('#image').html( '<img src="'+url+'" class=""  width="50px" height="50px" style="display:inline-block; vertical-align:middle; text-align:center" disabled>');   
		}
		
		
		
		
	}
    });






});