<?php 
if(isset($_COOKIE['Language'])){
	if($_COOKIE['Language'] == "ar"){
		include 'ar.php';
	}
	elseif($_COOKIE['Language'] == "en")
	{
		include 'en.php';
	}
}else{
	include 'en.php';

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Il resturant</title>
	<meta charset="utf-8">
	<meta name= "keywords" content="hamburger,menu" >
	<meta name="description" content = "Excellent restaurant serving many delicious dishes">
	<meta name="author" content="Amira Sherif">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		*
{
	margin: 0;
}

nav
{
	
	position: fixed;
	left: 0;
	top: 0;
	right: 0;
	border :2px outset whitesmoke;
	background-color: white;
	z-index: 99;

}

nav ul
{
	list-style: none;
	float: right;
}
nav ul li 
{
	display: inline-flex;
	padding:5px;
	margin: 10px;
}
nav ul li a
{
	text-decoration: none;
	color: black;
	opacity: 0.9;
	padding: 5px;
	font-size: 15px;
	letter-spacing: 3px;
	font-family: "Times New Roman",serif;
}
nav ul li a:hover
{
	background-color: #D3D3D3;
	padding: 10px 15px;
}
nav #Gourmet
{display: inline-flex;
	opacity: 0.9;
	letter-spacing: 3px;
	font-size: 17px;
	float: left;
	margin-top:20px;
	margin-left:21px;
	font-family: "Times New Roman",serif;
}

header img
{ 
	width: 100%;
}
header
{
	position: relative;

}
header #catering
{
	opacity: 0.6;
	font-size: 36px;
	text-transform: capitalize;
	letter-spacing: 3px;
	left:1%;
	bottom: 2%;
	font-family: "Times New Roman",serif;
	float: left;
	color: black;
	margin-bottom:20px;
	margin-left:20px;
	position: absolute;
}
 
#project  , #about ,#contact , #Menu
{
	margin: 61px 112px;
}
#contact{
	margin: 61px 112px;
padding: 0px  10px;
}
div
{
	width: 500px;
	height: 457px;
	padding: 9px  10px;
	display:inline-block; 
}
#project .content{
	position: relative;
	float: left;
	margin: 0.9%;
	width: calc(96%/4);
height:300px;
	
}
#project .content span 
{
	position: absolute;
	top: 0;
	left: 0;
	background-color: black;
	font-size: 20px;
	padding: 10px;
	color: white
}
#project .content img
{
	width: 100%;
}
#about .p
{  
	height: 403px;
	float:right;
	padding: 0px  10px;
}

img
{
	width: 100%;
	height: 100%;
}
#c
{
	color: rgb(8, 18, 156);
	font-size: medium;
}

.b2{color: black;
	opacity: 0.7;}
h4.bread{
		letter-spacing: 5;
	}


#contact input
{
	width: 100%;
	margin: 5px;
	height: 30px;
	padding: 10px;
}
#contact #send
{
	width: 150px;
	background-color: black;
	color: white;
	padding: 10px;
	font-size: 20px;
	height: 50px;

}
#contact #send:hover
{
	cursor: pointer;
	background-color: #D3D3D3;
	color: black;
	border: none;
}

footer
{
	background-color: burlywood;
	height: 60px;
	position: relative;
}
footer p
{
	color: black;
	position: absolute;
	top: 20px;
	right: 600px;
}

		</style>
</head>
<body>
	<nav>
		<span id="Gourmet">Gourmet au catering</span>
		
		<ul>
			
		<li><a  onclick= "scrollPage(0, 1170);"><?php echo $array['Menu']; ?></a></li>
			<li><a onclick="scrollPage(0,650)"><?php echo $array['about']; ?></a></li>
			<li><a onclick="scrollPage(0,2400)"><?php echo $array['contact']; ?></a></li>
			<li><a href="<?php echo $array['href']; ?>"><?php echo $array['arabic']; ?></a></li>
		</ul>
	
	</nav>
	<a href="#about" class="button">About </a>
	<header>

        <img src="images/1.jpg" style="height: 20%;">
		<span id="catering">le catering</span>
	</header>

	
	
		 <section id="about">
			<div class="p" style="float: left; color:black; border: 3px solid #ffd800; margin-bottom: 40px; border-radius: 10px; background-color: #FFF1AD; box-shadow: 13px 15px 6px #2b2626; border-top: 30px solid #ffd800;">
				<h1 style="color:black; margin-top: -27px; padding-left: 5px; font-weight:bold;">
					About Catering
				</h1>
				<br>   
				<h4>Tradition since 1889</h4>
			<br>
			<p style=" font-size: 120%;">
				The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use" 
					<span class="bg">seasonal</span>
					" ingredients."
				</p>
				
		<br>
		<p style=" font-size: 120%; opacity: 0.7;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</p>
		
		
		</div> 
		</div>
		
			  
				<div id="texts" style="float:right; max-width: 80%;">
					<p><img style="height:440px;" src="images/2.jpg">
			</p>
			
		 
		
				</div>

		
		 </section>
			
		 <section id="project">
		<h2>OurMenu</h2>
		<hr>
		<div class="content">
			<img src="images/4.jpg">
			<span>Belgian Waffle</span>
			
		</div>

		<div class="content">
			<img src="images/7.jpg">
			<span> Blueberry Pancakes</span>
			
		</div>

		<div class="content">
			<img src="images/6.jpg">
			<span>Honey Almond Granola with Fruits</span>
			
		</div>

		<div class="content">
			<img src="images/5.jpg">
			<span>Pizza Margherita</span>
			
		</div>

		<div class="content">
			<img src="images/9.jpg">
			<span>Bread Basket</span>
			
		</div>
		<div class="content">
			<img src="images/8.jpg">
			<span>Scrambled eggs
</span>
			
		</div>
		
	</section>


 	
 <section id="Menu">
	<div style="float:left;  color:black; border: 3px solid #ffd800; margin-bottom: 25px; border-radius: 10px; background-color: #FFF1AD; box-shadow: 13px 15px 6px #2b2626; border-top: 30px solid #ffd800;">
		<h1 style="color:black; margin-top: -37px; padding-left: 1px; font-weight:bold;">
			
	our menu
		</h1>
		 	  
	<br>
	<h4 class="bread">Belgian Waffle</h4>
<br>
	<p class="b2">Vanilla flavored batter with malted flour 7.50
	</p>
<br>

<h4 class="bread">Blueberry Pancakes</h4>
<br>
	<p class="b2">With syrup, butter and lots of berries 8.50 </p>
	<br>
<h4 class="bread">Honey Almond Granola with Fruits</h4>
<br>
	<p class="b2">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00
	</p>
	<br>


	<h4 class="bread">Pizza Margherita</h4>
<br>
	<p class="b2">San Marzano tomato sauce, fresh mozzarella fior di latte, fresh organic basil 7.50</p>
	<br>
	<h4 class="bread">Bread Basket</h4>
	<br>

	<p class="b2">Assortment of fresh baked fruit breads and muffins 5.50
	</p>
	<br>
	<h4 class="bread">Scrambled eggs</h4>
<br>
	<p class="b2">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p>
</div> 
</div>
<div class="pop">
	<p><img style="height:492px; float:right; max-width: 86%;"src="images/3.jpg">
</p>
</div>


		
	
		
	   
		

 </section>


<section id="contact">

	<h1 >Contact</h1>

	<br> 
<p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.

	<br> <br>
	<p id="c">Catering Service, 42nd Living St, 43043 New York, NY</p>
	<br>
<p >You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
<br>
  <form>
	<input type="text" name="" placeholder="Name">
	<input type="number" name="" placeholder="How many people">
	<input type="datetime-local" name="">
	<input type="text" name="" placeholder="Message/special requirment">
	<input type="submit" name="" id="send" value="Send Message">
</form>
</section>

<footer>
 <p>&copy; All Right Reserved</p>
</footer>
<script type="text/javascript">
		function scrollPage(x,y){
			window.scrollTo(x,y);
		}

	
		
		
	</script>

</body>
</html>