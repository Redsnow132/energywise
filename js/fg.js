function showLogin(){
 	if(displayLoginForm.value == 'Login'){
 		 loginSection.style.display = 'block';
 		 displayLoginForm.value = 'Hide Login Form';
  	} else if(displayLoginForm.value = 'Hide Login Form'){
    	displayLoginForm.value = 'Login';
        loginSection.style.display = 'none';
    }
 }
 
 function showRegister(){
 	if(displayRegisterForm.value == 'Register'){
  		registerSection.style.display = 'block';
  		displayRegisterForm.value = 'Hide Register Form';
  	} else if(displayRegisterForm.value = 'Hide Register Form'){
    	displayRegisterForm.value = 'Register';
        registerSection.style.display = 'none';
    }
 }
