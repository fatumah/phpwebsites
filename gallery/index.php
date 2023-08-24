<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHOTOGRAPH</title>


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link rel="STYLESHEET" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
    	
    	img{
    		max-width: 250px;
    		height: 60vh;
    		margin-top: 10px;
    		margin-left: 10px;
    	}
 
		li{
		  list-style:  none;

		}
		h1,h2{
		  margin: 0;
		}
		ul{
		  margin: 0;
		  padding: 0;
		  list-style: none;
		}

		a{
		  text-decoration: none;
		  color: #FFFFFF;
		  font-size: 1rem;
		}
		a:hover{
		  color: orange;
		}
		.nav-link::after{
		  position: absolute;
		}
		*{
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		  list-style: none;
		  background-color: black;
		  font-size: 'Poppins',sans-serif;
		}
		header{
		  position: relative;
		  padding: 0 2rem;
		  z-index: 100;
		 
		  
		}
		.navbar{
		  width: 100%;
		  height: 60px;
		  max-width: 1200px;
		  margin: 0 auto;
		  display: flex;
		  align-items: center;
		  justify-content: space-between;
		  
		  
		}
		.navbar .nav-logo a{
		  font-size: 1.5rem;
		  font-weight: bold;
		  
		}
				.nav-list{
		  display: flex;
		  gap: 2rem;
		  
		}
		h2,h3{
			color: white;
			text-align: center;
			font-size: 30px;
			padding-top: 30px;
		}
		.nav-item{
		  margin-bottom: 1.5rem;
		}
		.nav-link{
		  color: white;
		  font-weight: bold;
		}
		.navbar .toggle_btn{
		  color:#FFFFFF;
		  font-size: 1.5rem;
		  cursor: pointer;
		  display: none;
		}
		.action_btn{
		  background-color: orange;
		  color: #FFFFFF;
		  font-size: 0.8rem;
		  padding: 0.5rem 1rem;
		  border: none;
		  outline: none;
		  border-radius: 20px;
		  font-weight: bold;
		  cursor: pointer;
		  transition: scale 0.2 ease;
		}
		.action_btn:hover{
		  scale: 1.05;
		  color: white;
		}
		.action_btn:active{
		  scale: 0.95;
		}

		
		
		main{
			background-color: white;
			display: flex;
			width: 1200px;
			margin-right: 10px;
			height: 90vh;
			margin-left: 20px;
			margin-top: 50px;
			margin-bottom: 50px;
			
		}
		.container1{
			background-color: black;
			border: 1px solid ;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			width: 300px;
			height: 85vh;

		}
		.container2{
			background-color: black;
			border: 1px solid ;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			width: 300px;
			height: 85vh;

		}
		.container3{
			background-color: black;
			border: 1px solid ;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			width: 300px;
			height: 85vh;

		}
		.container4{
			background-color: black;
			border: 1px solid red;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			margin-right: 20px;
			width: 300px;
			height: 85vh;

		}

   </style>
</head>
<body>
<header>
	<div class="navbar">
        <div class="nav-logo"><a href="#">PHOTOGRAPHY</a></div>
        <div class="nav-menu" id="nav-menu"></div>
        <ul class="nav-list">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            
        </ul>
        <a href="#" class="action_btn">Hire Me</a>
        <div class="toggle_btn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        </div>
    
    </div>
</header>

<main>
	<div class="container1">
		<a href="Wedding.php"><img src="images/r.jpg"></a>
		<h2>WEDDINGS</h2>
	</div>
	<div class="container2">
		<a href="KITENGE.php"><img src="images/kite.jpg"></a>
		<h3> KITENGE FASHION</h3>
	</div>
	<div class="container3">
		<a href="TOURISM.php"><img src="images/tor.jpg"></a>
		<h2>TOURISM</h2>
	</div>
	<div class="container4">
		<a href="QUEEN.php"><img src="images/kare.jpg"></a>
		<h3>BEAUTY QUEEN</h3>
	</div>
</main>

</body>
</html>