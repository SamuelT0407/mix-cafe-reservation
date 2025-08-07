<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/png" href="Picture/logo.png">
</head>

<body class="feedback">

<?php require 'Require/header.php'; ?>

<p class="feedback-title">GET IN TOUCH</p>

<div class="center">
<div class="feedback-container">
<form name="feedback" action="SQL/FeedbackForm.php" method="post" class="feedback-form">

<input type="text" id="name" name="name" placeholder="Name" required>
<input type="email" id="email" name="email" placeholder="Email" required>
<input type="text" id="phone" name="phone" placeholder="Phone (xxx-xxxxxxx)" required pattern="\d{3}[\-]\d{7}">
<input type="text" id="feedback" name="feedback" placeholder="Feedback" required>

<button type="submit" value="Send" class="feedback-submit">Send</button>

</form>
</div>
</div>

<?php require 'Require/footer.php'; ?>

</body>

</html>