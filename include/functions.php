<?php


function computePrice($conference, $workshop, $extraPages) {
	$sum = 0;
	if ($conference != "none") {
		if ($conference == "regular") {
			$sum += 500;
		} else if ($conference == "student") {
			$sum += 300;
		}
		if ($workshop) {
			$sum += 50;
		}
	} else if ($workshop) {
		$sum += 200;
	}

	if ($extraPages != 0) {
		$sum += $extraPages * 0.5;
	}
	return $sum;
}

function getParam($array, $key) {
	if (!empty($array[$key]))
		return $array[$key];

	return "";
}

function formError($message) {
	echo "<div style='color: red'>" . $message . "</div>";
}

function saveOrder($name, $title, $affiliation, $email, $requirements, $conference, $workshop, $extraPages, $price) {
	global $db;

	$values = array(
		"name" 			=> $name,
		"title" 		=> $title,
		"affiliation" 	=> $affiliation,
		"email" 		=> $email,
		"requirements" 	=> $requirements,
		"conference" 	=> $conference,
		"workshop" 		=> $workshop,
		"extraPages"	=> $extraPages,
		"price"			=> $price
	);

	$sanitized_values = array();
	foreach ($values as $key => $value) {
		$sanitized_values[$key] = $db->real_escape_string($value);
	}

	$columns = implode(", ",array_keys($sanitized_values));
	$values  = "'" . implode("', '", $sanitized_values) . "'";
	$sql = "INSERT INTO `orders`($columns) VALUES ($values)";

	$db->query($sql);
	return $db->insert_id;
}

function getRegistrationKindName($conference, $workshop, $extraPages) {
	$list = array();
	if ($conference != "none") {
		$list[] = "Conference: " . $conference;
	}

	if ($workshop) {
		$list[] = "Workshop";
	}

	$list[] = $extraPages . " extra pages";

	return implode(" + ", $list);
}

?>