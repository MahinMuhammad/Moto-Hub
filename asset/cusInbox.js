function loadMsgForm(){
	fetch("../view/cusSendMsg.php")
	.then((result) => { return result.text(); })
	.then((content) => { document.getElementById("msgFormInside").innerHTML = content; });
	document.getElementById("msgForm").style.visibility = "visible";
}

function hideMsgForm(){
	document.getElementById("msgForm").style.visibility = "hidden";
	document.getElementById("msgFormInside").innerHTML = "";
}
