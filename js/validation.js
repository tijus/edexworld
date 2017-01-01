$(document).ready(function(){
	$('#register').validate({
		rules: {
	    	first_name: {
	        	required: true,
	       		required: true
	      	},
		  
			last_name: {
				required: true,
			   	required: true
			},
			
			father_name: {
				required: true,
			   	required: true
			},
		  
		  	address: {
	        	required: true,
	       		required: true
	      	},
			
			state: {
	        	required: true,
	       		required: true
	      	},
		  
		  	email: {
	        	required: true,
	        	email: true
	     	},
			
			mobile: {
	        	required: true,
	        	maxlength: 10,
				digits: true
	     	},
			
		 	username: {
	        	minlength: 6,
	        	required: true
	      	},
		  
		  	password: {
				required: true,
				minlength: 6
			},
			
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			confirm_email: {
				required: true,
                                email:true,
				equalTo: "#email"
			},
			
			sex: {
				required: true,
				required: true
			},
			
			date: {
				required: true,
				date: true
			},
			
			cat: {
				required: true,
				required: true
			},
		  		  
		  	agree: "required"
		  
	    },
		highlight: function(element) {
			$(element).closest('.control-group').removeClass('success').addClass('error');
		},
		success: function(element) {
			element
			.text('OK!').addClass('valid')
			.closest('.control-group').removeClass('error').addClass('success');
		}
	});
}); // end document.ready	