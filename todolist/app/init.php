<?php

	# Use parsedown
	require 'parsedown.php';

	# Global settings
	$dbHost = 'localhost';
	$dbName = 'famcare';
	$dbUsername = 'root';
	$dbPassword = '';

	$parsingEnabled = false;
	
	session_start();

	$_SESSION['user_id'] = 1;
	$_SESSION['id_progress'] = 1;

	$db = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . '', $dbUsername, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	if(!isset($_SESSION['user_id'])) {

		die('You\'re not signed in!');

	}

	if(!isset($_SESSION['id_progress'])) {

		die('You\'re not signed in!');

	}
	function escape($string) {

		return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');

	}

	function testParsing() {

		global $parsingEnabled;

		if ($parsingEnabled == true) {
			echo 'css/main-parse.css';
		} else {
			echo 'css/main.css';
		}

	}

	function parse($string) {

		global $parsingEnabled;

		if ($parsingEnabled == true) {

			$Parser = new Parsedown();
			echo $Parser->text($string);

		} else {

			echo $string;

		}

	}

?>