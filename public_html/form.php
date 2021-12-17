<script type="text/javascript">
function validate()
{
	var error = "";
	var password = document.getElementById("password");
	var confirmPassword = document.getElementById("confirmPassword");
	
	//Checking whether the password is more than 6 characters
	if(password.value.length < 6){
		error = "Password should be 6 or more characters";
		alert(error);
		return false;
	}
	
	//Checking whether both password fields match
	if(password.value !== confirmPassword.value){
		error = "Passwords did not match";
		alert(error);
		return false;
	}
	
	//If there is no errors, form will be submitted
	else {
		return true;
	}
}
</script>

Please create a Username and Password Here:
<form action="register.php" method="post" onsubmit = "return validate();">
	<!-- Username is a required field -->
	Username:<sup>*</sup> <input type="text" name="username" id= "username" required> <br>
	<!-- Password should not be less than 6 characters -->
	<i style= font-size:12px>Password should be more than 6 characters</i><br>
 	Password:<sup>*</sup> <input type="password" name="password" id= "password" required> <br>
	Confirm Password:<sup>*</sup> <input type="password" name="confirmPassword" id ="confirmPassword" required> <br> 
	<button type="submit" name="submit"> Submit</button>
</form>