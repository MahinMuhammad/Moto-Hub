function notEmpty()
{
	let pass = document.getElementById('password').value;
	let passNew = document.getElementById('passwordNew').value;
	let passConf = document.getElementById('passwordConf').value;

	if(passNew == "" || pass == "" || passConf == "")
	{
		alert("Please input Values");
		return false;
	}
	else
	{
		if(passNew == passConf)
		{
			return true;
		}
		else
		{
			alert("Input the same new password twice");
			return false;
		}
	}
}