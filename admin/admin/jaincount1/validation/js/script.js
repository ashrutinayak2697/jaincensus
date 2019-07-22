// 
//	jQuery Validate example script
//
//	Prepared by David Cochran
//	
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

	$('#vendorregister').validate({
		rules:{
			name:{
				alpha:true,
				minlength:5,
				maxlength:15,
				required:true
			},
			password:{
				alphanum:true,
				minlength:8,
				maxlength:30,
				required:true
			},
			mobile:{
				//minlength:12,
				maxlength:13,
				alphanum:true,
				required:true
			},
			email:{
				//alpha:true,
				email:true,
				required:true
			},
			drpcountry:{
				//alpha:true,
				min:1,
				required:true
			},
			drpstate:{
				//alpha:true,
				min:1,
				required:true
			},
			drpcity:{
				//alpha:true,
				min:1,
				required:true
			},
			pincode:{
				pincode:true,
				required:true
			}		
		},
		messages: {
            name:{
                required: "Please Enter name.",
                alpha: "Only Alphabets allowed .",
                minlength:"Minimum 5 character required.",
                maxlength:"Maximum 15 character required."
            },
            password:{
            	required:"please enter password.",
            	alphanum:"enter alpha and number required.",
            	minlegth:"minimum 8 character required.",
            	maxlength:"maximum 30 character required."
            },
            mobile:{
            	required:"please enter mobile number.",
            	alphanum:"Only number allowed.",
            	//minlength:"minimum 12 character required.",
            	maxlength:"maximum 13 charcter required."
            },
            email:{
            	required:"please enter email id.",
            	email:"enter valid  email id."
            },
            drpcountry:{
            	required:"please select country.",
            	min:"please select atleast 1 country."
            },
            drpstate:{
            	required:"please select state.",
            	min:"please select atleast 1 state."
            },
            drpcity:{
            	required:"please select city.",
            	min:"please select atleast 1 city."
            },
            pincode:{
            	required:"please enter pincode.",
            	pincode:"enter valid pincode."
            }
        },
	
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#update-vendorregister').validate({
		rules:{
			name:{
				alpha:true,
				minlength:5,
				maxlength:15,
				required:true
			},
			password:{
				alphanum:true,
				minlength:8,
				maxlength:30,
				required:true
			},
			mobile:{
				//minlength:12,
				maxlength:13,
				alphanum:true,
				required:true
			},
			email:{
				//alpha:true,
				email:true,
				required:true
			},
			drpcountry:{
				//alpha:true,
				min:1,
				required:true
			},
			drpstate:{
				//alpha:true,
				min:1,
				required:true
			},
			drpcity:{
				//alpha:true,
				min:1,
				required:true
			},
			pincode:{
				pincode:true,
				required:true
			}			
		},
		messages: {
            name:{
                required: "Please Enter name.",
                alpha: "Only Alphabets allowed .",
                minlength:"Minimum 5 character required.",
                maxlength:"Maximum 15 character required."
            },
            password:{
            	required:"please enter password.",
            	alphanum:"enter alpha and number required.",
            	minlegth:"minimum 8 character required.",
            	maxlength:"maximum 30 character required."
            },
            mobile:{
            	required:"please enter mobile number.",
            	alphanum:"Only number allowed.",
            	//minlength:"minimum 12 character required.",
            	maxlength:"maximum 13 charcter required."
            },
            email:{
            	required:"please enter email id.",
            	email:"enter valid  email id."
            },
            drpcountry:{
            	required:"please select country.",
            	min:"please select atleast 1 country."
            },
            drpstate:{
            	required:"please select state.",
            	min:"please select atleast 1 state."
            },
            drpcity:{
            	required:"please select city.",
            	min:"please select atleast 1 city."
            },
            pincode:{
            	required:"please enter pincode.",
            	pincode:"enter valid pincode."
            }
        },
	
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#admin-login').validate({
		rules:{
			email:{
				email:true,
				required: true,
			},
			txtPwd:{
				password:true,
				required:true,
				minlegth:4,
				maxlength:32
			}
		},
		messages: {
            email:{
                required: "Please Enter email-id.",
                email: "Please enter valid email id."
            },
            password:{
            	required:"please enter password.",
            	alphanum:"enter alpha and number required.",
            	minlegth:"minimum 4 character required.",
            	maxlength:"maximum 30 character required."
            }
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#add-country').validate({
		rules:{
			country:{
				alpha:true,
				required: true
				/*remote: 
                {
                    url: "http://localhost/InquirySystem/Admin/country_exists",
                    type: "post",
                }*/
			}
		},
		messages: {
            country:{
                required: "Please Enter country.",
                alpha: "allow only character."
                 // remote:"country already in use."
            }
        },
        
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#edit-country').validate({
		rules:{
			country:{
				alpha:true,
				required: true
			}
		},
		messages: {
            country:{
                required: "Please Enter country.",
                alpha: "allow only character."
            }
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#add-state').validate({
		rules:{
			country:{
				min:1,
				required:true
			},
			state:{
				alpha:true,
				required: true
			}
		},
		messages: {
            country:{
                required: "Please select country.",
                min: "please select at least 1 country."
            },
            state:{
                required: "Please enter state name.",
                alpha: "allow only character."
            },
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#update-state').validate({
		rules:{
			country:{
				min:1,
				required:true
			},
			state:{
				alpha:true,
				required: true
			}
		},
		messages: {
            country:{
                required: "Please select country.",
                min: "please select at least 1 country."
            },
            state:{
                required: "Please enter state name.",
                alpha: "allow only character."
            },
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#add-city').validate({
		rules:{
			drpstate:{
				min:1,
				required:true
			},
			txtcity:{
				alpha:true,
				required: true
			}
		},
		messages: {
            drpstate:{
                required: "Please select state.",
                min: "please select at least 1 state."
            },
            txtcity:{
                required: "Please enter city name.",
                alpha: "allow only character."
            },
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#update-city').validate({
		rules:{
			drpstate:{
				min:1,
				required:true
			},
			txtcity:{
				alpha:true,
				required: true
			}
		},
		messages: {
            drpstate:{
                required: "Please select state.",
                min: "please select at least 1 state."
            },
            txtcity:{
                required: "Please enter city name.",
                alpha: "allow only character."
            },
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#add-category').validate({
		rules:{
			txtcatname:{
				alpha:true,
				required: true
			}
		},
		messages: {
            txtcatname:{
                required: "Please enter category name.",
                alpha: "allow only character."
            }
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#update-category').validate({
		rules:{
			txtcatname:{
				alpha:true,
				required: true
			}

		},
		messages: {
            txtcatname:{
                required: "Please enter category name.",
                alpha: "allow only character."
            }
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#add-product').validate({
		rules:{
			drpcategory:{
				min:1,
				required:true
			},
			txtproduct:{
				alpha:true,
				required: true
			}


		},
		messages: {
			drpcategory:{
                required: "Please select category.",
                min: "please select at least 1 category."
            },
            txtproduct:{
                required: "Please enter Product name.",
                alpha: "allow only character."
            }
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#update-product').validate({
		rules:{
			drpcategory:{
				min:1,
				required:true
			},
			txtproduct:{
				alpha:true,
				required: true
			}


		},
		messages: {
			drpcategory:{
                required: "Please select category.",
                min: "please select at least 1 state."
            },
            txtproduct:{
                required: "Please enter Product name.",
                alpha: "allow only character."
            }
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});
	$('#change').validate({
		rules:{
			oldpassword:{
				alphanum:true,
				minlength:8,
				maxlength:30,
				required:true
			},
			newpassword:{
				alphanum:true,
				minlength:8,
				maxlength:30,
				required:true
			},
			confirmpassword:{
				alphanum:true,
				minlength:8,
				maxlength:30,
				required:true
			}
		},
		messages: {
			oldpassword:{
                alphanum: "allow only alpha and number.",
                minlength: "minimum 8 character required.",
                maxlength: "maximum 30 character required.",
                required: "Please enter password."
            },
            newpassword:{
                alphanum: "allow only alpha and number.",
                minlength: "minimum 8 character required.",
                maxlength: "maximum 30 character required.",
                required: "Please enter password."
            },
            confirmpassword:{
            	alphanum: "allow only alpha and number.",
                minlength: "minimum 8 character required.",
                maxlength: "maximum 30 character required.",
                required: "Please enter password."
            }
        },
		highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
	});

}); // end document.ready