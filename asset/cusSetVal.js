function notEmpty()
{
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;

	if(name == "" || email == "")
	{
		alert("Please input Values");
		return false;
	}
	else
	{
		return true;
	}
}