<?php
function openDatabaseConnection()
{
    $servername = "localhost";
    $username = "php-todo";
    $password = "php-todo";
    $database = "php-todo";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=" . $database, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function getTasksByListId($id)
{
    $sql = "
		SELECT task_id, task_description, task_duration, status_name
		FROM task
	    JOIN status on task_status_id = status_id
	    WHERE task_list_id = :id
	";

    $conn = openDatabaseConnection();
    $query = $conn->prepare($sql);
    $query->execute([':id' => $id]);
    $result = $query->fetchAll();
    $conn = NULL;
    return $result;
}

function getAllLists()
{
    $conn = openDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM list");
    $query->execute();
    $result = $query->fetchAll();
    $conn = NULL;
    return $result;
}

function getListById($id)
{
    $conn = openDatabaseConnection();
    $query = $conn->prepare('SELECT * FROM list WHERE list_id = :id');
    $query->execute([':id' => $id]);
    $result = $query->fetchAll();
    $conn = NULL;
    return $result[0];
}

function getTaskById($id)
{
    $conn = openDatabaseConnection();
    $query = $conn->prepare('SELECT * FROM task WHERE task_id = :id');
    $query->execute([':id' => $id]);
    $result = $query->fetchAll();
    $conn = NULL;
    return $result[0];
}

function getAllStatus()
{
    $conn = openDatabaseConnection();
    $query = $conn->prepare('SELECT * FROM status');
    $query->execute();
    $result = $query->fetchAll();
    $conn = NULL;
    return $result;
}
