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

function reg()
{
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let pass = document.getElementById('password').value;
	let userType = document.getElementById('userType').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/regCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('email='+email+'&password='+pass+'&name='+name+'&userType='+userType);
	xhttp.onreadystatechange = function ()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			if(this.responseText.trim() == "Failed")
			{
				alert('Database Error');
			}
			else
			{
				window.location.href = this.responseText.trim();
			}
		}
	}
}