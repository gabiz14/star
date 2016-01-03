<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div id="sub-header">
		<p>Choose your Journey</p>
	</div>
<?php
// define variables and set to empty values
$choice = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $choice = test_input($_POST["choice"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<div id="option">
	<h2>Light or Dark Side</h2>
</div>
	<div class="main-content">
		<div class="container alpha">
			<?php include 'includes/links.php'; ?>
		</div>

		<div class="container beta">
			<h2>Force Awakens Trailer</h2>
			<div id="video-player">
				<video width="100%" controls>
	                <source src="assets/media/trailer.mp4" type="video/mp4">
	            </video>
        	</div>
		</div>

		<div class="container charlie">
			<?php include 'includes/items.php'; ?>
		</div>

	</div>

	<div class="footer">
		<?php include 'includes/footer.php'; ?>
	</div>

</body>