<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }

	require_once "../model/userModel.php";

	$user['email'] = $_COOKIE['status'];

	$list = showProductsInCart($user);
	$jsonArray = [];
	if(count($list)>0)
	{
		for ($i=0; $i < count($list); $i++) 
		{	$oko = base64_encode(getProdRow($list[$i]['Product_Id'])['prodpic']);
			$name = getProdRow($list[$i]['Product_Id'])['Name'];
			$condition = getProdRow($list[$i]['Product_Id'])['new_used'];
			$price = getProdRow($list[$i]['Product_Id'])['Price'];
			$Seller = getProdRow($list[$i]['Product_Id'])['Email'];

			$jsonArray[$i] = 
			"<div class='prodBox' id='{$list[$i]['Product_Id']}'>
				<div class='prodpic'>
					<img src='data:image/png;base64,{$oko}' />
				</div>
				<div class='prodInfo'>
					<div class='prodName'>
						{$name}
					</div>
					<div class='prodCondition'>
						({$condition})
					</div>
					<div class='prodPrice'>
						Price: {$price}
					</div>
					<div class='sellerEmail'>
						Seller: {$Seller}
					</div>
					<div class='hiddenDivId'>{$list[$i]['Product_Id']}</div>
				</div>
				<div class='dltBtn' id='{$list[$i]['Product_Id']}' onclick='deleteFromCart(this.id)'>X</div>
			</div>";
		}
		echo json_encode($jsonArray);
	}
	else
	{
		echo "CARTEMPTY";
	}
?>

