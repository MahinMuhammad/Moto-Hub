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

function closeProductDetails(){
	window.location.href = "../view/customerHome.php";
}

function showproductDetails(Product_Id){

	const x = document.getElementsByClassName("prodBox");
	var i;
	for (i = 0; i < x.length; i++) {
	    x[i].style.display = 'none';
	}

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusProdDetailsCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("Product_Id="+Product_Id);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	document.getElementById("homeBody").innerHTML = this.responseText.trim();
        	loadComment();
    	}
    }
}

function commentNotEmpty()
{
	let com = document.getElementById("commentInput").value;
	if(com == "")
	{
		alert("Comment is Empty");
		return false;
	}
	else
	{
		return true;
	}
}

function saveComment(){
	let comment = document.getElementById("commentInput").value;
	let Product_Id = document.getElementById("hiddenID").innerHTML;
	
	let val = {'comment': comment, 'Product_Id':Product_Id};
	let json = JSON.stringify(val);

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusCommentSaveCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+json);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
            if(this.responseText.trim() == "Invalid")
            {
            	alert("DataBase Error!");
            }
            else if(this.responseText.trim() == "saved")
            {
            	alert("Comment Saved");
            	loadComment();
            	document.getElementById("commentInput").value = "";
            }
        }
    }
}

function loadComment(){
	document.getElementById("commentDisplay").innerHTML = "";

	let Product_Id = document.getElementById("hiddenID").innerHTML;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusCommentListCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("Product_Id="+Product_Id);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "NOCOM")
        	{

        	}

        	else
        	{
        		let list = JSON.parse(this.responseText.trim());
        		for(let i=0; i<list.length; i++)
        		{
        			document.getElementById("commentDisplay").innerHTML += list[i];
        		}
        	}
    	}

    }
}








