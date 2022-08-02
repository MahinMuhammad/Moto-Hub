function notEmpty()
{
	let email = document.getElementById('email').value;
	let pass = document.getElementById('password').value; 

	if(email == "" || pass == "")
	{
		alert("Please input Values");
		return false;
	}
	else
	{
		return true;
	}
}

function login()
{
	let email = document.getElementById('email').value;
	let pass = document.getElementById('password').value; 
	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/loginCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('email='+email, 'password='+pass);
	xhttp.onreadystatechange = function ()
	{

        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            this.return;
        }
    } 
}




