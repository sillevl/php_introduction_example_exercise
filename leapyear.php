<?php 
	$title = "Leapyear calclator";
	include 'header.php';

	$result = "Geef een jaartal in aub";
	if(isset($_POST['year'])){
		$result = isLeapYear($_POST['year']);
	}

?>

<h1><?php echo $title; ?></h1>

<form method="post" action="leapyear.php">
	<input type="text" name="year" placeholder="Vul in jaar" autofocus> <br />
	<input type="submit" value="Verzend">

</form>

<?php echo $result ?>

<?php include 'footer.php' ?>

