function notEmpty()
{
	let pass = document.getElementById('password').value; 

	if(pass == "")
	{
		alert("Please input Values");
		return false;
	}
	else
	{
		return true;
	}
}