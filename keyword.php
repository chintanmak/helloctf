<html>
<head>
	<title>HELLO1</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav">
  <a href="hello.html">Home</a>
  <a href="about.html">About</a>
  <a href="hello.php">Challenge</a>
  <a class="active" href="keyword.php">Keyword</a>
</div>

<br>

<center><h2>Enter the Keyword here..</h2>
<h4>The hint is **** ****</h4>
</center>


<form action="keyword.php" method="POST">

<div class="maininput">
	<input type="text" name="key" placeholder="**** ****">
	<input type="submit" name="search" value="search">
</div>

<?php
$keyw = $_POST["key"];
if($keyw=="rick roll")
{
  echo "Congrats you've been trolled.";
}
else
{
  echo "Wrong Keyword";
}
?>
</form>

</body>
</html>