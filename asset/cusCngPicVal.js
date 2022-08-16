function showSelectedPic(event)
{
	document.getElementById("imgShow1").src = URL.createObjectURL(event.target.files[0]);
}

function loadSelectPic()
{
	fetch("../view/cusChangePic.php")
	.then((result) => { return result.text(); })
	.then((content) => { document.getElementById("box1").innerHTML = content; });
}