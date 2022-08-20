<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
	$Product_Id = $_POST['Product_Id'];

	require_once "../model/userModel.php";

	$value = getProdRow($Product_Id);

	$oko = base64_encode($value['prodpic']);

	echo "<div class='prodDisplay'>
				<div id='prodpicBig'>
					<img src='data:image/png;base64,{$oko}' />
				</div>
				<div id='prodInfoDisplay'>
					<div id='prodName'>
						{$value['Name']}
					</div>
					<div id='prodCondition'>
						({$value['new_used']})
					</div>
					<div id='prodYear'>
						Model Year: {$value['model_Year']}
					</div>
					<div id='prodBrand'>
						Company: {$value['Brand_Name']}
					</div>
					<div id='prodType'>
						Type: {$value['Type']}
					</div>
					<div id='prodAvailability'>
						Available: {$value['Availability']}
					</div>
					<div id='prodPrice'>
						Price: {$value['Price']}
					</div>
					<div id='sellerEmail'>
						Seller: {$value['Email']}
					</div>
					<div id='prodDescription'>
						{$value['Description']}
					</div>
					<div id='postTimeDisplay'>
						Posted at {$value['Product_Id']}
					</div>
				</div>
				<div id='closeDisplayBtn' onclick='closeProductDetails()'>X</div>

			</div>
			<div id='commentBox'>
				<div> <input type='text' id='commentInput'> <input type='button' id='commentBtn' value='Comment' onclick='return !!(commentNotEmpty() && saveComment());'> </div>
				<div id='hiddenID'>{$value['Product_Id']}</div>
				<div id='commentDisplay'></div>
			</div>";
?>












