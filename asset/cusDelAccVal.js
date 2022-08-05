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

function delAcc()
{
	let pass = document.getElementById('password').value; 
	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusAccoutDeleteCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('password='+pass);
	xhttp.onreadystatechange = function ()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			if(this.responseText.trim() == "WRONGPASS")
			{
				alert("Wrong Password!!");
			}
			else
			{
				window.location.href = this.responseText.trim();
			}
		}
	}
}