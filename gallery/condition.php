<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	.container{
		margin:0 auto;
		max-width: 500px;
		background-color: orange;
		height: 300px;
		border: 1px solid blueviolet;
		border-radius: 10px;

	}
	
	form{
		display: flex;
		flex-direction: column;
		margin-left: 70px;
		margin-right: 80px;
		margin-top: 90px;
		border-radius: 10px;
	}
</style>
<body>
	<div class="container">
		<form method="post" action="">
			<input type="number" name="Number" placeholder="Enter number"><br>
			<input type="submit" name="check" value="check">
		</form>

		<?php

		if(isset($_POST['check'])){
			$num=$_POST['Number'];
			if($num<0){
				echo "The number is NEGATIVE";
			}
			elseif ($num>5 && $num<10) {
				echo "True";
			}
			else{
				echo "false";
			}
		}
		?>
	</div>
</body>
</html>
