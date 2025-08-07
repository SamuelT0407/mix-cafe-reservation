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

$sql = "insert into feedback(name, email, phone, feedback)
value('$_POST[name]','$_POST[email]', '$_POST[phone]','$_POST[feedback]')"; 

if ($conn->query($sql) === TRUE) {
	echo "<script>
	alert('Success Send');
	window.location.href='../Feedback.php';
	</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>