function loadCart(){
	document.getElementById("allProdHolderInside").innerHTML = "";
	document.getElementById("selectedProdList").innerHTML = "";
	document.getElementById("totalPrice").innerHTML = 0;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusCartCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "CARTEMPTY")
        	{
        		document.getElementById("allProdHolderInside").innerHTML = "<div id='emptyCartMsg'>No product in cart yet</div>"
        	}

        	else
        	{
        		let list = JSON.parse(this.responseText.trim());
        		for(let i=0; i<list.length; i++)
        		{
        			document.getElementById("allProdHolderInside").innerHTML += list[i];
        			let prodId = document.getElementsByClassName("hiddenDivId")[i].innerHTML;
        			let prodName = document.getElementsByClassName("prodName")[i].innerHTML;
        			let prodPriceArray = document.getElementsByClassName("prodPrice")[i].innerHTML.split(" ");
        			let prodPrice = prodPriceArray[1];
        			document.getElementById("selectedProdList").innerHTML += "<div class='name101'>"+prodName+"</div><div class='price101'>"+prodPrice+"</div><br>";
        			document.getElementById("totalPrice").innerHTML = parseInt(document.getElementById("totalPrice").innerHTML) + parseInt(prodPrice);
        		}
        	}
    	}
    }
}

function deleteFromCart(Product_Id){

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusCartDeleteCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('Product_Id='+Product_Id);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "DELETED")
        	{
        		alert("Product deleted from cart");
        		loadCart();
        	}
        	else{
        		alert("Database Error!!!");
        	}
    	}
    }
}


function checkoutController(){
	let boughtItemNumber = 0;

	let ele = document.getElementsByClassName("hiddenDivId");

	let Product_Id_List = [ele.length]

	for (var i = 0; i < ele.length; i++) {
		
		Product_Id_List[i] = ele[i].innerHTML;
	}

	let json = JSON.stringify(Product_Id_List);

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusCheckOutCheck.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+json);

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "DONE")
        	{
        		alert("Product/s Bought Successfully");
        	}
        	else{
        		alert("Database Error!!!");
        	}
    	}
    }
    window.location.href = "../view/customerHome.php";
}

function loadHistory(){
	document.getElementById("selectedProdHolder").style.display = "none";
	document.getElementById("cartSeperator").style.display = "none";
	let val = document.getElementById("emptyCartMsg");
	if(val != null)
	{
		val.style.display = "none";
	}
	document.getElementById("allProdHolderInside").innerHTML = "";
	document.getElementById("allProdHolder").style.width = "1030px";

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../control/cusPayHistoryCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function ()
	{
        if(this.readyState == 4 && this.status == 200)
        {
        	if(this.responseText.trim() == "HISTORYEMPTY")
        	{
        		document.getElementById("allProdHolderInside").innerHTML = "Nothing Bought Yet";
        	}
        	else{
        		let list = JSON.parse(this.responseText.trim());
        		for(let i=0; i<list.length; i++)
        		{
        			document.getElementById("allProdHolderInside").innerHTML += list[i];
        		}
        	}
    	}
    }
}







