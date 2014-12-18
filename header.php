<?php include_once 'lib.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
		<?php 
			$menu = [
				'<a href="index.php">Date - Time</a>',
				'<a href="months.php">List of months</a>',
				'<a href="person.php">Person class</a>',
				'<a href="leapyear.php">Leapyear calculator</a>'
			];
		 echo htmlList($menu);
		 ?>
	</nav>