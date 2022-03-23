<?php
session_start();

if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "en";
else if (isset($_GET['lang'])) {
	if ($_GET['lang'] == "en")
		$_SESSION['lang'] = "en";
	else if ($_GET['lang'] == "sk")
		$_SESSION['lang'] = "sk";
}

require_once "langs/" . $_SESSION['lang'] . ".php";
