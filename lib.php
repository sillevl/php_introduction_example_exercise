<?php 

function dayoftheweek(){
	$days = [ "zondag", "maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag"];
	$today = date('w');
	return $days[$today];
}

function htmlList($list){
	$output = '<ul>';
	foreach ($list as $item) {
		$output .= "<li>$item</li>";
	}
	$output .= '</ul>';
	return $output;
}

class Person{
	public function __construct($name, $lastname, $age){
		$this->name = $name;
		$this->lastname = $lastname;
		$this->age = $age;
	}

	public function __tostring(){
		return "<dl>
			<dt>Naam</dt>
			<dd>$this->lastname</dd>
			<dt>Voornaam</dt>
			<dd>$this->name</dd>
			<dt>Leeftijd</dt>
			<dd>$this->age</dd>
		</dl>";
	}
}

function isLeapYear($year){
	$result = "$year is geen schrikkeljaar";
	if($year%4 == 0 && $year%100 != 0){
		$result = "$year is een schrikkeljaar";
	}
	return $result;
}





