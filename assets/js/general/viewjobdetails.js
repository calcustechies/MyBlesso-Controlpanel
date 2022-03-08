//base_url global declaration
var base_url = $('#base').val();
var postID = $('#postID').val();

$(document).ready(function() {

    $.ajax({
 
	type: 'POST',
	url: base_url + "JobCtrl/viewOneJobDeatils",
	data: {
		postID : postID,
	},
	success: function (data) {

  
        
		result = JSON.parse(data);
		
		
	    title = result.DisplayJobs[0]['JobPostTitle'];
		type = result.DisplayJobs[0]['jobTypeName'];
	   	category = result.DisplayJobs[0]['jobCategoryName'];
		minSal= result.DisplayJobs[0]['JobPostMinSalary'];
		maxSal = result.DisplayJobs[0]['JobPostMaxSalary'];
		minExp = result.DisplayJobs[0]['JobPostMinExp'];
		maxExp = result.DisplayJobs[0]['JobPostMaxExp'];
		locality = result.DisplayJobs[0]['JobPostLocality'];
		district = result.DisplayJobs[0]['DistrictName'];
		state = result.DisplayJobs[0]['StateName'];
		country = result.DisplayJobs[0]['CountryName'];
		description  = result.DisplayJobs[0]['JobPostDescription'];
		hiringfor = result.DisplayJobs[0]['JobPostHiringFor'];
		email  = result.DisplayJobs[0]['JobPostContactEmail'];
		phone = result.DisplayJobs[0]['JobPostContactPhone'];
		address  = result.DisplayJobs[0]['JobPostContactAddress'];
		firstname  = result.DisplayJobs[0]['userFirstName'];
		lastName = result.DisplayJobs[0]['userLastName'];
		postedon = result.DisplayJobs[0]['JobPostedONTS'];
		JobPostedBY = result.DisplayJobs[0]['JobPostedBY'];
		img =  result.DisplayJobs[0]['null'];
	 
	 
	    
		
		name = firstname + lastName;

        // name = '<a href="'+JobPostedBY+'"> '+ name +'</a>';
		
	
		
		url = base_url + '/assets/images/brand/'+ img;
		userdata = base_url + 'viewUserDetails/' + JobPostedBY;
		
		$('#jobTitle').val(title);
		$('#jobCategory').val(type);
		$('#jobType').val(category);
	    $('#minExp').val(minSal);		
		$('#maxExp').val(maxSal);	
		$('#minSal').val(minSal);
		$('#maxSal').val(maxSal);	
		$('#jobDes').val(description);	
		$('#jobLocality').val(locality);	
		$('#district').val(state);	
		$('#state').val(country);	
		$('#country').val(country);	
		$('#hiring').val(hiringfor);	
		$('#email').val(email);	
		$('#contact').val(phone);
		$('#postedBy').val(name);
		$('#date').val(postedon);
		$('#view').html('<a href="'+ userdata +'"><i class="fa fa-fw fa-eye field-icon fa-lg"></i></a>');
		if(img != null)
		{
		 $('#image').html( '<img src="'+url+'" class=""  width="50px" height="50px" style="display:inline-block; vertical-align:middle; text-align:center" disabled>');   
		}
		
		
		
		
	}
    });






});