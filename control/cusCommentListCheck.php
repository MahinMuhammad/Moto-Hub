<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }

	require_once "../model/userModel.php";

	$Product_Id = $_POST['Product_Id'];

	$list = showCommentList($Product_Id);
	$jsonArray = [];
	if(count($list)>0)
	{
		for ($i=0; $i < count($list); $i++) 
		{
			$jsonArray[$i] = 
			"<div class='singleComBox'>
				<div id='commenter'>
					{$list[$i]['Email']}
				</div>
				<div id='comDivider'>|</div>
				<div id='comContent'>
					{$list[$i]['content']}
				</div>
			</div>";
		}
		echo json_encode($jsonArray);
	}
	else
	{
		echo "NOCOM";
	}
?>