<?php 
	$title = "Date and time";
	include 'header.php';
	include_once 'lib.php';
?>

<h1><?php echo $title ?></h1>

<p>Today: <?php echo dayoftheweek() . ' - ' . date("H\ui"); ?></p>

<?php include 'footer.php'; ?>

