<?php
require '../function.php';

if(isset($_POST)) {
    editList($_POST);
}

function editList($input) {
	$conn = openDatabaseConnection();
	$query = $conn->prepare('UPDATE list SET list_name = :name WHERE list_id = :id');

	$query->bindparam(':id', $input['id']);
	$query->bindParam(':name', $input['name']);

	$query->execute();
	$conn = NULL;

	header('location:../index.php');
}
