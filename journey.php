<h1>hello</h1>
<?php 
$your_journey = $_POST["choice"];
echo $_SERVER['PHP_SELF'];

?>
<?php if ($your_journey =="Jedi")
	include 'includes/journey/jedi.php';
	else
		include 'includes/journey/dark_side.php';
	?>


