<?php

require_once("include/functions.php");


if (empty($_REQUEST['action']) || !is_string($_REQUEST['action'])) {
	die("invalid request");
}

$action = $_REQUEST['action'];

switch ($action) {
	case "compute-sum":

		$conference = getParam($_REQUEST, "conference");
		$workshop = getParam($_REQUEST, "workshop");
		$extraPages = getParam($_REQUEST, "extrapages");

		if (!is_string($conference) || !in_array($conference, array("regular", "student"))) {
			$conference = "none";
		}

		$workshop = ($workshop == 1);
		if (!is_numeric($extraPages) || $extraPages < 0) {
			$extraPages = 0;
		}

		echo computePrice($conference, $workshop, $extraPages);
		break;
	default:
		die("invalid request");
}

?>