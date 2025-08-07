<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/png" href="Picture/logo.png">

<script src="JS/MenuScript.js"></script>

</head>

<body>

<?php require 'Require/header.php'; ?>

<div class="category-buttons">
	<button onclick="filterCategory('All')">All</button>
	<button onclick="filterCategory('LocalFood')">Local Food</button>
	<button onclick="filterCategory('WesternFood')">Western Food</button>
	<button onclick="filterCategory('Drink')">Drink</button>
	<button onclick="filterCategory('Dessert')">Dessert</button>
</div>

<section class="menu-table">

<div class="menu-card WesternFood">
	<img src="Picture/burger1.png" alt="Burger">
	<h2>Double Beef Cheeses Burger</h2>
	<p>A juicy double beef patty with melted cheese, fresh veggies, and a tangy sauce in a soft bun.</p>
</div>

<div class="menu-card WesternFood">
	<img src="Picture/Carbonara.png" alt="Carbonara">
	<h2>Carbonara</h2>
	<p>A velvety carbonara with a luscious egg sauce, crunchy pancetta, and a generous sprinkle of black pepper.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Nasilemak.png" alt="Nasilemak">
	<h2>Nasi Lemak</h2>
	<p>Fragrant coconut rice with spicy sambal, crispy anchovies, and a rich, savory kick.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Wantanmee.png" alt="Wantanmee">
	<h2>Wan Tan Mee</h2>
	<p>Golden, chewy noodles coated in fragrant soy sauce with juicy wontons and crispy shallots.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Meegoreng.png" alt="Meegoreng">
	<h2>Mee Goreng</h2>
	<p>Fiery, wok-fried mee goreng packed with bold, smoky flavors and a spicy kick.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/friedrice.png" alt="friedrice">
	<h2>Kampung Fried Rice</h2>
	<p>Golden, crispy fried rice packed with umami and a smoky aroma.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Currynoodle.png" alt="Currynoodle">
	<h2>Curry Noodle</h2>
	<p>Silky noodles bathed in a fragrant, spicy curry broth with tender chicken.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Laksa.png" alt="Laksa">
	<h2>Penang Laksa</h2>
	<p>A bowl of tangy, spicy Penang Laksa with a rich, flavorful prawn broth.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Roticanai.png" alt="Roticanai">
	<h2>Roti Canai</h2>
	<p>Flaky and crispy roti paired with bold, spicy dhal and fragrant curry.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Cheecheongfun.png" alt="Cheecheongfun">
	<h2>Chee Cheong Fun</h2>
	<p>Delicately soft and silky rice rolls drenched in a sweet-savory sauce.</p>
</div>

<div class="menu-card LocalFood">
	<img src="Picture/Rojak.png" alt="Rojak">
	<h2>Rojak</h2>
	<p>Sweet, spicy, and tangy rojak bursting with a perfect balance of flavors and textures.</p>
</div>

<div class="menu-card WesternFood">
	<img src="Picture/Steak.png" alt="Steak">
	<h2>Steak</h2>
	<p>Juicy, flavorful steak with a satisfying sear and a perfectly tender, succulent bite.</p>
</div>

<div class="menu-card WesternFood">
	<img src="Picture/Bake.png" alt="Bake">
	<h2>Bake Rice</h2>
	<p>A mouthwatering baked rice with savory fillings, tender rice, and a golden, crispy layer that completes every bite.</p>
</div>

<div class="menu-card WesternFood">
	<img src="Picture/Curry.png" alt="Curry">
	<h2>Japanese Curry Rice</h2>
	<p>A rich and flavorful Japanese curry rice with tender pieces of meat, perfectly cooked vegetables, and a thick, savory sauce.</p>
</div>

<div class="menu-card WesternFood">
	<img src="Picture/Salad.png" alt="Salad">
	<h2>Salad</h2>
	<p>Fresh and colourful chickpea salad with crisp cucumbers, juicy tomatoes, and tangy feta cheese.</p>
</div>

<div class="menu-card WesternFood">
	<img src="Picture/Soup.png" alt="Soup">
	<h2>Mushroom Soup</h2>
	<p>A warm, comforting bowl of mushroom soup with a rich, savory depth and creamy smoothness.</p>
</div>

<div class="menu-card WesternFood">
	<img src="Picture/Pizza1.png" alt="Pizza">
	<h2>Pizza</h2>
	<p>Cheesy, wood-fired pizza topped with fresh ingredients and a crispy golden crust.</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Americano.png" alt="Americano ">
	<h2>Americano </h2>
	<p>A strong, full-bodied Americano with a deep espresso flavor and a satisfying aftertaste.</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Cappuccino .png" alt="Cappuccino ">
	<h2>Cappuccino </h2>
	<p>A comforting, frothy cappuccino with a rich coffee flavor and a smooth, creamy finish</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Honeylemon.png" alt="Honeylemon ">
	<h2>Honey Lemon</h2>
	<p>Sweet, tangy honey lemon drink that refreshes with every sip.</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Drink.png" alt="Drink">
	<h2>Frappuccino</h2>
	<p>Rich and indulgent hot chocolate topped with fluffy whipped cream and chocolate shavings, served with fresh mint.</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Bubbletea.png" alt="Bubbletea">
	<h2>Bubble Tea</h2>
	<p>Smooth, silky milk tea with bouncy bubbles and a delightful sweet finish.</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Mojito.png" alt="Mojito">
	<h2>Mojito</h2>
	<p>A refreshing mojito with a perfect balance of mint, lime, and a splash of rum.</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Smoothie.png" alt="Smoothie ">
	<h2>All Berry Smoothie</h2>
	<p>A silky-smooth berry blend with a sweet-tart kick and a creamy finish.</p>
</div>

<div class="menu-card Drink">
	<img src="Picture/Softdrink.png" alt="Softdrink">
	<h2>Soft Drink </h2>
	<p>Cool, fizzy soft drink with a bold, sweet flavor that quenches your thirst.</p>
</div>

<div class="menu-card Dessert">
	<img src="Picture/Tiramisu.png" alt="Tiramisu">
	<h2>Tiramisu</h2>
	<p>A creamy, dreamy tiramisu with bold coffee notes, soft ladyfingers, and a velvety mascarpone filling that melts effortlessly in your mouth.</p>
</div>

<div class="menu-card Dessert">
	<img src="Picture/Burntcheesecake.png" alt="Burntcheesecake">
	<h2>Burnt Cheese Cake</h2>
	<p>Warm, burnt cheesecake with a deeply caramelized, almost bittersweet top, contrasted by a silky, indulgent interior.</p>
</div>

<div class="menu-card Dessert">
	<img src="Picture/Lavacake.png" alt="Lavacake">
	<h2>Chocolate Lava Cake</h2>
	<p>Decadent, warm chocolate cake with a gooey, molten chocolate center, paired perfectly with a scoop of vanilla ice cream.</p>
</div>

<div class="menu-card Dessert">
	<img src="Picture/Dessert.png" alt="Dessert">
	<h2>Strawberry Pancake</h2>
	<p>Delicious creamy dessert topped with fresh fruits and sweet drizzle.</p>
</div>

<div class="menu-card Dessert">
	<img src="Picture/Waffle.png" alt="Waffle">
	<h2>Waffle</h2>
	<p>Crispy, golden waffles with a light, airy center, drizzled with syrup and topped with fresh berries.</p>
</div>

<div class="menu-card Dessert">
	<img src="Picture/Brulee.png" alt="Brulee">
	<h2>Brulee</h2>
	<p>A silky crème brûlée with a golden caramelized crust and a luxurious, creamy vanilla filling.</p>
</div>

</section>

<?php require 'Require/footer.php'; ?>

</body>

</html>
