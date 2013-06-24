function validateLogin(){
	jQuery( "#admin_login" ).validate({
		rules: {
			email: {
			required: true,
			email:true
			},
			password: {
			required: true
			}		
		}
	});
}	