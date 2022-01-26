<?php

// Constants
define("TITLE", "Simple Arguments");

// Custom Variables
$myName	= "Rick Rivers";
$lessonNum	= 25;

?>

<!DOCTYPE html>
<html>

<head>
	<title>PHP <?php echo TITLE; ?></title>
	<link href="../assets/styles.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<a href="/" title="Back to directory" id="logo">
			<img src="../assets/img/logo.png" alt="PHP">
		</a>

		<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
		<hr>

		<h2>Your Example</h2>

		<div class="sandbox">

			<h3>One Argument</h3>
			<?php

			function hangTen($location)
			{

				echo "We're surfing in $location!<br>";
			}

			hangTen("Hawaii");
			hangTen("California");
			hangTen("Newfoundland");

			?>

			<h3>Two Arguments</h3>
			<?php

				function multiplyTogether($val1, $val2) {
										
					$product = $val1 * $val2;
					echo "The product of the two numbers is: $product";
					
				}

				multiplyTogether(14, 27);
			?>

		</div><!-- end sandbox -->

		<a href="index.php" class="button">Back to the lecture</a>

		<hr>

		<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
	</div><!-- end wrapper -->

	<div class="copyright-info">
		<?php include('../assets/includes/copyright.php'); ?>
	</div><!-- end copyright-info -->
</body>

</html>