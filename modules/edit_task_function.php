<?php
require '../function.php';

if(isset($_POST)) {
    editCheck($_POST);
}

function editCheck($input) {
	$input['ID'] = intval($input['ID']);

	$conn = openDatabaseConnection();

	$query = $conn->prepare('UPDATE `task` 
							SET task_description = :description, 
								task_status_id = :status_id, 
								task_duration = :duration 
							WHERE task_id = :id');

	$query->bindParam(':id',          $input['id']);
	$query->bindParam(':description', $input['description']);
	$query->bindParam(':status_id',   $input['status_id']);
	$query->bindParam(':duration',    $input['duration']);

	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
