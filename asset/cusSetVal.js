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

function changeInfo()
{
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSettingsCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('email='+email+'&name='+name);
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

function uniqueEmail() 
{
	let email = document.getElementById('email').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/emailCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('email='+email);
	xhttp.onreadystatechange = function ()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			if(this.responseText.trim() == "NOTUNIQUE")
			{
				alert("Use an unique Email");
				return false;
			}
			else
			{
				changeInfo();
			}
		}
	}
}






