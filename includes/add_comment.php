<?php

require_once 'db_connect.php'; 
require_once 'pdo.php';

$name = $comment = "";
$nameErr = $commentErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["name"], $_POST["comment"])) {
	if (empty($_POST["name"])) {
		$nameErr = "Обязательно для заполнения";
	} else {
		$name = test_input($_POST["name"]);
	}
	if (empty($_POST["comment"])) {
		$commentErr = "Обязательно для заполнения";
	} else {
		$comment = test_input($_POST["comment"]);
	}
	if (empty($nameErr) AND empty($commentErr)) {
		$allowed = array("name","comment");
		$source = array(
			'name' => $name,
			'comment' => $comment
		);
		$sql = "INSERT INTO comments SET ".pdoSet($allowed,$values,$source);
		$stm = $pdo->prepare($sql);
		$stm->execute($values);
		header('Location: /');
		exit;
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}