<?php
require '../function.php';

if (isset($_POST)) {
	deleteList($_POST['id']);
}

function deleteList($id) {
	$conn = openDatabaseConnection();

	$tasks_query = $conn->prepare("DELETE FROM task WHERE task_list_id = :id");
	$tasks_query->execute([':id'=> $id]);

	$list_query = $conn->prepare("DELETE FROM list WHERE list_id = :id");
	$list_query->execute([':id'=> $id]);

    $conn = NULL;
	header('location:../index.php');
}
