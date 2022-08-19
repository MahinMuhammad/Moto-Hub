<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }

	require_once "../model/userModel.php";

	$list = showProducts();
	$jsonArray = [];
	if(count($list)>0)
	{
		for ($i=0; $i < count($list); $i++) 
		{	$oko = base64_encode($list[$i]['prodpic']);
			$jsonArray[$i] = 
			"<div class='prodBox' id='{$list[$i]['Product_Id']}' onclick='showproductDetails(this.id)'>
				<div class='prodpic'>
					<img src='data:image/png;base64,{$oko}' />
				</div>
				<div id='prodInfo'>
					<div class='prodName'>
						{$list[$i]['Name']}
					</div>
					<div class='prodCondition'>
						({$list[$i]['new_used']})
					</div>
					<div class='prodYear'>
						Model Year: {$list[$i]['model_Year']}
					</div>

					<div class='prodBrand'>
						Company: {$list[$i]['Brand_Name']}
					</div>
					<div class='prodPrice'>
						Price: {$list[$i]['Price']}
					</div>
					<div class='sellerEmail'>
						Seller: {$list[$i]['Email']}
					</div>
					<div class='postTime'>
						Posted at {$list[$i]['Product_Id']}
					</div>
				</div>
			</div>";
		}
		echo json_encode($jsonArray);
	}
	else
	{
		echo "NOPROD";
	}
?>

