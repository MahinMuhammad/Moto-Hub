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

function cngPass()
{
	let pass = document.getElementById('password').value; 
	let passNew = document.getElementById('passwordNew').value;
	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusChangePassCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('password='+pass+'&passwordNew='+passNew);
	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
            if(this.responseText.trim() == "WRONGPASS")
            {
            	alert("Wrong Current Password");
            }
            else
            {
            	window.location.href = this.responseText.trim();
            }
        }
    }
}

function loadCngPass()
{
	fetch("../view/cusChangePass.php")
	.then((result) => { return result.text(); })
	.then((content) => { document.getElementById("box1").innerHTML = content; });
}



