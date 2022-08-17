function notEmpty()
{
	let rec_email = document.getElementById('rec_email').value;
	let content = document.getElementById('content').value;

	if(rec_email == "" || content == "")
	{
		alert("Please input Values");
		return false;
	}
	else
	{
		return true;
	}
}

function sendMsg(){
	let rec_email = document.getElementById('rec_email').value;
	let content = document.getElementById('content').value;

	let msg = {'rec_email': rec_email, 'content':content};
    let json = JSON.stringify(msg);

    let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSendMsgCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+json);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	alert(this.responseText.trim());
        	clearMsg();	
        }
    }
}

function emailExits() 
{
	let email = document.getElementById('rec_email').value;

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
				sendMsg();
			}
			else
			{
				alert("Receiver Invalid!");
				return false;
			}
		}
	}
}

function clearMsg()
{
	document.getElementById('rec_email').value = "";
	document.getElementById('content').value = "";
}



