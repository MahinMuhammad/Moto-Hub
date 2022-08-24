function loadServices(){
	document.getElementById("canvasBody").innerHTML = "";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusServiceListCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "NOSER")
        	{

        	}

        	else
        	{
        		let list = JSON.parse(this.responseText.trim());
        		for(let i=0; i<list.length; i++)
        		{
        			document.getElementById("canvasBody").innerHTML += list[i];
        		}
        	}
    	}

    }
}

// function notRequestedService(service_id){
// 	let xhttp = new XMLHttpRequest();
// 	xhttp.open('POST', '../control/cusSearchServiceInCartCheck.php', true);
// 	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// 	xhttp.send("service_id="+service_id);

// 	xhttp.onreadystatechange = function ()
// 	{
//         if(this.readyState == 4 && this.status == 200)
//         {
//         	if(this.responseText.trim() == "REQUESTED")
//         	{
//         		alert("This service is already in requested");
//         	}

//         	else if(this.responseText.trim() == "NOTREQUESTED")
//         	{
//         		requestService(service_id);
//         	}
//     	}

//     }
// }

function requestService(){
	
	// let xhttp = new XMLHttpRequest();
	// xhttp.open('POST', '../control/cusSerivceRequestCheck.php', true);
	// xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// xhttp.send("$service_id="+$service_id);

	// xhttp.onreadystatechange = function ()
	// {
 //        if(this.readyState == 4 && this.status == 200)
 //        {
 //        	if(this.responseText.trim() == "WRONG")
 //        	{
 //        		alert("DATA BASE ERROR!!!");
 //        		return false;
 //        	}

 //        	else 
 //        	{
 //        		alert("Service Requested");
 //        	}
 //    	}
 //    }
 alert("service Requested");
}




