<?php 
	$title = "Person class";
	include 'header.php';
?>

<h1><?php echo $title; ?></h1>

<?php 

$persons = [
	new Person("Sille", "Van Landschoot", 26),
	new Person("Brandon", "Geryl", 20),
	new Person("Milan", "Lamote", 21)
	];

foreach ($persons as $person) {
	echo $person;
}

 ?>

<?php include 'footer.php' ?>

