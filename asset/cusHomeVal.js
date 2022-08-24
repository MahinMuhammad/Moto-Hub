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
	loadHome();
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

function notInCart(){
	let Product_Id = document.getElementById("hiddenID").innerHTML;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSearchProdInCartCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("Product_Id="+Product_Id);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "INCART")
        	{
        		alert("This product is already in cart");
        	}

        	else if(this.responseText.trim() == "NOTINCART")
        	{
        		putInCart();
        	}
    	}

    }
}

function putInCart(){
	let Product_Id = document.getElementById("hiddenID").innerHTML;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusPutProdInCartCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("Product_Id="+Product_Id);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "WRONG")
        	{
        		alert("DATA BASE ERROR!!!");
        		return false;
        	}

        	else 
        	{
        		alert("Product Added in Cart");
        	}
    	}
    }
}

function prodNotReported(){
	let Product_Id = document.getElementById("hiddenID").innerHTML;
	let rec_email = "admin@motohub.com";
	let content = "Reporting Product: " + Product_Id;
	
	let val = {'rec_email': rec_email, 'content':content};
	let json = JSON.stringify(val);

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSearchProdReportCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+json);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "REPORTED")
        	{
        		alert("Already reported. Admin will take action soon!");
        	}

        	else if(this.responseText.trim() == "NOTREPORTED")
        	{
        		reportProd();
        	}
    	}
    }
}

function reportProd(){
	let Product_Id = document.getElementById("hiddenID").innerHTML;
	let rec_email = "admin@motohub.com";
	let content = "Reporting Product: " + Product_Id;

	let val = {'rec_email': rec_email, 'content':content};
	let json = JSON.stringify(val);

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSendMsgCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+json);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "Invalid")
        	{
        		alert("DATA BASE ERROR!!!");
        	}

        	else 
        	{
        		alert("Report Sent");
        	}
    	}
    }
}

function contactAdminForm(){

	const x = document.getElementsByClassName("prodBox");
	var i;
	for (i = 0; i < x.length; i++) {
	    x[i].style.display = 'none';
	}

	fetch("../view/cusContactAdmin.php")
	.then((result) => { return result.text(); })
	.then((content) => { document.getElementById("homeBody").innerHTML = content; });
}

function contactAdmin(){
	let rec_email = "admin@motohub.com";
	let content = document.getElementById("contentAdmin").value;

	let val = {'rec_email': rec_email, 'content':content};
	let json = JSON.stringify(val);

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusSendMsgCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+json);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "Invalid")
        	{
        		alert("DATA BASE ERROR!!!");
        	}

        	else 
        	{
        		alert("Massage received By admin");
        		document.getElementById("contentAdmin").value = "";
        	}
    	}
    }
}




