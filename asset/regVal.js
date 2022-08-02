function notEmpty()
{
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let pass = document.getElementById('password').value;
	let passConf = document.getElementById('passwordConf').value; 

	if(name == "" || email == "" || pass == "" || passConf == "")
	{
		alert("Please input Values");
		return false;
	}
	else
	{
		if(pass == passConf)
		{
			return true;
		}
		else
		{
			alert("Password does not match!");
			return false;
		}
	}
}