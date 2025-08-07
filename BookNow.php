<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Now</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/png" href="Picture/logo.png">
</head>

<body class="booknow">

<?php require 'Require/header.php'; ?>

<div class="center">
<div class="booking-container">
<h2>Restaurant Booking</h2>
<form  name="booknow" action="SQL/BookNowForm.php" method="post">
<label for="name">Name</label>
<input type="text" id="name" name="name" placeholder="Enter your name" required>

<label for="phone">Phone</label>
<input type="text" id="phone" name="phone" placeholder="Enter your phone number (xxx-xxxxxxx)" pattern="\d{3}[\-]\d{7}" required>

<label for="date">Date</label>
<input type="date" id="date" name="date" required>

<label for="time">Time</label>
<input type="time"id="time" name="time" required>

<label for="guests">Number of Guests</label>
<select id="guests" name="guests" required>
	<option value="1">1 Person</option>
	<option value="2">2 People</option>
	<option value="3">3 People</option>
	<option value="4">4 People</option>
	<option value="5">5 People</option>
	<option value="6">6 People</option>
</select>

<label for="requests">Special Requests</label>
<textarea id="requests" name="requests" rows="3" placeholder="Any special requests?"></textarea>

<button type="submit">Book Table</button>
</form>
</div>
</div>

<?php require 'Require/footer.php'; ?>

</body>

</html>