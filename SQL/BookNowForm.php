<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection failed: ".$mysqli_connect_error());
}

$sql = "insert into booknow(name, phone, date, time, guests, requests)
value('$_POST[name]','$_POST[phone]','$_POST[date]','$_POST[time]','$_POST[guests]','$_POST[requests]')";

if ($conn->query($sql) === TRUE) {
	echo "<script>
	alert('Success Book');
	window.location.href='../ThankYou.php';
	</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>