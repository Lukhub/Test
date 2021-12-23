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

<label> Please create a Username and Password Here: </label>
<form action="register.php" method="post" onsubmit = "return validate();">
	<!-- Username is a required field -->
	<div class= "form-group">
		<label>Username:<sup>*</sup></label>
		<input type="text" placeholder="Enter username" class="form-control" id= "username" required>
	</div>
	<div class="form-group">
	    <!-- Password should not be less than 6 characters -->
		<small class="form-text text-muted">Password should be more than 6 characters</small>
		<label>Password:<sup>*</sup></label>
 	 	<input type="password" class="form-control" placeholder="Enter Password" id= "password" required>
 	</div>
 	<div class="form-group">
 		<label>Confirm Password:<sup>*</sup></label>
 		<input type="password" class="form-control" placeholder="Repeat Password" id ="confirmPassword" required>
 	</div>
	<div class="form-group text-center">
		<button type="submit" class="btn btn-primary "> Submit</button>
	</div>
</form>