<?php
require '../function.php';

// creates a new task
if(isset($_POST)) {
	createNewTask();
}

function createNewTask() {
	$conn = openDatabaseConnection();

	$query = $conn->prepare('INSERT INTO `task` (`task_description`, `task_duration`, `task_status_id`, `task_list_id`)
							VALUES (:description, :duration, :status_id, :list_id)');

	$query->bindParam(":description", $_POST['description']);
	$query->bindParam(":duration", $_POST['duration']);
	$query->bindParam(":status_id", $_POST['status_id']);
	$query->bindParam(":list_id", $_POST['list_id']);

	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}

?>