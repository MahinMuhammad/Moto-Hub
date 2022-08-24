<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }

	require_once "../model/userModel.php";

	$list = showServices();
	$jsonArray = [];
	if(count($list)>0)
	{
		for ($i=0; $i < count($list); $i++) 
		{	$oko = base64_encode($list[$i]['servPic']);
			$jsonArray[$i] = 
			"<div class='prodBox' id='{$list[$i]['service_id']}'>
				<div id='prodpic'>
					<img src='data:image/png;base64,{$oko}' />
				</div>
				<div id='prodInfo'>
					<div id='inlines'>
						<div id='prodName'>
							{$list[$i]['name']}
						</div>

						<div id='prodPrice'>
							Price: {$list[$i]['price']}
						</div>

						<div id='sellerEmail'>
							Seller: {$list[$i]['Email']}
						</div>
						<div id='postTime'>
							Posted at {$list[$i]['service_id']}
						</div>
					</div>
					<div id='description'>
						{$list[$i]['description']}
					</div>
					<div class='serviceBtn' id='{$list[$i]['service_id']}' onclick='requestService()'>Request</div>
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

