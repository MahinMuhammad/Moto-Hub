function notSetEmpty()
{
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let gender = document.getElementById('gender').value;
	let phone = document.getElementById('phone').value;
	let address = document.getElementById('address').value;

	if(name == "" || email == "" || gender == "" || phone == "" || address == "")
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
	let gender = document.getElementById('gender').value;
	let phone = document.getElementById('phone').value;
	let address = document.getElementById('address').value;
	let dob = document.getElementById('dob').value;

	let user = {'email': email, 'name':name, 'gender':gender, 'phone':phone, 'address':address, 'dob':dob};
    let json = JSON.stringify(user);

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSettingsCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+json);
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
				alert('Information Updated!');
				window.location.href = "../view/cusProfile.php";
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

function loadSettings()
{
	document.getElementById("fields1").style.width = 544+"px";
	fetch("../view/cusSettings.php")
	.then((result) => { return result.text(); })
	.then((content) => { document.getElementById("box1").innerHTML = content; });
}


















