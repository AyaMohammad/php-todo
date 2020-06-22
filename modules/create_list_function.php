<?php
require '../function.php';

if(isset($_POST['submit'])) {
	createList();
}

function createList() {
	$conn = openDatabaseConnection();

	$query = $conn->prepare('INSERT INTO list (list_name) VALUES (:name)');

	$query->bindParam(":name", $_POST['name']);

	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
