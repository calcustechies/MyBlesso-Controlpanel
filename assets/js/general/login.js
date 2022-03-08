//base_url global declaration
var base_url = $('#base').val();
//var base_url = "http://localhost/lionsclub-controlpanel/";

$(document).ready(function () {

	
	//LOGIN BEGIN
	$('#btnLogin').click(function () {
        
        //alert('hai');
		var  UserName = $('#UserName').val();
		var Password = $('#Password').val();

            $.ajax({
            	type: "POST",
            	url: base_url + "LoginCtrl/login",
            	data: {
            		UserName: UserName,
            		Password: Password
            	},
            	success: function (data) {

                    //alert(data);
				
				 result = JSON.parse(data);
				 status = result.status;
				//  //alert(data);
				if (status == 200) {
					//status = result.status;
					token  = result.token;
					rootID = result.rootID;
					rootFirstName = result.rootFirstName;
					rootLastName = result.rootLastName;
					rootUserName = result.rootUserName;
					rootLastLogin = result.rootLastLogin;
					// sessClubID = result.ClubID;
					



					$.ajax({
						type: "POST",
						url: base_url + "LoginCtrl/setSession",
						data: {
							token : token,
							rootID : rootID,
							rootFirstName : rootFirstName,
							rootLastName : rootLastName,
							rootUserName : rootUserName,
							rootLastLogin : rootLastLogin,
							// sessMemberZoneID : sessMemberZoneID,
							
						},
						success: function (data) {
							window.location.replace(base_url + "Jobsdetails");
						}
					});

				} else {
					document.getElementById("errMess").innerHTML = "Invalid Credentials";
				}
			}
        });
	});
	



    });

	//LOGIN END
	
//SHOW PASSWORD
	function myFunction() {
		var x = document.getElementById("Password");
		if (x.type === "password") {
		  x.type = "text";
		} else {
		  x.type = "password";
		}
	  }
    