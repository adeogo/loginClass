
function showForm(){
	document.getElementById("signup-container").style.height = '100%';
}

function hideForm(){
	document.getElementById("signup-container").style.height = '0';
}

/*Login*/

var loginForm = document.getElementById("loginForm");
var loginInput = document.getElementsByClassName("loginInput");


if(loginForm){
	loginForm.addEventListener("submit", loginFunction);

	function loginFunction(event){
		var j;
		for(j=0; j < loginInput.length; j++){
			if((loginInput[j].value).length < 5){
				event.preventDefault();
				alert("Must be up to 5 characters ");
				loginInput[j].focus();
				loginInput[j].style.borderBottom = "2px solid #D90000";
				break;
			}else{
				loginInput[j].style.borderBottom = "2px solid #238C00";
			}
		}
	}
}

/*Sign Up*/
var signupForm = document.getElementById("signupForm");
var signupInput = document.getElementsByClassName("signupInput");

if(signupForm){
	signupForm.addEventListener("submit", signupFunction);

	function signupFunction(event){
		var j;
		for(j=0; j < signupInput.length; j++){
			if((signupInput[j].value).length < 5){
				event.preventDefault();
				alert("Must be up to 5 characters ");
				signupInput[j].focus();
				signupInput[j].style.borderBottom = "2px solid #D90000";
				break;
			}else{
				signupInput[j].style.borderBottom = "2px solid #238C00";
			}
		}

		if(signupInput[2].value !== signupInput[1].value){
			event.preventDefault();
			alert("Passwords do not match!");
			signupInput[2].style.borderBottom="2px solid #D90000";
		}
		
	}
}