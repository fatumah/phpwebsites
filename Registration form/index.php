<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RESTRATION PAGE</title>
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
	a{

		  text-decoration: none;
		  color: black;
		  font-size: 1rem;
	
	}

</style>
<body>
	<div class="container">
		<h1>REGISTER FOR IUIU CAMPUS GRADUATIONPARTY</h1>
		<form id="REGISTER" method="post" action="">
			<div class="one">
				<label for="NAME">NAME: </label>
				<input type="text" name="name" id="name" placeholder="Enter Your Name" required><br>
				<br>
			</div>
			
			<div class="one">
				<label for="EMAIL">EMAIL:</label>
				<input type="email" name="EMAIL" id="email" placeholder="Enter Your Email" required><br>
				<br>
			</div>

			<div class="one">
				<label for="CONTACT">TEL NO:</label>
				<input type="tel" id="contact" name="contact" placeholder="Enter Your Telno" required><br>
				<br>
			</div>
			<div class="one">
				<label for="TERMS">I Agree to the Terms & Conditions</label>
				<input type="checkbox" name="TERMS" required><br>
				<br>
			</div>
			

			<button type="submit">
				<a href="message.php"> SUBMIT</a>
			</button>


		</form>
		
</body>
</html>