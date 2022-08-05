function notEmpty()
{
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let pass = document.getElementById('password').value;
	let passConf = document.getElementById('passwordConf').value; 
	let phone = document.getElementById('phone').value;
	let dob = document.getElementById('dob').value;
	let address = document.getElementById('address').value;

	if(name == "" || email == "" || pass == "" || passConf == "" || phone == "" || dob == "" || address == "")
	{
		alert("Please input Values");
		return false;
	}
	else
	{
		if(pass == passConf)
		{
			if(/^\d+$/.test(phone))
			{
				if(phone.length ==11)
				{
					return true;
				}
				else
				{
					alert("Phone number must contain eleven digits");
					return false;
				}
			}
			else
			{
				alert("Phone number should only contain numbers");
				return false;
			}
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
	let phone = document.getElementById('phone').value;
	let dob = document.getElementById('dob').value;
	let gender = document.getElementById('gender').value;
	let address = document.getElementById('address').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/regCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('email='+email+'&password='+pass+'&name='+name+'&userType='+userType+'&phone='+phone+'&dob='+dob+'&gender='+gender+'&address='+address);
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
				reg();
			}
		}
	}
}




