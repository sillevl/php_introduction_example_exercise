<?php 
	$title = "List of months";
	include 'header.php';
	include_once 'lib.php';
?>

<h1><?php echo $title; ?></h1>

<?php
	$months = [
		"januari", 
		"februari", 
		"maart",
		"april",
		"mei",
		"juni",
		"juli",
		"augustus",
		"september",
		"oktober",
		"november",
		"december"
	];
	echo htmlList($months); 

	echo htmlList(["een", "twee", "acht"]);

	echo "html list without elements" . htmlList([]);
?>

<?php include 'footer.php' ?>

