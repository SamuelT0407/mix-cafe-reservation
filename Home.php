<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/png" href="Picture/logo.png">
</head>

<body>

<?php require 'Require/header.php'; ?>

<img src="Picture/background.jpg" alt="home-background" class="home-background">

<div class="center">
<table class="info-table">

<tr>
<td colspan="3"style="font-size:40px;">Serving Dinners Since 1999</td>
</tr>

<tr>
<td>
<img src="Picture/pizza.png" alt="100% PREMIUM CHEESE">
<span class="info-text">100% PREMIUM FOOD</span>
</td>

<td>
<img src="Picture/support.png" alt="Excellent Customer Service">
<span class="info-text">Excellent Customer Service</span>
</td>

<td>
<img src="Picture/coffee.png" alt="Excellent Atmosphere">
<span class="info-text">Excellent Atmosphere</span>
</td>
</tr>

<tr>
<td>
<img src="Picture/book.png" alt="Excellent F&B Knowledge">
<span class="info-text">Excellent F&B Knowledge</span>
</td>

<td>
<img src="Picture/quality.png" alt="Quality of Food">
<span class="info-text">Quality of Food</span>
</td>

<td></td>
</tr>

</table>
</div>

<section class="info-booknow">
<div>
Casual Dining Dessert Bar. We’re also Restaurant and Café.<br>
You can enjoy full dining experience in here!
</div>

<div>
<a href="BookNow.php" class="booknow-btn">Book Now</a>
</div>
</section>


<div class="center">
<a href="Home.php">
<img src="Picture/logo.png" alt="Logo" class="whowearelogo">
</a>
</div>

<h1 id="about-us" class="textcenter">Who We Are</h1>

<div class="center">
<p class="whowearetext">
MIX Café is a creative restaurant that embraces diverse culinary cultures and specializes in fusion cuisine. Guided by the philosophy of "Mix & 
Match," we blend flavors from various regions with creative elements to craft a unique dining experience. From East-meets-West main courses to 
thoughtfully curated snacks and desserts, every dish aims to balance tradition and modernity, offering a fresh and flavorful experience. MIX Café is 
your ideal space for relaxation, gathering, and enjoying the pleasure of good food.
</p>
</div>

<div class="whowearevideo">
<video width="50%" controls>
<source src="Video/MixCafe.mp4" type="video/mp4">
</video>
</div>

<div class="center" style="background-color:orange;">
<table class="home-ourmenu">

<tr>
<td colspan="4" style="font-size:40px;font-weight:bold;">
OUR MENU
</td>
</tr>

<tr>
<td colspan="4" style="font-size:20px;padding-bottom:30px;">
With many tasty items, check out our menu!
</td>
</tr>

<tr>
<td>
<a href="Menu.php#LocalFood">
<div class="home-ourmenu-menu">
<img src="Picture/Nasilemak.png" alt="Local Food">
<p>Local Food</p>
</a>
</div>
</td>

<td>
<a href="Menu.php#WesternFood">
<div class="home-ourmenu-menu">
<img src="Picture/Burger1.png" alt="Western Food">
<p>Western Food</p>
</a>
</div>
</td>

<td>
<a href="Menu.php#Drink">
<div class="home-ourmenu-menu">
<img src="Picture/Drink.png" alt="Drink">
<p>Drink</p>
</a>
</div>
</td>

<td>
<a href="Menu.php#Dessert">
<div class="home-ourmenu-menu">
<img src="Picture/Lavacake.png" alt="Lavacake">
<p>Dessert</p>
</a>
</div>
</td>
</tr>

<tr>
<td colspan="2">
<a href="Menu.php" class="home-ourmenu-button">SEE MORE</a>
</td>

<td colspan="2">
<a href="BookNow.php" class="home-ourmenu-button">BOOK NOW</a>
</td>
</tr>

</table>
</div>

<?php require 'Require/footer.php'; ?>

</body>

</html>