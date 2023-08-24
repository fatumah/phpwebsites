<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<style>
	.container{
		margin:0 auto;
		max-width: 500px;
		background-color: orange;
		height: 500px;
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
	<input [type="text"],<input [type="password"]>{
		padding: 50px;
		font-weight: bold;
	}
	<input [type="submit"]{
		font-weight: bold;

	}
	h1{
		color: black;
		text-align: center;
	}
</style>
<body>
	
	<div class="container">
		<h1>LOGIN PAGE</h1>
		<form method="post" action="">
			<label for="Username">USERNAME: </label><br><br>
			<input type="text" name="Username" placeholder="Enter Username"><br>
			<br>

			<label for="Password">PASSWORD:</label>
			<input type="password" name="Password" placeholder="Enter Password" required><br>
			<br>

			<input type="submit" name="login" value="SUBMIT">


		</form>

		<?php
				if(isset($_POST['login'])){
				$user=$_POST['Username'];
				$pass=$_POST['Password'];
				if($user=="admin" && $pass=="123"){
					header("Location: we.php");
					exit();
					
				}
				
				else{
					echo "invalid credentials";
				}
			}
		?>
	</div>
</body>
</html>