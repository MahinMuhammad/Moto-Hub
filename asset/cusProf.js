function cleanBox()
{
	document.getElementById("fields1").style.width = 300+"px";
	document.getElementById("box1").innerHTML = "";
}

function editWindowOpen()
{
	let id = null;
	const box = document.getElementById("fields1");
	let marg = 444;
	clearInterval(id);
	id = setInterval(frame, 5);
	function frame()
	{
		if(marg == 50)
		{
			clearInterval(id);
		}
		else
		{
			marg--;
			box.style.marginTop = marg + 'px';
		}
	}
}

function editWindowClose()
{
	let id = null;
	const box = document.getElementById("fields1");
	let marg = 50;
	clearInterval(id);
	id = setInterval(frame, 5);
	function frame()
	{
		if(marg == 470)
		{
			clearInterval(id);
		}
		else
		{
			marg++;
			box.style.marginTop = marg + 'px';
		}
	}
}