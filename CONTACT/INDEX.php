<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTACT PAGE</title>
</head>
<style type="text/css">
	body{
		background-color: black;

	}
	.container{
		margin:0 auto;
		margin-top: 90px;
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
	<input [type="text"],<input [type="email"]>,<input [type="contact"]>{
		padding: 50px;
		font-weight: bold;
	}
	<input [type="submit"]{
		font-weight: bold;

	}
	<input [type="message"]{
		height: 20vh;
	}
	h1{
		color: black;
		text-align: center;
	}
	button{
		width: 100px;
		height: 5vh;
		border-radius: 2px;
		border: black 4px solid;
		margin-left: 50px;

	}
	.one{
		height: 10vh;
	}
	.one1{
		height: 10vh;
	}
	a{
		text-decoration: none;
		color: black;
	}

</style>
<body>
	<div class="container">
		<h1>CONTACT FORM</h1>
		<form method="post" action="">
			<div class="one">
				<label for="NAME">NAME: </label>
				<input type="text" name="name" placeholder="Enter Your Name"><br>
				<br>
			</div>
			
			<div class="one">
				<label for="EMAIL">EMAIL:</label>
				<input type="email" name="EMAIL" placeholder="Enter Your Email" required><br>
				<br>
			</div>

			<div class="one">
				<label for="CONTACT">TEL NO:</label>
				<input type="contact" id="contact" name="contact" placeholder="Enter Your Telno" required><br>
				<br>
			</div>
			<div class="one1">
				<label for="Message">MESSAGE:</label>
				<input type="message" name="message" required placeholder="message"><br>
				<br>
			</div>
			

			<button type="submit">
				<a href="message.php"> SUBMIT</a>
			</button>


		</form>
		
</body>
</html>