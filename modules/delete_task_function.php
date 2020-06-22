<?php
require '../function.php';

if (isset($_POST)) {
	deleteTask($_POST['id']);
}

function deleteTask($id) {
	$conn = openDatabaseConnection();
	$query = $conn->prepare("DELETE FROM task WHERE task_id = :id");

	$query->execute([':id'=> $id]);

	$conn = NULL;
	header('location:../index.php');
}
