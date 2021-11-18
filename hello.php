<html>
<head>
	<title>HELLO1</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav">
  <a href="hello.html">Home</a>
  <a href="about.html">About</a>
  <a class="active" href="hello.php">Challenge</a>
  <a href="keyword.php">Keyword</a>

</div>


<form action="hello.php" method="POST">

<div class="maininput">
	<input type="text" name="name" placeholder="Search here..!!">
	<input type="submit" name="search" value="search">
</div>
	
</form>

<table border="2">
  <tr>
    <td>ID</td>
    <td>Hint</td>
  </tr>

<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database1";


	$db = new mysqli($servername, $username, $password, $dbname);

	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}

	$uname = $_POST["name"];

$records = mysqli_query($db,"SELECT * FROM hints WHERE name='$uname'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>