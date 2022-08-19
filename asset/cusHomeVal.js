function loadHome(){
	document.getElementById("homeBody").innerHTML = "";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusProductListCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "NOPROD")
        	{

        	}

        	else
        	{
        		let list = JSON.parse(this.responseText.trim());
        		for(let i=0; i<list.length; i++)
        		{
        			document.getElementById("homeBody").innerHTML += list[i];
        		}
        	}
    	}

    }
}

function showproductDetails(val){

}