function loadMsgForm(){
	fetch("../view/cusSendMsg.php")
	.then((result) => { return result.text(); })
	.then((content) => { document.getElementById("msgFormInside").innerHTML = content; });
	document.getElementById("content1").innerHTML = "";
	document.getElementById("msgForm").style.display = "block";
}

function hideMsgForm(){
	document.getElementById("msgForm").style.display = "none";
	document.getElementById("msgFormInside").innerHTML = "";

	document.getElementById("content1").innerHTML = "";
	document.getElementById("msgTitleBox").innerHTML = "";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSentBoxCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();
}

function loadSent(){
	document.getElementById("windowTitle").innerHTML = "Sent";
	document.getElementById("windowTitle").style.marginLeft = "65px";

	document.getElementById("content1").innerHTML = "";
	document.getElementById("msgTitleBox").innerHTML = "";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSentBoxCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "NOMSG")
        	{

        	}

        	else
        	{
        		let list = JSON.parse(this.responseText.trim());
        		for(let i=0; i<list.length; i++)
        		{
        			document.getElementById("msgTitleBox").innerHTML += list[i];
        		}
        	}
    	}

    }
}

function loadInbox(){
	document.getElementById("windowTitle").innerHTML = "Inbox";
	document.getElementById("windowTitle").style.marginLeft = "57px";

	document.getElementById("content1").innerHTML = "";
	document.getElementById("msgTitleBox").innerHTML = "";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusInBoxCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "NOMSG")
        	{

        	}

        	else
        	{
        		let list = JSON.parse(this.responseText.trim());
        		for(let i=0; i<list.length; i++)
        		{
        			document.getElementById("msgTitleBox").innerHTML += list[i];
        		}
        	}
    	}

    }
}

function showMsgContent(msg_id)
{
	// alert(content);
	document.getElementById("msgForm").style.display = "none";
	document.getElementById("content1").innerHTML = "";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusMsgContentCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("msg_id="+msg_id);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	document.getElementById("content1").innerHTML = this.responseText.trim();
    	}
    }

}

function showInboxMsgContent(msg_id)
{
	// alert(content);
	document.getElementById("msgForm").style.display = "none";
	document.getElementById("content1").innerHTML = "";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusInboxMsgContentCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("msg_id="+msg_id);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	document.getElementById("content1").innerHTML = this.responseText.trim();
    	}
    }

}




