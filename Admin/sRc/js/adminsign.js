//validate function
function validate(){
	var user_name = document.getElementById('u-name').value;
	var pass = document.getElementById('pass').value;
	
	if(user_name == 'admin' && pass == '12345'){
		window.location="admin.html";
	}
}
