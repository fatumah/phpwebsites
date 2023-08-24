<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ECOMMERCE</title>


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link rel="STYLESHEET" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
    	
    	img{
    		max-width: 250px;
    		height: 40vh;
    		margin-top: 10px;
    		margin-left: 20px;
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
		  background-color: skyblue;
		  font-size: 'Poppins',sans-serif;
		  color: black;
		}
		header{
		  position: relative;
		  padding: 0 2rem;
		  z-index: 100;
		  color: black;
		 
		  
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
		  font-size: 20px;
		}
		.navbar .toggle_btn{
		  color:#FFFFFF;
		  font-size: 1.5rem;
		  cursor: pointer;
		  display: none;
		}
		.action_btn{
		  background-color: orange;
		  color: black;
		  font-size: 0.8rem;
		  padding: 0.5rem 1rem;
		  border: none;
		  margin-right: 20px;
		  outline: none;
		  border-radius: 30px;
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
			height: 60vh;
			margin-left: 20px;
			margin-top: 50px;
			margin-bottom: 50px;
			
		}
		section{
			background-color: white;
			display: flex;
			width: 1200px;
			margin-right: 10px;
			height: 60vh;
			margin-left: 20px;
			margin-top: 50px;
			margin-bottom: 50px;
		}
		.container1{
			background-color: skyblue;
			border: 1px solid black;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			width: 300px;
			height: 55vh;

		}
		.container2{
			background-color: skyblue;
			border: 1px solid black;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			width: 300px;
			height: 55vh;

		}
		.container3{
			background-color: skyblue;
			border: 1px solid black;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			width: 300px;
			height: 55vh;

		}
		.container4{
			background-color: skyblue;
			border: 1px solid black;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;
			margin-right: 20px;
			width: 300px;
			height: 55vh;
			flex-direction: column;

		}
			button{
			background-color: orange;
		  color: black;
		  font-size: 0.8rem;
		  padding: 0.5rem 1rem;
		  border: none;
		  margin-right: 20px;
		  outline: none;
		  border-radius: 30px;
		  font-weight: bold;
		  cursor: pointer;
		  transition: scale 0.2 ease;

			}
			.button:hover{
		  scale: 1.05;
		  color: white;
		}
		.button:active{
		  scale: 0.95;
		}
   </style>
</head>
<body>
<header>
	<div class="navbar">
        <div class="nav-logo"><a href="#">CLOTHING</a></div>
        <div class="nav-menu" id="nav-menu"></div>
        <ul class="nav-list">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            
        </ul>
        <div class="toggle_btn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        </div>
    
    </div>
</header>

<main>
	<div class="container1">
		
		<a href="Wedding.php"><img src="images/jeans.jpg"></a>
		<a href="#" class="action_btn">$2.33</a>
		<button>ADD TO CART</button>
		<h2>JEANS</h2>
	</div>
	<div class="container2">

		<a href="KITENGE.php"><img src="images/jeans.jpg"></a>
		<a href="#" class="action_btn">$10</a>
		<button>ADD TO CART</button>
		<h3> JACKETS</h3>
	</div>
	<div class="container3">
		<a href="TOURISM.php"><img src="images/asqe.jpg"></a>
		<a href="#" class="action_btn">$21</a>
		<button>ADD TO CART</button>
		<h2>DRESSES</h2>
	</div>
	<div class="container4">
		<a href="QUEEN.php"><img src="images/images (5).jpeg"></a>
		<a href="#" class="action_btn">$12 </a>
		<button>ADD TO CART</button>
		<h3>SKIRTS</h3>
	</div>
</main>
	<section>
		<div class="container1">
		<a href="Wedding.php"><img src="images/asqe.jpg"></a>
		<a href="#" class="action_btn">$1.4</a>
		<button>ADD TO CART</button>
		<h2>T-SHIRTS</h2>
	</div>
	<div class="container2">
		<a href="KITENGE.php"><img src="images/images (5).jpeg"></a>
		<a href="#" class="action_btn">$1.23</a>
		<button>ADD TO CART</button>
		<h3>CARGO PANTS</h3>
	</div>
	<div class="container3">
		<a href="TOURISM.php"><img src="images/jeans.jpg"></a>
		<a href="#" class="action_btn">$65</a>
		<button>ADD TO CART</button>
		<h2>LINGERIE</h2>
	</div>
	<div class="container4">
		<a href="QUEEN.php"><img src="images/jeans.jpg"></a>
		<a href="#" class="action_btn">$23</a>
		<button>ADD TO CART</button>
		<h3>COATS</h3>
	</div>
	</section>

</body>
</html>